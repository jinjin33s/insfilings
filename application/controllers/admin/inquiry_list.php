<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Inquiry_list extends Controller {

    public function Inquiry_list() {
        parent::Controller();
        log_message('debug', 'insfilings: Inquiry_List my controller');
                                 
    }

    function index() {
        
        $this->load->library('DX_Auth');      
         if (! ($this->dx_auth->is_logged_in() && $this->dx_auth->is_admin() ) ){             
             $this->dx_auth->logout();
             $this->dx_auth->deny_access('login');
        }     
        
        $this->listview();
    }


    //display list of contacts
    public function listview() {
        $inquiryModel = new Inquiry();
        $inquiry_list = $inquiryModel->getList();
        $data['applicant_list'] = $inquiry_list;
        $data['view_name'] = "inquiry_list_view";
        $this->load->view("admin/common/template", $data);
    }

    public function user_inquiry_list()
    {
        $inquiryModel = new Inquiry();
        $inquiry_list = $inquiryModel->getList();
        $data['applicant_list'] = $inquiry_list;
        $data['view_name'] = "inquiry_list_view";
        $this->load->view("admin/common/template", $data);
    }
    
    public function add_submit() {  
        
        $lifeApp = new LifeApplication();
        
        $lifeApp->lastName = $this->input->post('lastName');   
        $lifeApp->firstName = $this->input->post('firstName');
        $lifeApp->tel = $this->input->post('phone');
        $lifeApp->email = $this->input->post('email');
        $lifeApp->gender = $this->input->post('sex');
        $lifeApp->state = $this->input->post('state');
        $lifeApp->coverage = $this->input->post('amount');
        
        //$lifeApp->age = $this->input->post('age');    
        $lifeApp->dob = $this->input->post('month')." ".$this->input->post('day')." ".$this->input->post('year');
         //$this->hasColumn('dob', 'string', 512);
         
        $lifeApp->who =  $this->input->post('self');
        
        $insuranType = $this->input->post('insuranType');
        
        try {
            $lifeApp->save();
            $applicantId = $lifeApp->getIncremented();
        }
        catch(Exception $e)
        {
            $applicantId  = $e->getMessage();
        }
        
        
        
       

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from($lifeApp->email);

//        $this->email->to('webinquiry@insfilings.com');
//        $this->email->cc('kensmith79@gmail.com');
        $this->load->helper('date');
        $format = 'DATE_RFC822';
        $datestring = "%Y / %m / %d - %h:%i %a";
        $time = time();
        $timezone = 'UP1';
        $daylight_saving = TRUE;
        $gmt = gmt_to_local($time,$timezone,$daylight_saving );
        $issuedDate = mdate($datestring, $gmt);
        
        
        if ($insuranType == "Life"){ 
            echo $applicantId;            
        }
        else if($insuranType == "Health"){
            $redirectURL = base_url() ."/page/health-insurance-quote-step2";
            redirect($redirectURL);
        }
        else if($insuranType == "Business"){
            $redirectURL = base_url() ."/page/business-insurance-find-step2";
            redirect($redirectURL);
        }
        else if($insuranType == "House"){
            $redirectURL = base_url() ."/page/house-insurance-find-step2";
            redirect($redirectURL);
        }

    }

     public function contact_us() {

        $lastName = $this->input->post('lastName');
        $firstName = $this->input->post('firstName');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $companyName = $this->input->post('companyName');
        $subject = $this->input->post('subject');
        $policy = $this->input->post('policy');
        $message = $this->input->post('message');
        $age = $this->input->post('age');

        $this->load->helper('date');
        $format = 'DATE_RFC822';
        $time = time();

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from($email);

        $this->email->to('webinquiry@insfilings.com');
        $this->email->cc('kensmith79@gmail.com');

        $this->email->subject('Got message from [Contact Insfilings] Page');
        $this->email->message('Message from [Contact Insfilings]' . "\n" . 'Date - ' . standard_date($format, $time) . "\n" . 'First Name - ' . $firstName . "\n" . 'Last Name - ' . $lastName . "\n" . 'Company Name - ' . $companyName . "\n" . 'Email - ' . $email . "\n" . 'Phone - ' . $phone . "\n" . 'Subject - ' . $subject . "\n" . 'policy - ' . $policy . "\n" . 'Message - ' . $message . "\n");
        $this->email->send();

        $redirectURL = base_url();
        redirect($redirectURL);
    }

     public function signup() {

        $lastName = $this->input->post('lastName');
        $firstName = $this->input->post('firstName');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $companyName = $this->input->post('companyName');
        $zipCode = $this->input->post('zipCode');
        $policy = $this->input->post('policy');

        $this->load->helper('date');
        $format = 'DATE_RFC822';
        $time = time();

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from($email);

        $this->email->to('webinquiry@insfilings.com');
        $this->email->cc('kensmith79@gmail.com');

        $this->email->subject('Got message from [Sign Up for E-Delivery] Page');
        $this->email->message('Message from [Sign Up for E-Delivery]' . "\n" . 'Date - ' . standard_date($format, $time) . "\n" . 'First Name - ' . $firstName . "\n" . 'Last Name - ' . $lastName . "\n" . 'Zip Code - ' . $zipCode . "\n" . 'Policy # - ' . $policy . "\n" . 'Phone - ' . $phone . "\n" . 'Email - ' . $email . "\n");
        $this->email->send();

        $redirectURL = base_url();
        redirect($redirectURL);
    }
    
    /**
     * User account is created when a user inquires the estimate.
     */
    
     public function user_login() {

        $userid = $this->input->post('userid');
        $passwd = $this->input->post('passwd');
        
        
        $redirectURL = base_url();
        redirect($redirectURL);
    }

    public function life_initiate() {

        $lastName = $this->input->post('lastName');
        $firstName = $this->input->post('firstName');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');

        $this->load->helper('date');
        $format = 'DATE_RFC822';
        $time = time();

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from($email);

        $this->email->to('webinquiry@insfilings.com');
        $this->email->cc('kensmith79@gmail.com');

        $this->email->subject('Got message from [Initiate a Life Plan] Page');
        $this->email->message('Message from [Initiate a Life Plan]' . "\n" . 'Date - ' . standard_date($format, $time) . "\n" . 'First Name - ' . $firstName . "\n" . 'Last Name - ' . $lastName . "\n" . 'Email - ' . $email . "\n" . 'Phone - ' . $phone . "\n");
        $this->email->send();

        echo $lastName.$firstName.$phone.$email;

    }


     public function life_initiate_ajax() {

        $lastName = $this->input->post('lastName');
        $firstName = $this->input->post('firstName');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');

        $this->load->helper('date');
        $format = 'DATE_RFC822';
        $time = time();

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from($email);

        $this->email->to('webinquiry@insfilings.com');
        $this->email->cc('kensmith79@gmail.com');

        $this->email->subject('Got message from [Initiate a Life Plan] Page');
        $this->email->message('Message from [Initiate a Life Plan]' . "\n" . 'Date - ' . standard_date($format, $time) . "\n" . 'First Name - ' . $firstName . "\n" . 'Last Name - ' . $lastName . "\n" . 'Email - ' . $email . "\n" . 'Phone - ' . $phone . "\n");
        $this->email->send();

    }

    public function health_initiate() {

        $lastName = $this->input->post('lastName');
        $firstName = $this->input->post('firstName');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $healthFor = $this->input->post('healthFor');
        $zip = $this->input->post('zip');
        $lifeType = $this->input->post('lifeType');

        $this->load->helper('date');
        $format = 'DATE_RFC822';
        $time = time();

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from($email);

        $this->email->to('webinquiry@insfilings.com');
        $this->email->cc('kensmith79@gmail.com');

        $this->email->subject('Got message from [Initiate a Health Plan] Page');
        $this->email->message('Message from [Initiate a Health Plan]' . "\n" . 'Date - ' . standard_date($format, $time) . "\n" . 'First Name - ' . $firstName . "\n" . 'Last Name - ' . $lastName . "\n" . 'Zip Code - ' . $zip . "\n" . 'Health Insurance For - ' . $healthFor . "\n" . 'Type - ' . $lifeType . "\n" . 'Email - ' . $email . "\n" . 'Phone - ' . $phone . "\n");
        $this->email->send();
        
        $this->data['main_content'] = 'health/health-insurance-quote_1';                
        $this->load->view('includes/template_page',$this->data);    
                
    }

    public function business_initiate() {

        $businessName = $this->input->post('businessName');
        $lastName = $this->input->post('lastName');
        $firstName = $this->input->post('firstName');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');

        $address = $this->input->post('address');
        $zip = $this->input->post('zip');
        $interested = $this->input->post('interested');
        $Description = $this->input->post('Description');

        $this->load->helper('date');
        $format = 'DATE_RFC822';
        $time = time();

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from($email);

        $this->email->to('webinquiry@insfilings.com');
        $this->email->cc('kensmith79@gmail.com');

        $this->email->subject('Got message from [Initiate a Business Plan] Page');
        $this->email->message('Message from [Initiate a Business Plan]' . "\n" . 'Date - ' . standard_date($format, $time) . "\n" . 'First Name - ' . $firstName . "\n" . 'Last Name - ' . $lastName . "\n" . 'Email - ' . $email . "\n" . 'Phone - ' . $phone . "\n");
        $this->email->send();

        $this->data['main_content'] = 'business/business-insurance-find-1';                
        $this->load->view('includes/template_page',$this->data); 
        
    }

    public function house_initiate() {

        $lastName = $this->input->post('lastName');
        $firstName = $this->input->post('firstName');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $state = $this->input->post('state');
        $interested = $this->input->post('interested');
        $address = $this->input->post('address');
        $zip = $this->input->post('zip');
        $coverage = $this->input->post('coverage');

        $this->load->helper('date');
        $format = 'DATE_RFC822';
        $time = time();

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from($email);

        $this->email->to('webinquiry@insfilings.com');
        $this->email->cc('kensmith79@gmail.com');

        $this->email->subject('Got message from [Initiate a House Plan] Page');
        $this->email->message('Message from [Initiate a House Plan]' . "\n" . 'Date - ' . standard_date($format, $time) . "\n" . 'First Name - ' . $firstName . "\n" . 'Last Name - ' . $lastName . "\n" . 'Address - ' . $address . "\n" . 'State - ' . $state . "\n" . 'Zip Code - ' . $zip . "\n" . 'Interested - ' . $interested . "\n" . 'Coverage - ' . $coverage . "\n" . 'Email - ' . $email . "\n" . 'Phone - ' . $phone . "\n");
        $this->email->send();

        $this->data['main_content'] = 'house/house-insurance-find-1';                
        $this->load->view('includes/template_page',$this->data); 
    }


    public function delete() {

        if ($this->input->post('inquiry_id')){
            foreach ($this->input->post('inquiry_id') as $inquiry_id) {
                $this->deleteID($inquiry_id);
            }
        }
        $redirectURL = base_url() . "admin/inquiry_list";
        redirect($redirectURL);

        $data['view_name'] = "inquiry_list";
        $this->load->view("admin/common/template", $data);
    }

    private function deleteID($inquiry_id) {

            $remove = Doctrine::getTable('Applicant')->find($inquiry_id);
            $remove->delete();
        }

    function search()
    {
        $inquiryModel = new Inquiry();

        $srchStr ="";
        if ($_POST)
        {
            $srchStr = $this->input->post('searchStr');
            $this->session->set_userdata(array('searchStr' => $srchStr));
        }
        else{
            $srchStr =$this->session->userdata('searchStr');
        }
        $inquiry_list = $inquiryModel->getSearchList($srchStr);


        $data['applicant_list'] = $inquiry_list;
        $data['view_name'] = "inquiry_list_view";

        $this->load->view("admin/common/template", $data);

    }
}
?>