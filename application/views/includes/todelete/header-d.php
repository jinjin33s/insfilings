<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META NAME="Description" Content="Direct Online Life Insurance Quotes and Coverages with ING, MetLife, Prudential, AXA, TransAmerica and other major insurance providers with no extra cost"/>
<META NAME="Keywords" Content="Insurance, Life Insurance, Health Insurance, Business Insurance, Commercial Insurance, Home Insurance, Apartment Insurance, 10 Years Term Life, 15 Years Term Life, 20 Years Term Life, 25 Years Term Life, 30 Years Term Life, Whole Life, Universal Life, Survivorship Universal Life"/>

<title>Life Insurance | Health Insurance | Business Insurance | Home Insurance | Online Quote Comparison | InsFilings</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>/images/favicon.ico"/>
<link href="<?php echo base_url(); ?>css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/home.css" rel="stylesheet" type="text/css" />


<!-- ### JAVA SCRIPT ### -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/swfobject.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/slide_script.js"></script>

<script type="text/javascript" charset="utf-8">

       $(document).ready(function () {

        $('#topNav li').hover(
            function () {
                //show its submenu
                $('ul', this).slideDown(100);

            },
            function () {
               //hide its submenu
               $('ul', this).slideUp(100);
           }
       );

   });

   function theRotator() {
     //Set the opacity of all images to 0
     $('div.banner_rotator ul li').css({opacity: 0.0});

     //Get the first image and display it (gets set to full opacity)
     $('div.banner_rotator ul li:first').css({opacity: 1.0});

     //Call the rotator function to run the slideshow, 6000 = change to next image after 6 seconds

     setInterval('rotate()',6000);

    }
    function rotate() {
     //Get the first image
     var current = ($('div.banner_rotator ul li.show')?  $('div.banner_rotator ul li.show') : $('div.banner_rotator ul li:first'));
        if ( current.length == 0 ) current = $('div.rotator ul li:first');
     //Get next image, when it reaches the end, rotate it back to the first image
     var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.banner_rotator ul li:first') :current.next()) : $('div.banner_rotator ul li:first'));

     //Un-comment the 3 lines below to get the images in random order

     //var sibs = current.siblings();
            //var rndNum = Math.floor(Math.random() * sibs.length );
            //var next = $( sibs[ rndNum ] );

     //Set the fade in effect for the next image, the show class has higher z-index
     next.css({opacity: 0.0})
     .addClass('show')
     .animate({opacity: 1.0}, 1000);
     //Hide the current image
     current.animate({opacity: 0.0}, 1000)
     .removeClass('show');

    };

    $(document).ready(function() {
     //Load the slideshow
     theRotator();
     $('div.banner_rotator').fadeIn(1000);
        $('div.banner_rotator ul li').fadeIn(1000); // tweek for IE
    });

</script>

<!-- Google Tracking -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23115371-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div id="header">
	<!-- jQuery handles to place the header background images -->
	<div id="headerimgs">
		<div id="headerimg1" class="headerimg"></div>
		<div id="headerimg2" class="headerimg"></div>
	</div>
	<!-- Top navigation on top of the images -->

        <div id="headercontainer">
            <div style="float: left;">
                <a style="float:left;position:relative; top:10px; margin-right:25px;" href="<?php echo base_url();?>/page/view/home">
                    <img border="0" src="<?php echo base_url();?>/images/logo.png" />
                </a>
            </div>

            <div style="float: right; background: url(<?php echo base_url();?>/images/phone-number.png) no-repeat; width: 535px; height: 61px; ">
            </div>

            <div id="topMenuContainer">
                <a href="<?php echo base_url();?>page/view2/life-insurance-overview">Life</a>
                <div class="devider">/</div><a href="<?php echo base_url();?>page/view2/health-insurance-overview">Health</a>
                <div class="devider">/</div><a href="<?php echo base_url();?>page/view2/business-insurance-overview">Business</a><div class="devider">/</div>
                <a href="<?php echo base_url();?>page/view2/house-insurance-overview">House & Apartment</a>
            </div>
			<div id="snsLinks">
				<div style="float:left; margin-right:10px;"><a href="http://twitter.com/InsFilings" target="_blank"><img border="0" src="<?php echo base_url();?>/images/icon_twitter.png" /></a></div>
				<div style="float:left; margin-right:10px;"><a href="http://www.facebook.com/pages/InsFilingscom/113293925420079" target="_blank"><img border="0" src="<?php echo base_url();?>/images/icon_facebook.png" /></a></div>
				<div style="float:left; padding-top:10px;"><a href="http://www.insfilings.com/page/view2/contactus" target="_blank"><img border="0" src="<?php echo base_url();?>/images/icon_envelop.png" /></a></div>

			</div>
            <!--div id="searchcontainer">

                <div id="searchbox">
                    <input class="input" name="search" type="text"/>
                <div class="searchbtn">
                        <a href="#"><img src="<?php echo base_url();?>/images/buttons/btn_Magnifyglass.png" width="13" height="12" border="0"/></a>
                </div>
                </div>
            </div-->

			<!-- Slideshow controls -->

		<div id="headernav">

		<div style="margin-left: 234px;  float: left; margin-right: 1px;">
			<div id="back" class="btn"></div>
			<div id="control" class="btn"></div>
			<div id="next" class="btn"></div>
		</div>
		<span class="caption" style="float:left; display:block;">
			<a href="#" id="pictureduri" class="caption"></a>
		</span>
	</div>

        </div>

</div>