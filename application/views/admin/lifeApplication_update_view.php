<script type="text/javascript" src="<?php echo base_url(); ?>ckfinder/ckfinder.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        
        $('#who').val('<?= $ownerInfoList->who ?>');
        <?php if(!$ownerInfoList){?>            
        $('#status').val('<?= $ownerInfoList->status ?>');
        $('#armedForce').val('<?= $ownerInfoList->armedForce ?>');
        <?php }else{ ?>
        $('#status').val('<?= $insuredInfoList->status ?>');        
        <?php } ?>
            
            
//        $('#armedForce').val('<?= $insuredInfoList->armedForce ?>');
//        $('#existing').val('<?= $insuredInfoList->existing ?>');
//        $('#driverRevoked').val('<?= $insuredInfoList->driverRevoked ?>');
//        $('#convict').val('<?= $insuredInfoList->convict ?>');
//        $('#disabled').val('<?= $insuredInfoList->disabled ?>');
//        $('#healthDeclined').val('<?= $insuredInfoList->healthDeclined ?>');
//        $('#felonyPending').val('<?= $insuredInfoList->felonyPending ?>');
//        $('#travel').val('<?= $insuredInfoList->travel ?>');
//        $('#aircraft').val('<?= $insuredInfoList->aircraft ?>');
//        $('#skydiving').val('<?= $insuredInfoList->skydiving ?>');
//        $('#medicalTreatment').val('<?= $insuredInfoList->medicalTreatment ?>');
//        $('#tobacco').val('<?= $insuredInfoList->tobacco ?>');
//        $('#rapidWeight').val('<?= $insuredInfoList->rapidWeight ?>');
//        $('#preDisease').val('<?= $insuredInfoList->preDisease ?>');
//        $('#diagnosed').val('<?= $insuredInfoList->diagnosed ?>');
//        $('#hospitalized').val('<?= $insuredInfoList->hospitalized ?>');
//        $('#primaryBenefi1').val('<?= $insuredInfoList->primaryBenefi1 ?>');
//        $('#ownerotherBankrupcy').val('<?= $ownerInfoList->otherBankrupcy ?>');
//        $('#ownerotherSellPolicy').val('<?= $ownerInfoList->otherSellPolicy ?>');
//        $('#ownerotherLoanPayPolicy').val('<?= $ownerInfoList->otherLoanPayPolicy ?>');
//        $('#ownerotherPurchasingPolicy').val('<?= $ownerInfoList->otherPurchasingPolicy ?>');
//        $('#ownerotherPurposePolicy').val('<?= $ownerInfoList->otherPurposePolicy ?>');
});
    
</script>

<script type="text/javascript">
            $(document).ready(function(){
                $('#dob').datepicker({dateFormat:'yy-mm-dd'});
                $('#created_at').datepicker({dateFormat:'yy-mm-dd'});
                $('#updated_at').datepicker({dateFormat:'yy-mm-dd'});
                $('#driverIssueDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#driverExpDate').datepicker({dateFormat:'yy-mm-dd'});
            });
</script>

<form id='editForm' method='post' action='<?php echo base_url() . "admin/lifeApplication_admin_list/update_submit/" . $insuredInfoList->id; ?>' >
       
    <input type="hidden" name="insuredId" value="<?php echo $insuredId ?>"/>
    <?php if($insuredInfoList->who == "self") { //in case SELF ?>
    <input type="hidden" name="who" value="self"/>
    <?php }else{ ?>
    <input type="hidden" name="who" vlaue="other"/>
    <?php } ?>
    
    <div id="tab_data" style="display:block">

            <table class="form">

                <tr>
                    <td bgcolor="gray">INSURED PERSON INFORMATION</td>
                    <td>(Insured Person)</td>
                    <td>Status</td>
                    <td>
                        <input type="radio" name="status" value="Issued" <?php if($insuredInfoList->status == 'Issued'){?>checked<?php }?>>Issued</input>
                        <input type="radio" name="status" value="Incomplete" <?php if($insuredInfoList->status == 'Incomplete'){?>checked<?php }?>>Incomplete</input>
                        <input type="radio" name="status" value="Pending" <?php if($insuredInfoList->status == 'Pending'){?>checked<?php }?>>Pending</input>
                    </td>
               </tr>               
                <tr>
                    <td>ID:</td>
                    <td><input name='id' id='id' value='<?= $insuredInfoList->id ?>' disabled="disabled"/></td>
                    <td>Self / Other:</td>
                    <?php if (!$ownerInfoList) {//self 일때?>
                    <td><input name='who' id='who' value='<?= $insuredInfoList->who ?>' disabled="disabled"/></td>                    
                    <?php }else{ //other 일때?>
                    <td><input name='who' id='who' value='<?= $ownerInfoList->who ?>' disabled="disabled"/></td>                    
                    <?php } ?>
                </tr>
                <tr>
                    <td>Create Date:</td>
                    <td><input name='created_at' id='created_at'  value='<?= $insuredInfoList->created_at ?>'/></td>
                    <td>Update Date:</td>
                    <td><input name='updated_at' id='updated_at'  value='<?= $insuredInfoList->updated_at ?>'/></td>
               </tr>
                
               <tr>
                    <td>Last Name:</td>
                    <td><input name='ownerlastName' id='ownerlastName'  value='<?= $insuredInfoList->lastName ?>'/></td>
                    <td>First Name:</td>
                    <td><input name='ownerfirstName' id='ownerfirstName'  value='<?= $insuredInfoList->firstName ?>'/></td>
               </tr>
               <tr>
                    <td>Middle Name:</td>
                    <td><input name='ownermiddleName' id='ownermiddleName'  value='<?= $insuredInfoList->middleName ?>'/></td>
                    <td>Relation to Insured:</td>
                    <td><input name='ownerrelateToInsured' id='ownerrelateToInsured'  value='<?= $insuredInfoList->relateToInsured ?>'/></td>
               </tr>
               <tr>
                    <td>Email:</td>
                    <td><input name='owneremail' id='owneremail'  value='<?= $insuredInfoList->email ?>'/></td>
                    <td>Tel:</td>
                    <td><input name='ownertel' id='ownertel'  value='<?= $insuredInfoList->tel ?>'/></td>
               </tr>
                <tr>
                    <td>Address:</td>
                    <td><input name='owneraddress' id='owneraddress'  value='<?= $insuredInfoList->address ?>'/></td>
                    <td>Lived in this address for years:</td>
                    <td><input name='owneraddrYears' id='owneraddrYears'  value='<?= $insuredInfoList->addrYears ?>'/></td>
               </tr>
               <tr>
                    <td>BOD:</td>
                    <td><input name='ownerdob' id='ownerdob'  value='<?= $insuredInfoList->dob ?>'/></td>
                    <td>Social Security No:</td>
                    <td><input name='ownerssn' id='ownerssn'  value='<?= $insuredInfoList->ssn ?>'/></td>
               </tr>
                <tr>
                    <td>Driver License/State ID No.:</td>
                    <td><input name='ownerdriverNo' id='ownerdriverNo'  value='<?= $insuredInfoList->driverNo ?>'/></td>
                    <td>State:</td>
                    <td><input name='ownerdriverState' id='ownerdriverState'  value='<?= $insuredInfoList->driverState ?>'/></td>
               </tr>               
               <tr>
                    <td>Issue Date:</td>
                    <td><input name='ownerdriverIssueDate' id='ownerdriverIssueDate'  value='<?= $insuredInfoList->driverIssueDate ?>'/></td>
                    <td>Exp. Date:</td>
                    <td><input name='ownerdriverExpDate' id='ownerdriverExpDate'  value='<?= $insuredInfoList->driverExpDate ?>'/></td>
               </tr>
               <tr>
                    <td>citizenship:(change to select)</td>
                    <td><input name='ownercitizenship' id='ownercitizenship'  value='<?= $insuredInfoList->citizenship ?>'/></td>
                    <td>birthPlace:</td>
                    <td><input name='ownerbirthPlace' id='ownerbirthPlace'  value='<?= $insuredInfoList->birthPlace ?>'/></td>
               </tr>
               <tr>
                    <td>Occupation:</td>
                    <td><input name='owneroccupation' id='owneroccupation'  value='<?= $insuredInfoList->occupation ?>'/></td>
                    <td>Title:</td>
                    <td><input name='owneroccupationTitle' id='owneroccupationTitle'  value='<?= $insuredInfoList->occupationTitle ?>'/></td>
               </tr>
               <tr>
                    <td>Are you a a currently full-time member of Armed Forces?:</td>
                    <td>
                        <input type="radio" name="ownerarmedForce" value="yes" <?php if($insuredInfoList->armedForce == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="ownerarmedForce" value="no" <?php if($insuredInfoList->armedForce == 'no'){?>checked<?php }?>>No</input>
                    
                    </td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <td>Do you have any other existing life insurance policies?:</td>
                    <td>
                        <input type="radio" name="ownerexisting" value="yes" <?php if($insuredInfoList->existing == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="ownerexisting" value="no" <?php if($insuredInfoList->existing == 'no'){?>checked<?php }?>>No</input>
                    
                    </td>
                    <td>If yes, Name of company</td>
                    <td><input name='owneryesCompany' id='owneryesCompany'  value='<?= $insuredInfoList->yesCompany ?>'/></td>
               </tr>
               <tr>
                    <td>amount</td>
                    <td><input name='owneryesAmount' id='owneryesAmount'  value='<?= $insuredInfoList->yesAmount ?>'/></td>
                    <td>Will this policy cause termination, replacement or change of any existing policy (does not include employer provided policies)?:</td>
                    <td>
                        <input type="radio" name="ownerreplacementChange" value="yes" <?php if($insuredInfoList->replacementChange == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="ownerreplacementChange" value="no" <?php if($insuredInfoList->replacementChange == 'no'){?>checked<?php }?>>No</input>
                    
                    </td>
               </tr>
               <tr>
                    <td>Health & Life Style Questions</td>
                    <td>(INSURED PERSON)</td><td></td><td></td>
               </tr>
               <tr>
                    <td>Have you recently had a driver's license suspended, revoked or restricted?:</td>
                    <td>
                        <input type="radio" name="driverRevoked" value="yes" <?php if($insuredInfoList->driverRevoked == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="driverRevoked" value="no" <?php if($insuredInfoList->driverRevoked == 'no'){?>checked<?php }?>>No</input>
                    </td>
                    <td>Have you recently been convicted of, or pleaded guilty to, reckless or negligent driving or driving under the influence of alcohol or drugs?:</td>
                    <td><input type="radio" name="convict" value="yes" <?php if($insuredInfoList->convict == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="convict" value="no" <?php if($insuredInfoList->convict == 'no'){?>checked<?php }?>>No</input>
                    </td>
               </tr>
               <tr>
                    <td>Have you recently been disabled for two or more weeks?:</td>
                    <td>
                        <input type="radio" name="disabled" value="yes" <?php if($insuredInfoList->disabled == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="disabled" value="no" <?php if($insuredInfoList->disabled == 'no'){?>checked<?php }?>>No</input>
                    </td>
                    <td>Have you ever applied for a life or health insurance and been declined?:</td>
                    <td>
                        <input type="radio" name="healthDeclined" value="yes" <?php if($insuredInfoList->healthDeclined == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="healthDeclined" value="no" <?php if($insuredInfoList->healthDeclined == 'no'){?>checked<?php }?>>No</input>
                    </td>
               </tr>
               <tr>
                    <td>Have you ever been convicted of, or plead guilty or no contest to, a felony, or are current felony charges pending?:</td>
                    <td>
                        <input type="radio" name="felonyPending" value="yes" <?php if($insuredInfoList->felonyPending == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="felonyPending" value="no" <?php if($insuredInfoList->felonyPending == 'no'){?>checked<?php }?>>No</input>
                    </td>
                    <td>Do you ever plan to travel for an extended period or reside in foreign countries?:</td>
                    <td>
                        <input type="radio" name="travel" value="yes" <?php if($insuredInfoList->travel == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="travel" value="no" <?php if($insuredInfoList->travel == 'no'){?>checked<?php }?>>No</input>
                    </td>
               </tr>
               
               <tr>
                    <td>Have you recently piloted any kind or aircraft or plan to do so?:</td>
                    <td><input type="radio" name="aircraft" value="yes" <?php if($insuredInfoList->aircraft == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="aircraft" value="no" <?php if($insuredInfoList->aircraft == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>Have you recently been involved in or plan to engage in motor racing, underwater diving, skydiving, ballooning, hang gliding, parachuting or other potentially hazardous sports or hobbies? :</td>
                    <td><input type="radio" name="skydiving" value="yes" <?php if($insuredInfoList->skydiving == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="skydiving" value="no" <?php if($insuredInfoList->skydiving == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               
               <tr>
                    <td>Have you ever received medical treatment or been advised by a physician to reduce or discontinue the use of alcohol or prescribed or non-prescribed drugs? :</td>
                    <td><input type="radio" name="medicalTreatment" value="yes" <?php if($insuredInfoList->medicalTreatment == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="medicalTreatment" value="no" <?php if($insuredInfoList->medicalTreatment == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>Do you use tobacco or nicotine products? :</td>
                    <td><input type="radio" name="tobacco" value="yes" <?php if($insuredInfoList->tobacco == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="tobacco" value="no" <?php if($insuredInfoList->tobacco == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               
               <tr>                    
                    <td>Have you recently experienced rapid weight gain/loss?:</td>
                    <td><input type="radio" name="rapidWeight" value="yes" <?php if($insuredInfoList->rapidWeight == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="rapidWeight" value="no" <?php if($insuredInfoList->rapidWeight == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>Do you have a pre-existing heart condition or disease; or experienced stroke, or had cancer? :</td>
                    <td><input type="radio" name="preDisease" value="yes" <?php if($insuredInfoList->preDisease == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="preDisease" value="no" <?php if($insuredInfoList->preDisease == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               
               <tr>                    
                    <td>Within the past 10 years, have you been diagnosed or treated for Acquired Immune Deficiency Syndrome (AIDS) or AIDS-Related Complex (ARC) by a member of the medical profession? :</td>
                    <td>
                        <input type="radio" name="diagnosed" value="yes" <?php if($insuredInfoList->diagnosed == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="diagnosed" value="no" <?php if($insuredInfoList->diagnosed == 'no'){?>checked<?php }?>>No</input>
                    </td>
                    <td>Have you recently been hospitalized? :</td>
                    <td><input type="radio" name="hospitalized" value="yes" <?php if($insuredInfoList->hospitalized == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="hospitalized" value="no" <?php if($insuredInfoList->hospitalized == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               
               
               <?php if ($insuredInfoList->who == 'self'){ ?>  
               
               <tr>
                    <td>Financial Information & Suitability</td>
                    <td>(INSURED PERSON)</td><td></td><td></td>
               </tr>    
               
               <tr>
                    <td>Annual Wage & Salary:</td>
                    <td><input name='selfAnnual' id='selfAnnual'  value='<?= $insuredInfoList->selfAnnual ?>'/></td>
                    <td>Annual Household Income:</td>
                    <td><input name='selfHouseIncome' id='selfHouseIncome'  value='<?= $insuredInfoList->selfHouseIncome ?>'/></td>
               </tr>
               
               <tr>
                    <td>Annual Additional Income:</td>
                    <td><input name='selfAdditionalIncome' id='selfAdditionalIncome'  value='<?= $insuredInfoList->selfAdditionalIncome ?>'/></td>
                    <td>Total Net Worth (All Assets):</td>
                    <td><input name='selfTotalNetWorth' id='selfTotalNetWorth'  value='<?= $insuredInfoList->selfTotalNetWorth ?>'/></td>
               </tr>
               
               <tr>
                    <td>Liquid Net Worth (All Assets minus properties):</td>
                    <td><input name='selfLiquidNetWorth' id='selfLiquidNetWorth'  value='<?= $insuredInfoList->selfLiquidNetWorth ?>'/></td>
                    <td>Purpose of the insurance policy:</td>
                    <td>
                        <input type="radio" name="selfPurposePolicy" value="Family protection/Income replacement" <?php if($insuredInfoList->selfPurposePolicy == 'Family protection/Income replacement'){?>checked<?php }?>>Family protection/Income replacement 
        <input type="radio" name="selfPurposePolicy" value="Mortgage/Debt payment" <?php if($insuredInfoList->selfPurposePolicy == 'Mortgage/Debt payment'){?>checked<?php }?>>Mortgage/Debt payment 
        <input type="radio" name="selfPurposePolicy" value="Other" <?php if($insuredInfoList->selfPurposePolicy == 'Other'){?>checked<?php }?>>Other
        
                    
                    </td>
               </tr>
               
               <tr>
                    <td>Have you recently filed for bankruptcy? :</td>
                    <td>
                        <input type="radio" name="selfBankrupcy" value="yes" <?php if($insuredInfoList->selfBankrupcy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfBankrupcy" value="no" <?php if($insuredInfoList->selfBankrupcy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>Have you sold or plan to sell this policy to a life settlement provider? :</td>
                    <td>
                        <input type="radio" name="selfSellPolicy" value="yes" <?php if($insuredInfoList->selfSellPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfSellPolicy" value="no" <?php if($insuredInfoList->selfSellPolicy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               
               <tr>
                    <td>Do you plan to take out loan(s) to pay for this policy?:</td>
                    <td>
                        <input type="radio" name="selfLoanPayPolicy" value="yes" <?php if($insuredInfoList->selfLoanPayPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfLoanPayPolicy" value="no" <?php if($insuredInfoList->selfLoanPayPolicy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?:</td>
                    <td>
                        <input type="radio" name="selfPurchasingPolicy" value="yes" <?php if($insuredInfoList->selfPurchasingPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfPurchasingPolicy" value="no" <?php if($insuredInfoList->selfPurchasingPolicy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               
               <?php }else{ ?>
               
               <tr>
                    <td>Annual Wage & Salary:</td>
                    <td><input name='otherAnnual' id='otherAnnual'  value='<?= $insuredInfoList->otherAnnual ?>'/></td>
                    <td>Annual Household Income:</td>
                    <td><input name='otherHouseIncome' id='otherHouseIncome'  value='<?= $insuredInfoList->otherHouseIncome ?>'/></td>
               </tr>
               
               <tr>
                    <td>Annual Additional Income:</td>
                    <td><input name='otherAdditionalIncome' id='otherAdditionalIncome'  value='<?= $insuredInfoList->otherAdditionalIncome ?>'/></td>
                    <td>Total Net Worth (All Assets):</td>
                    <td><input name='otherTotalNetWorth' id='otherTotalNetWorth'  value='<?= $insuredInfoList->otherTotalNetWorth ?>'/></td>
               </tr>
               
               <tr>
                    <td>Liquid Net Worth (All Assets minus properties):</td>
                    <td><input name='otherLiquidNetWorth' id='otherLiquidNetWorth'  value='<?= $insuredInfoList->otherLiquidNetWorth ?>'/></td>
                    <td>Purpose of the insurance policy:</td>
                    <td>
                        <input type="radio" name="otherPurposePolicy" value="Family protection/Income replacement" <?php if($insuredInfoList->otherPurposePolicy == 'Family protection/Income replacement'){?>checked<?php }?>>Family protection/Income replacement 
        <input type="radio" name="otherPurposePolicy" value="Mortgage/Debt payment" <?php if($insuredInfoList->otherPurposePolicy == 'Mortgage/Debt payment'){?>checked<?php }?>>Mortgage/Debt payment 
        <input type="radio" name="otherPurposePolicy" value="Other" <?php if($insuredInfoList->otherPurposePolicy == 'Other'){?>checked<?php }?>>Other
        
                    </td>
               </tr>
               
               <tr>
                    <td>Have you recently filed for bankruptcy? :</td>
                    <td>
                        <input type="radio" name="otherBankrupcy" value="yes" <?php if($insuredInfoList->otherBankrupcy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherBankrupcy" value="no" <?php if($insuredInfoList->otherBankrupcy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>Have you sold or plan to sell this policy to a life settlement provider? :</td>
                    <td>
                        <input type="radio" name="otherSellPolicy" value="yes" <?php if($insuredInfoList->otherSellPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherSellPolicy" value="no" <?php if($insuredInfoList->otherSellPolicy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               
               <tr>
                    <td>Do you plan to take out loan(s) to pay for this policy?:</td>
                    <td>
                        <input type="radio" name="otherLoanPayPolicy" value="yes" <?php if($insuredInfoList->otherLoanPayPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherLoanPayPolicy" value="no" <?php if($insuredInfoList->otherLoanPayPolicy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?:</td>
                    <td>
                        <input type="radio" name="otherPurchasingPolicy" value="yes" <?php if($insuredInfoList->otherPurchasingPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherPurchasingPolicy" value="no" <?php if($insuredInfoList->otherPurchasingPolicy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               
               
               <?php } ?>
               
               <tr>
                    <td>BENEFICIARY INFORMATION</td>
                    <td>(INSURED PERSON)</td><td></td><td></td>
               </tr>
               <tr>
                    <td>1</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>First Name:</td>
                    <td><input name='firstNameBenefi1' id='firstNameBenefi1'  value='<?= $insuredInfoList->firstNameBenefi1 ?>'/></td>
                    <td>Last Name:</td>
                    <td><input name='lastNameBenefi1' id='lastNameBenefi1'  value='<?= $insuredInfoList->lastNameBenefi1 ?>'/></td>
               </tr>
               
               <tr>
                    <td>Date of Birth: </td>
                    <td><input name='DOBBenefi1' id='DOBBenefi1'  value='<?= $insuredInfoList->DOBBenefi1 ?>'/></td>
                    <td>SSN#:</td>
                    <td><input name='ssBenefi1' id='ssBenefi1'  value='<?= $insuredInfoList->ssBenefi1 ?>'/></td>
               </tr>
               
               <tr>
                    <td>Priorty: </td>
                    <td>
                        <input type="radio" name="primaryBenefi1" value="Primary" <?php if($insuredInfoList->primaryBenefi1 == 'Primary'){?>checked<?php }?>>Primary
        <input type="radio" name="primaryBenefi1" value="Secondary" <?php if($insuredInfoList->primaryBenefi1 == 'Secondary'){?>checked<?php }?>>Secondary 
        
                    </td>
                    <td>Portion:</td>
                    <td><input name='portionBenefi1' id='portionBenefi1'  value='<?= $insuredInfoList->portionBenefi1 ?>'/></td>
               </tr>
               
               <tr>
                    <td>2</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>First Name:</td>
                    <td><input name='firstNameBenefi2' id='firstNameBenefi2'  value='<?= $insuredInfoList->firstNameBenefi2 ?>'/></td>
                    <td>Last Name:</td>
                    <td><input name='lastNameBenefi2' id='lastNameBenefi2'  value='<?= $insuredInfoList->lastNameBenefi2 ?>'/></td>
               </tr>
               
               <tr>
                    <td>Date of Birth: </td>
                    <td><input name='DOBBenefi2' id='DOBBenefi2'  value='<?= $insuredInfoList->DOBBenefi2 ?>'/></td>
                    <td>SSN#:</td>
                    <td><input name='ssBenefi2' id='ssBenefi2'  value='<?= $insuredInfoList->ssBenefi2 ?>'/></td>
               </tr>
               
               <tr>
                    <td>Priorty: </td>
                    <td>
                        <input type="radio" name="primaryBenefi2" value="Primary" <?php if($insuredInfoList->primaryBenefi2 == 'Primary'){?>checked<?php }?>>Primary
                        <input type="radio" name="primaryBenefi2" value="Secondary" <?php if($insuredInfoList->primaryBenefi2 == 'Secondary'){?>checked<?php }?>>Secondary 
                    </td>
                    <td>Portion:</td>
                    <td><input name='portionBenefi2' id='portionBenefi2'  value='<?= $insuredInfoList->portionBenefi2 ?>'/></td>
               </tr>
               
               <tr>
                    <td>3</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>First Name:</td>
                    <td><input name='firstNameBenefi3' id='firstNameBenefi3'  value='<?= $insuredInfoList->firstNameBenefi3 ?>'/></td>
                    <td>Last Name:</td>
                    <td><input name='lastNameBenefi3' id='lastNameBenefi3'  value='<?= $insuredInfoList->lastNameBenefi3 ?>'/></td>
               </tr>
               
               <tr>
                    <td>Date of Birth: </td>
                    <td><input name='DOBBenefi3' id='DOBBenefi3'  value='<?= $insuredInfoList->DOBBenefi3 ?>'/></td>
                    <td>SSN#:</td>
                    <td><input name='ssBenefi3' id='ssBenefi3'  value='<?= $insuredInfoList->ssBenefi3 ?>'/></td>
               </tr>
               
               <tr>
                    <td>Priorty: </td>
                    <td>
                        <input type="radio" name="primaryBenefi3" value="Primary" <?php if($insuredInfoList->primaryBenefi3 == 'Primary'){?>checked<?php }?>>Primary
                        <input type="radio" name="primaryBenefi3" value="Secondary" <?php if($insuredInfoList->primaryBenefi3 == 'Secondary'){?>checked<?php }?>>Secondary 
        
                    </td>
                    <td>Portion:</td>
                    <td><input name='portionBenefi3' id='portionBenefi3'  value='<?= $insuredInfoList->portionBenefi3 ?>'/></td>
               </tr>
               
               <tr>
                    <td>4</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>First Name:</td>
                    <td><input name='firstNameBenefi4' id='firstNameBenefi4'  value='<?= $insuredInfoList->firstNameBenefi4 ?>'/></td>
                    <td>Last Name:</td>
                    <td><input name='lastNameBenefi4' id='lastNameBenefi4'  value='<?= $insuredInfoList->lastNameBenefi4 ?>'/></td>
               </tr>
               
               <tr>
                    <td>Date of Birth: </td>
                    <td><input name='DOBBenefi4' id='DOBBenefi4'  value='<?= $insuredInfoList->DOBBenefi4 ?>'/></td>
                    <td>SSN#:</td>
                    <td><input name='ssBenefi4' id='ssBenefi4'  value='<?= $insuredInfoList->ssBenefi4 ?>'/></td>
               </tr>
               
               <tr>
                    <td>Priorty: </td>
                    <td>
                        <input type="radio" name="primaryBenefi4" value="Primary" <?php if($insuredInfoList->primaryBenefi4 == 'Primary'){?>checked<?php }?>>Primary
                        <input type="radio" name="primaryBenefi4" value="Secondary" <?php if($insuredInfoList->primaryBenefi4 == 'Secondary'){?>checked<?php }?>>Secondary 
        
                    </td>
                    <td>Portion:</td>
                    <td><input name='portionBenefi4' id='portionBenefi4'  value='<?= $insuredInfoList->portionBenefi4 ?>'/></td>
               </tr>
               
               <tr>
                    <td>MEDICAL SCHEDULE</td>
                    <td>(INSURED PERSON)</td><td></td><td></td>
               </tr>
               
               <tr>
                    <td>First choice Date:</td>
                    <td><input name='medicalFirstDate' id='medicalFirstDate'  value='<?= $insuredInfoList->medicalFirstDate ?>'/></td>
                    <td>First choice Time:</td>
                    <td><input name='medicalFirstTime' id='medicalFirstTime'  value='<?= $insuredInfoList->medicalFirstTime ?>'/></td>
               </tr>
               
               <tr>
                    <td>Second choice Date:</td>
                    <td><input name='medicalSecondDate' id='medicalSecondDate'  value='<?= $insuredInfoList->medicalSecondDate ?>'/></td>
                    <td>Second choice Time:</td>
                    <td><input name='medicalSecondTime' id='medicalSecondTime'  value='<?= $insuredInfoList->medicalSecondTime ?>'/></td>
               </tr>
               
               <tr>
                    <td>Medical exam will take place at:</td>
                    <td><input name='medicalVisitAddress' id='medicalVisitAddress'  value='<?= $insuredInfoList->medicalVisitAddress ?>'/></td>
                    <td></td>
                    <td></td>
               </tr>
               
               <?php if ($insuredInfoList->ownerId != "0") { ?>
               
               <tr>
                    <td bgcolor="gray">OWNER PERSON INFORMATION</td>
                    <td>(OWNER PERSON)</td><td></td><td></td>
               </tr>
               
               <tr>
                    <td>Last Name:</td>
                    <td><input name='insuredlastName' id='insuredlastName'  value='<?= $ownerInfoList->lastName ?>'/></td>
                    <td>First Name:</td>
                    <td><input name='insuredfirstName' id='insuredfirstName'  value='<?= $ownerInfoList->firstName ?>'/></td>
               </tr>
               <tr>
                    <td>Middle Name:</td>
                    <td><input name='insuredmiddleName' id='insuredmiddleName'  value='<?= $ownerInfoList->middleName ?>'/></td>
                    <td>Relation to Insured:</td>
                    <td><input name='insuredrelateToInsured' id='insuredrelateToInsured'  value='<?= $ownerInfoList->relateToInsured ?>'/></td>
               </tr>
                <tr>
                    <td>Address:</td>
                    <td><input name='insuredaddress' id='insuredaddress'  value='<?= $ownerInfoList->address ?>'/></td>
                    <td>Lived in this address for years:</td>
                    <td><input name='insuredaddrYears' id='insuredaddrYears'  value='<?= $ownerInfoList->addrYears ?>'/></td>
               </tr>
               <tr>
                    <td>Email:</td>
                    <td><input name='insuredemail' id='insuredemail'  value='<?= $ownerInfoList->email ?>'/></td>
                    <td>Tel:</td>
                    <td><input name='insuredtel' id='insuredtel'  value='<?= $ownerInfoList->tel ?>'/></td>
               </tr>
               <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="insuredgender" value="male" <?php if($ownerInfoList->gender == 'male'){?>checked<?php }?>><b><font color="#357EC7">Male</font></b>
                        <input type="radio" name="insuredgender" value="female" <?php if($ownerInfoList->gender == 'female'){?>checked<?php }?>><b><font color="#B93B8F">Female</font></b>
        
                    </td>
                    <td></td><td></td>
               </tr>
               <tr>
                    <td>BOD:</td>
                    <td><input name='insureddob' id='insureddob'  value='<?= $ownerInfoList->dob ?>'/></td>
                    <td>Social Security No:</td>
                    <td><input name='insuredssn' id='insuredssn'  value='<?= $ownerInfoList->ssn ?>'/></td>
               </tr>
                <tr>
                    <td>Driver License/State ID No.:</td>
                    <td><input name='insureddriverNo' id='insureddriverNo'  value='<?= $ownerInfoList->driverNo ?>'/></td>
                    <td>State:</td>
                    <td><input name='insureddriverState' id='insureddriverState'  value='<?= $ownerInfoList->driverState ?>'/></td>
               </tr>               
               <tr>
                    <td>Issue Date:</td>
                    <td><input name='insureddriverIssueDate' id='insureddriverIssueDate'  value='<?= $ownerInfoList->driverIssueDate ?>'/></td>
                    <td>Exp. Date:</td>
                    <td><input name='insureddriverExpDate' id='insureddriverExpDate'  value='<?= $ownerInfoList->driverExpDate ?>'/></td>
               </tr>
               <tr>
                    <td>citizenship:(change to select)</td>
                    <td>
                        <input type="radio" name="insuredcitizenship" value="USA" <?php if($ownerInfoList->citizenship == 'USA'){?>checked<?php }?>>U.S.A.
        <input type="radio" name="insuredcitizenship" value="Legal resident" <?php if($ownerInfoList->citizenship == 'Legal resident'){?>checked<?php }?>>Legal resident
        
                    </td>
                    <td>birthPlace:</td>
                    <td><input name='insuredbirthPlace' id='insuredbirthPlace'  value='<?= $ownerInfoList->birthPlace ?>'/></td>
               </tr>
               <tr>
                    <td>Occupation:</td>
                    <td><input name='insuredoccupation' id='insuredoccupation'  value='<?= $ownerInfoList->occupation ?>'/></td>
                    <td>Title:</td>
                    <td><input name='insuredoccupationTitle' id='insuredoccupationTitle'  value='<?= $ownerInfoList->occupationTitle ?>'/></td>
               </tr>
               <tr>
                    <td>Are you a a currently full-time member of Armed Forces?:</td>
                    <td>
                        <input type="radio" name="insuredarmedForce" value="yes" <?php if($ownerInfoList->armedForce == 'yes'){?>checked<?php }?>>Yes</input>
                        <input type="radio" name="insuredarmedForce" value="no" <?php if($ownerInfoList->armedForce == 'no'){?>checked<?php }?>>No</input>
                    </td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <td>Do you have any other existing life insurance policies?:</td>
                    <td><input type="radio" name="insuredexisting" value="yes" <?php if($ownerInfoList->existing == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="insuredexisting" value="no" <?php if($ownerInfoList->existing == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>If yes, Name of company</td>
                    <td><input name='insuredyesCompany' id='insuredyesCompany'  value='<?= $ownerInfoList->yesCompany ?>'/></td>
               </tr>
               <tr>
                    <td>amount</td>
                    <td><input name='insuredyesAmount' id='insuredyesAmount'  value='<?= $ownerInfoList->yesAmount ?>'/></td>
                    <td>Will this policy cause termination, replacement or change of any existing policy (does not include employer provided policies)?:</td>
                    <td><input type="radio" name="insuredreplacementChange" value="yes" checked>Yes</input>
        <input type="radio" name="insuredreplacementChange" value="no">No</input>
        
                    </td>
               </tr>
               
               <tr>
                    <td>Financial Information & Suitability</td>
                    <td>(Owner PERSON)</td><td></td><td></td>
               </tr>               
               
               <tr>
                    <td>Annual Wage & Salary:</td>
                    <td><input name='insuredotherAnnual' id='insuredotherAnnual'  value='<?= $ownerInfoList->otherAnnual ?>'/></td>
                    <td>Annual Household Income:</td>
                    <td><input name='insuredotherHouseIncome' id='insuredotherHouseIncome'  value='<?= $ownerInfoList->otherHouseIncome ?>'/></td>
               </tr>
               
               <tr>
                    <td>Annual Additional Income:</td>
                    <td><input name='insuredotherAdditionalIncome' id='insuredotherAdditionalIncome'  value='<?= $ownerInfoList->otherAdditionalIncome ?>'/></td>
                    <td>Total Net Worth (All Assets):</td>
                    <td><input name='insuredotherTotalNetWorth' id='insuredotherTotalNetWorth'  value='<?= $ownerInfoList->otherTotalNetWorth ?>'/></td>
               </tr>
               
               <tr>
                    <td>Liquid Net Worth (All Assets minus properties):</td>
                    <td><input name='insuredotherLiquidNetWorth' id='insuredotherLiquidNetWorth'  value='<?= $ownerInfoList->otherLiquidNetWorth ?>'/></td>
                    <td>Purpose of the insurance policy:</td>
                    <td>
                        <input type="radio" name="insuredotherPurposePolicy" value="Family protection/Income replacement" <?php if($ownerInfoList->otherPurposePolicy == 'Family protection/Income replacement'){?>checked<?php }?>>Family protection/Income replacement 
        <input type="radio" name="insuredotherPurposePolicy" value="Mortgage/Debt payment" <?php if($ownerInfoList->otherPurposePolicy == 'Mortgage/Debt payment'){?>checked<?php }?>>Mortgage/Debt payment 
        <input type="radio" name="insuredotherPurposePolicy" value="Other" <?php if($ownerInfoList->otherPurposePolicy == 'Other'){?>checked<?php }?>>Other
        
                    </td>
               </tr>
               
               <tr>                        
                    <td>Have you recently filed for bankruptcy? :</td>
                    <td>
                        <input type="radio" name="insuredotherBankrupcy" value="yes" <?php if($ownerInfoList->otherBankrupcy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="insuredotherBankrupcy" value="no" <?php if($ownerInfoList->otherBankrupcy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>Have you sold or plan to sell this policy to a life settlement provider? :</td>
                    <td>
                        <input type="radio" name="insuredotherSellPolicy" value="yes" <?php if($ownerInfoList->otherSellPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="insuredotherSellPolicy" value="no" <?php if($ownerInfoList->otherSellPolicy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               
               <tr>
                    <td>Do you plan to take out loan(s) to pay for this policy?:</td>
                    <td>
                        <input type="radio" name="insuredotherLoanPayPolicy" value="yes" <?php if($ownerInfoList->otherLoanPayPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="insuredotherLoanPayPolicy" value="no" <?php if($ownerInfoList->otherLoanPayPolicy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
                    <td>Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?:</td>
                    <td>
                        <input type="radio" name="insuredotherPurchasingPolicy" value="yes" <?php if($ownerInfoList->otherPurchasingPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="insuredotherPurchasingPolicy" value="no" <?php if($ownerInfoList->otherPurchasingPolicy == 'no'){?>checked<?php }?>>No</input>
        
                    </td>
               </tr>
               <?php } ?>
                <tr>
                    <td colspan="2"><input type="submit" value="submit" /></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
    </div>
 </form>


