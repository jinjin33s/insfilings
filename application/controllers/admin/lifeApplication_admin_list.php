<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class LifeApplication_admin_list extends Controller {

    public function LifeApplication_admin_list() {
        parent::Controller();
        log_message('debug', 'insfilings: LifeApplication_list my controller');
                 
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
        
        $lifeApplicationModel = new lifeApplication();
        $lifeApplication_list = $lifeApplicationModel->getList();
        
        $data['applicant_list'] = $lifeApplication_list;
        $data['view_name'] = "lifeApplication_list_view";

        $this->load->view("admin/common/template", $data);
    }

    public function add() {

        $data['view_name'] = "life_add_view";
        $this->load->view("admin/common/template",$data);
    }

    public function edit($insuredId) {

        $insuredInfo_list = Doctrine::getTable('lifeApplication')->find($insuredId);
        $data['insuredInfoList'] = $insuredInfo_list;
        
        $ownerId = $insuredInfo_list->ownerId;
        
        $ownerInfo_list = Doctrine::getTable('lifeApplication')->find($ownerId); 
        
        $data['ownerInfoList'] = $ownerInfo_list;
        
        $data['insuredId'] = $insuredId;               
        $data['ownerId'] = $ownerId;
        
        $data['view_name'] = "lifeApplication_update_view";
        
        $this->load->view("admin/common/template", $data);
    }

    public function update_submit($insuredId) {
        
        $la = Doctrine::getTable('LifeApplication')->find($insuredId); 
         
        if ($la->ownerId != '0'){//other 이면
            
            $status = $la->status = $this->input->post('status');
            $lastName = $la->lastName = $this->input->post('ownerlastName');         
            $firstName = $la->firstName = $this->input->post('ownerfirstName');
            $middleName = $la->middleName = $this->input->post('ownermiddleName');
            $address = $la->address = $this->input->post('owneraddress');
            $addrYears = $la->addrYears = $this->input->post('owneraddrYears');
            $tel = $la->tel = $this->input->post('ownertel');
            $email = $la->email = $this->input->post('owneremail');
            $gender = $la->gender = $this->input->post('ownergender');

            $ssn = $la->ssn = $this->input->post('ownerssn');
            $dob = $la->dob = $this->input->post('ownerdob');
            $driverNo = $la->driverNo = $this->input->post('ownerdriverNo');
            $driverState = $la->driverState = $this->input->post('ownerdriverState');
            $driverIssueDate = $la->driverIssueDate = $this->input->post('ownerdriverIssueDate');
            $driverExpDate = $la->driverExpDate = $this->input->post('ownerdriverExpDate');
            $citizenship = $la->citizenship = $this->input->post('ownercitizenship');
            $birthPlace = $la->birthPlace = $this->input->post('ownerbirthPlace');
            $occupation = $la->occupation = $this->input->post('owneroccupation');
            $occupationTitle = $la->occupationTitle = $this->input->post('owneroccupationTitle');
            $employerName = $la->employerName = $this->input->post('owneremployerName');
            $employerAddr = $la->employerAddr = $this->input->post('owneremployerAddr');        
            $armedForce = $la->armedForce = $this->input->post('ownerarmedForce'); 
            
            $existing = $la->existing = $this->input->post('ownerexisting');        
            $yesCompany = $la->yesCompany = $this->input->post('owneryesCompany');
            $yesAmount = $la->yesAmount = $this->input->post('owneryesAmount');
            $replacementChange = $la->replacementChange = $this->input->post('ownerreplacementChange');
            
            $driverRevoked = $la->driverRevoked = $this->input->post('driverRevoked');
            $convict = $la->convict = $this->input->post('convict');
            $disabled = $la->disabled = $this->input->post('disabled');
            $healthDeclined = $la->healthDeclined = $this->input->post('healthDeclined');
            $felonyPending = $la->felonyPending = $this->input->post('felonyPending');
            $travel = $la->travel = $this->input->post('travel');
            $aircraft = $la->aircraft = $this->input->post('aircraft');
            $skydiving = $la->skydiving = $this->input->post('skydiving');
            $medicalTreatment = $la->medicalTreatment = $this->input->post('medicalTreatment');
            $tobacco = $la->tobacco = $this->input->post('tobacco');
            $rapidWeight = $la->rapidWeight = $this->input->post('rapidWeight');
            $preDisease = $la->preDisease = $this->input->post('preDisease');
            $diagnosed = $la->diagnosed = $this->input->post('diagnosed');
            $hospitalized = $la->hospitalized = $this->input->post('hospitalized');   
            
            $otherAnnual = $la->otherAnnual = $this->input->post('otherAnnual');
            $otherHouseIncome = $la->otherHouseIncome = $this->input->post('otherHouseIncome');
            $otherAdditionalIncome = $la->otherAdditionalIncome = $this->input->post('otherAdditionalIncome');
            $otherTotalNetWorth = $la->otherTotalNetWorth = $this->input->post('otherTotalNetWorth');
            $otherLiquidNetWorth = $la->otherLiquidNetWorth = $this->input->post('otherLiquidNetWorth');
            $otherPurposePolicy = $la->otherPurposePolicy = $this->input->post('otherPurposePolicy');
            $otherBankrupcy = $la->otherBankrupcy = $this->input->post('otherBankrupcy');
            $otherSellPolicy = $la->otherSellPolicy = $this->input->post('otherSellPolicy');
            $otherLoanPayPolicy = $la->otherLoanPayPolicy = $this->input->post('otherLoanPayPolicy');
            $otherPurchasingPolicy = $la->otherPurchasingPolicy = $this->input->post('otherPurchasingPolicy');
            
            $lastNameBenefi1 = $la->lastNameBenefi1 = $this->input->post('lastNameBenefi1');
            $firstNameBenefi1 = $la->firstNameBenefi1 = $this->input->post('firstNameBenefi1');
            $DOBBenefi1 = $la->DOBBenefi1 = $this->input->post('DOBBenefi1');
            $ssBenefi1= $la->ssBenefi1 = $this->input->post('ssBenefi1');
            $primaryBenefi1 = $la->primaryBenefi1 = $this->input->post('primaryBenefi1');
            $portionBenefi1 = $la->portionBenefi1 = $this->input->post('portionBenefi1');
            $relationBenefi1 = $la->relationBenefi1 = $this->input->post('relationBenefi1');
            $lastNameBenefi2 = $la->lastNameBenefi2 = $this->input->post('lastNameBenefi2');
            $firstNameBenefi2 = $la->firstNameBenefi2 = $this->input->post('firstNameBenefi2');
            $DOBBenefi2 = $la->DOBBenefi2= $this->input->post('DOBBenefi2');
            $ssBenefi2 = $la->ssBenefi2 = $this->input->post('ssBenefi2');
            $primaryBenefi2 = $la->primaryBenefi2 = $this->input->post('primaryBenefi2');
            $portionBenefi2 = $la->portionBenefi2 = $this->input->post('portionBenefi2');
            $relationBenefi2 = $la->relationBenefi2 = $this->input->post('relationBenefi2');
            $lastNameBenefi3 = $la->lastNameBenefi3 = $this->input->post('lastNameBenefi3');
            $firstNameBenefi3 = $la->firstNameBenefi3 = $this->input->post('firstNameBenefi3');
            $DOBBenefi3 = $la->DOBBenefi3 = $this->input->post('DOBBenefi3');
            $ssBenefi3 = $la->ssBenefi3 = $this->input->post('ssBenefi3');
            $primaryBenefi3 = $la->primaryBenefi3 = $this->input->post('primaryBenefi3');
            $portionBenefi3 = $la->portionBenefi3 = $this->input->post('portionBenefi3');
            $relationBenefi3 = $la->relationBenefi3 = $this->input->post('relationBenefi3');
            $lastNameBenefi4 = $la->lastNameBenefi4 = $this->input->post('lastNameBenefi4');
            $firstNameBenefi4 = $la->firstNameBenefi4 = $this->input->post('firstNameBenefi4');
            $DOBBenefi4 = $la->DOBBenefi4 = $this->input->post('DOBBenefi4');
            $ssBenefi4 = $la->ssBenefi4= $this->input->post('ssBenefi4');
            $primaryBenefi4 = $la->primaryBenefi4 = $this->input->post('primaryBenefi4');
            $portionBenefi4 = $la->portionBenefi4 = $this->input->post('portionBenefi4');
            $relationBenefi4 = $la->relationBenefi4 = $this->input->post('relationBenefi4');
            $lastNameBenefi1 = $la->medicalFirstDate = $this->input->post('medicalFirstDate');
            $medicalFirstTime = $la->medicalFirstTime = $this->input->post('medicalFirstTime');
            $medicalSecondDate = $la->medicalSecondDate= $this->input->post('medicalSecondDate');
            $medicalSecondTime = $la->medicalSecondTime = $this->input->post('medicalSecondTime');
            
            $ownerId = $la->ownerId;
            $la->save();
            
            //insert at ownerInfo
            $laInsured = Doctrine::getTable('lifeApplication')->find($ownerId);
            
            $status = $laInsured->status = $this->input->post('status');
            $lastName = $laInsured->lastName = $this->input->post('insuredlastName');         
            $firstName = $laInsured->firstName = $this->input->post('insuredfirstName');
            $middleName = $laInsured->middleName = $this->input->post('insuredmiddleName');
            $address = $laInsured->address = $this->input->post('insuredaddress');
            $addrYears = $laInsured->addrYears = $this->input->post('insuredaddrYears');
            $tel = $laInsured->tel = $this->input->post('insuredtel');
            $email = $laInsured->email = $this->input->post('insuredemail');
            $gender = $laInsured->gender = $this->input->post('insuredgender');
            
            $ssn = $laInsured->ssn = $this->input->post('insuredssn');
            $dob = $laInsured->dob = $this->input->post('insureddob');
            $driverNo = $laInsured->driverNo = $this->input->post('insureddriverNo');
            $driverState = $laInsured->driverState = $this->input->post('insureddriverState');
            $driverIssueDate = $laInsured->driverIssueDate = $this->input->post('insureddriverIssueDate');
            $driverExpDate = $laInsured->driverExpDate = $this->input->post('insureddriverExpDate');
            $citizenship = $laInsured->citizenship = $this->input->post('insuredcitizenship');
            $birthPlace = $laInsured->birthPlace = $this->input->post('insuredbirthPlace');
            $occupation = $laInsured->occupation = $this->input->post('insuredoccupation');
            $occupationTitle = $laInsured->occupationTitle = $this->input->post('insuredoccupationTitle');
            $employerName = $laInsured->employerName = $this->input->post('insuredemployerName');
            $employerAddr = $laInsured->employerAddr = $this->input->post('insuredemployerAddr');        
            $armedForce = $laInsured->armedForce = $this->input->post('insuredarmedForce');        
            $existing = $laInsured->existing = $this->input->post('insuredexisting');        
            $yesCompany = $laInsured->yesCompany = $this->input->post('insuredyesCompany');
            $yesAmount = $laInsured->yesAmount = $this->input->post('insuredyesAmount');
            $replacementChange = $laInsured->replacementChange = $this->input->post('insuredreplacementChange');
            
            $driverRevoked = $laInsured->driverRevoked = $this->input->post('insureddriverRevoked');
            $convict = $laInsured->convict = $this->input->post('insuredconvict');
            $disabled = $laInsured->disabled = $this->input->post('insureddisabled');
            $healthDeclined = $laInsured->healthDeclined = $this->input->post('insuredhealthDeclined');
            $felonyPending = $laInsured->felonyPending = $this->input->post('insuredfelonyPending');
            $travel = $laInsured->travel = $this->input->post('insuredtravel');
            $aircraft = $laInsured->aircraft = $this->input->post('insuredaircraft');
            $skydiving = $laInsured->skydiving = $this->input->post('insuredskydiving');
            $medicalTreatment = $laInsured->medicalTreatment = $this->input->post('insuredmedicalTreatment');
            $tobacco = $laInsured->tobacco = $this->input->post('insuredtobacco');
            $rapidWeight = $laInsured->rapidWeight = $this->input->post('insuredrapidWeight');
            $preDisease = $laInsured->preDisease = $this->input->post('insuredpreDisease');
            $diagnosed = $laInsured->diagnosed = $this->input->post('insureddiagnosed');
            $hospitalized = $laInsured->hospitalized = $this->input->post('insuredhospitalized');            

            $otherAnnual = $laInsured->otherAnnual = $this->input->post('insuredotherAnnual');
            
            $otherHouseIncome = $laInsured->otherHouseIncome = $this->input->post('insuredotherHouseIncome');
            $otherAdditionalIncome = $laInsured->otherAdditionalIncome = $this->input->post('insuredotherAdditionalIncome');
            $otherTotalNetWorth = $laInsured->otherTotalNetWorth = $this->input->post('insuredotherTotalNetWorth');
            $otherLiquidNetWorth = $laInsured->otherLiquidNetWorth = $this->input->post('insuredotherLiquidNetWorth');
            $otherPurposePolicy = $laInsured->otherPurposePolicy = $this->input->post('insuredotherPurposePolicy');
            $otherBankrupcy = $laInsured->otherBankrupcy = $this->input->post('insuredotherBankrupcy');
            $otherSellPolicy = $laInsured->otherSellPolicy = $this->input->post('insuredotherSellPolicy');
            $otherLoanPayPolicy = $laInsured->otherLoanPayPolicy = $this->input->post('insuredotherLoanPayPolicy');
            $otherPurchasingPolicy = $laInsured->otherPurchasingPolicy = $this->input->post('insuredotherPurchasingPolicy');
            
            $laInsured->save();            
            
            }else{
        
            $status = $la->status = $this->input->post('status');
            $lastName = $la->lastName = $this->input->post('ownerlastName');         
            $firstName = $la->firstName = $this->input->post('ownerfirstName');
            $middleName = $la->middleName = $this->input->post('ownermiddleName');
            $address = $la->address = $this->input->post('owneraddress');
            $addrYears = $la->addrYears = $this->input->post('owneraddrYears');
            $tel = $la->tel = $this->input->post('ownertel');
            $email = $la->email = $this->input->post('owneremail');
            $gender = $la->gender = $this->input->post('ownergender');
            
            $ssn = $la->ssn = $this->input->post('ownerssn');
            $dob = $la->dob = $this->input->post('ownerdob');
            $driverNo = $la->driverNo = $this->input->post('ownerdriverNo');
            $driverState = $la->driverState = $this->input->post('ownerdriverState');
            $driverIssueDate = $la->driverIssueDate = $this->input->post('ownerdriverIssueDate');
            $driverExpDate = $la->driverExpDate = $this->input->post('ownerdriverExpDate');
            $citizenship = $la->citizenship = $this->input->post('ownercitizenship');
            $birthPlace = $la->birthPlace = $this->input->post('ownerbirthPlace');
            $occupation = $la->occupation = $this->input->post('owneroccupation');
            $occupationTitle = $la->occupationTitle = $this->input->post('owneroccupationTitle');
            $employerName = $la->employerName = $this->input->post('owneremployerName');
            $employerAddr = $la->employerAddr = $this->input->post('owneremployerAddr');        
            $armedForce = $la->armedForce = $this->input->post('ownerarmedForce');        
            $existing = $la->existing = $this->input->post('ownerexisting');        
            $yesCompany = $la->yesCompany = $this->input->post('owneryesCompany');
            $yesAmount = $la->yesAmount = $this->input->post('owneryesAmount');
            $replacementChange = $la->replacementChange = $this->input->post('ownerreplacementChange');
            
            $driverRevoked = $la->driverRevoked = $this->input->post('driverRevoked');
            $convict = $la->convict = $this->input->post('convict');
            $disabled = $la->disabled = $this->input->post('disabled');
            $healthDeclined = $la->healthDeclined = $this->input->post('healthDeclined');
            $felonyPending = $la->felonyPending = $this->input->post('felonyPending');
            $travel = $la->travel = $this->input->post('travel');
            $aircraft = $la->aircraft = $this->input->post('aircraft');
            $skydiving = $la->skydiving = $this->input->post('skydiving');
            $medicalTreatment = $la->medicalTreatment = $this->input->post('medicalTreatment');
            $tobacco = $la->tobacco = $this->input->post('tobacco');
            $rapidWeight = $la->rapidWeight = $this->input->post('rapidWeight');
            $preDisease = $la->preDisease = $this->input->post('preDisease');
            $diagnosed = $la->diagnosed = $this->input->post('diagnosed');
            $hospitalized = $la->hospitalized = $this->input->post('hospitalized');            

            $selfAnnual = $la->selfAnnual = $this->input->post('selfAnnual');
            $selfHouseIncome = $la->selfHouseIncome = $this->input->post('selfHouseIncome');
            $selfAdditionalIncome = $la->selfAdditionalIncome = $this->input->post('selfAdditionalIncome');
            $selfTotalNetWorth = $la->selfTotalNetWorth = $this->input->post('selfTotalNetWorth');
            $selfLiquidNetWorth = $la->selfLiquidNetWorth = $this->input->post('selfLiquidNetWorth');
            $selfPurposePolicy = $la->selfPurposePolicy = $this->input->post('selfPurposePolicy');
            $selfBankrupcy = $la->selfBankrupcy = $this->input->post('selfBankrupcy');
            $selfSellPolicy = $la->selfSellPolicy = $this->input->post('selfSellPolicy');
            $selfLoanPayPolicy = $la->selfLoanPayPolicy = $this->input->post('selfLoanPayPolicy');
            $selfPurchasingPolicy = $la->selfPurchasingPolicy = $this->input->post('selfPurchasingPolicy');
            
            }
        
            $lastNameBenefi1 = $la->lastNameBenefi1 = $this->input->post('lastNameBenefi1');
            $firstNameBenefi1 = $la->firstNameBenefi1 = $this->input->post('firstNameBenefi1');
            $DOBBenefi1 = $la->DOBBenefi1 = $this->input->post('DOBBenefi1');
            $ssBenefi1= $la->ssBenefi1 = $this->input->post('ssBenefi1');
            $primaryBenefi1 = $la->primaryBenefi1 = $this->input->post('primaryBenefi1');
            $portionBenefi1 = $la->portionBenefi1 = $this->input->post('portionBenefi1');
            $relationBenefi1 = $la->relationBenefi1 = $this->input->post('relationBenefi1');
            $lastNameBenefi2 = $la->lastNameBenefi2 = $this->input->post('lastNameBenefi2');
            $firstNameBenefi2 = $la->firstNameBenefi2 = $this->input->post('firstNameBenefi2');
            $DOBBenefi2 = $la->DOBBenefi2= $this->input->post('DOBBenefi2');
            $ssBenefi2 = $la->ssBenefi2 = $this->input->post('ssBenefi2');
            $primaryBenefi2 = $la->primaryBenefi2 = $this->input->post('primaryBenefi2');
            $portionBenefi2 = $la->portionBenefi2 = $this->input->post('portionBenefi2');
            $relationBenefi2 = $la->relationBenefi2 = $this->input->post('relationBenefi2');
            $lastNameBenefi3 = $la->lastNameBenefi3 = $this->input->post('lastNameBenefi3');
            $firstNameBenefi3 = $la->firstNameBenefi3 = $this->input->post('firstNameBenefi3');
            $DOBBenefi3 = $la->DOBBenefi3 = $this->input->post('DOBBenefi3');
            $ssBenefi3 = $la->ssBenefi3 = $this->input->post('ssBenefi3');
            $primaryBenefi3 = $la->primaryBenefi3 = $this->input->post('primaryBenefi3');
            $portionBenefi3 = $la->portionBenefi3 = $this->input->post('portionBenefi3');
            $relationBenefi3 = $la->relationBenefi3 = $this->input->post('relationBenefi3');
            $lastNameBenefi4 = $la->lastNameBenefi4 = $this->input->post('lastNameBenefi4');
            $firstNameBenefi4 = $la->firstNameBenefi4 = $this->input->post('firstNameBenefi4');
            $DOBBenefi4 = $la->DOBBenefi4 = $this->input->post('DOBBenefi4');
            $ssBenefi4 = $la->ssBenefi4= $this->input->post('ssBenefi4');
            $primaryBenefi4 = $la->primaryBenefi4 = $this->input->post('primaryBenefi4');
            $portionBenefi4 = $la->portionBenefi4 = $this->input->post('portionBenefi4');
            $relationBenefi4 = $la->relationBenefi4 = $this->input->post('relationBenefi4');
            $lastNameBenefi1 = $la->medicalFirstDate = $this->input->post('medicalFirstDate');
            $medicalFirstTime = $la->medicalFirstTime = $this->input->post('medicalFirstTime');
            $medicalSecondDate = $la->medicalSecondDate= $this->input->post('medicalSecondDate');
            $medicalSecondTime = $la->medicalSecondTime = $this->input->post('medicalSecondTime');
            
            $la->save();  // whole save into owner info
            
            $insured_list = Doctrine::getTable('lifeApplication')->find($insuredId); //to get added all data.
            $data['insuredInfoList'] = $insured_list;
            
            $ownerId = $insured_list->ownerId;
            $ownerInfo_list = Doctrine::getTable('lifeApplication')->find($ownerId); 
            
            $data['ownerInfoList'] = $ownerInfo_list;
            
            $data['ownerId'] = $ownerId;
            $data['insuredId'] = $insuredId;
        
            $data['view_name'] = "lifeApplication_update_view";

            $this->load->view("admin/common/template", $data);
    }

        public function delete() {
            
            if ($this->input->post('alist_id')) {
                    foreach ($this->input->post('alist_id') as $alist_id) {
                            $this->deleteID($alist_id);
                    }
             }
            $redirectURL = base_url() . "admin/lifeApplication_admin_list";
            redirect($redirectURL);


        $data['view_name'] = "life_list";
        $this->load->view("admin/common/template", $data);
    }

        private function deleteID($alist_id) {

            $game = Doctrine::getTable('lifeApplication')->find($alist_id);
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