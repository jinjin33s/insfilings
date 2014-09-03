<?php

class account extends remap {

	public function __construct() {

            parent::__construct();

         }
	
	function index($pageName)
	{            
                $this->data['main_content'] = 'account/'.$pageName;                
		$this->load->view('includes/template_page',$this->data);
	}
        
        function login()
        {
            $this->data['main_content'] = 'account/signup';                
            $this->load->view('includes/template_wide',$this->data);
        }
        
        function mylogin()
        {            
            $this->data['main_content'] = 'account/mylogin';                
            $this->load->view('includes/template_wide',$this->data);
        }
        
        function checkMylogin(){
            
            $us = new UserMyAccount();
            
            $email = $this->input->post('email');  
            $password = $this->input->post('password'); 
            
            $result = $us->findUserByEmail($email); 
                
            
            if ($result == "none"){// 이메일이 없을때
                echo " 
                   <script type='text/javascript'>
                       alert('Can not find Email Address in INSfilings.com');
                   </script>
                ";
                
                return $this->mylogin();
            
            }else{// 이메일이 있을때
                
                foreach($result as $rt)
                {
                 $pw = $rt['password'];
                }
                
                    if ($password != $pw){//password가 틀릴때
                    
                        echo "
                           <script type='text/javascript'>
                               alert('wrong password');
                           </script>
                        ";
                        return $this->mylogin();
                    }
                
                //password가 맞을때
                $la = new LifeApplication();
                $myaccountInfo = $la->checkMyaccount($email);
            }
            
            
            $this->data['myaccountInfo'] = $myaccountInfo;
            $this->data['main_content'] = 'account/myaccount';                
            
            $this->load->view('includes/template_wide',$this->data);
            
        }
        
        function myaccount()
        {
            $this->data['main_content'] = 'account/myaccount';                
            $this->load->view('includes/template_wide',$this->data);
        }
}

?>