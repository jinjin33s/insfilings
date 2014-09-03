<?php $this->load->view('includes/header_home'); ?>

<div id="contentscontainer_home">
    <div id="leftcontainer">
		<div class="bn_container">
        <?php $this->load->view($main_content); ?>
		</div>
    </div>
    <div id="rightcontainer">
	    <?php $this->load->view('includes/right_menu.php'); ?>
    </div>

</div>

<?php $this->load->view('includes/footer'); ?>