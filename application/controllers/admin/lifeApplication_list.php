<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');    

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class LifeApplication_list extends Controller{
    
    public function LifeApplication() {
        parent::Controller();
        log_message('debug', 'insfilings: LifeApplication my controller');
    }
    
    public function add_lifeApplication() {

        $insuredId = $this->uri->segment(4);        
        $la = new LifeApplication();        
        $la = Doctrine::getTable('LifeApplication')->find($insuredId);
        
        $who = $la->who = $this->input->post('who');
        
        $selectedPeriod = $this->input->post('premiumOption');
                
        if ($who == 'self'){ 
            
            $who = $la->who = $this->input->post('who');
            $lastName = $la->lastName = $this->input->post('lastName');
            $firstName = $la->firstName = $this->input->post('firstName');
            $middleName = $la->middleName = $this->input->post('middleName');
            $address = $la->address = $this->input->post('address');
            $addrYears = $la->addrYears = $this->input->post('addrYears');
            $tel = $la->tel = $this->input->post('tel');
            $email = $la->email = $this->input->post('email');
            $gender = $la->gender = $this->input->post('gender');
            $ssn = $la->ssn = $this->input->post('ssn');
            
            $month = $this->input->post('dobmonth');
            $day = $this->input->post('dobday');
            $year = $this->input->post('dobyear');            
            $dob = $la->dob = $month . $day . $year;
                        
            $driverNo = $la->driverNo = $this->input->post('driverNo');
            $driverState = $la->driverState = $this->input->post('driverState');
            
            $issuemonth = $this->input->post('issuemonth');
            $issueday = $this->input->post('issueday');
            $issueyear = $this->input->post('issueyear');            
            $driverIssueDate = $la->driverIssueDate = $issuemonth . $issueday . $issueyear;
            
            $expDatemonth = $this->input->post('expDatemonth');
            $expDateday = $this->input->post('expDateday');
            $expDateyear = $this->input->post('expDateyear');            
            $driverExpDate = $la->driverExpDate = $expDatemonth . $expDateday . $expDateyear;
            
            $citizenship = $la->citizenship = $this->input->post('citizenship');
            $birthPlace = $la->birthPlace = $this->input->post('birthPlace');
            $occupation = $la->occupation = $this->input->post('occupation');
            $occupationTitle = $la->occupationTitle = $this->input->post('occupationTitle');
            $employerName = $la->employerName = $this->input->post('employerName');
            $employerAddr = $la->employerAddr = $this->input->post('employerAddr');
            $armedForce = $la->armedForce = $this->input->post('armedForce');   

            $existing = $la->existing = $this->input->post('existing');
            $yesCompany = $la->yesCompany = $this->input->post('yesCompany');
            $yesAmount = $la->yesAmount = $this->input->post('yesAmount');
            $replacementChange = $la->replacementChange = $this->input->post('replacementChange');
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
        
            
            $coverage = $la->coverage = $this->input->post('coverage');
            $insuranceCompany = $la->insuranceCompany = $this->input->post('insuranceCompany');
            $termPeriod = $la->termPeriod = $this->input->post('termPeriod');
            
            $selectedPeriod = $la->selectedPeriod = $this->input->post('premiumOption');            
            
            $la->save();            
            
            $ownerId = $la->getLast();            
            $ownerId = $la->ownerId = $ownerId["id"];             
            $data['ownerId'] = $ownerId;            
            
            
            
            $data['ins_client_id'] = $this->input->post('ins_client_id');
            $data['coverage'] = $this->input->post('coverage');
            $data['insuranceCompany'] = $this->input->post('insuranceCompany');
            $data['pName'] = $this->input->post('pName');
            $data['healthStatus'] = $this->input->post('healthStatus');
            $data['insuredDateofBirth'] = $this->input->post('insuredDateofBirth');
            $data['termPeriod'] = $this->input->post('termPeriod');
            $data['ann'] = $this->input->post('ann');
            $data['semi'] = $this->input->post('semi');
            $data['quar'] = $this->input->post('quar');
            $data['month'] = $this->input->post('month');
            $data['policyState'] = $this->input->post('policyState');
            $data['company_naic_code'] = $this->input->post('naic');            
            $data['selectedPeriod'] = $this->input->post('premiumOption');
            
            $data['view_name'] = "life/life-application-beneficiary";
            $this->load->view("admin/common/template_application", $data);      
            
       }else if($who == 'other'){  
                
            $ins_id = $this->input->post('ins_clinent_id');           
            $la = new LifeApplication();        
            $la = Doctrine::getTable('LifeApplication')->find($ins_id);
            
            $who = $la->who = $this->input->post('who');
            $lastName = $la->lastName = $this->input->post('otherlastName');
            $firstName = $la->firstName = $this->input->post('otherfirstName');
            $middleName = $la->middleName = $this->input->post('othermiddleName');
            $address = $la->address = $this->input->post('otheraddress');
            $addrYears = $la->addrYears = $this->input->post('otheraddrYears');
            $tel = $la->tel = $this->input->post('othertel');
            $email = $la->email = $this->input->post('otheremail');
            $gender = $la->gender = $this->input->post('othergender');
            $ssn = $la->ssn = $this->input->post('otherssn');
            
            $month = $this->input->post('othermonth');
            $day = $this->input->post('otherday');
            $year = $this->input->post('otheryear');            
            $dob = $la->dob = $month . $day . $year;
                        
            $driverNo = $la->driverNo = $this->input->post('otherdriverNo');
            $driverState = $la->driverState = $this->input->post('otherdriverState');
            
            $issuemonth = $this->input->post('otherissuemonth');
            $issueday = $this->input->post('otherissueday');
            $issueyear = $this->input->post('otherissueyear');            
            $driverIssueDate = $la->driverIssueDate = $issuemonth . $issueday . $issueyear;            
            
            $expDatemonth = $this->input->post('otherexpDatemonth');
            $expDateday = $this->input->post('otherexpDateday');
            $expDateyear = $this->input->post('otherexpDateyear');            
            $driverExpDate = $la->driverExpDate = $expDatemonth . $expDateday . $expDateyear;
            
            $citizenship = $la->citizenship = $this->input->post('othercitizenship');
            $birthPlace = $la->birthPlace = $this->input->post('otherbirthPlace');
            $occupation = $la->occupation = $this->input->post('otheroccupation');
            $occupationTitle = $la->occupationTitle = $this->input->post('otheroccupationTitle');
            $employerName = $la->employerName = $this->input->post('otheremployerName');
            $employerAddr = $la->employerAddr = $this->input->post('otheremployerAddr');
            $armedForce = $la->armedForce = $this->input->post('otherarmedForce');
                
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
            
            $coverage = $la->coverage = $this->input->post('coverage');
            $insuranceCompany = $la->insuranceCompany = $this->input->post('insuranceCompany');
            $termPeriod = $la->termPeriod = $this->input->post('termPeriod');
            $selectedPeriod = $la->selectedPeriod = $this->input->post('premiumOption');  
            
            $la->save();
            
            $ownerId = $la->getLast(); 
            $ownerId = $la->ownerId = $ownerId["id"]; 
                        
            $data['lastName'] = $this->input->post('templastName');
            $data['firstName'] = $this->input->post('tempfirstName');
            $data['tel'] = $this->input->post('temptel');
            $data['email'] = $this->input->post('tempemail');
            $data['gender'] = $this->input->post('tempgender');
            
            $data['ownerId'] = $ownerId;
            
            $data['ins_client_id'] = $this->input->post('ins_client_id');
            $data['coverage'] = $this->input->post('coverage');
            $data['insuranceCompany'] = $this->input->post('insuranceCompany');
            $data['pName'] = $this->input->post('pName');
            $data['healthStatus'] = $this->input->post('healthStatus');
            $data['insuredDateofBirth'] = $this->input->post('insuredDateofBirth');
            $data['termPeriod'] = $this->input->post('termPeriod');
            $data['ann'] = $this->input->post('ann');
            $data['semi'] = $this->input->post('semi');
            $data['quar'] = $this->input->post('quar');
            $data['month'] = $this->input->post('month');
            $data['policyState'] = $this->input->post('policyState');
            $data['company_naic_code'] = $this->input->post('naic');
            $data['selectedPeriod'] = $this->input->post('premiumOption');            
            
            $data['view_name'] = "life/life-application-insured";
            
            $this->load->view("admin/common/template_application", $data);
            
            }
    }
        
    public function add_insured() {
        
        $la = new LifeApplication();
        
        $ownerId = $la->ownerId = $this->uri->segment(4);
        
        $relateToInsured = $la->relateToInsured = $this->input->post('relateToInsured'); 
        
        $lastName = $la->lastName = $this->input->post('lastName');
        $firstName = $la->firstName = $this->input->post('firstName');
        $middleName = $la->middleName = $this->input->post('middleName');
        $address = $la->address = $this->input->post('address');
        $addrYears = $la->addrYears = $this->input->post('addrYears');
        $tel = $la->tel = $this->input->post('tel');
        $email = $la->email = $this->input->post('email');
        $gender = $la->gender = $this->input->post('gender');
        $ssn = $la->ssn = $this->input->post('ssn');
                
        $month = $this->input->post('dobmonth');
        $day = $this->input->post('dobday');
        $year = $this->input->post('dobyear');            
        $dob = $la->dob = $month . $day . $year;
        
        $driverNo = $la->driverNo = $this->input->post('driverNo');
        $driverState = $la->driverState = $this->input->post('driverState');
        
        $issuemonth = $this->input->post('driverIssueDatemonth');
        $issueday = $this->input->post('driverIssueDateday');
        $issueyear = $this->input->post('driverIssueDateyear');            
        $driverIssueDate = $la->driverIssueDate = $issuemonth . $issueday . $issueyear;        
        
        $expmonth = $this->input->post('driverExpDatemonth');
        $expday = $this->input->post('driverExpDateday');
        $expyear = $this->input->post('driverExpDateyear');            
        $driverExpDate = $la->driverExpDate = $expmonth . $expday . $expyear;  
        
        $citizenship = $la->citizenship = $this->input->post('citizenship');
        $birthPlace = $la->birthPlace = $this->input->post('birthPlace');
        $occupation = $la->occupation = $this->input->post('occupation');
        $occupationTitle = $la->occupationTitle = $this->input->post('occupationTitle');
        $employerName = $la->employerName = $this->input->post('employerName');
        $employerAddr = $la->employerAddr = $this->input->post('employerAddr');
        $armedForce = $la->armedForce = $this->input->post('armedForce');
        $existing = $la->existing = $this->input->post('existing');
        $yesCompany = $la->yesCompany = $this->input->post('yesCompany');
        $yesAmount = $la->yesAmount = $this->input->post('yesAmount');
        $replacementChange = $la->replacementChange = $this->input->post('replacementChange');
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
            
        $la->save();
        
        $ownerId = $la->id; 
        $data['ownerId'] = $ownerId;
        
        $data['view_name'] = "life/life-application-beneficiary";
        
        $data['ins_client_id'] = $this->input->post('ins_client_id');
        $data['coverage'] = $this->input->post('coverage');
        $data['insuranceCompany'] = $this->input->post('insuranceCompany');
        $data['pName'] = $this->input->post('pName');
        $data['healthStatus'] = $this->input->post('healthStatus');
        $data['insuredDateofBirth'] = $this->input->post('insuredDateofBirth');
        $data['termPeriod'] = $this->input->post('termPeriod');
        $data['ann'] = $this->input->post('ann');
        $data['semi'] = $this->input->post('semi');
        $data['quar'] = $this->input->post('quar');
        $data['month'] = $this->input->post('month');
        $data['policyState'] = $this->input->post('policyState');
        $data['company_naic_code'] = $this->input->post('naic');
        $data['selectedPeriod'] = $this->input->post('selectedPeriod');
        
        $this->load->view("admin/common/template_application", $data);
    }
    
    public function add_beneficiary()
    {
        
        $ownerId = $this->uri->segment(4);
        $la = new LifeApplication();
        
        $la = Doctrine::getTable('LifeApplication')->find($ownerId);
        
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
       
        $la->save();
       
        $data['ownerId'] = $ownerId;
       
        
        $data['lifeApplicationList'] = $la;        
        
        $data['ins_client_id'] = $this->input->post('ins_client_id');
        $data['coverage'] = $this->input->post('coverage');
        $data['insuranceCompany'] = $this->input->post('insuranceCompany');
        $data['pName'] = $this->input->post('pName');
        $data['healthStatus'] = $this->input->post('healthStatus');
        $data['insuredDateofBirth'] = $this->input->post('insuredDateofBirth');
        $data['termPeriod'] = $this->input->post('termPeriod');
        $data['ann'] = $this->input->post('ann');
        $data['semi'] = $this->input->post('semi');
        $data['quar'] = $this->input->post('quar');
        $data['month'] = $this->input->post('month');
        $data['policyState'] = $this->input->post('policyState');
        $data['company_naic_code'] = $this->input->post('naic');
        $data['selectedPeriod'] = $this->input->post('selectedPeriod');
        
        $data['view_name'] = "life/life-application-medical";
        $this->load->view("admin/common/template_application", $data);
        
    }
    
    public function add_medical(){
        
        $insuredId = $this->uri->segment(4);
        
        $la = new LifeApplication();
        
        $la = Doctrine::getTable('LifeApplication')->find($insuredId);
        
        $lastNameBenefi1 = $la->medicalFirstDate = $this->input->post('medicalFirstDate');
        $medicalFirstTime = $la->medicalFirstTime = $this->input->post('medicalFirstTime');
        $medicalSecondDate = $la->medicalSecondDate= $this->input->post('medicalSecondDate');
        $medicalSecondTime = $la->medicalSecondTime = $this->input->post('medicalSecondTime');
        
        $medicalPreferred = $la->medicalPreferred = $this->input->post('medicalPreferred');
        
        if($medicalPreferred == 'iWillGo'){
            
        }else if($medicalPreferred == 'beVisited'){
            
            if($this->input->post('medicalVisitAddressType') == 'home'){
                $medicalVisitAddress = $la->medicalVisitAddress = $this->input->post('homeAddr');
            }else if($this->input->post('medicalVisitAddressType') == 'company'){
                $medicalVisitAddress = $la->medicalVisitAddress = $this->input->post('companyAddr');
            }else if($this->input->post('medicalVisitAddressType') == 'newAddr'){
                $medicalVisitAddress = $la->medicalVisitAddress = $this->input->post('newAddr');
            }            
        }        
       
        $la->save();
       
        $insuredInfo_list = Doctrine::getTable('LifeApplication')->find($insuredId); //to get added all data.
        
        $ownerId = $insuredInfo_list->ownerId;         
        
        /////////////////////////////////////////////////////////////////
        $data['insuredInfoList'] = $insuredInfo_list; // Insured info
        
        $ownerInfo = Doctrine::getTable('LifeApplication')->find($ownerId);   
        $data['ownerInfoList'] = $ownerInfo; // Owner Info       
        /////////////////////////////////////////////////////////////////
        
        $data['ownerId'] = $ownerId; 
        $data['insuredId'] = $insuredId; 
        
        
        $data['ins_client_id'] = $this->input->post('ins_client_id');
        $data['coverage'] = $this->input->post('coverage');
        $data['insuranceCompany'] = $this->input->post('insuranceCompany');
        $data['pName'] = $this->input->post('pName');
        $data['healthStatus'] = $this->input->post('healthStatus');
        $data['insuredDateofBirth'] = $this->input->post('insuredDateofBirth');
        $data['termPeriod'] = $this->input->post('termPeriod');
        $data['ann'] = $this->input->post('ann');
        $data['semi'] = $this->input->post('semi');
        $data['quar'] = $this->input->post('quar');
        $data['month'] = $this->input->post('month');
        $data['policyState'] = $this->input->post('policyState');
        $data['company_naic_code'] = $this->input->post('naic');
        $data['selectedPeriod'] = $this->input->post('selectedPeriod');
        
        $data['view_name'] = "life/life-application-review";
        $this->load->view("admin/common/template_application", $data);
        
    }
    
    public function owner_edit($insuredId){
        
        $insuredInfo_list = Doctrine::getTable('lifeApplication')->find($insuredId);
        $data['insuredInfoList'] = $insuredInfo_list;
        
        $ownerId = $insuredInfo_list->ownerId;
        $ownerInfo_list = Doctrine::getTable('lifeApplication')->find($ownerId); 
        $data['ownerInfoList'] = $ownerInfo_list;
        
        $data['insuredId'] = $insuredId;               
        $data['ownerId'] = $ownerId;
        
        $data['ins_client_id'] = $this->input->post('ins_client_id');
        $data['coverage'] = $this->input->post('coverage');
        $data['insuranceCompany'] = $this->input->post('insuranceCompany');
        $data['pName'] = $this->input->post('pName');
        $data['healthStatus'] = $this->input->post('healthStatus');
        $data['insuredDateofBirth'] = $this->input->post('insuredDateofBirth');
        $data['termPeriod'] = $this->input->post('termPeriod');
        $data['ann'] = $this->input->post('ann');
        $data['semi'] = $this->input->post('semi');
        $data['quar'] = $this->input->post('quar');
        $data['month'] = $this->input->post('month');
        $data['policyState'] = $this->input->post('policyState');
        $data['company_naic_code'] = $this->input->post('naic');
        $data['selectedPeriod'] = $this->input->post('selectedPeriod');
        
        $data['view_name'] = "life/owner_info_update_view";
        $this->load->view("admin/common/template_application", $data);
    }
    
    public function owner_update_submit($insuredId){
        
        $who = $this->input->post('who');
        
        $la = new LifeApplication();
        $la = Doctrine::getTable('lifeApplication')->find($insuredId);        
        
        if ($la->ownerId != 0){//other
              
            $ownerId = $la->ownerId; 
            $laInsured = Doctrine::getTable('lifeApplication')->find($ownerId);
            
            //insert at ownerInfo
            
            //owner info(other-owner)            
            $lastName = $laInsured->lastName = $this->input->post('ownerlastName');         
            $firstName = $laInsured->firstName = $this->input->post('ownerfirstName');
            $middleName = $laInsured->middleName = $this->input->post('ownermiddleName');
            $address = $laInsured->address = $this->input->post('owneraddress');
            $addrYears = $laInsured->addrYears = $this->input->post('owneraddrYears');
            $tel = $laInsured->tel = $this->input->post('ownertel');
            $email = $laInsured->email = $this->input->post('owneremail');
            $gender = $laInsured->gender = $this->input->post('ownergender');            
            
            $ssn = $laInsured->ssn = $this->input->post('ownerssn');
            $dob = $laInsured->dob = $this->input->post('ownerdob');
            $driverNo = $laInsured->driverNo = $this->input->post('ownerdriverNo');
            $driverState = $laInsured->driverState = $this->input->post('ownerdriverState');
            $driverIssueDate = $laInsured->driverIssueDate = $this->input->post('ownerdriverIssueDate');
            $driverExpDate = $laInsured->driverExpDate = $this->input->post('ownerdriverExpDate');
            $citizenship = $laInsured->citizenship = $this->input->post('ownercitizenship');
            $birthPlace = $laInsured->birthPlace = $this->input->post('ownerbirthPlace');
            $occupation = $laInsured->occupation = $this->input->post('owneroccupation');
            $occupationTitle = $laInsured->occupationTitle = $this->input->post('owneroccupationTitle');
            $employerName = $laInsured->employerName = $this->input->post('owneremployerName');
            $employerAddr = $laInsured->employerAddr = $this->input->post('owneremployerAddr');        
            $armedForce = $laInsured->armedForce = $this->input->post('ownerarmedForce');        
            $existing = $laInsured->existing = $this->input->post('ownerexisting');        
            $yesCompany = $laInsured->yesCompany = $this->input->post('owneryesCompany');
            $yesAmount = $laInsured->yesAmount = $this->input->post('owneryesAmount');
            $replacementChange = $laInsured->replacementChange = $this->input->post('ownerreplacementChange');
            
            //owner financial info(other-owner)
            $otherAnnual = $laInsured->otherAnnual = $this->input->post('ownerotherAnnual');
            $otherHouseIncome = $laInsured->otherHouseIncome = $this->input->post('ownerotherHouseIncome');
            $otherAdditionalIncome = $laInsured->otherAdditionalIncome = $this->input->post('ownerotherAdditionalIncome');
            $otherTotalNetWorth = $laInsured->otherTotalNetWorth = $this->input->post('ownerotherTotalNetWorth');
            $otherLiquidNetWorth = $laInsured->otherLiquidNetWorth = $this->input->post('ownerotherLiquidNetWorth');
            $otherPurposePolicy = $laInsured->otherPurposePolicy = $this->input->post('ownerotherPurposePolicy');
            $otherBankrupcy = $laInsured->otherBankrupcy = $this->input->post('ownerotherBankrupcy');
            $otherSellPolicy = $laInsured->otherSellPolicy = $this->input->post('ownerotherSellPolicy');
            $otherLoanPayPolicy = $laInsured->otherLoanPayPolicy = $this->input->post('ownerotherLoanPayPolicy');
            $otherPurchasingPolicy = $laInsured->otherPurchasingPolicy = $this->input->post('ownerotherPurchasingPolicy');
            
            //Insured Info(other-insured)  
            $relateToInsured = $la->relateToInsured = $this->input->post('insuredrelateToInsured');
            $lastName = $la->lastName = $this->input->post('insuredlastName');         
            $firstName = $la->firstName = $this->input->post('insuredfirstName');
            $middleName = $la->middleName = $this->input->post('insuredmiddleName');
            $address = $la->address = $this->input->post('insuredaddress');
            $addrYears = $la->addrYears = $this->input->post('insuredaddrYears');
            $tel = $la->tel = $this->input->post('insuredtel');
            $email = $la->email = $this->input->post('insuredemail');
            $gender = $la->gender = $this->input->post('insuredgender');
            $ssn = $la->ssn = $this->input->post('insuredssn');
            $dob = $la->dob = $this->input->post('insureddob');
            $driverNo = $la->driverNo = $this->input->post('insureddriverNo');
            $driverState = $la->driverState = $this->input->post('insureddriverState');
            $driverIssueDate = $la->driverIssueDate = $this->input->post('insureddriverIssueDate');
            $driverExpDate = $la->driverExpDate = $this->input->post('insureddriverExpDate');
            $citizenship = $la->citizenship = $this->input->post('insuredcitizenship');
            $birthPlace = $la->birthPlace = $this->input->post('insuredbirthPlace');
            $occupation = $la->occupation = $this->input->post('insuredoccupation');
            $occupationTitle = $la->occupationTitle = $this->input->post('insuredoccupationTitle');
            $employerName = $la->employerName = $this->input->post('insuredemployerName');
            $employerAddr = $la->employerAddr = $this->input->post('insuredemployerAddr');        
            $armedForce = $la->armedForce = $this->input->post('insuredarmedForce');        
            $existing = $la->existing = $this->input->post('insuredexisting');        
            $yesCompany = $la->yesCompany = $this->input->post('insuredyesCompany');
            $yesAmount = $la->yesAmount = $this->input->post('insuredyesAmount');
            $replacementChange = $la->replacementChange = $this->input->post('insuredreplacementChange');
                        
            //Health info(other-insured)            
            $driverRevoked = $la->driverRevoked = $this->input->post('otherdriverRevoked');
            $convict = $la->convict = $this->input->post('otherconvict');
            $disabled = $la->disabled = $this->input->post('otherdisabled');
            $healthDeclined = $la->healthDeclined = $this->input->post('otherhealthDeclined');
            $felonyPending = $la->felonyPending = $this->input->post('otherfelonyPending');
            $travel = $la->travel = $this->input->post('othertravel');
            $aircraft = $la->aircraft = $this->input->post('otheraircraft');
            $skydiving = $la->skydiving = $this->input->post('otherskydiving');
            $medicalTreatment = $la->medicalTreatment = $this->input->post('othermedicalTreatment');
            $tobacco = $la->tobacco = $this->input->post('othertobacco');
            $rapidWeight = $la->rapidWeight = $this->input->post('otherrapidWeight');
            $preDisease = $la->preDisease = $this->input->post('otherpreDisease');
            $diagnosed = $la->diagnosed = $this->input->post('otherdiagnosed');
            $hospitalized = $la->hospitalized = $this->input->post('otherhospitalized');  
            
            $laInsured->save(); //other insured save
            
        }else{ //self            
            
            //Insure-self
            $lastName = $la->lastName = $this->input->post('selflastName');         
            $firstName = $la->firstName = $this->input->post('selffirstName');
            $middleName = $la->middleName = $this->input->post('selfmiddleName');
            $address = $la->address = $this->input->post('selfaddress');
            $addrYears = $la->addrYears = $this->input->post('selfaddrYears');
            $tel = $la->tel = $this->input->post('selftel');
            $email = $la->email = $this->input->post('selfemail');
            $gender = $la->gender = $this->input->post('selfgender');
            
            $ssn = $la->ssn = $this->input->post('selfssn');
            $dob = $la->dob = $this->input->post('selfdob');
            $driverNo = $la->driverNo = $this->input->post('selfdriverNo');
            $driverState = $la->driverState = $this->input->post('selfdriverState');
            $driverIssueDate = $la->driverIssueDate = $this->input->post('selfdriverIssueDate');
            $driverExpDate = $la->driverExpDate = $this->input->post('selfdriverExpDate');
            $citizenship = $la->citizenship = $this->input->post('selfcitizenship');
            $birthPlace = $la->birthPlace = $this->input->post('selfbirthPlace');
            $occupation = $la->occupation = $this->input->post('selfoccupation');
            $occupationTitle = $la->occupationTitle = $this->input->post('selfoccupationTitle');
            $employerName = $la->employerName = $this->input->post('selfemployerName');
            $employerAddr = $la->employerAddr = $this->input->post('selfemployerAddr');        
            $armedForce = $la->armedForce = $this->input->post('selfarmedForce');        
            $existing = $la->existing = $this->input->post('selfexisting');        
            $yesCompany = $la->yesCompany = $this->input->post('selfyesCompany');
            $yesAmount = $la->yesAmount = $this->input->post('selfyesAmount');
            $replacementChange = $la->replacementChange = $this->input->post('selfreplacementChange');
            
            //health info-self            
            $driverRevoked = $la->driverRevoked = $this->input->post('selfdriverRevoked');
            $convict = $la->convict = $this->input->post('selfconvict');
            $disabled = $la->disabled = $this->input->post('selfdisabled');
            $healthDeclined = $la->healthDeclined = $this->input->post('selfhealthDeclined');
            $felonyPending = $la->felonyPending = $this->input->post('selffelonyPending');
            $travel = $la->travel = $this->input->post('selftravel');
            $aircraft = $la->aircraft = $this->input->post('selfaircraft');
            $skydiving = $la->skydiving = $this->input->post('selfskydiving');
            $medicalTreatment = $la->medicalTreatment = $this->input->post('selfmedicalTreatment');
            $tobacco = $la->tobacco = $this->input->post('selftobacco');
            $rapidWeight = $la->rapidWeight = $this->input->post('selfrapidWeight');
            $preDisease = $la->preDisease = $this->input->post('selfpreDisease');
            $diagnosed = $la->diagnosed = $this->input->post('selfdiagnosed');
            $hospitalized = $la->hospitalized = $this->input->post('selfhospitalized');
            
            //financial info - self
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
        
        // same (self-other)  BENEFICIARY
            
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
                        
            $la->save();  // self-other owner save
            
            $insured_list = Doctrine::getTable('lifeApplication')->find($insuredId); //to get added all data.
            $data['insuredInfoList'] = $insured_list;
            
            $ownerId = $insured_list->ownerId;
            $ownerInfo_list = Doctrine::getTable('lifeApplication')->find($ownerId); 
            
            $data['ownerInfoList'] = $ownerInfo_list;
            
            $data['ownerId'] = $ownerId;
            $data['insuredId'] = $insuredId;
            
            $data['view_name'] = "life/life-application-review";
            
            $data['ins_client_id'] = $this->input->post('ins_client_id');
            $data['coverage'] = $this->input->post('coverage');
            $data['insuranceCompany'] = $this->input->post('insuranceCompany');
            $data['pName'] = $this->input->post('pName');
            $data['healthStatus'] = $this->input->post('healthStatus');
            $data['insuredDateofBirth'] = $this->input->post('insuredDateofBirth');
            $data['termPeriod'] = $this->input->post('termPeriod');
            $data['ann'] = $this->input->post('ann');
            $data['semi'] = $this->input->post('semi');
            $data['quar'] = $this->input->post('quar');
            $data['month'] = $this->input->post('month');
            $data['policyState'] = $this->input->post('policyState');
            $data['company_naic_code'] = $this->input->post('naic');
            $data['selectedPeriod'] = $this->input->post('selectedPeriod');
        
            $this->load->view("admin/common/template_application", $data);
    }
    
    public function receipt($insuredId){
        
        $insured_list = Doctrine::getTable('LifeApplication')->find($insuredId); //to get insured Info.
        $data['insuredInfoList'] = $insured_list;
        
        $ownerId = $insured_list->ownerId;
        
        $owner_list = Doctrine::getTable('LifeApplication')->find($ownerId); //to get owner.        
        $data['ownerInfoList'] = $owner_list;

        if($insured_list->ownerId == 0){//
            $email = $insured_list->email;
            $name = $insured_list->lastName . ' ' . $insured_list->firstName;
            $address = $insured_list->address;
            $tel = $insured_list->tel;
            
        }else{     
            $email = $owner_list->email;
            $name = $owner_list->lastName . ' ' . $owner_list->firstName;
            $address = $owner_list->address;
            $tel = $owner_list->tel;
        }
        
        // create password        
        $password = uniqid();
        
        // email이 기존에 있는지 우선 체크
        $us = new UserMyAccount();
        $result = $us->findUserByEmail($email);
        if ($result == 'none'){//값이 없으면 즉 처음 입력된 email 주소이면.. 입력
            
            $us->email = $email;
            $us->password= $password;
        
            $us->save();
            
        }else{//기존 입력된 email이면 skip   
        }
        
        $ins_client_id = $this->input->post('ins_client_id');
        $coverage = $this->input->post('coverage');
        $insuranceCompany = $this->input->post('insuranceCompany');
        $pName = $this->input->post('pName');
        $healthStatus = $this->input->post('healthStatus');
        $insuredDateofBirth = $this->input->post('insuredDateofBirth');
        $termPeriod = $this->input->post('termPeriod');
        $ann = $this->input->post('ann');
        $semi = $this->input->post('semi');
        $quar = $this->input->post('quar');
        $month = $this->input->post('month');
        $policyState = $this->input->post('policyState');
        $company_naic_code = $this->input->post('naic');
        $selectedPeriod = $this->input->post('selectedPeriod');
        
            
        //고객한테 email 발송 with 본인 email & password
        $this->load->helper('date');
        $format = 'DATE_RFC822';
        $time = time();

        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $this->load->library('email');

        $this->email->initialize($config);
        $this->email->from('webinquiry@insfilings.com');
        
        $this->email->to($email);
        $this->email->cc('webinquiry@insfilings.com');

        $this->email->subject('You created account at Insfilings.com');
        $this->email->message(
                '<img src="http://www.insfilings.com/images/logo.png" /><br/>'."\n".
                '<p>Thank you for your order. Details of your order can be found at the bottom of this email.<br/></p>' . "\n" . 
                '<p>Your order will be reviewd by our new business department. Upon approval, <br>
                    your completed application will be mailed out to you within 24 hours which included:   <br>
                    Welcome letter, orignal application(requires signature and dated), duplicate   <br>
                    copy(owners copy), pre-paid return envelope.</br></p>'. "\n" . 
                '<p><b>Contact us</b></br></p>' . "\n" .
                '<p>You may contact our Insurance Specialists with questions regarding your order.   <br>
                    Our team is available Monday - Friday 8:00 AM - 8:00 PM central time via phone   <br>
                    at 800.838.6640, via   email at <a title="mailto:info@InsFilings.com" href="mailto:info@InsFilings.com" target="_blank">info@InsFilings.com</a>, 
                    or via live chat on our <a href="http://www.InsFilings.com/" target="_blank">web site</a>.<br/></p>'. "\n"
                
                .'<table width="367" height="241" border="10">'
                .'  <tr>'
                .'    <td colspan="2">Order ID :31223'. $insuredId .'</td>'
                .'  </tr>'
                .'  <tr>'
                .'    <td colspan="2" align="center" bgcolor="#CCCCCC">My Account</td>'
                .'  </tr>'
                .'  <tr>'
                .'    <td width="161">LogIn ID</td>'
                .'    <td width="172">'. $email .'</td>'
                .'  </tr>'
                .'  <tr>'
                .'    <td>Password</td>'
                .'    <td>'. $password .'</td>'
                .'  </tr>'
                .'  <tr>'
                .'    <td colspan="2" align="center" bgcolor="#CCCCCC">Life Insurance Converage Information</td>'
                .'  </tr>'
                .'  <tr>'
                .'    <td colspan="2"><p>Amount of Insureace : $'.$coverage.'</p>'
                .'    <p>Insurance Provider:<br/><img src="http://www.insfilings.com/images/company_logos/'.$company_naic_code.'.jpg" /></p>'
                .'    <p>Company Rating: '.$insuranceCompany.'</p>'
                .'    <p>Term Duration : '.$termPeriod.'</p>'
                .'    <p>'.$ann.' (Annual)</p>'
                .'    <p>'.$semi.' (Semi-Annual)</p>'
                .'    <p>'.$quar.' (Quarterly)</p>'
                .'    <p>'.$month.' (Monthly)</p></td>'
                .'  </tr>'
                .' <tr>'
                .'    <td colspan="2" align="center" bgcolor="#CCCCCC">Sign in to Status Center for more information</td>'
                .'  </tr>'
                .'  <tr>'
                .'    <td colspan="2"><p>Contact Infomation</p>'
                .'    <b>Applicant Address</b><br />'
                .'    NAME  : ' . $name . '<br />'
                .'    ADDR  : ' . $address . '<br />'
                .'    EMAIL : ' . $email . '<br />'
                .'    TEL   : ' . $tel . '<br />'
                .'  </tr>'
                .'</table>'
                
                .'<p><b>Your Family, Success & Future Starts Here</b></p><br/>'
                
                .'<p><b>Disclaimer</b></p>'
                .'InsFilings is an insurance agency and broker. We are not an <br>
                insurance carrier or provider. We serve our clients by <br>
                obtaining direct quotes from insurance carriers and <br>
                submitting applications on their behalf. We do not offer <br>
                financial plans or advice.. Read our full disclaimer at <br>
		<a href="http://www.insfilings.com/about/disclaimer">
		http://www.insfilings.com/about/disclaimer</a>'                
                );
        $this->email->send();
        
        $data['view_name'] = "life/life-application-receipt";
        
        $data['ownerId'] = $ownerId;
        
        $data['ins_client_id'] = $this->input->post('ins_client_id');
        $data['coverage'] = $this->input->post('coverage');
        $data['insuranceCompany'] = $this->input->post('insuranceCompany');
        $data['pName'] = $this->input->post('pName');
        $data['healthStatus'] = $this->input->post('healthStatus');
        $data['insuredDateofBirth'] = $this->input->post('insuredDateofBirth');
        $data['termPeriod'] = $this->input->post('termPeriod');
        $data['ann'] = $this->input->post('ann');
        $data['semi'] = $this->input->post('semi');
        $data['quar'] = $this->input->post('quar');
        $data['month'] = $this->input->post('month');
        $data['policyState'] = $this->input->post('policyState');
        $data['company_naic_code'] = $this->input->post('naic');
        $data['selectedPeriod'] = $this->input->post('selectedPeriod');
        
        $this->load->view("admin/common/template_application", $data);
        
    }
    
    
}
?>
