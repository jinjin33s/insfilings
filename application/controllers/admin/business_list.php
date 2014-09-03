<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Business_list extends Controller {

    public function Business_list() {
        parent::Controller();
        log_message('debug', 'insfilings: Business_list my controller');
                 
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

        $businessModel = new business();
        $business_list = $businessModel->getList();

        $data['applicant_list'] = $business_list;
        $data['view_name'] = "business_list_view";

        $this->load->view("admin/common/template", $data);
    }

    public function add() {

        $data['view_name'] = "business_add_view";
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
        $a->insuranType = 'Business';
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
        
        $h = new Business();

        $h->businessInformation = $this->input->post('businessInformation');
        $h->companyName = $this->input->post('companyName');
        $h->contactFirstName = $this->input->post('contactFirstName');
        $h->contactLastName = $this->input->post('contactLastName');
        $h->title = $this->input->post('title');
        $h->commissionAnnual = $this->input->post('commissionAnnual1');
        $h->commissionMonth = $this->input->post('commissionMonth');
        $h->company = $this->input->post('company');
        $h->policy = $this->input->post('policy');
        $h->coverageEffectiveDate = $this->input->post('coverageEffectiveDate');
        $h->issueDate = $this->input->post('issueDate');
        $h->address = $this->input->post('address');
        $h->suite = $this->input->post('suite');
        $h->city = $this->input->post('city');
        $h->state = $this->input->post('state1');
        $h->zip = $this->input->post('zip1');
        $h->taxId = $this->input->post('taxId');
        $h->phone = $this->input->post('phone1');
        $h->fax = $this->input->post('fax');
        $h->businessDescription = $this->input->post('businessDescription');
        $h->yearsInBusiness = $this->input->post('yearsInBusiness');
        $h->annualGrossSale = $this->input->post('annualGrossSale');
        $h->operationDays = $this->input->post('operationDays');
        $h->operationHours = $this->input->post('operationHours');
        $h->businessDetail = $this->input->post('businessDetail');
        $h->previousPolicy = $this->input->post('previousPolicy');
        $h->previousInsuranceCompany = $this->input->post('previousInsuranceCompany');
        $h->reasonLeftPreviousCompany = $this->input->post('reasonLeftPreviousCompany');
        $h->previousPolicyNo = $this->input->post('previousPolicyNo');
        $h->anyLoss = $this->input->post('anyLoss');
        $h->building = $this->input->post('building');
        $h->construction = $this->input->post('construction');
        $h->noOfFloor = $this->input->post('noOfFloor');
        $h->yearBuilt = $this->input->post('yearBuilt');
        $h->totalArea = $this->input->post('totalArea');
        $h->publicArea = $this->input->post('publicArea');
        $h->rightExposure = $this->input->post('rightExposure');
        $h->leftExposure = $this->input->post('leftExposure');
        $h->safetySystems = $this->input->post('safetySystems');
        $h->buildingDetail = $this->input->post('buildingDetail');
        $h->property = $this->input->post('property');
        $h->personalProperty = $this->input->post('personalProperty');
        $h->productLiability = $this->input->post('productLiability');
        $h->propertyDetail = $this->input->post('propertyDetail');
        $h->liability = $this->input->post('liability');
        $h->generalAggregate = $this->input->post('generalAggregate');
        $h->prodCompOptAggregate = $this->input->post('prodCompOptAggregate');
        $h->fireDamage = $this->input->post('fireDamage');
        $h->medical = $this->input->post('medical');
        $h->liabilityDetail = $this->input->post('liabilityDetail');
        $h->makeYearModel1 = $this->input->post('makeYearModel1');
        $h->makeYearModel2 = $this->input->post('makeYearModel2');
        $h->makeYearModel3 = $this->input->post('makeYearModel3');
        $h->makeYearModel4 = $this->input->post('makeYearModel4');
        $h->makeYearModel5 = $this->input->post('makeYearModel5');
        $h->vehicleDetail = $this->input->post('vehicleDetail');
        $h->policyNo_disability = $this->input->post('policyNo_disability');
        $h->effectiveDate_disability = $this->input->post('effectiveDate_disability');
        $h->issueDate_disability = $this->input->post('issueDate_disability');
        $h->nameAndTitle1_disability = $this->input->post('nameAndTitle1_disability');
        $h->nameAndTitle2_disability = $this->input->post('nameAndTitle2_disability');
        $h->nameAndTitle3_disability = $this->input->post('nameAndTitle3_disability');
        $h->nameAndTitle4_disability = $this->input->post('nameAndTitle4_disability');
        $h->nameAndTitle5_disability = $this->input->post('nameAndTitle5_disability');
        $h->policyNo_workers = $this->input->post('policyNo_workers');
        $h->effectiveDate_workers = $this->input->post('effectiveDate_workers');
        $h->issueDate_workers = $this->input->post('issueDate_workers');
        $h->nameAndTitle1_workers = $this->input->post('nameAndTitle1_workers');
        $h->nameAndTitle2_workers = $this->input->post('nameAndTitle2_workers');
        $h->nameAndTitle3_workers = $this->input->post('nameAndTitle3_workers');
        $h->nameAndTitle4_workers = $this->input->post('nameAndTitle4_workers');
        $h->nameAndTitle5_workers = $this->input->post('nameAndTitle5_workers');
        $h->generalNote = $this->input->post('generalNote');
        
        $h->save();

        $businessId = $h->getIncremented();
        $a->business_id = $businessId;

        $a->save();

        $redirectURL = base_url() . "admin/business_list/edit/" . $applicantId;
        redirect($redirectURL);
    }

    public function edit($aid) {

        $applicant_list = Doctrine::getTable('Applicant')->find($aid);

        $businessId = $applicant_list->business_id;

        $business_list = Doctrine::getTable('Business')->find($businessId);

        $data['applicantInfo'] = $applicant_list;
        $data['businessInfo'] = $business_list;

        $data['view_name'] = "business_update_view";
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

        $business_id = $a->business_id;

        $h = new Business();

        $h = Doctrine::getTable('Business')->find($business_id);
        $h->businessInformation = $this->input->post('businessInformation');
        $h->companyName = $this->input->post('companyName');
        $h->contactFirstName = $this->input->post('contactFirstName');
        $h->contactLastName = $this->input->post('contactLastName');
        $h->title = $this->input->post('title');
        $h->commissionAnnual = $this->input->post('commissionAnnual1');
        $h->commissionMonth = $this->input->post('commissionMonth');
        $h->company = $this->input->post('company');
        $h->policy = $this->input->post('policy');
        $h->coverageEffectiveDate = $this->input->post('coverageEffectiveDate');
        $h->issueDate = $this->input->post('issueDate');
        $h->address = $this->input->post('address');
        $h->suite = $this->input->post('suite');
        $h->city = $this->input->post('city');
        $h->state = $this->input->post('state1');
        $h->zip = $this->input->post('zip1');
        $h->taxId = $this->input->post('taxId');
        $h->phone = $this->input->post('phone1  ');
        $h->fax = $this->input->post('fax');
        $h->businessDescription = $this->input->post('businessDescription');
        $h->yearsInBusiness = $this->input->post('yearsInBusiness');
        $h->annualGrossSale = $this->input->post('annualGrossSale');
        $h->operationDays = $this->input->post('operationDays');
        $h->operationHours = $this->input->post('operationHours');
        $h->businessDetail = $this->input->post('businessDetail');
        $h->previousPolicy = $this->input->post('previousPolicy');
        $h->previousInsuranceCompany = $this->input->post('previousInsuranceCompany');
        $h->reasonLeftPreviousCompany = $this->input->post('reasonLeftPreviousCompany');
        $h->previousPolicyNo = $this->input->post('previousPolicyNo');
        $h->anyLoss = $this->input->post('anyLoss');
        $h->building = $this->input->post('building');
        $h->construction = $this->input->post('construction');
        $h->noOfFloor = $this->input->post('noOfFloor');
        $h->yearBuilt = $this->input->post('yearBuilt');
        $h->totalArea = $this->input->post('totalArea');
        $h->publicArea = $this->input->post('publicArea');
        $h->rightExposure = $this->input->post('rightExposure');
        $h->leftExposure = $this->input->post('leftExposure');
        $h->safetySystems = $this->input->post('safetySystems');
        $h->buildingDetail = $this->input->post('buildingDetail');
        $h->property = $this->input->post('property');
        $h->personalProperty = $this->input->post('personalProperty');
        $h->productLiability = $this->input->post('productLiability');
        $h->propertyDetail = $this->input->post('propertyDetail');
        $h->liability = $this->input->post('liability');
        $h->generalAggregate = $this->input->post('generalAggregate');
        $h->prodCompOptAggregate = $this->input->post('prodCompOptAggregate');
        $h->fireDamage = $this->input->post('fireDamage');
        $h->medical = $this->input->post('medical');
        $h->liabilityDetail = $this->input->post('liabilityDetail');
        $h->makeYearModel1 = $this->input->post('makeYearModel1');
        $h->makeYearModel2 = $this->input->post('makeYearModel2');
        $h->makeYearModel3 = $this->input->post('makeYearModel3');
        $h->makeYearModel4 = $this->input->post('makeYearModel4');
        $h->makeYearModel5 = $this->input->post('makeYearModel5');
        $h->vehicleDetail = $this->input->post('vehicleDetail');
        $h->policyNo_disability = $this->input->post('policyNo_disability');
        $h->effectiveDate_disability = $this->input->post('effectiveDate_disability');
        $h->issueDate_disability = $this->input->post('issueDate_disability');
        $h->nameAndTitle1_disability = $this->input->post('nameAndTitle1_disability');
        $h->nameAndTitle2_disability = $this->input->post('nameAndTitle2_disability');
        $h->nameAndTitle3_disability = $this->input->post('nameAndTitle3_disability');
        $h->nameAndTitle4_disability = $this->input->post('nameAndTitle4_disability');
        $h->nameAndTitle5_disability = $this->input->post('nameAndTitle5_disability');
        $h->policyNo_workers = $this->input->post('policyNo_workers');
        $h->effectiveDate_workers = $this->input->post('effectiveDate_workers');
        $h->issueDate_workers = $this->input->post('issueDate_workers');
        $h->nameAndTitle1_workers = $this->input->post('nameAndTitle1_workers');
        $h->nameAndTitle2_workers = $this->input->post('nameAndTitle2_workers');
        $h->nameAndTitle3_workers = $this->input->post('nameAndTitle3_workers');
        $h->nameAndTitle4_workers = $this->input->post('nameAndTitle4_workers');
        $h->nameAndTitle5_workers = $this->input->post('nameAndTitle5_workers');
        $h->generalNote = $this->input->post('generalNote');

        $h->save();

        $redirectURL = base_url() . "admin/business_list/edit/". $aid;
        redirect($redirectURL);

    }

    public function delete() {

        if ($this->input->post('alist_id')){
            foreach ($this->input->post('alist_id') as $alist_id){
                $this->deleteID($alist_id);
            }
        }
        $redirectURL = base_url() . "admin/business_list";
        redirect($redirectURL);

        $data['view_name'] = "business_list";
        $this->load->view("admin/common/template", $data);
    }
    
    private function deleteID($alist_id) {
        
        $game = Doctrine::getTable('Applicant')->find($alist_id);
        $game->delete();
    }

    function search()
    {
        $businessModel = new Business();

        $srchStr ="";
        if ($_POST)
        {
            $srchStr = $this->input->post('searchStr');
            $this->session->set_userdata(array('searchStr' => $srchStr));
        }
        else{
            $srchStr =$this->session->userdata('searchStr');
        }
        $business_list = $businessModel->getSearchList($srchStr);

        $data['applicant_list'] = $business_list;
        $data['view_name'] = "business_list_view";

        $this->load->view("admin/common/template", $data);

    }

}