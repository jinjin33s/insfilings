﻿/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/**
 * @file Increse and decrease indent commands.
 */

(function()
{
	var listNodeNames = { ol : 1, ul : 1 };

	var isNotWhitespaces = CKEDITOR.dom.walker.whitespaces( true ),
		isNotBookmark = CKEDITOR.dom.walker.bookmark( false, true );

	function setState( editor, state )
	{
		editor.getCommand( this.name ).setState( state );
	}

	function onSelectionChange( evt )
	{
		var editor = evt.editor;

		var elementPath = evt.data.path,
				list = elementPath && elementPath.contains( listNodeNames );

		if ( list )
				return setState.call( this, editor, CKEDITOR.TRISTATE_OFF );

		if ( !this.useIndentClasses && this.name == 'indent' )
			return setState.call( this, editor, CKEDITOR.TRISTATE_OFF );

		var path = evt.data.path,
			firstBlock = path.block || path.blockLimit;
		if ( !firstBlock )
			return setState.call( this, editor, CKEDITOR.TRISTATE_DISABLED );

		if ( this.useIndentClasses )
		{
			var indentClass = firstBlock.$.className.match( this.classNameRegex ),
				indentStep = 0;
			if ( indentClass )
			{
				indentClass = indentClass[1];
				indentStep = this.indentClassMap[ indentClass ];
			}
			if ( ( this.name == 'outdent' && !indentStep ) ||
					( this.name == 'indent' && indentStep == editor.config.indentClasses.length ) )
				return setState.call( this, editor, CKEDITOR.TRISTATE_DISABLED );
			return setState.call( this, editor, CKEDITOR.TRISTATE_OFF );
		}
		else
		{
			var indent = parseInt( firstBlock.getStyle( getIndentCssProperty( firstBlock ) ), 10 );
			if ( isNaN( indent ) )
				indent = 0;
			if ( indent <= 0 )
				return setState.call( this, editor, CKEDITOR.TRISTATE_DISABLED );
			return setState.call( this, editor, CKEDITOR.TRISTATE_OFF );
		}
	}

	function indentCommand( editor, name )
	{
		this.name = name;
		this.useIndentClasses = editor.config.indentClasses && editor.config.indentClasses.length > 0;
		if ( this.useIndentClasses )
		{
			this.classNameRegex = new RegExp( '(?:^|\\s+)(' + editor.config.indentClasses.join( '|' ) + ')(?=$|\\s)' );
			this.indentClassMap = {};
			for ( var i = 0 ; i < editor.config.indentClasses.length ; i++ )
				this.indentClassMap[ editor.config.indentClasses[i] ] = i + 1;
		}

		this.startDisabled = name == 'outdent';
	}

	// Returns the CSS property to be used for identing a given element.
	function getIndentCssProperty( element )
	{
		return element.getComputedStyle( 'direction' ) == 'ltr' ? 'margin-left' : 'margin-right';
	}

	function isListItem( node )
	{
		return node.type = CKEDITOR.NODE_ELEMENT && node.is( 'li' );
	}

	indentCommand.prototype = {
		exec : function( editor )
		{
			var self = this, database = {};

			function indentList( listNode )
			{
				// Our starting and ending points of the range might be inside some blocks under a list item...
				// So before playing with the iterator, we need to expand the block to include the list items.
				var startContainer = range.startContainer,
					endContainer = range.endContainer;
				while ( startContainer && !startContainer.getParent().equals( listNode ) )
					startContainer = startContainer.getParent();
				while ( endContainer && !endContainer.getParent().equals( listNode ) )
					endContainer = endContainer.getParent();

				if ( !startContainer || !endContainer )
					return;

				// Now we can iterate over the individual items on the same tree depth.
				var block = startContainer,
					itemsToMove = [],
					stopFlag = false;
				while ( !stopFlag )
				{
					if ( block.equals( endContainer ) )
						stopFlag = true;
					itemsToMove.push( block );
					block = block.getNext();
				}
				if ( itemsToMove.length < 1 )
					return;

				// Do indent or outdent operations on the array model of the list, not the
				// list's DOM tree itself. The array model demands that it knows as much as
				// possible about the surrounding lists, we need to feed it the further
				// ancestor node that is still a list.
				var listParents = listNode.getParents( true );
				for ( var i = 0 ; i < listParents.length ; i++ )
				{
					if ( listParents[i].getName && listNodeNames[ listParents[i].getName() ] )
					{
						listNode = listParents[i];
						break;
					}
				}
				var indentOffset = self.name == 'indent' ? 1 : -1,
					startItem = itemsToMove[0],
					lastItem = itemsToMove[ itemsToMove.length - 1 ];

				// Convert the list DOM tree into a one dimensional array.
				var listArray = CKEDITOR.plugins.list.listToArray( listNode, database );

				// Apply indenting or outdenting on the array.
				var baseIndent = listArray[ lastItem.getCustomData( 'listarray_index' ) ].indent;
				for ( i = startItem.getCustomData( 'listarray_index' ); i <= lastItem.getCustomData( 'listarray_index' ); i++ )
				{
					listArray[ i ].indent += indentOffset;
					// Make sure the newly created sublist get a brand-new element of the same type. (#5372)
					var listRoot = listArray[ i ].parent;
					listArray[ i ].parent = new CKEDITOR.dom.element( listRoot.getName(), listRoot.getDocument() );
				}

				for ( i = lastItem.getCustomData( 'listarray_index' ) + 1 ;
						i < listArray.length && listArray[i].indent > baseIndent ; i++ )
					listArray[i].indent += indentOffset;

				// Convert the array back to a DOM forest (yes we might have a few subtrees now).
				// And replace the old list with the new forest.
				var newListDir = listNode.getAttribute( 'dir' ) || listNode.getStyle( 'direction' );
				var newList = CKEDITOR.plugins.list.arrayToList( listArray, database, null, editor.config.enterMode, newListDir );

				// Avoid nested <li> after outdent even they're visually same,
				// recording them for later refactoring.(#3982)
				if ( self.name == 'outdent' )
				{
					var parentLiElement;
					if ( ( parentLiElement = listNode.getParent() ) && parentLiElement.is( 'li' ) )
					{
						var children = newList.listNode.getChildren(),
							pendingLis = [],
							count = children.count(),
							child;

						for ( i = count - 1 ; i >= 0 ; i-- )
						{
							if ( ( child = children.getItem( i ) ) && child.is && child.is( 'li' )  )
								pendingLis.push( child );
						}
					}
				}

				if ( newList )
					newList.listNode.replace( listNode );

				// Move the nested <li> to be appeared after the parent.
				if ( pendingLis && pendingLis.length )
				{
					for (  i = 0; i < pendingLis.length ; i++ )
					{
						var li = pendingLis[ i ],
							followingList = li;

						// Nest preceding <ul>/<ol> inside current <li> if any.
						while ( ( followingList = followingList.getNext() ) &&
							   followingList.is &&
							   followingList.getName() in listNodeNames )
						{
							// IE requires a filler NBSP for nested list inside empty list item,
							// otherwise the list item will be inaccessiable. (#4476)
							if ( CKEDITOR.env.ie && !li.getFirst( function( node ){ return isNotWhitespaces( node ) && isNotBookmark( node ); } ) )
								li.append( range.document.createText( '\u00a0' ) );

							li.append( followingList );
						}

						li.insertAfter( parentLiElement );
					}
				}
			}

			function indentBlock()
			{
				var iterator = range.createIterator(),
					enterMode = editor.config.enterMode;
				iterator.enforceRealBlocks = true;
				iterator.enlargeBr = enterMode != CKEDITOR.ENTER_BR;
				var block;
				while ( ( block = iterator.getNextParagraph() ) )
					indentElement( block );
			}

			function indentElement( element )
			{
				if ( element.getCustomData( 'indent_processed' ) )
					return false;

				if ( self.useIndentClasses )
				{
					// Transform current class name to indent step index.
					var indentClass = element.$.className.match( self.classNameRegex ),
							indentStep = 0;
					if ( indentClass )
					{
						indentClass = indentClass[1];
						indentStep = self.indentClassMap[ indentClass ];
					}

					// Operate on indent step index, transform indent step index back to class
					// name.
					if ( self.name == 'outdent' )
						indentStep--;
					else
						indentStep++;

					if ( indentStep < 0 )
						return false;

					indentStep = Math.min( indentStep, editor.config.indentClasses.length );
					indentStep = Math.max( indentStep, 0 );
					var className = CKEDITOR.tools.ltrim( element.$.className.replace( self.classNameRegex, '' ) );
					if ( indentStep < 1 )
						element.$.className = className;
					else
						element.addClass( editor.config.indentClasses[ indentStep - 1 ] );
				}
				else
				{
					var indentCssProperty = getIndentCssProperty( element );
					var currentOffset = parseInt( element.getStyle( indentCssProperty ), 10 );
					if ( isNaN( currentOffset ) )
						currentOffset = 0;
					currentOffset += ( self.name == 'indent' ? 1 : -1 ) * editor.config.indentOffset;

					if ( currentOffset < 0 )
						return false;

					currentOffset = Math.max( currentOffset, 0 );
					currentOffset = Math.ceil( currentOffset / editor.config.indentOffset ) * editor.config.indentOffset;
					element.setStyle( indentCssProperty, currentOffset ? currentOffset + editor.config.indentUnit : '' );
					if ( element.getAttribute( 'style' ) === '' )
						element.removeAttribute( 'style' );
				}

				CKEDITOR.dom.element.setMarker( database, element, 'indent_processed', true );
				return true;
			}

			var selection = editor.getSelection(),
				bookmarks = selection.createBookmarks( true ),
				ranges = selection && selection.getRanges( true ),
				range;

			var skipBookmarks = function( node )
			{
				return ! node.hasAttribute( '_cke_bookmark' );
			};

			var iterator = ranges.createIterator();
			while ( ( range = iterator.getNextRange() ) )
			{
				// Do not indent body. (#6138)
				range.shrink( CKEDITOR.SHRINK_ELEMENT );
				if ( range.endContainer.getName() == 'body' )
					range.setEndAt( range.endContainer.getLast( skipBookmarks ), CKEDITOR.POSITION_BEFORE_END );

				var startContainer = range.startContainer,
					endContainer = range.endContainer,
					rangeRoot = range.getCommonAncestor(),
					nearestListBlock = rangeRoot;

				while ( nearestListBlock && !( nearestListBlock.type == CKEDITOR.NODE_ELEMENT &&
					listNodeNames[ nearestListBlock.getName() ] ) )
					nearestListBlock = nearestListBlock.getParent();

				// Avoid selection anchors under list root.
				// <ul>[<li>...</li>]</ul> =>	<ul><li>[...]</li></ul>
				if ( nearestListBlock && startContainer.type == CKEDITOR.NODE_ELEMENT
					&& startContainer.getName() in listNodeNames )
				{
					var walker = new CKEDITOR.dom.walker( range );
					walker.evaluator = isListItem;
					range.startContainer = walker.next();
				}

				if ( nearestListBlock && endContainer.type == CKEDITOR.NODE_ELEMENT
					&& endContainer.getName() in listNodeNames )
				{
					walker = new CKEDITOR.dom.walker( range );
					walker.evaluator = isListItem;
					range.endContainer = walker.previous();
				}

				if ( nearestListBlock  )
				{
					var firstListItem = nearestListBlock.getFirst( function( node )
						{
							return node.type == CKEDITOR.NODE_ELEMENT && node.is( 'li' );
						}),
						rangeStart = range.startContainer,
						indentWholeList = firstListItem.equals( rangeStart ) || firstListItem.contains( rangeStart );

					// Indent the entire list if  cursor is inside the first list item. (#3893)
					if ( !( indentWholeList && indentElement( nearestListBlock ) ) )
						indentList( nearestListBlock );
				}
				else
					indentBlock();
			}

			// Clean up the markers.
			CKEDITOR.dom.element.clearAllMarkers( database );

			editor.forceNextSelectionCheck();
			selection.selectBookmarks( bookmarks );
		}
	};

	CKEDITOR.plugins.add( 'indent',
	{
		init : function( editor )
		{
			// Register commands.
			var indent = new indentCommand( editor, 'indent' ),
				outdent = new indentCommand( editor, 'outdent' );
			editor.addCommand( 'indent', indent );
			editor.addCommand( 'outdent', outdent );

			// Register the toolbar buttons.
			editor.ui.addButton( 'Indent',
				{
					label : editor.lang.indent,
					command : 'indent'
				});
			editor.ui.addButton( 'Outdent',
				{
					label : editor.lang.outdent,
					command : 'outdent'
				});

			// Register the state changing handlers.
			editor.on( 'selectionChange', CKEDITOR.tools.bind( onSelectionChange, indent ) );
			editor.on( 'selectionChange', CKEDITOR.tools.bind( onSelectionChange, outdent ) );

			// [IE6/7] Raw lists are using margin instead of padding for visual indentation in wysiwyg mode. (#3893)
			if ( CKEDITOR.env.ie6Compat || CKEDITOR.env.ie7Compat )
			{
				editor.addCss(
					"ul,ol" +
					"{" +
					"	margin-left: 0px;" +
					"	padding-left: 40px;" +
					"}" );
			}
		},

		requires : [ 'domiterator', 'list' ]
	} );
})();

CKEDITOR.tools.extend( CKEDITOR.config,
	{
		indentOffset : 40,
		indentUnit : 'px',
		indentClasses : null
	});

/**
 * Size of each indentation step
 * @type Number
 * @example
 * config.indentOffset = 40;
 */

 /**
 * Unit for the indentation style
 * @type String
 * @example
 * config.indentUnit = 'px';
 */

 /**
 * List of classes to use for indenting the contents.
 * @type Array
 * @example
 * // Don't use classes for indenting. (this is the default value)
 * config.indentClasses = null;
 * @example
 * // Use the classes 'Indent1', 'Indent2', 'Indent3'
 * config.indentClasses = ['Indent1', 'Indent2', 'Indent3'];
 */

/**
 * Size of each indentation step
 * @type Number
 * @default 40
 * @example
 * config.indentOffset = 4;
 */

 /**
 * Unit for the indentation style
 * @type String
 * @default 'px'
 * @example
 * config.indentUnit = 'em';
 */

 /**
 * List of classes to use for indenting the contents. If it's null, no classes will be used
 * and instead the {@link #indentUnit} and {@link #indentOffset} properties will be used.
 * @type Array
 * default null
 * @example
 * // Use the classes 'Indent1', 'Indent2', 'Indent3'
 * config.indentClasses = ['Indent1', 'Indent2', 'Indent3'];
 */
