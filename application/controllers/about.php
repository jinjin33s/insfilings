<?php

class about extends remap {

	public function __construct() {

            parent::__construct();

         }
	
	function index($pageName)
	{  
            $this->data['main_content'] = 'about/'.$pageName;                
            $this->load->view('includes/template_page',$this->data);
	}
        
        function disclaimer()
        {               
            $this->data['main_content'] = 'about/disclaimer';                
            $this->load->view('includes/template_page',$this->data);
        }

        function disclaimer_review()
        {
            $this->load->view('about/disclaimer');
            
        }
        
        function company_profile()
        {               
            $this->data['main_content'] = 'about/company-profile';                
            $this->load->view('includes/template_page',$this->data);
        }
        
        function our_promise()
        {               
            $this->data['main_content'] = 'about/our-promise';                
            $this->load->view('includes/template_page',$this->data);
        }
        
        function claim()
        {               
            $this->data['main_content'] = 'about/claim';                
            $this->load->view('includes/template_page',$this->data);
        }
        
        function faqs()
        {               
            $this->data['main_content'] = 'about/faqs';                
            $this->load->view('includes/template_page',$this->data);
        }
        
        function contactus()
        {               
            $this->data['main_content'] = 'about/contactus';                
            $this->load->view('includes/template_page',$this->data);
        }
        
        function learning_center()
        {               
            $this->data['main_content'] = 'about/learning-center';                
            $this->load->view('includes/template_page',$this->data);
        }
}

?>