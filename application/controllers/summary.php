<?php

class Summary extends Controller {

     public function __construct() {
       parent::__construct();
    }

    function index() {
        $this->overview();
    }

    function overview() {
        
        $this->data['main_content'] = "summary";
        echo "111"; die();
        $this->data['retailerList'] = Doctrine::getTable('retailer')->findAll();
        echo var_dump($this->data['retailerList']); die();
        $this->load->view("includes/template", $this->data);
    }
    

   }
?>
