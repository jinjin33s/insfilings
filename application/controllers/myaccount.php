<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Myaccount extends Controller {

    public function Myaccount() {
        parent::Controller();
        log_message('debug', 'Life_Insurance: constructor');
        
        $this->load->library('DX_Auth');
               
        if ( ! $this->dx_auth->is_logged_in()){
            $this->dx_auth->deny_access('login');
        }
    }
    
    
    function index(){
        $this->listview();        
    }

    
    //display list of contacts
    public function listview() {       
        
        $lifeApplicationModel = new lifeApplication();
        $lifeApplication_list = $lifeApplicationModel->getList();
        
        $data['applicant_list'] = $lifeApplication_list;
        $data['view_name'] = "lifeApplication_myaccount_list_view";

        $this->load->view("admin/common/myaccount_template", $data);
    }
    
}
?>