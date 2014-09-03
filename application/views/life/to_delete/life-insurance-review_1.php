

<div id="sub_contentscontainer">
    
    
    
<div class="mainbody">Not sure what to fill out? No Problem! InsFilings guarantees an error-proof review process that will ensure your application is in accordance with insurance regulation and state compliant.</div>
<p><span class="subtitle">Review & Submit</span></p>
<div class="mainbody">Please review your order. You may edit information by clicking the 'Edit' button located to the left of the section you wish to edit. When you are ready, please read and accept the “Terms of Use” at the bottom of the page, then click 'Continue' to submit your order. <br></br>
    <br>    
    <p><span class="subtitle_s">LIFE INSURANCE COVERAGE INFORMATION</span></p><br>    
    <p><span class="subtitle_s">INSURED PERSON INFORMATION</span>
        <a href="<?php echo base_url();?>admin/lifeApplication_list/owner_edit/<?php echo $ownerId?>">edit</a>
    </p>    
    <div class="mainbody">        
        
        THIS LIFE INSURANCE APPLICATION IS BASED ON THE LIFE OF : 
            <?php echo $lifeApplicationList->who ?><br>
        Last Name :
            <?php echo $lifeApplicationList->lastName ?>
        First Name :
            <?php echo $lifeApplicationList->firstName ?>
        MI :
            <?php echo $lifeApplicationList->middleName ?> <br>
        Address :
            <?php echo $lifeApplicationList->address ?><br>
        I lived in this address for :
            <?php echo $lifeApplicationList->addrYears ?><br>
        Tel :
            <?php echo $lifeApplicationList->tel ?><br>
        Email :
            <?php echo $lifeApplicationList->email ?><br>
        Gender :
            <?php echo $lifeApplicationList->gender ?><br>
        DOB :
            <?php echo $lifeApplicationList->dob ?><br>
        Social Security No. 
            <?php echo $lifeApplicationList->ssn ?><br>
        Driver License/State ID No.
            <?php echo $lifeApplicationList->driverNo ?><br>
        State :
            <?php echo $lifeApplicationList->driverState ?><br>
        Issue Date :
            <?php echo $lifeApplicationList->driverIssueDate ?><br>
        Exp. Date :
            <?php echo $lifeApplicationList->driverExpDate ?><br>
        Citizenship :
            <?php echo $lifeApplicationList->citizenship ?><br>
        Birth place :
            <?php echo $lifeApplicationList->birthPlace ?><br>
        Occupation :
            <?php echo $lifeApplicationList->occupation ?><br>
        Title :
            <?php echo $lifeApplicationList->occupationTitle ?><br>
        Employer Name :
            <?php echo $lifeApplicationList->employerName ?><br>
        Employer Address :
            <?php echo $lifeApplicationList->employerAddr ?><br>
        Are you a a currently full-time member of Armed Forces? 
            <?php echo $lifeApplicationList->armedForce ?><br>
        Do you have any other existing life insurance policies?
            <?php echo $lifeApplicationList->existing ?><br>
        Will this policy cause termination, replacement or change of any existing policy (does not include employer provided policies)?
            <?php echo $lifeApplicationList->replacementChange ?><br>
        
    </div>
    <?php if ($lifeApplicationList->who == 'self'){ ?>
        <p><span class="subhed_h3">Health & Life Style Questions</span></p>  
        Have you recently had a driver's license suspended, revoked or restricted?
            <?php echo $lifeApplicationList->driverRevoked ?><br>
        Have you recently been convicted of, or pleaded guilty to, reckless or negligent driving or driving under the influence of alcohol or drugs?
            <?php echo $lifeApplicationList->convict ?><br>
        Have you recently been disabled for two or more weeks?
            <?php echo $lifeApplicationList->disabled ?><br>
        Have you ever applied for a life or health insurance and been declined? 
            <?php echo $lifeApplicationList->healthDeclined ?><br>
        Have you ever been convicted of, or plead guilty or no contest to, a felony, or are current felony charges pending?
            <?php echo $lifeApplicationList->felonyPending ?><br>
        Do you ever plan to travel for an extended period or reside in foreign countries?
            <?php echo $lifeApplicationList->travel ?><br>
        Have you recently piloted any kind or aircraft or plan to do so?
            <?php echo $lifeApplicationList->aircraft ?><br>
        Have you recently been involved in or plan to engage in motor racing, underwater diving, skydiving, ballooning, hang gliding, parachuting or other potentially hazardous sports or hobbies? 
            <?php echo $lifeApplicationList->skydiving ?><br>
        Have you ever received medical treatment or been advised by a physician to reduce or discontinue the use of alcohol or prescribed or non-prescribed drugs?
            <?php echo $lifeApplicationList->medicalTreatment ?><br>
        Do you use tobacco or nicotine products?
            <?php echo $lifeApplicationList->tobacco ?><br>
        Have you recently experienced rapid weight gain/loss?
            <?php echo $lifeApplicationList->rapidWeight ?><br>
        Do you have a pre-existing heart condition or disease; or experienced stroke, or had cancer?
            <?php echo $lifeApplicationList->preDisease ?><br>
        Within the past 10 years, have you been diagnosed or treated for Acquired Immune Deficiency Syndrome (AIDS) or AIDS-Related Complex (ARC) by a member of the medical profession?
            <?php echo $lifeApplicationList->diagnosed ?><br>
        Have you recently been hospitalized? 
            <?php echo $lifeApplicationList->hospitalized ?><br></br>
        
        <p><span class="subhed_h3">Financial Information & Suitability</span></p>  
        Annual Wage & Salary
            <?php echo $lifeApplicationList->selfAnnual ?><br>
        Annual Household Income
            <?php echo $lifeApplicationList->selfHouseIncome ?><br>
        Annual Additional Income
            <?php echo $lifeApplicationList->selfAdditionalIncome ?><br>
        Total Net Worth (All Assets)
            <?php echo $lifeApplicationList->selfTotalNetWorth ?><br>
        Liquid Net Worth (All Assets minus properties)
            <?php echo $lifeApplicationList->selfLiquidNetWorth ?><br>
        Purpose of the insurance policy:
            <?php echo $lifeApplicationList->selfPurposePolicy ?><br>
        Have you recently filed for bankruptcy?
            <?php echo $lifeApplicationList->selfBankrupcy ?><br>
        Have you sold or plan to sell this policy to a life settlement provider? 
            <?php echo $lifeApplicationList->selfSellPolicy ?><br>
        Do you plan to take out loan(s) to pay for this policy?
            <?php echo $lifeApplicationList->selfLoanPayPolicy ?><br>
        Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
            <?php echo $lifeApplicationList->selfPurchasingPolicy ?><br></br>  
        
        <?php }else{ ?>
            
        <p><span class="subhed_h3">Financial Information & Suitability</span></p>  
        Annual Wage & Salary
            <?php echo $lifeApplicationList->otherAnnual ?><br>
        Annual Household Income
            <?php echo $lifeApplicationList->otherHouseIncome ?><br>
        Annual Additional Income
            <?php echo $lifeApplicationList->otherAdditionalIncome ?><br>
        Total Net Worth (All Assets)
            <?php echo $lifeApplicationList->otherTotalNetWorth ?><br>
        Liquid Net Worth (All Assets minus properties)
            <?php echo $lifeApplicationList->otherLiquidNetWorth ?><br>
        Purpose of the insurance policy:
            <?php echo $lifeApplicationList->otherPurposePolicy ?><br>
        Have you recently filed for bankruptcy?
            <?php echo $lifeApplicationList->otherBankrupcy ?><br>
        Have you sold or plan to sell this policy to a life settlement provider? 
            <?php echo $lifeApplicationList->otherSellPolicy ?><br>
        Do you plan to take out loan(s) to pay for this policy?
            <?php echo $lifeApplicationList->otherLoanPayPolicy ?><br>
        Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
            <?php echo $lifeApplicationList->otherPurchasingPolicy ?><br></br>
         
        <p><span class="subtitle_s">OWNER PERSON INFORMATION</span></p>
        
        Owner's relation to the Insured is :
            <?php foreach($insuredInfoList as $iil)
            { 
            echo $iil['relateToInsured']; ?> <br>
        Last Name :
            <?php echo $iil['lastName']; ?>
        First Name :
            <?php echo $iil['firstName']; ?>
        MI :
            <?php echo $iil['middleName']; ?> <br>
        Address :
            <?php echo $iil['address']; ?><br>
        I lived in this address for :
            <?php echo $iil['addrYears']; ?><br>
        Tel :
            <?php echo $iil['tel']; ?><br>
        Email :
            <?php echo $iil['email']; ?><br>
        Gender :
            <?php echo $iil['gender']; ?><br>
        DOB :
            <?php echo $iil['dob']; ?><br>
        Social Security No. 
            <?php echo $iil['ssn']; ?><br>
        Driver License/State ID No.
            <?php echo $iil['driverNo']; ?><br>
        State :
            <?php echo $iil['driverState']; ?><br>
        Issue Date :
            <?php echo $iil['driverIssueDate']; ?><br>
        Exp. Date :
            <?php echo $iil['driverExpDate']; ?><br>
        Citizenship :
            <?php echo $iil['citizenship']; ?><br>
        Birth place :
            <?php echo $iil['birthPlace']; ?><br>
        Occupation :
            <?php echo $iil['occupation']; ?><br>
        Title :
            <?php echo $iil['occupationTitle']; ?><br>
        Employer Name :
            <?php echo $iil['employerName']; ?><br>
        Employer Address :
            <?php echo $iil['employerAddr']; ?><br>
        Are you a a currently full-time member of Armed Forces? 
            <?php echo $iil['armedForce']; ?><br>
        Do you have any other existing life insurance policies?
            <?php echo $iil['existing']; ?><br>
        Will this policy cause termination, replacement or change of any existing policy (does not include employer provided policies)?
            <?php echo $iil['replacementChange']; ?><br>    
           
        <p><span class="subhed_h3">Health & Life Style Questions</span></p>
        
        Have you recently had a driver's license suspended, revoked or restricted?
            <?php echo $iil['driverRevoked']; ?><br>
        Have you recently been convicted of, or pleaded guilty to, reckless or negligent driving or driving under the influence of alcohol or drugs?
            <?php echo $iil['convict']; ?><br>
        Have you recently been disabled for two or more weeks?
            <?php echo $iil['disabled']; ?><br>
        Have you ever applied for a life or health insurance and been declined? 
            <?php echo $iil['healthDeclined']; ?><br>
        Have you ever been convicted of, or plead guilty or no contest to, a felony, or are current felony charges pending?
            <?php echo $iil['felonyPending']; ?><br>
        Do you ever plan to travel for an extended period or reside in foreign countries?
            <?php echo $iil['travel']; ?><br>
        Have you recently piloted any kind or aircraft or plan to do so?
            <?php echo $iil['aircraft']; ?><br>
        Have you recently been involved in or plan to engage in motor racing, underwater diving, skydiving, ballooning, hang gliding, parachuting or other potentially hazardous sports or hobbies? 
            <?php echo $iil['skydiving']; ?><br>
        Have you ever received medical treatment or been advised by a physician to reduce or discontinue the use of alcohol or prescribed or non-prescribed drugs?
            <?php echo $iil['medicalTreatment']; ?><br>
        Do you use tobacco or nicotine products?
            <?php echo $iil['tobacco']; ?><br>
        Have you recently experienced rapid weight gain/loss?
            <?php echo $iil['rapidWeight']; ?><br>
        Do you have a pre-existing heart condition or disease; or experienced stroke, or had cancer?
            <?php echo $iil['preDisease']; ?><br>
        Within the past 10 years, have you been diagnosed or treated for Acquired Immune Deficiency Syndrome (AIDS) or AIDS-Related Complex (ARC) by a member of the medical profession?
            <?php echo $iil['diagnosed']; ?><br>
        Have you recently been hospitalized? 
            <?php echo $iil['hospitalized']; ?><br>
        
        <p><span class="subhed_h3">Financial Information & Suitability</span></p>
    
        Annual Wage & Salary
            <?php echo $iil['otherAnnual']; ?><br>
        Annual Household Income
            <?php echo $iil['otherHouseIncome']; ?><br>
        Annual Additional Income
            <?php echo $iil['otherAdditionalIncome']; ?><br>
        Total Net Worth (All Assets)
            <?php echo $iil['otherTotalNetWorth']; ?><br>
        Liquid Net Worth (All Assets minus properties)
            <?php echo $iil['otherLiquidNetWorth']; ?><br>
        Purpose of the insurance policy:
            <?php echo $iil['otherPurposePolicy']; ?><br>
        Have you recently filed for bankruptcy?
            <?php echo $iil['otherBankrupcy']; ?><br>
        Have you sold or plan to sell this policy to a life settlement provider? 
            <?php echo $iil['otherSellPolicy']; ?><br>
        Do you plan to take out loan(s) to pay for this policy?
            <?php echo $iil['otherLoanPayPolicy']; ?><br>
        Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
            <?php echo $iil['otherPurchasingPolicy']; ?><br></br>
        
        <?php } ?>
            
    <?php } ?>
            
    <p><span class="subtitle_s">BENEFICIARY INFORMATION</span></p>
        <1><br>
        First Name : 
            <?php echo $lifeApplicationList->firstNameBenefi1 ?><br>
        Last Name :
            <?php echo $lifeApplicationList->lastNameBenefi1 ?><br>
        Date of Birth :
            <?php echo $lifeApplicationList->DOBBenefi1 ?><br>
        SSN# :
            <?php echo $lifeApplicationList->ssBenefi1 ?><br>
        Priorty :
            <?php echo $lifeApplicationList->primaryBenefi1 ?><br>
        Portion  :
            <?php echo $lifeApplicationList->portionBenefi1 ?><br>
        Relation :
            <?php echo $lifeApplicationList->relationBenefi1 ?><br></br>
        <2><br>
        First Name : 
            <?php echo $lifeApplicationList->firstNameBenefi2 ?><br>
        Last Name :
            <?php echo $lifeApplicationList->lastNameBenefi2 ?><br>
        Date of Birth :
            <?php echo $lifeApplicationList->DOBBenefi2 ?><br>
        SSN# :
            <?php echo $lifeApplicationList->ssBenefi2 ?><br>
        Priorty :
            <?php echo $lifeApplicationList->primaryBenefi2 ?><br>
        Portion  :
            <?php echo $lifeApplicationList->portionBenefi2 ?><br>
        Relation :
            <?php echo $lifeApplicationList->relationBenefi2 ?><br></br>
        <3><br>
        First Name : 
            <?php echo $lifeApplicationList->firstNameBenefi3 ?><br>
        Last Name :
            <?php echo $lifeApplicationList->lastNameBenefi3 ?><br>
        Date of Birth :
            <?php echo $lifeApplicationList->DOBBenefi3 ?><br>
        SSN# :
            <?php echo $lifeApplicationList->ssBenefi3 ?><br>
        Priorty :
            <?php echo $lifeApplicationList->primaryBenefi3 ?><br>
        Portion  :
            <?php echo $lifeApplicationList->portionBenefi3 ?><br>
        Relation :
            <?php echo $lifeApplicationList->relationBenefi3 ?><br></br>    
        <4><br>
        First Name : 
            <?php echo $lifeApplicationList->firstNameBenefi4 ?><br>
        Last Name :
            <?php echo $lifeApplicationList->lastNameBenefi4 ?><br>
        Date of Birth :
            <?php echo $lifeApplicationList->DOBBenefi4 ?><br>
        SSN# :
            <?php echo $lifeApplicationList->ssBenefi4 ?><br>
        Priorty :
            <?php echo $lifeApplicationList->primaryBenefi4 ?><br>
        Portion  :
            <?php echo $lifeApplicationList->portionBenefi4 ?><br>
        Relation :
            <?php echo $lifeApplicationList->relationBenefi4 ?><br></br>
            
    <p><span class="subtitle_s">MEDICAL SCHEDULE</span></p>
    
        First choice :
            <?php echo $lifeApplicationList->medicalFirstDate;?> &nbsp; &nbsp; <?php echo $lifeApplicationList->medicalFirstTime?><br>
        Second choice :
            <?php echo $lifeApplicationList->medicalSecondDate;?> &nbsp; &nbsp; <?php echo $lifeApplicationList->medicalSecondTime ?><br>
        Medical exam will take place at :
            <?php echo $lifeApplicationList->medicalVisitAddress ?><br></br>
        
   
    <form name="form" action="<?php echo base_url() . "admin/lifeApplication_list/receipt/".$ownerId; ?>" method="POST">
        
        <input type="hidden" name="ins_clinent_id" value="<?php echo $ins_client_id ?>"></input>    
        <input type="hidden" name="coverage" value="<?php echo $coverage ?>"></input>
        <input type="hidden" name="insuranceCompany" value="<?php echo $insuranceCompany ?>"></input>
        <input type="hidden" name="termPeriod" value="<?php echo $termPeriod ?>"></input>    
        <input type="hidden" name="ann" value="<?php echo $ann ?>"></input>
        <input type="hidden" name="semi" value="<?php echo $semi ?>"></input>
        <input type="hidden" name="quar" value="<?php echo $quar ?>"></input>
        <input type="hidden" name="month" value="<?php echo $month ?>"></input>
    
        My relation to the Insured on this policy is: <br></br>        

        <input type="submit" value="NEXT"/>

    </form>
</div>

