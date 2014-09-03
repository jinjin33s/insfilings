<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class House_list extends Controller {

    public function House_list() {
        parent::Controller();
        log_message('debug', 'insfilings: House_list my controller');
                 
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

        $houseModel = new house();
        $house_list = $houseModel->getList();

        $data['applicant_list'] = $house_list;
        $data['view_name'] = "house_list_view";

        $this->load->view("admin/common/template", $data);
    }

    public function add() {

        $data['view_name'] = "house_add_view";
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
        $a->insuranType = 'House';
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
        
        $h = new House();
        
        $h->coverageType = $this->input->post('coverageType');
        $h->premiumAmountAnnual = $this->input->post('premiumAmountAnnual');
        $h->premiumMode = $this->input->post('premiumMode');
        $h->premium = $this->input->post('premium');
        $h->commissionAnnual = $this->input->post('commissionAnnual');
        $h->commissionMonth = $this->input->post('commissionMonth');
        $h->company = $this->input->post('company');
        $h->policy = $this->input->post('policy1');
        $h->coverageEffectiveDate = $this->input->post('coverageEffectiveDate');
        $h->issueDate = $this->input->post('issueDate');
        $h->ownerLastName_basic1 = $this->input->post('ownerLastName_basic1');
        $h->ownerFirstName_basic1 = $this->input->post('ownerFirstName_basic1');
        $h->ownerDOB_basic1 = $this->input->post('ownerDOB_basic1');
        $h->ownerNote_basic1 = $this->input->post('ownerNote_basic1');
        $h->ownerLastName_basic2 = $this->input->post('ownerLastName_basic2');
        $h->ownerFirstName_basic2 = $this->input->post('ownerFirstName_basic2');
        $h->ownerDOB_basic2 = $this->input->post('ownerDOB_basic2');
        $h->ownerNote_basic2 = $this->input->post('ownerNote_basic2');
        $h->address_R = $this->input->post('address_R');
        $h->address_R_apt = $this->input->post('address_R_apt');
        $h->address_R_city = $this->input->post('address_R_city');
        $h->address_R_state = $this->input->post('address_R_state');
        $h->address_R_zip = $this->input->post('address_R_zip');
        $h->mortgageCompanyName = $this->input->post('mortgageCompanyName');
        $h->mortgageCompanyAddress = $this->input->post('mortgageCompanyAddress');
        $h->mortgageNumber = $this->input->post('mortgageNumber');
        $h->previousPolicy = $this->input->post('previousPolicy');
        $h->previousInsuranceCompany = $this->input->post('previousInsuranceCompany');
        $h->reasonLeftPreviousCompany = $this->input->post('reasonLeftPreviousCompany');
        $h->previousPolicyNo = $this->input->post('previousPolicyNo');
        $h->anyLoss = $this->input->post('anyLoss');
        $h->coverage = $this->input->post('coverage');
        $h->dwelling = $this->input->post('dwelling');
        $h->personalProperty = $this->input->post('personalProperty');
        $h->liability = $this->input->post('liability');
        $h->medical = $this->input->post('medical');
        $h->occupancy = $this->input->post('occupancy');
        $h->dwellingInfo = $this->input->post('dwellingInfo');
        $h->yearBuilt = $this->input->post('yearBuilt');
        $h->construction = $this->input->post('construction');
        $h->roof = $this->input->post('roof');
        $h->alarm = $this->input->post('alarm');
        $h->squareFoot = $this->input->post('squareFoot');
        $h->noOfStories = $this->input->post('noOfStories');
        $h->noOfFamily = $this->input->post('noOfFamily');
        $h->marketValue = $this->input->post('marketValue');
        $h->generalNote = $this->input->post('generalNote');

        $h->save();

        $houseId = $h->getIncremented();
        $a->house_id = $houseId;

        $a->save();

        $redirectURL = base_url() . "admin/house_list/edit/" . $applicantId;
        redirect($redirectURL);
    }

    public function edit($aid) {

        $applicant_list = Doctrine::getTable('Applicant')->find($aid);

        $houseId = $applicant_list->house_id;

        $house_list = Doctrine::getTable('House')->find($houseId);

        $data['applicantInfo'] = $applicant_list;
        $data['houseInfo'] = $house_list;

        $data['view_name'] = "house_update_view";
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

        $house_id = $a->house_id;

        $h = new House();
        $h = Doctrine::getTable('House')->find($house_id);
        $h->coverageType = $this->input->post('coverageType');
        $h->premiumAmountAnnual = $this->input->post('premiumAmountAnnual');
        $h->premiumMode = $this->input->post('premiumMode');
        $h->premium = $this->input->post('premium');
        $h->commissionAnnual = $this->input->post('commissionAnnual');
        $h->commissionMonth = $this->input->post('commissionMonth');
        $h->company = $this->input->post('company');
        $h->policy = $this->input->post('policy1');
        $h->coverageEffectiveDate = $this->input->post('coverageEffectiveDate');
        $h->issueDate = $this->input->post('issueDate');
        $h->ownerLastName_basic1 = $this->input->post('ownerLastName_basic1');
        $h->ownerFirstName_basic1 = $this->input->post('ownerFirstName_basic1');
        $h->ownerDOB_basic1 = $this->input->post('ownerDOB_basic1');
        $h->ownerNote_basic1 = $this->input->post('ownerNote_basic1');
        $h->ownerLastName_basic2 = $this->input->post('ownerLastName_basic2');
        $h->ownerFirstName_basic2 = $this->input->post('ownerFirstName_basic2');
        $h->ownerDOB_basic2 = $this->input->post('ownerDOB_basic2');
        $h->ownerNote_basic2 = $this->input->post('ownerNote_basic2');
        $h->address_R = $this->input->post('address_R');
        $h->address_R_apt = $this->input->post('address_R_apt');
        $h->address_R_city = $this->input->post('address_R_city');
        $h->address_R_state = $this->input->post('address_R_state');
        $h->address_R_zip = $this->input->post('address_R_zip');
        $h->mortgageCompanyName = $this->input->post('mortgageCompanyName');
        $h->mortgageCompanyAddress = $this->input->post('mortgageCompanyAddress');
        $h->mortgageNumber = $this->input->post('mortgageNumber');
        $h->previousPolicy = $this->input->post('previousPolicy');
        $h->previousInsuranceCompany = $this->input->post('previousInsuranceCompany');
        $h->reasonLeftPreviousCompany = $this->input->post('reasonLeftPreviousCompany');
        $h->previousPolicyNo = $this->input->post('previousPolicyNo');
        $h->anyLoss = $this->input->post('anyLoss');
        $h->coverage = $this->input->post('coverage');
        $h->dwelling = $this->input->post('dwelling');
        $h->personalProperty = $this->input->post('personalProperty');
        $h->liability = $this->input->post('liability');
        $h->medical = $this->input->post('medical');
        $h->occupancy = $this->input->post('occupancy');
        $h->dwellingInfo = $this->input->post('dwellingInfo');
        $h->yearBuilt = $this->input->post('yearBuilt');
        $h->construction = $this->input->post('construction');
        $h->roof = $this->input->post('roof');
        $h->alarm = $this->input->post('alarm');
        $h->squareFoot = $this->input->post('squareFoot');
        $h->noOfStories = $this->input->post('noOfStories');
        $h->noOfFamily = $this->input->post('noOfFamily');
        $h->marketValue = $this->input->post('marketValue');
        $h->generalNote = $this->input->post('generalNote');
        $h->save();

        $redirectURL = base_url() . "admin/house_list/edit/". $aid;
        redirect($redirectURL);
    }

        public function delete() {

        if ($this->input->post('alist_id')){
            foreach ($this->input->post('alist_id') as $alist_id) {
                $this->deleteID($alist_id);
            }
        }
        $redirectURL = base_url() . "admin/house_list";
        redirect($redirectURL);

        $data['view_name'] = "house_list";
        $this->load->view("admin/common/template", $data);
    }

        private function deleteID($alist_id) {

            $remove = Doctrine::getTable('Applicant')->find($alist_id);
            $remove->delete();
        }

        function search()
    {
        $houseModel = new House();

        $srchStr ="";
        if ($_POST)
        {
            $srchStr = $this->input->post('searchStr');
            $this->session->set_userdata(array('searchStr' => $srchStr));
        }
        else{
            $srchStr =$this->session->userdata('searchStr');
        }
        $house_list = $houseModel->getSearchList($srchStr);

        $data['applicant_list'] = $house_list;
        $data['view_name'] = "house_list_view";

        $this->load->view("admin/common/template", $data);

    }
}