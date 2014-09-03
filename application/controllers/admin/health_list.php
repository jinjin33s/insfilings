<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Health_list extends Controller {

    public function Health_list() {
        parent::Controller();
        log_message('debug', 'insfilings: Health_list my controller');
                 
        $this->load->library('DX_Auth');      
         if (! ($this->dx_auth->is_logged_in() && $this->dx_auth->is_admin() ) ){             
             $this->dx_auth->logout();
             $this->dx_auth->deny_access('login');
        }          
    }

    function index() {

        $this->listview();
    }

    //display list of contacts
    public function listview() {

        $healthModel = new health();
        $health_list = $healthModel->getList();

        $data['applicant_list'] = $health_list;
        $data['view_name'] = "health_list_view";

        $this->load->view("admin/common/template", $data);
    }

    public function add() {
        
        $data['view_name'] = "health_add_view";
        $this->load->view("admin/common/template",$data);
    }

    public function add_submit() {

        $a = new Applicant();

        $a->status = $this->input->post('status');
        $a->lastName = $this->input->post('lastName');
        $a->firstName = $this->input->post('firstName');
        $a->phone = $this->input->post('phone');
        $a->email = $this->input->post('email');
        $a->sex = $this->input->post('sex');
        $a->state = $this->input->post('state');
        $a->company = $this->input->post('company');
        $a->entryTime = $this->input->post('entryTime');
        $a->source = $this->input->post('source');
        $a->status = $this->input->post('status');
        $a->agent1 = $this->input->post('agent1');
        $a->agent2 = $this->input->post('agent2');
        $a->agent3 = $this->input->post('agent3');
        $a->agent4 = $this->input->post('agent4');
        $a->issuedDate = $this->input->post('issuedDate');
        $a->commissionAnnual = $this->input->post('commissionAnnual');
        $a->zip = $this->input->post('zip');
        $a->policy = $this->input->post('policy');
        $a->insuranType = 'Health';
        $a->age = $this->input->post('age');
        $a->whereBy = $this->input->post('whereBy');
        $a->applicationSentDate = $this->input->post('applicationSentDate');
        $a->sentTrackingNo = $this->input->post('sentTrackingNo');
        $a->applicationReceivedDate = $this->input->post('applicationReceivedDate');
        $a->receivedTrackingNo = $this->input->post('receivedTrackingNo');
        $a->applicationSubmitDate = $this->input->post('applicationSubmitDate');
        $a->underwritingStatus = $this->input->post('underwritingStatus');
        $a->noticeOfUnderwritingStatus = $this->input->post('noticeOfUnderwritingStatus');
        $a->policySentToCustomer = $this->input->post('policySentToCustomer');
        $a->medicalInFile = $this->input->post('medicalInFile');
        $a->noticeOfIssue = $this->input->post('noticeOfIssue');
        $a->signedDeliveryReceipt = $this->input->post('signedDeliveryReceipt');
        $a->checkThis = $this->input->post('checkThis');
        
        $a->save();
        $applicantId = $a->getIncremented();
        $h = new Health();

        $h->product = $this->input->post('product');
        $h->commissionAnnual = $this->input->post('commissionAnnual1');
        $h->commissionMonth = $this->input->post('commissionMonth');
        $h->tier = $this->input->post('tier');
        $h->premiumAmount = $this->input->post('premiumAmount');
        $h->premiumMode = $this->input->post('premiumMode');
        $h->memberId = $this->input->post('memberId');
        $h->groupId = $this->input->post('groupId');
        $h->address_R = $this->input->post('address_R');
        $h->address_R_apt = $this->input->post('address_R_apt');
        $h->address_R_city = $this->input->post('address_R_city');
        $h->address_R_state = $this->input->post('address_R_state');
        $h->address_R_zip = $this->input->post('address_R_zip');
        $h->DOB = $this->input->post('DOB');
        $h->birthPlace = $this->input->post('birthPlace');
        $h->maritalStatus = $this->input->post('maritalStatus');
        $h->coverageEffectiveDate = $this->input->post('coverageEffectiveDate');
        $h->idLicense = $this->input->post('idLicense');
        $h->idState = $this->input->post('idState');
        $h->idExp = $this->input->post('idExp');
        $h->idIssue = $this->input->post('idIssue');
        $h->citizen = $this->input->post('citizen');
        $h->employerName = $this->input->post('employerName');
        $h->employerAddress = $this->input->post('employerAddress');
        $h->jobTitle = $this->input->post('jobTitle');
        $h->yearsAtWork = $this->input->post('yearsAtWork');
        $h->ss = $this->input->post('ss');
        $h->companyName_em = $this->input->post('companyName_em');
        $h->contactFirstName_em = $this->input->post('contactFirstName_em');
        $h->contactLastName_em = $this->input->post('contactLastName_em');
        $h->title_em = $this->input->post('title_em');
        $h->address_em = $this->input->post('address_em');
        $h->apt_em = $this->input->post('apt_em');
        $h->city_em = $this->input->post('city_em');
        $h->state_em = $this->input->post('state_em');
        $h->zip_em = $this->input->post('zip_em');
        $h->taxId_em = $this->input->post('taxId_em');
        $h->phone_em = $this->input->post('phone_em');
        $h->fax_em = $this->input->post('fax_em');
        $h->name_m1 = $this->input->post('name_m1');
        $h->DOB_m1 = $this->input->post('DOB_m1');
        $h->ss_m1 = $this->input->post('ss_m1');
        $h->note_m1 = $this->input->post('note_m1');
        $h->name_m2 = $this->input->post('name_m2');
        $h->DOB_m2 = $this->input->post('DOB_m2');
        $h->ss_m2 = $this->input->post('ss_m2');
        $h->note_m2 = $this->input->post('note_m2');
        $h->name_m3 = $this->input->post('name_m3');
        $h->DOB_m3 = $this->input->post('DOB_m3');
        $h->ss_m3 = $this->input->post('ss_m3');
        $h->note_m3 = $this->input->post('note_m3');
        $h->name_m4 = $this->input->post('name_m4');
        $h->DOB_m4 = $this->input->post('DOB_m4');
        $h->ss_m4 = $this->input->post('ss_m4');
        $h->note_m4 = $this->input->post('note_m4');
        $h->genneralNote = $this->input->post('genneralNote');
        
        $h->save();

        $healthId = $h->getIncremented();
        $a->health_id = $healthId;

        $a->save();

        $redirectURL = base_url() . "admin/health_list/edit/" . $applicantId;
        redirect($redirectURL);
    }

    public function edit($aid) {

        $applicant_list = Doctrine::getTable('Applicant')->find($aid);

        $healthId = $applicant_list->health_id;

        $health_list = Doctrine::getTable('Health')->find($healthId);

        $data['applicantInfo'] = $applicant_list;
        $data['healthInfo'] = $health_list;

        $data['view_name'] = "health_update_view";
        $this->load->view("admin/common/template", $data);
    }

    public function update_submit($aid) {

            $a = new Applicant();
            $a = Doctrine::getTable('Applicant')->find($aid);

            $a->status = $this->input->post('status');
            $a->lastName = $this->input->post('lastName');
            $a->firstName = $this->input->post('firstName');
            $a->phone = $this->input->post('phone');
            $a->email = $this->input->post('email');
            $a->sex = $this->input->post('sex');
            $a->state = $this->input->post('state');
            $a->company = $this->input->post('company');
            $a->entryTime = $this->input->post('entryTime');
            $a->source = $this->input->post('source');
            $a->status = $this->input->post('status');
            $a->agent1 = $this->input->post('agent1');
            $a->agent2 = $this->input->post('agent2');
            $a->agent3 = $this->input->post('agent3');
            $a->agent4 = $this->input->post('agent4');
            $a->issuedDate = $this->input->post('issuedDate');
            $a->commissionAnnual = $this->input->post('commissionAnnual');
            $a->zip = $this->input->post('zip');
            $a->policy = $this->input->post('policy');
            $a->insuranType = $this->input->post('insuranType');
            $a->age = $this->input->post('age');
            $a->whereBy = $this->input->post('whereBy');
            $a->applicationSentDate = $this->input->post('applicationSentDate');
            $a->sentTrackingNo = $this->input->post('sentTrackingNo');
            $a->applicationReceivedDate = $this->input->post('applicationReceivedDate');
            $a->receivedTrackingNo = $this->input->post('receivedTrackingNo');
            $a->applicationSubmitDate = $this->input->post('applicationSubmitDate');
            $a->underwritingStatus = $this->input->post('underwritingStatus');
            $a->noticeOfUnderwritingStatus = $this->input->post('noticeOfUnderwritingStatus');
            $a->policySentToCustomer = $this->input->post('policySentToCustomer');
            $a->medicalInFile = $this->input->post('medicalInFile');
            $a->noticeOfIssue = $this->input->post('noticeOfIssue');
            $a->signedDeliveryReceipt = $this->input->post('signedDeliveryReceipt');
            $a->checkThis = $this->input->post('checkThis');
            $a->save();

            $health_id = $a->health_id;

            $h = new Health();
            $h = Doctrine::getTable('Health')->find($health_id);
            $h->product = $this->input->post('product');
            $h->commissionAnnual = $this->input->post('commissionAnnual1');
            $h->commissionMonth = $this->input->post('commissionMonth');
            $h->tier = $this->input->post('tier');
            $h->premiumAmount = $this->input->post('premiumAmount');
            $h->premiumMode = $this->input->post('premiumMode');
            $h->memberId = $this->input->post('memberId');
            $h->groupId = $this->input->post('groupId');
            $h->address_R = $this->input->post('address_R');
            $h->address_R_apt = $this->input->post('address_R_apt');
            $h->address_R_city = $this->input->post('address_R_city');
            $h->address_R_state = $this->input->post('address_R_state');
            $h->address_R_zip = $this->input->post('address_R_zip');
            $h->DOB = $this->input->post('DOB');
            $h->birthPlace = $this->input->post('birthPlace');
            $h->maritalStatus = $this->input->post('maritalStatus');
            $h->coverageEffectiveDate = $this->input->post('coverageEffectiveDate');
            $h->idLicense = $this->input->post('idLicense');
            $h->idState = $this->input->post('idState');
            $h->idExp = $this->input->post('idExp');
            $h->idIssue = $this->input->post('idIssue');
            $h->citizen = $this->input->post('citizen');
            $h->employerName = $this->input->post('employerName');
            $h->employerAddress = $this->input->post('employerAddress');
            $h->jobTitle = $this->input->post('jobTitle');
            $h->yearsAtWork = $this->input->post('yearsAtWork');
            $h->ss = $this->input->post('ss');
            $h->companyName_em = $this->input->post('companyName_em');
            $h->contactFirstName_em = $this->input->post('contactFirstName_em');
            $h->contactLastName_em = $this->input->post('contactLastName_em');
            $h->title_em = $this->input->post('title_em');
            $h->address_em = $this->input->post('address_em');
            $h->apt_em = $this->input->post('apt_em');
            $h->city_em = $this->input->post('city_em');
            $h->state_em = $this->input->post('state_em');
            $h->zip_em = $this->input->post('zip_em');
            $h->taxId_em = $this->input->post('taxId_em');
            $h->phone_em = $this->input->post('phone_em');
            $h->fax_em = $this->input->post('fax_em');
            $h->name_m1 = $this->input->post('name_m1');
            $h->DOB_m1 = $this->input->post('DOB_m1');
            $h->ss_m1 = $this->input->post('ss_m1');
            $h->note_m1 = $this->input->post('note_m1');
            $h->name_m2 = $this->input->post('name_m2');
            $h->DOB_m2 = $this->input->post('DOB_m2');
            $h->ss_m2 = $this->input->post('ss_m2');
            $h->note_m2 = $this->input->post('note_m2');
            $h->name_m3 = $this->input->post('name_m3');
            $h->DOB_m3 = $this->input->post('DOB_m3');
            $h->ss_m3 = $this->input->post('ss_m3');
            $h->note_m3 = $this->input->post('note_m3');
            $h->name_m4 = $this->input->post('name_m4');
            $h->DOB_m4 = $this->input->post('DOB_m4');
            $h->ss_m4 = $this->input->post('ss_m4');
            $h->note_m4 = $this->input->post('note_m4');
            $h->genneralNote = $this->input->post('genneralNote');
            $h->save();

            $redirectURL = base_url() . "admin/health_list/edit/". $aid;
            redirect($redirectURL);
        }

        public function delete() {

        if ($this->input->post('alist_id')){
            foreach ($this->input->post('alist_id') as $alist_id) {
                $this->deleteID($alist_id);
            }
        }
        $redirectURL = base_url() . "admin/business_list";
        redirect($redirectURL);

        $data['view_name'] = "game_list";
        $this->load->view("admin/common/template", $data);
    }

        private function deleteID($alist_id) {

            $remove = Doctrine::getTable('Applicant')->find($alist_id);
            $remove->delete();
        }

        function search()
        {
            $healthModel = new Health();

            $srchStr ="";
            if ($_POST)
            {
                $srchStr = $this->input->post('searchStr');
                $this->session->set_userdata(array('searchStr' => $srchStr));
            }
            else{
                $srchStr =$this->session->userdata('searchStr');
            }
            $health_list = $healthModel->getSearchList($srchStr);

            $data['applicant_list'] = $health_list;
            $data['view_name'] = "health_list_view";

            $this->load->view("admin/common/template", $data);

        }
}