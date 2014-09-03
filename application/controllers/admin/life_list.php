<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Life_list extends Controller {

    public function Life_list() {
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

        $lifeModel = new life();
        $life_list = $lifeModel->getList();
        
        $data['applicant_list'] = $life_list;
        $data['view_name'] = "life_list_view";

        $this->load->view("admin/common/template", $data);
    }

    public function add() {

        $data['view_name'] = "life_add_view";
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
        $a->insuranType = 'Life';
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
        $h = new Life();

        $h->company = $this->input->post('company');
        $h->faceAmount = $this->input->post('faceAmount');
        $h->faceOption = $this->input->post('faceOption');
        $h->medicalSchedule = $this->input->post('medicalSchedule');
        $h->medicalComplete = $this->input->post('medicalComplete');
        $h->medicalNote = $this->input->post('medicalNote');
        $h->premiumAnnual = $this->input->post('premiumAnnual');
        $h->premiumMode = $this->input->post('premiumMode');
        $h->premiumAmount = $this->input->post('premiumAmount');
        $h->policy = $this->input->post('policy');
        $h->issueDate = $this->input->post('issueDate');
        $h->policyDelivery = $this->input->post('policyDelivery');
        $h->commissionAnnual = $this->input->post('commissionAnnual1');
        $h->commissionMonth = $this->input->post('commissionMonth');
        $h->address_R = $this->input->post('address_R');
        $h->address_R_apt = $this->input->post('address_R_apt');
        $h->address_R_city = $this->input->post('address_R_city');
        $h->address_R_state = $this->input->post('address_R_state');
        $h->address_R_zip = $this->input->post('address_R_zip');
        $h->DOB = $this->input->post('DOB');
        $h->birthPlace = $this->input->post('birthPlace');
        $h->maritalStatus = $this->input->post('maritalStatus');
        $h->licenseId = $this->input->post('licenseId');
        $h->idstate = $this->input->post('idstate');
        $h->idExp = $this->input->post('idExp');
        $h->idIssue = $this->input->post('idIssue');
        $h->citizen = $this->input->post('citizen');
        $h->employerName = $this->input->post('employerName');
        $h->employerAddress = $this->input->post('employerAddress');
        $h->jobTitle = $this->input->post('jobTitle');
        $h->yearsAtWork = $this->input->post('yearsAtWork');
        $h->ss = $this->input->post('ss');
        $h->annualIncome = $this->input->post('annualIncome');
        $h->householdIncome = $this->input->post('householdIncome');
        $h->asset = $this->input->post('asset');
        $h->liability = $this->input->post('liability');
        $h->netAsset = $this->input->post('netAsset');
        $h->lastName_insured1 = $this->input->post('lastName_insured1');
        $h->firstName_insured1 = $this->input->post('firstName_insured1');
        $h->relation_insured1 = $this->input->post('relation_insured1');
        $h->gender_insured1 = $this->input->post('gender_insured1');
        $h->address_R_insured1 = $this->input->post('address_R_insured1');
        $h->address_R_apt_insured1 = $this->input->post('address_R_apt_insured1');
        $h->address_R_city_insured1 = $this->input->post('address_R_city_insured1');
        $h->address_R_state_insured1 = $this->input->post('address_R_state_insured1');
        $h->address_R_zip_insured1 = $this->input->post('address_R_zip_insured1');        
        $h->DOB_insured1 = $this->input->post('DOB_insured1');
        $h->birthPlace_insured1 = $this->input->post('birthPlace_insured1');
        $h->maritalStatus_insured1 = $this->input->post('maritalStatus_insured1');
        $h->idLicense_insured1 = $this->input->post('idLicense_insured1');
        $h->idState_insured1 = $this->input->post('idState_insured1');
        $h->idExp_insured1 = $this->input->post('idExp_insured1');
        $h->idIssue_insured1 = $this->input->post('idIssue_insured1');
        $h->phone_insured1 = $this->input->post('phone_insured1');
        $h->citizen_insured1 = $this->input->post('citizen_insured1');
        $h->employerName_insured1 = $this->input->post('employerName_insured1');
        $h->employerAddress_insured1 = $this->input->post('employerAddress_insured1');
        $h->jobTitle_insured1 = $this->input->post('jobTitle_insured1');
        $h->yearAtWork_insured1 = $this->input->post('yearAtWork_insured1');
        $h->ss_insured1 = $this->input->post('ss_insured1');
        $h->lastName_insured2 = $this->input->post('lastName_insured2');
        $h->firstName_insured2 = $this->input->post('firstName_insured2');
        $h->relation_insured2 = $this->input->post('relation_insured2');
        $h->gender_insured2 = $this->input->post('gender_insured2');
        $h->address_R_insured2 = $this->input->post('address_R_insured2');
        $h->address_R_apt_insured2 = $this->input->post('address_R_apt_insured2');
        $h->address_R_city_insured2 = $this->input->post('address_R_city_insured2');
        $h->address_R_state_insured2 = $this->input->post('address_R_state_insured2');
        $h->address_R_zip_insured2 = $this->input->post('address_R_zip_insured2');
        $h->DOB_insured2 = $this->input->post('DOB_insured2');
        $h->birthPlace_insured2 = $this->input->post('birthPlace_insured2');
        $h->maritalStatus_insured2 = $this->input->post('maritalStatus_insured2');
        $h->idLicense_insured2 = $this->input->post('idLicense_insured2');
        $h->idState_insured2 = $this->input->post('idState_insured2');
        $h->idExp_insured2 = $this->input->post('idExp_insured2');
        $h->idIssue_insured2 = $this->input->post('idIssue_insured2');
        $h->phone_insured2 = $this->input->post('phone_insured2');
        $h->citizen_insured2 = $this->input->post('citizen_insured2');
        $h->employerName_insured2 = $this->input->post('employerName_insured2');
        $h->employerAddress_insured2 = $this->input->post('employerAddress_insured2');
        $h->jobTitle_insured2 = $this->input->post('jobTitle_insured2');
        $h->yearsAtWork_insured2 = $this->input->post('yearsAtWork_insured2');
        $h->ss_insured2 = $this->input->post('ss_insured2');       
        $h->lastName_benefi1 = $this->input->post('lastName_benefi1');
        $h->firstName_benefi1 = $this->input->post('firstName_benefi1');
        $h->DOB_benefi1 = $this->input->post('DOB_benefi1');
        $h->ss_benefi1 = $this->input->post('ss_benefi1');
        $h->relation_benefi1 = $this->input->post('relation_benefi1');
        $h->primary_benefi1 = $this->input->post('primary_benefi1');
        $h->contingent_benefi1 = $this->input->post('contingent_benefi1');
        $h->lastName_benefi2 = $this->input->post('lastName_benefi2');
        $h->firstName_benefi2 = $this->input->post('firstName_benefi2');
        $h->DOB_benefi2 = $this->input->post('DOB_benefi2');
        $h->ss_benefi2 = $this->input->post('ss_benefi2');
        $h->relation_benefi2 = $this->input->post('relation_benefi2');
        $h->primary_benefi2 = $this->input->post('primary_benefi2');
        $h->contingent_benefi2 = $this->input->post('contingent_benefi2');
        $h->lastName_benefi3 = $this->input->post('lastName_benefi3');
        $h->firstName_benefi3 = $this->input->post('firstName_benefi3');
        $h->DOB_benefi3 = $this->input->post('DOB_benefi3');
        $h->ss_benefi3 = $this->input->post('ss_benefi3');
        $h->relation_benefi3 = $this->input->post('relation_benefi3');
        $h->primary_benefi3 = $this->input->post('primary_benefi3');
        $h->contingent_benefi3 = $this->input->post('contingent_benefi3');
        $h->lastName_benefi4 = $this->input->post('lastName_benefi4');
        $h->firstName_benefi4 = $this->input->post('firstName_benefi4');
        $h->DOB_benefi4 = $this->input->post('DOB_benefi4');
        $h->ss_benefi4 = $this->input->post('ss_benefi4');
        $h->relation_benefi4 = $this->input->post('relation_benefi4');
        $h->primary_benefi4 = $this->input->post('primary_benefi4');
        $h->contingent_benefi4 = $this->input->post('contingent_benefi4');
        $h->name_payor = $this->input->post('name_payor');
        $h->relation_payor = $this->input->post('relation_payor');
        $h->generalNote = $this->input->post('generalNote');

        $h->save();
        $lifeId = $h->getIncremented();

        $a->life_id = $lifeId;
        $a->save();

        $redirectURL = base_url() . "admin/life_list/edit/" . $applicantId;
        redirect($redirectURL);
    }

    public function edit($aid) {

        $applicant_list = Doctrine::getTable('Applicant')->find($aid);

        $lifeId = $applicant_list->life_id;

        $life_list = Doctrine::getTable('Life')->find($lifeId);

        $data['applicantInfo'] = $applicant_list;
        $data['lifeInfo'] = $life_list;
        
        $data['view_name'] = "life_update_view";
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

        $life_id = $a->life_id;
        
        $h = new Life();

        $h = Doctrine::getTable('Life')->find($life_id);
        $h->company = $this->input->post('company');
        $h->faceAmount = $this->input->post('faceAmount');
        $h->faceOption = $this->input->post('faceOption');
        $h->medicalSchedule = $this->input->post('medicalSchedule');
        $h->medicalComplete = $this->input->post('medicalComplete');
        $h->medicalNote = $this->input->post('medicalNote');
        $h->premiumAnnual = $this->input->post('premiumAnnual');
        $h->premiumMode = $this->input->post('premiumMode');
        $h->premiumAmount = $this->input->post('premiumAmount');
        $h->policy = $this->input->post('policy');
        $h->issueDate = $this->input->post('issueDate');
        $h->policyDelivery = $this->input->post('policyDelivery');
        $h->commissionAnnual = $this->input->post('commissionAnnual1');
        $h->commissionMonth = $this->input->post('commissionMonth');
        $h->address_R = $this->input->post('address_R');
        $h->address_R_apt = $this->input->post('address_R_apt');
        $h->address_R_city = $this->input->post('address_R_city');
        $h->address_R_state = $this->input->post('address_R_state');
        $h->address_R_zip = $this->input->post('address_R_zip');
        $h->DOB = $this->input->post('DOB');
        $h->birthPlace = $this->input->post('birthPlace');
        $h->maritalStatus = $this->input->post('maritalStatus');
        $h->licenseId = $this->input->post('licenseId');
        $h->idstate = $this->input->post('idstate');
        $h->idExp = $this->input->post('idExp');
        $h->idIssue = $this->input->post('idIssue');
        $h->citizen = $this->input->post('citizen');
        $h->employerName = $this->input->post('employerName');
        $h->employerAddress = $this->input->post('employerAddress');
        $h->jobTitle = $this->input->post('jobTitle');
        $h->yearsAtWork = $this->input->post('yearsAtWork');
        $h->ss = $this->input->post('ss');
        $h->annualIncome = $this->input->post('annualIncome');
        $h->householdIncome = $this->input->post('householdIncome');
        $h->asset = $this->input->post('asset');
        $h->liability = $this->input->post('liability');
        $h->netAsset = $this->input->post('netAsset');
        $h->lastName_insured1 = $this->input->post('lastName_insured1');
        $h->firstName_insured1 = $this->input->post('firstName_insured1');
        $h->relation_insured1 = $this->input->post('relation_insured1');
        $h->gender_insured1 = $this->input->post('gender_insured1');
        $h->address_R_insured1 = $this->input->post('address_R_insured1');
        $h->address_R_apt_insured1 = $this->input->post('address_R_apt_insured1');
        $h->address_R_city_insured1 = $this->input->post('address_R_city_insured1');
        $h->address_R_state_insured1 = $this->input->post('address_R_state_insured1');
        $h->address_R_zip_insured1 = $this->input->post('address_R_zip_insured1');
        $h->DOB_insured1 = $this->input->post('DOB_insured1');
        $h->birthPlace_insured1 = $this->input->post('birthPlace_insured1');
        $h->maritalStatus_insured1 = $this->input->post('maritalStatus_insured1');
        $h->idLicense_insured1 = $this->input->post('idLicense_insured1');
        $h->idState_insured1 = $this->input->post('idState_insured1');
        $h->idExp_insured1 = $this->input->post('idExp_insured1');
        $h->idIssue_insured1 = $this->input->post('idIssue_insured1');
        $h->phone_insured1 = $this->input->post('phone_insured1');
        $h->citizen_insured1 = $this->input->post('citizen_insured1');
        $h->employerName_insured1 = $this->input->post('employerName_insured1');
        $h->employerAddress_insured1 = $this->input->post('employerAddress_insured1');
        $h->jobTitle_insured1 = $this->input->post('jobTitle_insured1');
        $h->yearAtWork_insured1 = $this->input->post('yearAtWork_insured1');
        $h->ss_insured1 = $this->input->post('ss_insured1');
        $h->lastName_insured2 = $this->input->post('lastName_insured2');
        $h->firstName_insured2 = $this->input->post('firstName_insured2');
        $h->relation_insured2 = $this->input->post('relation_insured2');
        $h->gender_insured2 = $this->input->post('gender_insured2');
        $h->address_R_insured2 = $this->input->post('address_R_insured2');
        $h->address_R_apt_insured2 = $this->input->post('address_R_apt_insured2');
        $h->address_R_city_insured2 = $this->input->post('address_R_city_insured2');
        $h->address_R_state_insured2 = $this->input->post('address_R_state_insured2');
        $h->address_R_zip_insured2 = $this->input->post('address_R_zip_insured2');
        $h->DOB_insured2 = $this->input->post('DOB_insured2');
        $h->birthPlace_insured2 = $this->input->post('birthPlace_insured2');
        $h->maritalStatus_insured2 = $this->input->post('maritalStatus_insured2');
        $h->idLicense_insured2 = $this->input->post('idLicense_insured2');
        $h->idState_insured2 = $this->input->post('idState_insured2');
        $h->idExp_insured2 = $this->input->post('idExp_insured2');
        $h->idIssue_insured2 = $this->input->post('idIssue_insured2');
        $h->phone_insured2 = $this->input->post('phone_insured2');
        $h->citizen_insured2 = $this->input->post('citizen_insured2');
        $h->employerName_insured2 = $this->input->post('employerName_insured2');
        $h->employerAddress_insured2 = $this->input->post('employerAddress_insured2');
        $h->jobTitle_insured2 = $this->input->post('jobTitle_insured2');
        $h->yearsAtWork_insured2 = $this->input->post('yearsAtWork_insured2');
        $h->ss_insured2 = $this->input->post('ss_insured2');
        $h->lastName_benefi1 = $this->input->post('lastName_benefi1');
        $h->firstName_benefi1 = $this->input->post('firstName_benefi1');
        $h->DOB_benefi1 = $this->input->post('DOB_benefi1');
        $h->ss_benefi1 = $this->input->post('ss_benefi1');
        $h->relation_benefi1 = $this->input->post('relation_benefi1');
        $h->primary_benefi1 = $this->input->post('primary_benefi1');
        $h->contingent_benefi1 = $this->input->post('contingent_benefi1');
        $h->lastName_benefi2 = $this->input->post('lastName_benefi2');
        $h->firstName_benefi2 = $this->input->post('firstName_benefi2');
        $h->DOB_benefi2 = $this->input->post('DOB_benefi2');
        $h->ss_benefi2 = $this->input->post('ss_benefi2');
        $h->relation_benefi2 = $this->input->post('relation_benefi2');
        $h->primary_benefi2 = $this->input->post('primary_benefi2');
        $h->contingent_benefi2 = $this->input->post('contingent_benefi2');
        $h->lastName_benefi3 = $this->input->post('lastName_benefi3');
        $h->firstName_benefi3 = $this->input->post('firstName_benefi3');
        $h->DOB_benefi3 = $this->input->post('DOB_benefi3');
        $h->ss_benefi3 = $this->input->post('ss_benefi3');
        $h->relation_benefi3 = $this->input->post('relation_benefi3');
        $h->primary_benefi3 = $this->input->post('primary_benefi3');
        $h->contingent_benefi3 = $this->input->post('contingent_benefi3');
        $h->lastName_benefi4 = $this->input->post('lastName_benefi4');
        $h->firstName_benefi4 = $this->input->post('firstName_benefi4');
        $h->DOB_benefi4 = $this->input->post('DOB_benefi4');
        $h->ss_benefi4 = $this->input->post('ss_benefi4');
        $h->relation_benefi4 = $this->input->post('relation_benefi4');
        $h->primary_benefi4 = $this->input->post('primary_benefi4');
        $h->contingent_benefi4 = $this->input->post('contingent_benefi4');
        $h->name_payor = $this->input->post('name_payor');
        $h->relation_payor = $this->input->post('relation_payor');
        $h->generalNote = $this->input->post('generalNote');

        $h->save();
        
        $redirectURL = base_url() . "admin/life_list/edit/". $aid;
        redirect($redirectURL);
    }

        public function delete() {

            if ($this->input->post('alist_id')) {
                    foreach ($this->input->post('alist_id') as $alist_id) {
                            $this->deleteID($alist_id);
                    }
             }
            $redirectURL = base_url() . "admin/life_list";
            redirect($redirectURL);


        $data['view_name'] = "life_list";
        $this->load->view("admin/common/template", $data);
    }

        private function deleteID($alist_id) {

            $game = Doctrine::getTable('Applicant')->find($alist_id);
            $game->delete();

        }

    function search()
    {
        $lifeModel = new Life();

        $srchStr ="";
        if ($_POST)
        {
            $srchStr = $this->input->post('searchStr');
            $this->session->set_userdata(array('searchStr' => $srchStr));
        }
        else{
            $srchStr =$this->session->userdata('searchStr');
        }
        $life_list = $lifeModel->getSearchList($srchStr);

        $data['applicant_list'] = $life_list;
        $data['view_name'] = "life_list_view";

        $this->load->view("admin/common/template", $data);

    }

}