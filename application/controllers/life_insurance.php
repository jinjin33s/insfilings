<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Life_Insurance extends Controller {

    public function Life_Insurance() 
    {
        parent::Controller();
        log_message('debug', 'myaccount: constructor');
     
    }
    
    function index(){
        //echo "TEST"; die();
    }
    
    /**
     * 
     *  redirected from ebix list with query string
     * 
     */

    function apply() 
    {
        
       
        /*
        http://www.insfilings.com/
        life_insurance
        /apply?
        leveltrm=20
        &healthclass=SuperPfd
        &levelguar=20
        &pname=%28ING%29TermSmart+20+%2810-2-2010%29
        &cname=%28ING%29+Reliastar+Life+Insurance+Company
        &ann=$234.00
        &semi=$121.68
        &quar=$62.01
        &month=$20.48
        &mm=01
        &dd=01
        &yy=1970
        &ins_client_id=
        */
        //echo var_dump($_SERVER['REQUEST_URI']); die();
        parse_str($_SERVER['REQUEST_URI'], $_GET);
        
        $leveltrm = $this->input->get('leveltrm');//Term Period
        $healthclass = $this->input->get('healthclass');//Health Statu
        $levelguar = $this->input->get('levelguar');
        $pname = $this->input->get('pname');//Name of Policy
        $cname = $this->input->get('cname');//Insurance Company

        $ann = $this->input->get('ann');
        $semi = $this->input->get('semi');        
        $quar = $this->input->get('quar');
        $month = $this->input->get('month');
        $phone = $this->input->get('phone');
        $mm = $this->input->get('mm');//Insured Date of Birth
        $dd = $this->input->get('dd');//Insured Date of Birth
        $yy = $this->input->get('yy');//Insured Date of Birth
        $ins_client_id = $this->input->get('ins_client_id');
        $naic = $this->input->get('naic');
        $amount = 200000;
        
        //echo var_dump($_GET); die();
        
        $data['insuranceCompany'] = $leveltrm;
        $data['healthStatus'] = $healthclass;
        $data['termPeriod'] = $levelguar;
        $data['pName'] = $pname;
        $data['insuranceCompany'] = $cname;
        $data['amountofInsurance'] = $amount;
        $data['ann'] = $ann;
        $data['semi'] = $semi;
        $data['quar'] = $quar;
        $data['month'] = $month;
        $data['mm'] = $mm;
        $data['dd'] = $dd;
        $data['yy'] = $yy;
        $data['company_naic_code'] = $naic;
        $data['ins_client_id'] = $ins_client_id;
        $a = new lifeApplication();
        
        $freeQuoteList = $a->lifeGetList($ins_client_id);
        
        //$data['freeQuoteList'] = $freeQuoteList; 
        
        foreach($freeQuoteList as $alist)
        {
            $data['lastName'] = $alist['lastName'];
            
            $data['firstName'] = $alist['firstName'];
            $data['tel'] = $alist['tel'];
            $data['email'] = $alist['email'];
            $data['gender'] = $alist['gender'];
            $data['state'] = $alist['state'];
            $data['coverage'] = $alist['coverage'];
        }
        
       
        $data['main_content'] = "life/life-application-info";        
        
        $this->load->view('includes/template_application',$data);
            
        //echo var_dump($_GET); die();    
        
        //process return value        
    }
    
    function showQuoteList(){
        
        $data['main_content'] = 'life/life-insuarence-quote-ebix_iframe';
        
        $ebix_base_url = "http://vitalterm.ebixlife.com/vtweb/insfilings/results.aspx";
        
        $queryStr = http_build_query($_POST);
        
        $data['iframe_url'] = $ebix_base_url."?".$queryStr;
        
        $this->load->view('includes/template_ebix',$data);
    }
    
    function fetchEbix(){
        $this->load->helper('post_proxy');
        
        $result  =  post_proxy("http://vitalterm.ebixlife.com/vtweb/insfilings");
        //$result = php_strip_whitespace($result);
        $data['innerHTML'] = $result;
        $data['result_header'] = preg_replace("/.*<header[^>]*>|<\/header>.*/si", "", $result);
        
        $body = preg_replace("/.*<body[^>]*>|<\/body>.*/si", "", $result);
        $ebix_baseurl = "http://vitalterm.ebixlife.com/vtweb/";
            
            //src='images'-> scr='$ebix_baseurl/vtnettemplate/images'
            //src='../logos/'->src='$ebix_baseurl/vtnettemplate/logos'
        
        
       $body = preg_replace('/\s(href|src)=["\']?\/?(?!(https?:))([^>"\'\s]+)/i',' $1="$ebix_baseurl\/insfilings$3"',$body);
       //$body = preg_replace('/\s(href|src)=["\']?\/?(?!(https?:))([^>"\'\s]+)/i',' $1="$ebix_baseurl\/insfilings$3"',$body);
        //preg_replace('/<img src='(.*)([\/])(.*)' \/>/i', '".$site."$3', '<img src='../../../pic.gif' />')
        
        
        $data['result_body'] = $body;
        
       // $data['innerHTML'] = http_build_query($_POST);
        $this->load->view('includes/template_ebix',$data);
    }
    
    
}
?>