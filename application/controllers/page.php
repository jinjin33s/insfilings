<?php

class Page extends Controller {

	public function __construct() {

            parent::__construct();

         }
          
	
	function index()
	{            
                $this->data['main_content'] = 'home';                
		$this->load->view('includes/template_home',$this->data);
	}


        function view($pageName)
        {
            $this->data['main_content'] = $pageName;
            $this->load->view('includes/template_page',$this->data);
        }


        function get_view($pageName, $firstName='', $lastName='',  $email='' ,$phone='', $state='', $sex='', $coverage='')
        {
            $this->data['lastName'] = $lastName;
            $this->data['firstName'] = $firstName;
            $this->data['phone'] = $phone;
            $this->data['state'] = $state;
            $this->data['sex'] = $sex;

            if(strpos($coverage,'ast'))
            {
               $coverage =  str_replace('money','$',$coverage);
               $coverage =  str_replace('ast',',',$coverage);
            }
            
            $this->data['coverage'] = $coverage;

            if(strpos($email,'mozzign'))
            {
               $email =  str_replace('mozzign','@',$email);
            }
            $this->data['email'] = $email;

            //$this->load->view("life-insurance-quote" , $this->data);
            $this->data['main_content'] = "life-insurance-quote";
            $this->load->view($pageName, $this->data);
        }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
