<?php

class health extends remap {

	public function __construct() {

            parent::__construct();

         }
	
	function index($pageName)
	{            
                $this->data['main_content'] = 'health/'.$pageName;                
		$this->load->view('includes/template_page',$this->data);
	}

}

?>