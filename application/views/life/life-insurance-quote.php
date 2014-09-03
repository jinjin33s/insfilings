<a href="<?php echo base_url();?>page/view2/life-insurance-quote">
    <div class="sub_header_life">
    </div>
</a>
<div id="subMenuContainer">
	<a href="<?php echo base_url();?>page/view2/life-insurance-overview">Learn the Basics</a>
        <a href="<?php echo base_url();?>page/view2/life-insurance-rate">Insurance rate & chart</a>
        <a href="<?php echo base_url();?>page/view2/life-insurance-estimate">Estimate my need</a>
	<a href="<?php echo base_url();?>page/view2/life-insurance-type">Types and Features of Life Insurance</a>
        <a href="<?php echo base_url();?>page/view2/life-insurance-quote">Initiate a Life Insurance Plan</a>
</div>
	<a name="top"></a>
<div id="sub_contentscontainer">
    
    <?php if(isset($firstName)){ ?>
        <iframe src="<?php echo base_url();?>page/get_view/life-insurance-quote-iframe/<? echo $firstName ?>/<? echo $lastName ?>/<? echo str_replace( '@', 'mozzign', $email) ?>/<? echo $phone ?>/<? echo $state ?>/<? echo $sex ?>/<? echo str_replace('$','money',str_replace( ',', 'ast', $coverage)) ?>" style="width:590px;height:550px;" frameborder="0" scrolling="no">
        </iframe>
     <?php }else{ ?>
        <iframe src="<?php echo base_url();?>page/get_view/life-insurance-quote-iframe" style="width:590px;height:550px;" frameborder="0" scrolling="no"></iframe>
     <?php }?>

</div>