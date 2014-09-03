<?php $this->load->view('includes/header_page'); ?>

<div id="contentscontainer">
    <div id="leftcontainer">
        <?php $this->load->view($main_content); ?>		
    </div>
    
    <div id="rightcontainer">
        <?php $this->load->view('includes/right_menu.php'); ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>