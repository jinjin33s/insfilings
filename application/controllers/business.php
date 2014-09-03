<?php

class business extends remap {

	public function __construct() {

            parent::__construct();

         }
	
	function index($pageName)
	{            
                $this->data['main_content'] = 'business/'.$pageName;                
                
		$this->load->view('includes/template_page',$this->data);
	}

}

?>