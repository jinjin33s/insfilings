<?php $this->load->view('includes/header_page'); ?>

<div id="contentscontainer">
    <div id="leftcontainer_b">
        <div class="bn_container">
        <?php
            $data['ownerId'] = $ownerId;
            $this->load->view($view_name, $data);
        ?>		
        </div>
    </div>
    <div id="rightcontainer">
        <?php $this->load->view('life/life-application-help-inc.php'); ?>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
