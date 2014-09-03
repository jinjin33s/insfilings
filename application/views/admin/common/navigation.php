    <ul class="nav left sf-js-enabled" style="display: none;">
                <li><a class="top" href="<? echo base_url() . 'admin/lifeApplication_admin_list'; ?>">Dashboard</a></li>

                <li><a class="top">Life Application Info</a>
                        <ul>
                                <li><? echo anchor('admin/lifeApplication_admin_list', 'Life Application List'); ?></li>
                        </ul>
                </li>  

                <li><a class="top">Health Management</a>
                        <ul>
                                <li><? echo anchor('admin/health_list', 'Health List'); ?></li>
                                <li><? echo anchor('admin/health_list/add', 'Health Add'); ?></li>
                        </ul>
                </li>

                <li><a class="top">Business Management</a>
                        <ul>
                                <li><? echo anchor('admin/business_list', 'Business List'); ?></li>
                                <li><? echo anchor('admin/business_list/add', 'Business Add'); ?></li>
                        </ul>
                </li>

                <li><a class="top">House & Apartment Management</a>
                        <ul>
                                <li><? echo anchor('admin/house_list', 'House List'); ?></li>
                                <li><? echo anchor('admin/house_list/add', 'House & Apartment Add'); ?></li>
                        </ul>
                </li>
                <!--
                <li><a class="top">File Upload</a>
                        <ul>
                                <li><? echo anchor('admin/fileupload/browse', 'Browse Files'); ?></li>
                                <li><? echo anchor('admin/fileupload/upload', 'Add Files'); ?></li>
                        </ul>
                </li>
                -->
   
    </ul>
    


  <script type="text/javascript"><!--
    $(document).ready(function() {
        
        
	$('.nav').superfish({
		hoverClass	 : 'sfHover',
		pathClass	 : 'overideThisToUse',
		delay		 : 0,
		animation	 : {height: 'show'},
		speed		 : 'normal',
		autoArrows      : false,
		dropShadows     : false,
		disableHI	 : false, /* set to true to disable hoverIntent detection */
		onInit		 : function(){},
		onBeforeShow     : function(){},
		onShow		 : function(){},
		onHide		 : function(){}
	});
	$('.nav').css('display', 'block');
    });

//--></script>

  <script type="text/javascript"><!--
    function getURLVar(urlVarName) {
	var urlHalves = String(document.location).toLowerCase().split('?');
	var urlVarValue = '';
	if (urlHalves[1]) {
		var urlVars = urlHalves[1].split('&');
		for (var i = 0; i <= (urlVars.length); i++) {
			if (urlVars[i]) {
				var urlVarPair = urlVars[i].split('=');
				if (urlVarPair[0] && urlVarPair[0] == urlVarName.toLowerCase()) {
					urlVarValue = urlVarPair[1];
				}
			}
		}
	}
	return urlVarValue;
    }

    $(document).ready(function() {

            route = getURLVar('route');
            if (!route) {
                    $('#dashboard').addClass('selected');
            } else {
                    part = route.split('/');
                    url = part[0];
                    if (part[1]) {
                            url += '/' + part[1];
                    }
                    $('a[href*=\'' + url + '\']').parents('li[id]').addClass('selected');
            }
    });

//--></script>
