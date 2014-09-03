<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META NAME="Description" Content="Direct Online Life Insurance Quotes and Coverages with ING, MetLife, Prudential, AXA, TransAmerica and other major insurance providers with no extra cost"/>
<META NAME="Keywords" Content="Insurance, Life Insurance, Health Insurance, Business Insurance, Commercial Insurance, Home Insurance, Apartment Insurance, 10 Years Term Life, 15 Years Term Life, 20 Years Term Life, 25 Years Term Life, 30 Years Term Life, Whole Life, Universal Life, Survivorship Universal Life"/>

<title>INS Filings</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>/images/favicon.ico"/>
<link href="<?php echo base_url(); ?>css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/sub.css" rel="stylesheet" type="text/css" />


<!-- ### JAVA SCRIPT ### -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/swfobject.js"></script>
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
    <div id="headercontainer_b">
        <div id="headercontainer">

            <div style="float: left;">
            <a style="float:left;position:relative; top:10px; margin-right:25px;" href="<?php echo base_url();?>/page/view/home">
                <img border="0" src="<?php echo base_url();?>/images/logo.png" />
            </a>
            </div>
            
            <div style="float: right; background: url(<?php echo base_url();?>/images/phone-number.png) no-repeat; width: 535px; height: 61px; ">
            </div>

            <div id="topMenuContainer">
                <a href="<?php echo base_url();?>life/life-insurance-overview">Life</a>
            <div class="devider">/</div><a href="<?php echo base_url();?>health/health-insurance-overview">Health</a>
            <div class="devider">/</div><a href="<?php echo base_url();?>business/business-insurance-overview">Business</a><div class="devider">/</div>
                <a href="<?php echo base_url();?>house/house-insurance-overview">House & Apartment</a>
            </div>
            <div id="snsLinks">
                    <div style="float:left; margin-right:10px;"><a href="http://twitter.com/InsFilings" target="_blank"><img border="0" src="<?php echo base_url();?>/images/icon_twitter.png" /></a></div>
                    <div style="float:left; margin-right:10px;"><a href="http://www.facebook.com/pages/InsFilingscom/113293925420079" target="_blank"><img border="0" src="<?php echo base_url();?>/images/icon_facebook.png" /></a></div>
                    <div style="float:left; padding-top:10px;"><a href="http://www.insfilings.com/about/contactus" target="_blank"><img border="0" src="<?php echo base_url();?>/images/icon_envelop.png" /></a></div>

            </div>
            
        </div>
    </div>

</body>