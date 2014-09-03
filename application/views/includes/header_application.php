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
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/fadeSlideShow.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/tooltip.js"></script>

<script type="text/javascript" charset="utf-8">
    function minimizeTopMenu()
    {
         $("#topMenu").height(40);
    }

    function maximizeTopMenu()
    {
        $("#topMenu").height(250);
    }

    window.onresize = function() {
            //setMainContentHeight();
    }

    setMainContentHeight = function() {
            $('#container').height('auto');
            var docHeight = $(document).height() - $('#container').height() - $('#footercontainer').height() + 20;
            var mainContentHeight = $('#container').height();
            if (mainContentHeight < docHeight) {
                $('#container').height(docHeight);
            } else {
                $('#container').height(mainContentHeight);
            }
     }
    $(document).ready(function(){setMainContentHeight()});

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
</script>
</head>

<body>
    <div id="headerContainer">
        <div id="headerMenus">

             <?php include "top_menu.inc"; ?>
            
        </div>
    </div>

