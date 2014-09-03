<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/uploadify/uploadify.css" />

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript">
    
    $(document).ready(function(){
        
        $('#dob').datepicker({dateFormat:'yy-mm-dd'});
        $('#driverIssueDate').datepicker({dateFormat:'yy-mm-dd'});
        $('#driverExpDate').datepicker({dateFormat:'yy-mm-dd'});

    });    

</script>

<div id="sub_contentscontainer">

<div id="breadcrumb">OWNER RESPONSIBLE PARTY - INSURED - BENEFICIARY - SCHEDULE MEDICAL - <span class="on">REVIEW&nbsp;&amp;&nbsp;COMPLETE</span></div>    
<div class="page_short_info">Not sure what to fill out? No Problem! InsFilings guarantees an error-proof review process that will ensure your application is in accordance with insurance regulation and state compliant.</div>
    
<div class="subtitle">Edit & Confirm</div>
    
    
    
<div class="subtitle_desc">You may edit information by retyping/adjusting any fields needed.</br> </div>

<div class="mainbody">
    
<form name="form" action="<?php echo base_url() . "admin/lifeApplication_list/owner_update_submit/".$insuredId; ?>" method="POST">        
    
    <input type="hidden" name="ins_clinent_id" value="<?php echo $ins_client_id ?>"></input>    
    <input type="hidden" name="coverage" value="<?php echo $coverage ?>"></input>
    <input type="hidden" name="insuranceCompany" value="<?php echo $insuranceCompany ?>"></input>
    <input type="hidden" name="pName" value="<?php echo $pName ?>"></input>
    <input type="hidden" name="termPeriod" value="<?php echo $termPeriod ?>"></input>    
    <input type="hidden" name="ann" value="<?php echo $ann ?>"></input>
    <input type="hidden" name="semi" value="<?php echo $semi ?>"></input>
    <input type="hidden" name="quar" value="<?php echo $quar ?>"></input>
    <input type="hidden" name="month" value="<?php echo $month ?>"></input>
    <input type="hidden" name="naic" value="<?php echo $company_naic_code ?>"></input>
    <input type="hidden" name="policyState" value="<?php echo $policyState ?>"></input>
    <input type="hidden" name="healthStatus" value="<?php echo $healthStatus ?>" size="30"></input>
    <input type="hidden" name="insuredDateofBirth" value="<?php echo $insuredDateofBirth;?>"></input>  
    <input type="hidden" name="selectedPeriod" value="<?php echo $selectedPeriod;?>"></input>
    
    <input type="hidden" name="insuredId" value="<?php echo $insuredId ?>"/>
    
    <?php if($insuredInfoList->who == "self") { //in case SELF ?>
    <input type="hidden" name="who" value="self"/>
    <?php }else{ ?>
    <input type="hidden" name="who" vlaue="other"/>
    <?php } ?>
    
    <?php if ($insuredInfoList->ownerId != "0") {//other ?>
        
        <p><span class="subtitle_s">OWNER INFORMATION</span></p>
        
        LAST NAME 
        <input type="text" size="10" name="ownerlastName" value="<?php echo $ownerInfoList->lastName; ?>"/>
        FIRST NAME                                          
        <input type="text" size="10" name="ownerfirstName" value="<?php echo $ownerInfoList->firstName; ?>"/>
        MIDDLE INITIAL 
        <input type="text" size="3" name="ownermiddleName" value="<?php echo $ownerInfoList->middleName; ?>"/><br></br>    
        ADDRESS 
        <input type="text" size="50" name="owneraddress" value="<?php echo $ownerInfoList->address; ?>"/><br></br>    
        I lived in this address for: 
        <input type="text" size="3" name="owneraddrYears" value="<?php echo $ownerInfoList->addrYears; ?>"/><br></br>    
        Tel <input type="text" size="10" name="ownertel" value="<?php echo $ownerInfoList->tel; ?>"/>
        Email <input type="text" size="30" name="owneremail" value="<?php echo $ownerInfoList->email; ?>"/><br></br>    
        Gender:
        <input type="radio" name="ownergender" value="male" <?php if($ownerInfoList->gender == 'male'){?>checked<?php }?>><b><font color="#357EC7">Male</font></b>
        <input type="radio" name="ownergender" value="female" <?php if($ownerInfoList->gender == 'female'){?>checked<?php }?>><b><font color="#B93B8F">Female</font></b>
        <br></br>
        
        DOB:
        <input type="text" name="ownerdob" id="dob" value="<?php echo $ownerInfoList->dob; ?>"></input>        
        Social Security No.
        <input type="text" name="ownerssn" value="<?php echo $ownerInfoList->ssn; ?>"></input>
        <br></br>
        Driver License/State ID No.
        <input type="text" name="ownerdriverNo" value="<?php echo $ownerInfoList->driverNo; ?>"></input>
        State
        <input type="text" name="ownerdriverState" value="<?php echo $ownerInfoList->driverState; ?>"></input><br></br>
        Issue Date
        <input type="text" name="ownerdriverIssueDate" id="driverIssueDate" value="<?php echo $ownerInfoList->driverIssueDate; ?>"></input>
        Exp. Date
        <input type="text" name="ownerdriverExpDate" id="driverExpDate" value="<?php echo $ownerInfoList->driverExpDate; ?>"></input>
        <br></br>
        Citizenship
        <input type="radio" name="ownercitizenship" value="USA" <?php if($ownerInfoList->citizenship == 'USA'){?>checked<?php }?>>U.S.A.
        <input type="radio" name="ownercitizenship" value="Legal resident" <?php if($ownerInfoList->citizenship == 'Legal resident'){?>checked<?php }?>>Legal resident
        <font color="#FF0000"> *For non-US Citizen, copy of green card or valid visa required </font>
        <br></br>
        Birth place
        <input type="text" name="ownerbirthPlace" value="<?php echo $ownerInfoList->birthPlace; ?>"></input>
        <br></br>
        Occupation
        <input type="text" name="owneroccupation" value="<?php echo $ownerInfoList->occupation; ?>"></input>
        Title
        <input type="text" name="owneroccupationTitle" value="<?php echo $ownerInfoList->occupationTitle; ?>"></input><br></br>
        Employer Name
        <input type="text" name="owneremployerName" value="<?php echo $ownerInfoList->employerName; ?>"></input>
        <br></br>
        Employer Address
        <input type="text" name="owneremployerAddr" size="60" value="<?php echo $ownerInfoList->employerAddr; ?>"></input>
        <br></br>
        Are you a currently full-time member of Armed Forces? 
        <input type="radio" name="ownerarmedForce" value="yes" <?php if($ownerInfoList->armedForce == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="ownerarmedForce" value="no" <?php if($ownerInfoList->armedForce == 'no'){?>checked<?php }?>>No</input>
        <br>
        
        <br></br>  
        
        <b><font color="#FF0080">Financial Information & Suitability</font></b>
        <br></br>
        <font color="#B93B8F">
        Annual Wage & Salary
        <input type="text" name="ownerotherAnnual" value="<?php echo $ownerInfoList->otherAnnual; ?>"></input><br></br>
        Annual Household Income
        <input type="text" name="ownerotherHouseIncome" value="<?php echo $ownerInfoList->otherHouseIncome; ?>"></input><br></br>
        Annual Additional Income
        <input type="text" name="ownerotherAdditionalIncome" value="<?php echo $ownerInfoList->otherAdditionalIncome; ?>"></input><br></br>
        Total Net Worth (All Assets)
        <input type="text" name="ownerotherTotalNetWorth" value="<?php echo $ownerInfoList->otherTotalNetWorth; ?>"></input><br></br>
        Liquid Net Worth (All Assets minus properties)
        <input type="text" name="ownerotherLiquidNetWorth" value="<?php echo $ownerInfoList->otherLiquidNetWorth; ?>"></input><br></br>
        Purpose of the insurance policy:<br>
        <input type="radio" name="ownerotherPurposePolicy" value="Family protection/Income replacement" <?php if($ownerInfoList->otherPurposePolicy == 'Family protection/Income replacement'){?>checked<?php }?>>Family protection/Income replacement 
        <input type="radio" name="ownerotherPurposePolicy" value="Mortgage/Debt payment" <?php if($ownerInfoList->otherPurposePolicy == 'Mortgage/Debt payment'){?>checked<?php }?>>Mortgage/Debt payment 
        <input type="radio" name="ownerotherPurposePolicy" value="Other" <?php if($ownerInfoList->otherPurposePolicy == 'Other'){?>checked<?php }?>>Other
        <br></br>
        Have you recently filed for bankruptcy?
        <input type="radio" name="ownerotherBankrupcy" value="yes" <?php if($ownerInfoList->otherBankrupcy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="ownerotherBankrupcy" value="no" <?php if($ownerInfoList->otherBankrupcy == 'no'){?>checked<?php }?>>No</input>
        
        <br></br>
        Have you sold or plan to sell this policy to a life settlement provider?
        <input type="radio" name="ownerotherSellPolicy" value="yes" <?php if($ownerInfoList->otherSellPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="ownerotherSellPolicy" value="no" <?php if($ownerInfoList->otherSellPolicy == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Do you plan to take out loan(s) to pay for this policy?
        <input type="radio" name="ownerotherLoanPayPolicy" value="yes" <?php if($ownerInfoList->otherLoanPayPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="ownerotherLoanPayPolicy" value="no" <?php if($ownerInfoList->otherLoanPayPolicy == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
        <input type="radio" name="ownerotherPurchasingPolicy" value="yes" <?php if($ownerInfoList->otherPurchasingPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="ownerotherPurchasingPolicy" value="no" <?php if($ownerInfoList->otherPurchasingPolicy == 'no'){?>checked<?php }?>>No</input>
        <br></br>        
        </font>
    
       <p><span class="subtitle_s">INSURED INFORMATION: </span></p>
        <br>
        
        My relation to the Insured on this policy is: 
        <input type="radio" name="insuredrelateToInsured" value="Spouse" <?php if($insuredInfoList->relateToInsured == 'Spouse'){?>checked<?php }?>>Spouse
        <input type="radio" name="insuredrelateToInsured" value="Parent" <?php if($insuredInfoList->relateToInsured == 'Parent'){?>checked<?php }?>>Parent
        <input type="radio" name="insuredrelateToInsured" value="Son/Daughter" <?php if($insuredInfoList->relateToInsured == 'Son/Daughter'){?>checked<?php }?>>Son/Daughter
        <input type="radio" name="insuredrelateToInsured" value="Other" <?php if($insuredInfoList->relateToInsured == 'Other'){?>checked<?php }?>>Other
        <br></br>
        
        Last Name
        <input type="text" name="insuredlastName" value="<?php echo $insuredInfoList->lastName ?>"></input>
        First Name
        <input type="text" name="insuredfirstName" value="<?php echo $insuredInfoList->firstName ?>"></input>
        Middle Initial
        <input type="text" name="insuredmiddleName" size="3" value="<?php echo $insuredInfoList->middleName ?>"></input>
        <br></br>        
        Address:
        <input type="textarea" name="insuredaddress" size="50" value="<?php echo $insuredInfoList->address ?>"></input>
        <br></br>        
        I lived in this address for:
        <input type="text" name="insuredaddrYears" size="4" value="<?php echo $insuredInfoList->addrYears ?>"></input>
        Years
        <br></br>        
        Tel:
        <input type="text" name="insuredtel" value="<?php echo $insuredInfoList->tel ?>"></input>
        Email:
        <input type="text" name="insuredemail" value="<?php echo $insuredInfoList->email ?>"></input>
        <br></br>
        Gender:
        <input type="radio" name="insuredgender" value="male" <?php if($insuredInfoList->gender == 'male'){?>checked<?php }?>><b><font color="#357EC7">Male</font></b></input>
        <input type="radio" name="insuredgender" value="female" <?php if($insuredInfoList->gender == 'female'){?>checked<?php }?>><b><font color="#B93B8F">Female</font></b></input>
        <br></br>
        DOB:
        <input type="text" name="insureddob" id="dob" value="<?php echo $insuredInfoList->dob ?>"></input>        
        Social Security No.
        <input type="text" name="insuredssn" value="<?php echo $insuredInfoList->ssn ?>"></input>
        <br></br>
        Driver License/State ID No.
        <input type="text" name="insureddriverNo" value="<?php echo $insuredInfoList->driverNo ?>"></input>
        State
        <input type="text" name="insureddriverState" value="<?php echo $insuredInfoList->driverState ?>"></input><br></br>
        Issue Date
        <input type="text" name="insureddriverIssueDate" id="driverIssueDate" value="<?php echo $insuredInfoList->driverIssueDate ?>"></input>
        Exp. Date
        <input type="text" name="insureddriverExpDate" id="driverExpDate" value="<?php echo $insuredInfoList->driverExpDate ?>"></input>
        <br></br>
        Citizenship
        <input type="radio" name="insuredcitizenship" value="USA" <?php if($insuredInfoList->citizenship == 'USA'){?>checked<?php }?>>USA</input>
        <input type="radio" name="insuredcitizenship" value="Legal resident" <?php if($insuredInfoList->citizenship == 'Legal resident'){?>checked<?php }?>>Legal resident</input>
        <font color="#FF0000"> *For non-US Citizen, copy of green card or valid visa required</font>
        <br></br>
        Birth place
        <input type="text" name="insuredbirthPlace" value="<?php echo $insuredInfoList->birthPlace ?>"></input>
        <br></br>
        Occupation
        <input type="text" name="insuredoccupation" value="<?php echo $insuredInfoList->occupation ?>"></input>
        Title
        <input type="text" name="insuredoccupationTitle" value="<?php echo $insuredInfoList->occupationTitle ?>"></input><br></br>
        Employer Name
        <input type="text" name="insuredemployerName" value="<?php echo $insuredInfoList->employerName ?>"></input>
        <br></br>
        Employer Address
        <input type="text" name="insuredemployerAddr" size="60" value="<?php echo $insuredInfoList->employerAddr ?>"></input>
        <br></br>
        Are you a a currently full-time member of Armed Forces? 
        <input type="radio" name="insuredarmedForce" value="yes" <?php if($insuredInfoList->armedForce == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="insuredarmedForce" value="no" <?php if($insuredInfoList->armedForce == 'no'){?>checked<?php }?>>No</input></input>
                        
        <br></br>
        Do you have any other existing life insurance policies?
        <input type="radio" name="insuredexisting" value="yes" <?php if($insuredInfoList->existing == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="insuredexisting" value="no" <?php if($insuredInfoList->existing == 'no'){?>checked<?php }?>>No</input></input>
        <br>If yes, Name of company
        <input type="text" name="insuredyesCompany" value="<?php echo $insuredInfoList->yesCompany ?>"></input>
        amount
        <input type="text" name="insuredyesAmount" value="<?php echo $insuredInfoList->yesAmount ?>"></input>
        <br></br>
        Will this policy cause termination, replacement or change of any existing policy (does not include employer provided policies)?
        <input type="radio" name="insuredreplacementChange" value="yes" <?php if($insuredInfoList->replacementChange == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="insuredreplacementChange" value="no" <?php if($insuredInfoList->replacementChange == 'no'){?>checked<?php }?>>No</input>
        <br></br>
    
        <b><font color="#2554C7">Health & Life Style Questions</font></b>
        <br></br>
        <font color="#357EC7">
        Have you recently had a driver's license suspended, revoked or restricted?
        <input type="radio" name="otherdriverRevoked" value="yes" <?php if($insuredInfoList->driverRevoked == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherdriverRevoked" value="no" <?php if($insuredInfoList->driverRevoked == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently been convicted of, or pleaded guilty to, reckless or negligent driving or driving under the influence of alcohol or drugs?
        <input type="radio" name="otherconvict" value="yes" <?php if($insuredInfoList->convict == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherconvict" value="no" <?php if($insuredInfoList->convict == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently been disabled for two or more weeks?
        <input type="radio" name="otherdisabled" value="yes" <?php if($insuredInfoList->disabled == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherdisabled" value="no" <?php if($insuredInfoList->disabled == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you ever applied for a life or health insurance and been declined?
        <input type="radio" name="otherhealthDeclined" value="yes" <?php if($insuredInfoList->healthDeclined == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherhealthDeclined" value="no" <?php if($insuredInfoList->healthDeclined == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you ever been convicted of, or plead guilty or no contest to, a felony, or are current felony charges pending?
        <input type="radio" name="otherfelonyPending" value="yes" <?php if($insuredInfoList->felonyPending == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherfelonyPending" value="no" <?php if($insuredInfoList->felonyPending == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Do you ever plan to travel for an extended period or reside in foreign countries?
        <input type="radio" name="othertravel" value="yes" <?php if($insuredInfoList->travel == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="othertravel" value="no" <?php if($insuredInfoList->travel == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently piloted any kind or aircraft or plan to do so?
        <input type="radio" name="otheraircraft" value="yes" <?php if($insuredInfoList->aircraft == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otheraircraft" value="no" <?php if($insuredInfoList->aircraft == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently been involved in or plan to engage in motor racing, underwater diving, skydiving, ballooning, hang gliding, parachuting or other potentially hazardous sports or hobbies?
        <input type="radio" name="otherskydiving" value="yes" <?php if($insuredInfoList->skydiving == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherskydiving" value="no" <?php if($insuredInfoList->skydiving == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you ever received medical treatment or been advised by a physician to reduce or discontinue the use of alcohol or prescribed or non-prescribed drugs?
        <input type="radio" name="othermedicalTreatment" value="yes" <?php if($insuredInfoList->medicalTreatment == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="othermedicalTreatment" value="no" <?php if($insuredInfoList->medicalTreatment == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Do you use tobacco or nicotine products?
        <input type="radio" name="othertobacco" value="yes" <?php if($insuredInfoList->tobacco == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="othertobacco" value="no" <?php if($insuredInfoList->tobacco == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently experienced rapid weight gain/loss?
        <input type="radio" name="otherrapidWeight" value="yes" <?php if($insuredInfoList->rapidWeight == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherrapidWeight" value="no" <?php if($insuredInfoList->rapidWeight == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Do you have a pre-existing heart condition or disease; or experienced stroke, or had cancer?
        <input type="radio" name="otherpreDisease" value="yes" <?php if($insuredInfoList->preDisease == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherpreDisease" value="no" <?php if($insuredInfoList->preDisease == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Within the past 10 years, have you been diagnosed or treated for Acquired Immune Deficiency Syndrome (AIDS) or AIDS-Related Complex (ARC) by a member of the medical profession? 
        <input type="radio" name="otherdiagnosed" value="yes" <?php if($insuredInfoList->diagnosed == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherdiagnosed" value="no" <?php if($insuredInfoList->diagnosed == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently been hospitalized?
        <input type="radio" name="otherhospitalized" value="yes" <?php if($insuredInfoList->hospitalized == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="otherhospitalized" value="no" <?php if($insuredInfoList->hospitalized == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        </font>  
        <?php } ?>
        
        
        <?php if ($insuredInfoList->who == 'self'){ ?>
        
        <p><span class="subtitle_s">INSURED INFORMATION: </span></p>
        <br></br> 
        
        Last Name
        <input type="text" name="selflastName" value="<?php echo $insuredInfoList->lastName ?>"></input>
        First Name
        <input type="text" name="selffirstName" value="<?php echo $insuredInfoList->firstName ?>"></input>
        Middle Initial
        <input type="text" name="selfmiddleName" size="3" value="<?php echo $insuredInfoList->middleName ?>"></input>
        <br></br>        
        Address:
        <input type="textarea" name="selfaddress" size="50" value="<?php echo $insuredInfoList->address ?>"></input>
        <br></br>        
        I lived in this address for:
        <input type="text" name="selfaddrYears" size="4" value="<?php echo $insuredInfoList->addrYears ?>"></input>
        Years
        <br></br>        
        Tel:
        <input type="text" name="selftel" value="<?php echo $insuredInfoList->tel ?>"></input>
        Email:
        <input type="text" name="selfemail" value="<?php echo $insuredInfoList->email ?>"></input>
        <br></br>
        Gender:
        <input type="radio" name="selfgender" value="male" <?php if($insuredInfoList->gender == 'male'){?>checked<?php }?>><b><font color="#357EC7">Male</font></b></input>
        <input type="radio" name="selfgender" value="female" <?php if($insuredInfoList->gender == 'female'){?>checked<?php }?>><b><font color="#B93B8F">Female</font></b></input>
        <br></br>
        DOB:
        <input type="text" name="selfdob" id="dob" value="<?php echo $insuredInfoList->dob ?>"></input>        
        Social Security No.
        <input type="text" name="selfssn" value="<?php echo $insuredInfoList->ssn ?>"></input>
        <br></br>
        Driver License/State ID No.
        <input type="text" name="selfdriverNo" value="<?php echo $insuredInfoList->driverNo ?>"></input>
        State
        <input type="text" name="selfdriverState" value="<?php echo $insuredInfoList->driverState ?>"></input><br></br>
        Issue Date
        <input type="text" name="selfdriverIssueDate" id="driverIssueDate" value="<?php echo $insuredInfoList->driverIssueDate ?>"></input>
        Exp. Date
        <input type="text" name="selfdriverExpDate" id="driverExpDate" value="<?php echo $insuredInfoList->driverExpDate ?>"></input>
        <br></br>
        Citizenship
        <input type="radio" name="selfcitizenship" value="USA" <?php if($insuredInfoList->citizenship == 'USA'){?>checked<?php }?>>USA</input>
        <input type="radio" name="selfcitizenship" value="Legal resident" <?php if($insuredInfoList->citizenship == 'Legal resident'){?>checked<?php }?>>Legal resident</input>
        <font color="#FF0000"> *Copt of green card or valid visa required</font>
        <br></br>
        Birth place
        <input type="text" name="selfbirthPlace" value="<?php echo $insuredInfoList->birthPlace ?>"></input>
        <br></br>
        Occupation
        <input type="text" name="selfoccupation" value="<?php echo $insuredInfoList->occupation ?>"></input>
        Title
        <input type="text" name="selfoccupationTitle" value="<?php echo $insuredInfoList->occupationTitle ?>"></input><br></br>
        Employer Name
        <input type="text" name="selfemployerName" value="<?php echo $insuredInfoList->employerName ?>"></input>
        <br></br>
        Employer Address
        <input type="text" name="selfemployerAddr" size="60" value="<?php echo $insuredInfoList->employerAddr ?>"></input>
        <br></br>
        Are you a a currently full-time member of Armed Forces? 
        <input type="radio" name="selfarmedForce" value="yes" <?php if($insuredInfoList->armedForce == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfarmedForce" value="no" <?php if($insuredInfoList->armedForce == 'no'){?>checked<?php }?>>No</input></input>
                        
        <br></br>
        Do you have any other existing life insurance policies?
        <input type="radio" name="selfexisting" value="yes" <?php if($insuredInfoList->existing == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfexisting" value="no" <?php if($insuredInfoList->existing == 'no'){?>checked<?php }?>>No</input></input>
        <br>If yes, Name of company
        <input type="text" name="selfyesCompany" value="<?php echo $insuredInfoList->yesCompany ?>"></input>
        amount
        <input type="text" name="selfyesAmount" value="<?php echo $insuredInfoList->yesAmount ?>"></input>
        <br></br>
        Will this policy cause termination, replacement or change of any existing policy (does not include employer provided policies)?
        <input type="radio" name="selfreplacementChange" value="yes" <?php if($insuredInfoList->replacementChange == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfreplacementChange" value="no" <?php if($insuredInfoList->replacementChange == 'no'){?>checked<?php }?>>No</input>
        <br></br>
    
        <b><font color="#2554C7">Health & Life Style Questions</font></b>
        <br></br>
        <font color="#357EC7">
        Have you recently had a driver's license suspended, revoked or restricted?
        <input type="radio" name="selfdriverRevoked" value="yes" <?php if($insuredInfoList->driverRevoked == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfdriverRevoked" value="no" <?php if($insuredInfoList->driverRevoked == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently been convicted of, or pleaded guilty to, reckless or negligent driving or driving under the influence of alcohol or drugs?
        <input type="radio" name="selfconvict" value="yes" <?php if($insuredInfoList->convict == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfconvict" value="no" <?php if($insuredInfoList->convict == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently been disabled for two or more weeks?
        <input type="radio" name="selfdisabled" value="yes" <?php if($insuredInfoList->disabled == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfdisabled" value="no" <?php if($insuredInfoList->disabled == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you ever applied for a life or health insurance and been declined?
        <input type="radio" name="selfhealthDeclined" value="yes" <?php if($insuredInfoList->healthDeclined == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfhealthDeclined" value="no" <?php if($insuredInfoList->healthDeclined == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you ever been convicted of, or plead guilty or no contest to, a felony, or are current felony charges pending?
        <input type="radio" name="selffelonyPending" value="yes" <?php if($insuredInfoList->felonyPending == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selffelonyPending" value="no" <?php if($insuredInfoList->felonyPending == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Do you ever plan to travel for an extended period or reside in foreign countries?
        <input type="radio" name="selftravel" value="yes" <?php if($insuredInfoList->travel == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selftravel" value="no" <?php if($insuredInfoList->travel == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently piloted any kind or aircraft or plan to do so?
        <input type="radio" name="selfaircraft" value="yes" <?php if($insuredInfoList->aircraft == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfaircraft" value="no" <?php if($insuredInfoList->aircraft == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently been involved in or plan to engage in motor racing, underwater diving, skydiving, ballooning, hang gliding, parachuting or other potentially hazardous sports or hobbies?
        <input type="radio" name="selfskydiving" value="yes" <?php if($insuredInfoList->skydiving == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfskydiving" value="no" <?php if($insuredInfoList->skydiving == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you ever received medical treatment or been advised by a physician to reduce or discontinue the use of alcohol or prescribed or non-prescribed drugs?
        <input type="radio" name="selfmedicalTreatment" value="yes" <?php if($insuredInfoList->medicalTreatment == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfmedicalTreatment" value="no" <?php if($insuredInfoList->medicalTreatment == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Do you use tobacco or nicotine products?
        <input type="radio" name="selftobacco" value="yes" <?php if($insuredInfoList->tobacco == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selftobacco" value="no" <?php if($insuredInfoList->tobacco == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently experienced rapid weight gain/loss?
        <input type="radio" name="selfrapidWeight" value="yes" <?php if($insuredInfoList->rapidWeight == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfrapidWeight" value="no" <?php if($insuredInfoList->rapidWeight == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Do you have a pre-existing heart condition or disease; or experienced stroke, or had cancer?
        <input type="radio" name="selfpreDisease" value="yes" <?php if($insuredInfoList->preDisease == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfpreDisease" value="no" <?php if($insuredInfoList->preDisease == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Within the past 10 years, have you been diagnosed or treated for Acquired Immune Deficiency Syndrome (AIDS) or AIDS-Related Complex (ARC) by a member of the medical profession? 
        <input type="radio" name="selfdiagnosed" value="yes" <?php if($insuredInfoList->diagnosed == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfdiagnosed" value="no" <?php if($insuredInfoList->diagnosed == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you recently been hospitalized?
        <input type="radio" name="selfhospitalized" value="yes" <?php if($insuredInfoList->hospitalized == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfhospitalized" value="no" <?php if($insuredInfoList->hospitalized == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        </font>
        
        <b><font color="#2554C7">Financial Information & Suitability</font></b>
        <br></br>
        <font color="#357EC7">
        Annual Wage & Salary
        <input type="text" name="selfAnnual" value="<?php echo $insuredInfoList->selfAnnual ?>"></input><br></br>
        Annual Household Income
        <input type="text" name="selfHouseIncome" value="<?php echo $insuredInfoList->selfHouseIncome ?>"></input><br></br>
        Annual Additional Income
        <input type="text" name="selfAdditionalIncome" value="<?php echo $insuredInfoList->selfAdditionalIncome ?>"></input><br></br>
        Total Net Worth (All Assets)
        <input type="text" name="selfTotalNetWorth" value="<?php echo $insuredInfoList->selfTotalNetWorth ?>"></input><br></br>
        Liquid Net Worth (All Assets minus properties)
        <input type="text" name="selfLiquidNetWorth" value="<?php echo $insuredInfoList->selfLiquidNetWorth ?>"></input><br></br>
        Purpose of the insurance policy:<br>
        <input type="radio" name="selfPurposePolicy" value="Family protection/Income replacement" <?php if($insuredInfoList->selfPurposePolicy == 'Family protection/Income replacement'){?>checked<?php }?>>Family protection/Income replacement 
        <input type="radio" name="selfPurposePolicy" value="Mortgage/Debt payment" <?php if($insuredInfoList->selfPurposePolicy == 'Mortgage/Debt payment'){?>checked<?php }?>>Mortgage/Debt payment 
        <input type="radio" name="selfPurposePolicy" value="Other" <?php if($insuredInfoList->selfPurposePolicy == 'Other'){?>checked<?php }?>>Other
        <br></br>
        Have you recently filed for bankruptcy?
        <input type="radio" name="selfBankrupcy" value="yes" <?php if($insuredInfoList->selfBankrupcy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfBankrupcy" value="no" <?php if($insuredInfoList->selfBankrupcy == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Have you sold or plan to sell this policy to a life settlement provider?
        <input type="radio" name="selfSellPolicy" value="yes" <?php if($insuredInfoList->selfSellPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfSellPolicy" value="no" <?php if($insuredInfoList->selfSellPolicy == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Do you plan to take out loan(s) to pay for this policy?
        <input type="radio" name="selfLoanPayPolicy" value="yes" <?php if($insuredInfoList->selfLoanPayPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfLoanPayPolicy" value="no" <?php if($insuredInfoList->selfLoanPayPolicy == 'no'){?>checked<?php }?>>No</input>
        <br></br>
        Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
        <input type="radio" name="selfPurchasingPolicy" value="yes" <?php if($insuredInfoList->selfPurchasingPolicy == 'yes'){?>checked<?php }?>>Yes</input>
        <input type="radio" name="selfPurchasingPolicy" value="no" <?php if($insuredInfoList->selfPurchasingPolicy == 'no'){?>checked<?php }?>>No</input>
        <br></br>        
        </font> 
            
        
    <?php  } ?>    
        
        <p><b>BENEFICIARY INFORMATION</b></p>
        <1><br>
    1.  First Name: 
        <input type="text" name="firstNameBenefi1" size="15" value="<?php echo $insuredInfoList->firstNameBenefi1 ?>"> &nbsp; 
        Last Name:  
        <input type="text" name="lastNameBenefi1" size="15" value="<?php echo $insuredInfoList->lastNameBenefi1 ?>"> &nbsp; <br>
        Date of Birth:    
        <input type="text" name="DOBBenefi1" id="DOBBenefi1" size="15" value="<?php echo $insuredInfoList->DOBBenefi1 ?>"> &nbsp; <br> 
        SSN#
        <input type="text" size="15" name="ssBenefi1" value="<?php echo $insuredInfoList->ssBenefi1 ?>">
        Priorty: 
        <input type="radio" name="primaryBenefi1" value="Primary" <?php if($insuredInfoList->primaryBenefi1 == 'Primary'){?>checked<?php }?>>Primary
        <input type="radio" name="primaryBenefi1" value="Secondary" <?php if($insuredInfoList->primaryBenefi1 == 'Secondary'){?>checked<?php }?>>Secondary 
        <br>
        Portion     <input type="text" size="3" name="portionBenefi1" value="<?php echo $insuredInfoList->portionBenefi1 ?>">% 
        Relation:   <input type="text" size="15" name="relationBenefi1" value="<?php echo $insuredInfoList->relationBenefi1 ?>"><br></br>
    
    2.  First Name: <input type="text" size="15" name="firstNameBenefi2" value="<?php echo $insuredInfoList->firstNameBenefi2 ?>"> &nbsp; 
        Last Name:  <input type="text" size="15" name="lastNameBenefi2" value="<?php echo $insuredInfoList->lastNameBenefi2 ?>"> &nbsp; <br>
        Date of Birth: 
        <input type="text" name="DOBBenefi2" id="DOBBenefi2" size="15" value="<?php echo $insuredInfoList->DOBBenefi2 ?>"> &nbsp; <br>    
        SSN#
        <input type="text" size="15" name="ssBenefi2" value="<?php echo $insuredInfoList->ssBenefi2 ?>">
        Priorty:                
        <input type="radio" name="primaryBenefi2" value="Primary" <?php if($insuredInfoList->primaryBenefi2 == 'Primary'){?>checked<?php }?>>Primary
        <input type="radio" name="primaryBenefi2" value="Secondary" <?php if($insuredInfoList->primaryBenefi2 == 'Secondary'){?>checked<?php }?>>Secondary 
        <br>
        Portion     
        <input type="text" size="3" name="portionBenefi2" value="<?php echo $insuredInfoList->portionBenefi2 ?>">% 
        Relation:   
        <input type="text" size="15" name="relationBenefi2" value="<?php echo $insuredInfoList->relationBenefi2 ?>"><br></br>
    
    3.  First Name: <input type="text" size="15" name="firstNameBenefi3" value="<?php echo $insuredInfoList->firstNameBenefi3 ?>"> &nbsp; 
        Last Name:  <input type="text" size="15" name="lastNameBenefi3" value="<?php echo $insuredInfoList->lastNameBenefi3 ?>"> &nbsp; <br>
        Date of Birth: 
        <input type="text" name="DOBBenefi3" id="DOBBenefi3" size="15" value="<?php echo $insuredInfoList->DOBBenefi3 ?>"> &nbsp; <br>    
        SSN#
        <input type="text" size="15" name="ssBenefi3" value="<?php echo $insuredInfoList->ssBenefi3 ?>">
        Priorty:                
        <input type="radio" name="primaryBenefi3" value="Primary" <?php if($insuredInfoList->primaryBenefi3 == 'Primary'){?>checked<?php }?>>Primary
        <input type="radio" name="primaryBenefi3" value="Secondary" <?php if($insuredInfoList->primaryBenefi3 == 'Secondary'){?>checked<?php }?>>Secondary 
        <br>
        Portion     
        <input type="text" size="3" name="portionBenefi3" value="<?php echo $insuredInfoList->portionBenefi3 ?>">% 
        Relation:   
        <input type="text" size="15" name="relationBenefi3" value="<?php echo $insuredInfoList->relationBenefi3 ?>"><br></br>
    
    4.  First Name: <input type="text" size="15" name="firstNameBenefi4" value="<?php echo $insuredInfoList->firstNameBenefi4 ?>"> &nbsp; 
        Last Name:  <input type="text" size="15" name="lastNameBenefi4" value="<?php echo $insuredInfoList->lastNameBenefi4 ?>"> &nbsp; <br>
        Date of Birth:
        <input type="text" name="DOBBenefi4" id="DOBBenefi4" size="15" value="<?php echo $insuredInfoList->DOBBenefi4 ?>"> &nbsp; <br>
        SSN#
        <input type="text" size="15" name="ssBenefi4" value="<?php echo $insuredInfoList->ssBenefi4 ?>">
        Priorty:                
        <input type="radio" name="primaryBenefi4" value="Primary" <?php if($insuredInfoList->primaryBenefi4 == 'Primary'){?>checked<?php }?>>Primary
        <input type="radio" name="primaryBenefi4" value="Secondary" <?php if($insuredInfoList->primaryBenefi4 == 'Secondary'){?>checked<?php }?>>Secondary 
        <br>
        Portion     
        <input type="text" size="3" name="portionBenefi4" value="<?php echo $insuredInfoList->portionBenefi4 ?>">% 
        Relation:   
        <input type="text" size="15" name="relationBenefi4" value="<?php echo $insuredInfoList->relationBenefi4 ?>"><br></br>
        </br>
        <p><b>MEDICAL INFORMATION</b></p>
        First choice :
        <input type="text" name="medicalFirstDate" value="<?php echo $insuredInfoList->medicalFirstDate ?>"> &nbsp; &nbsp; 
        <input type="text" name="medicalFirstTime" value="<?php echo $insuredInfoList->medicalFirstTime ?>"><br>
        Second choice :
        <input type="text" name="medicalSecondDate" value="<?php echo $insuredInfoList->medicalSecondDate ?>"> &nbsp; &nbsp; 
        <input type="text" name="medicalSecondTime" value="<?php echo $insuredInfoList->medicalSecondTime ?>"><br>
            
        Medical exam will take place at :
        <input type="text" name="medicalVisitAddress" value="<?php echo $insuredInfoList->medicalVisitAddress ?>"><br></br>
    
        </div>   
   
        <input type="image" src="<?php echo base_url(); ?>images/btn_next.png" >   
</div>
        
</form>

