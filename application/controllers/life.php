<?php

class life extends remap {

    public function __construct() {

        parent::__construct();

     }

    function index($pageName)
    {         
            $this->data['main_content'] = 'life/'.$pageName;                
            $this->load->view('includes/template_page',$this->data);
    }
        
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
