<?php $this->load->view('includes/header_application'); ?>

<div id="contentscontainer">
    <div id="leftcontainer_b">
        <div class="bn_container">
        <?php $this->load->view($main_content); ?>		
        </div>
    </div>
    <div id="rightcontainer">
        <?php $this->load->view('includes/right_menu.php'); ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>