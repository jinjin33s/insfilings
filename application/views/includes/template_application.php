<?php $this->load->view('includes/header_application'); ?>

<div id="contentscontainer">
    <div id="leftcontainer">
        <?php $this->load->view($main_content); ?>		
    </div>
    <div id="rightcontainer">
        <?php $this->load->view('life/life-application-help-inc.php'); ?>
    </div>
</div>  

<?php $this->load->view('includes/footer'); ?>