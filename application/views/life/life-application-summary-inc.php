
 <div class="application_summary">  
     <ul id="ins_options">
            <span class="subhed_h3">LIFE INSURANCE COVERAGE INFORMATION</span>
            
          
            
            <li>Amount of Insurance
                <div class="boldcapsblack"><?php echo "\$".number_format($coverage, 0, '', ','); ?></div>
            </li>

            <li>Insurance Company
                <div class="boldcapsblack"><?php echo $insuranceCompany ?></div>
            </li>
            <li>
                Name of Policy<div class="boldcapsblack"><?php echo $pName ?></div>
            </li>
            
            <li>Term Period
                <div class="boldcapsblack"><?php echo $termPeriod ?> years</div>
            </li>
            
            <li>Policy State
                <div class="boldcapsblack"><?php echo $policyState ?></div>
            </li>
            
            <li>Health Status
                <div class="boldcapsblack"><?php echo $healthStatus ?> </div>
            </li>
            <li>Insured Date of Birth
                <div class="boldcapsblack"><?php echo $insuredDateofBirth; ?> </div>
            </li>
            <li>Premium Options
                <div class="boldcapsblack"><?php echo $selectedPeriod; ?> </div>
            </li>
        </ul>
     
      <ul>
             
          
          <span class="stitle"> THIS LIFE INSURANCE APPLICATION IS BASED ON THE LIFE OF :</span>

        <?php  if($insuredInfoList->ownerId == "0"){ //in case self ?>
                
                <div class="boldcapsblack">self</div><br />
                
                
       <?php }else{ ?>
                
                <div class="boldcapsblack"><?php echo $ownerInfoList->who ?></div><br />
                
       <?php } ?>
      </ul>  
             
       
       <?php  if($insuredInfoList->ownerId != "0"){ //in case OTHER ?>    
     <ul> 
         <li>
        <div class="subhed_h3">APPLICANT/OWNER INFORMATION</div>
                
        Last Name :
            <div class="boldcapsblack"><?php echo $ownerInfoList->lastName; ?></div>&nbsp;&nbsp;
        First Name :
            <div class="boldcapsblack"><?php echo $ownerInfoList->firstName; ?></div>&nbsp;&nbsp;
        MI :
            <div class="boldcapsblack"><?php echo $ownerInfoList->middleName; ?></div> <br />
        Address :
            <div class="boldcapsblack"><?php echo $ownerInfoList->address; ?></div><br />
        I lived in this address for :
            <div class="boldcapsblack"><?php echo $ownerInfoList->addrYears; ?></div><br />
        Tel :
            <div class="boldcapsblack"><?php echo $ownerInfoList->tel; ?></div><br />
        Email :
            <div class="boldcapsblack"><?php echo $ownerInfoList->email; ?></div><br />
        Gender :
            <div class="boldcapsblack"><?php echo $ownerInfoList->gender; ?></div><br />
        DOB :
            <div class="boldcapsblack"><?php echo $ownerInfoList->dob; ?></div><br />
        Social Security No.
            <div class="boldcapsblack"><?php echo 'XXX-XX-'.substr($ownerInfoList->ssn, -4); ?></div><br />
        Driver License/State ID No.
            <div class="boldcapsblack"><?php echo $ownerInfoList->driverNo; ?></div><br />
        State :
            <div class="boldcapsblack"><?php echo $ownerInfoList->driverState; ?></div><br />
        Issue Date :
            <div class="boldcapsblack"><?php echo $ownerInfoList->driverIssueDate; ?></div><br />
        Exp. Date :
            <div class="boldcapsblack"><?php echo $ownerInfoList->driverExpDate; ?></div><br />
        Citizenship :
            <div class="boldcapsblack"><?php echo $ownerInfoList->citizenship; ?></div><br />
        Birth place :
            <div class="boldcapsblack"><?php echo $ownerInfoList->birthPlace; ?></div><br />
        Occupation :
            <div class="boldcapsblack"><?php echo $ownerInfoList->occupation; ?></div><br />
        Title :
            <div class="boldcapsblack"><?php echo $ownerInfoList->occupationTitle; ?></div><br />
        Employer Name :
            <div class="boldcapsblack"><?php echo $ownerInfoList->employerName; ?></div><br />
        Employer Address :
            <div class="boldcapsblack"><?php echo $ownerInfoList->employerAddr; ?></div><br />
        Are you a currently full-time member of Armed Forces? 
            <div class="boldcapsblack"><?php echo $ownerInfoList->armedForce; ?></div><br />
        </li>
     </ul>
     <ul>
         <div class="subhed_h3">Financial Information & Suitability</div>
         <li>  
        Annual Wage & Salary
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherAnnual; ?></div><br />
        Annual Household Income
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherHouseIncome; ?></div><br />
        Annual Additional Income
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherAdditionalIncome; ?></div><br />
        Total Net Worth (All Assets)
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherTotalNetWorth; ?></div><br />
        Liquid Net Worth (All Assets minus properties)
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherLiquidNetWorth; ?></div><br />
        Purpose of the insurance policy:
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherPurposePolicy; ?></div><br />
        Have you recently filed for bankruptcy?
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherBankrupcy; ?></div><br />
        Have you sold or plan to sell this policy to a life settlement provider? 
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherSellPolicy; ?></div><br />
        Do you plan to take out loan(s) to pay for this policy?
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherLoanPayPolicy; ?></div><br />
        Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
            <div class="boldcapsblack"><?php echo $ownerInfoList->otherPurchasingPolicy; ?></div><br /><br />  
         </li>
     </ul>
     
     <?php } ?>
     
        <ul>
             <?php  if($insuredInfoList->ownerId != "0"){ //in case OTHER ?>   
                <div class="subhed_h3">INSURED INFORMATION</div>
                <li>
                My relation to the Insured on this policy is: 
                 <div class="boldcapsblack"><?php echo $insuredInfoList->relateToInsured ?></div>
                </li>
            <?php }else{ ?>
                <div class="subhed_h3">APPLICANT / INSURED INFORMATION</div>
            <?php } ?>
                
                <li>
                Last Name :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->lastName ?></div>&nbsp;&nbsp;&nbsp;&nbsp;
                First Name :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->firstName ?></div>&nbsp;&nbsp;
                MI :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->middleName ?></div> 
                </li>
                <li>
                Address :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->address ?></div>
                </li>
                <li>
                I lived in this address for :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->addrYears ?></div>
                </li>
                <li>Tel :
                <div class="boldcapsblack"><?php echo $insuredInfoList->tel ?></div>
                </li>
                
                <li>Email :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->email ?></div></li>
                <li>Gender :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->gender ?></div></li>
                <li>DOB :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->dob ?></div></li>
                <li>Social Security No. 
                    <div class="boldcapsblack"><?php echo 'XXX-XX-'.substr($insuredInfoList->ssn, -4); ?></div></li>
                <li>Driver License/State ID No.
                    <div class="boldcapsblack"><?php echo $insuredInfoList->driverNo ?></div></li>
                <li>State :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->driverState ?></div></li>
                <li>Issue Date :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->driverIssueDate ?></div></li>
                <li>Exp. Date :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->driverExpDate ?></div></li>
                <li>Citizenship :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->citizenship ?></div></li>
                <li>Birth place :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->birthPlace ?></div></li>
                <li>Occupation :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->occupation ?></div></li>
                <li>Title :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->occupationTitle ?></div></li>
                <li>Employer Name :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->employerName ?></div></li>
                <li>Employer Address :
                    <div class="boldcapsblack"><?php echo $insuredInfoList->employerAddr ?></div></li>
                <li>Are you a a currently full-time member of Armed Forces? 
                    <div class="boldcapsblack"><?php echo $insuredInfoList->armedForce ?></div></li>
                <li>Do you have any other existing life insurance policies?
                    <div class="boldcapsblack"><?php echo $insuredInfoList->existing ?></div></li>
                <li>Will this policy cause termination, replacement or change of any existing policy (does not include employer provided policies)?
                    <div class="boldcapsblack"><?php echo $insuredInfoList->replacementChange ?></div></li>
              </ul>
        
   
     
     <!-- 
        #### common : Health & Life Style Questions
      -->
     
    
     <ul><span class="subhed_h3">Health & Life Style Questions</span>
        
        <li>Have you recently had a driver's license suspended, revoked or restricted?
                    <div class="boldcapsblack"><?php echo $insuredInfoList->driverRevoked ?></div></li>
                
        <li>Have you recently been convicted of, or pleaded guilty to, reckless or negligent driving or driving under the influence of alcohol or drugs?
            <div class="boldcapsblack"><?php echo $insuredInfoList->convict ?></div></li>
        <li>Have you recently been disabled for two or more weeks?
            <div class="boldcapsblack"><?php echo $insuredInfoList->disabled ?></div></li>
        <li>Have you ever applied for a life or health insurance and been declined? 
            <div class="boldcapsblack"><?php echo $insuredInfoList->healthDeclined ?></div></li>
        <li>Have you ever been convicted of, or plead guilty or no contest to, a felony, or are current felony charges pending?
            <div class="boldcapsblack"><?php echo $insuredInfoList->felonyPending ?></div></li>
        <li>Do you ever plan to travel for an extended period or reside in foreign countries?
            <div class="boldcapsblack"><?php echo $insuredInfoList->travel ?></div></li>
        <li>Have you recently piloted any kind or aircraft or plan to do so?
            <div class="boldcapsblack"><?php echo $insuredInfoList->aircraft ?></div></li>
        <li>Have you recently been involved in or plan to engage in motor racing, underwater diving, skydiving, ballooning, hang gliding, parachuting or other potentially hazardous sports or hobbies? 
            <div class="boldcapsblack"><?php echo $insuredInfoList->skydiving ?></div></li>
        <li>Have you ever received medical treatment or been advised by a physician to reduce or discontinue the use of alcohol or prescribed or non-prescribed drugs?
            <div class="boldcapsblack"><?php echo $insuredInfoList->medicalTreatment ?></div></li>
        <li>Do you use tobacco or nicotine products?
            <div class="boldcapsblack"><?php echo $insuredInfoList->tobacco ?></div></li>
        <li>Have you recently experienced rapid weight gain/loss?
            <div class="boldcapsblack"><?php echo $insuredInfoList->rapidWeight ?></div></li>
        <li>Do you have a pre-existing heart condition or disease; or experienced stroke, or had cancer?
            <div class="boldcapsblack"><?php echo $insuredInfoList->preDisease ?></div></li>
        <li>Within the past 10 years, have you been diagnosed or treated for Acquired Immune Deficiency Syndrome (AIDS) or AIDS-Related Complex (ARC) by a member of the medical profession?
            <div class="boldcapsblack"><?php echo $insuredInfoList->diagnosed ?></div></li>
        <li>Have you recently been hospitalized? 
            <div class="boldcapsblack"><?php echo $insuredInfoList->hospitalized ?></div></li>
    </ul>
      
     
     <?php  if($insuredInfoList->ownerId != "0"){ //in case OTHER ?>   
     <ul>
         <div class="subhed_h3">Financial Information & Suitability</div>
         <li>
        
    
        Annual Wage & Salary
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherAnnual; ?></div><br />
        Annual Household Income
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherHouseIncome; ?></div><br />
        Annual Additional Income
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherAdditionalIncome; ?></div><br />
        Total Net Worth (All Assets)
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherTotalNetWorth; ?></div><br />
        Liquid Net Worth (All Assets minus properties)
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherLiquidNetWorth; ?></div><br />
        Purpose of the insurance policy:
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherPurposePolicy; ?></div><br />
        Have you recently filed for bankruptcy?
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherBankrupcy; ?></div><br />
        Have you sold or plan to sell this policy to a life settlement provider? 
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherSellPolicy; ?></div><br />
        Do you plan to take out loan(s) to pay for this policy?
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherLoanPayPolicy; ?></div><br />
        Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
            <div class="boldcapsblack"><?php echo $insuredInfoList->otherPurchasingPolicy; ?></div><br /><br />  
         </li>
     </ul>
     <?php } else { //In case SELF?>
     <ul>  
        <p><span class="subhed_h3">Financial Information & Suitability</span></p>  
        <li>Annual Wage & Salary
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfAnnual ?></div></li>
        <li>Annual Household Income
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfHouseIncome ?></div></li>
        <li>Annual Additional Income
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfAdditionalIncome ?></div></li>
        <li>Total Net Worth (All Assets)
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfTotalNetWorth ?></div></li>
        <li>Liquid Net Worth (All Assets minus properties)
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfLiquidNetWorth ?></div></li>
        <li>Purpose of the insurance policy:
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfPurposePolicy ?></div></li>
        <li>Have you recently filed for bankruptcy?
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfBankrupcy ?></div></li>
        <li>Have you sold or plan to sell this policy to a life settlement provider? 
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfSellPolicy ?></div></li>
        <li>Do you plan to take out loan(s) to pay for this policy?
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfLoanPayPolicy ?></div></li>
        <li>Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
            <div class="boldcapsblack"><?php echo $insuredInfoList->selfPurchasingPolicy ?></div></li>
 </ul>  
   
      <?php }; ?>       
            
     
     
     <ul>
        <span class="subhed_h3">BENEFICIARY INFORMATION</span>
        <li>
            <1><br />
            First Name : 
                <div class="boldcapsblack"><?php echo $insuredInfoList->firstNameBenefi1 ?></div><br />
            Last Name :
                <div class="boldcapsblack"><?php echo $insuredInfoList->lastNameBenefi1 ?></div><br />
            Date of Birth :
                <div class="boldcapsblack"><?php echo $insuredInfoList->DOBBenefi1 ?></div><br />
            SSN# :
                <div class="boldcapsblack"><?php echo 'XXX-XX-'.substr($insuredInfoList->ssBenefi1, -4) ?></div><br />
            Priorty :
                <div class="boldcapsblack"><?php echo $insuredInfoList->primaryBenefi1 ?></div><br />
            Portion  :
                <div class="boldcapsblack"><?php echo $insuredInfoList->portionBenefi1 ?></div><br />
            Relation :
                <div class="boldcapsblack"><?php echo $insuredInfoList->relationBenefi1 ?></div><br /><br />
        </li>
        <li>
            <2><br />
            First Name : 
                <div class="boldcapsblack"><?php echo $insuredInfoList->firstNameBenefi2 ?></div><br />
            Last Name :
                <div class="boldcapsblack"><?php echo $insuredInfoList->lastNameBenefi2 ?></div><br />
            Date of Birth :
                <div class="boldcapsblack"><?php echo $insuredInfoList->DOBBenefi2 ?></div><br />
            SSN# :
                <div class="boldcapsblack"><?php echo 'XXX-XX-'.substr($insuredInfoList->ssBenefi2, -4) ?></div><br />
            Priorty :
                <div class="boldcapsblack"><?php echo $insuredInfoList->primaryBenefi2 ?></div><br />
            Portion  :
                <div class="boldcapsblack"><?php echo $insuredInfoList->portionBenefi2 ?></div><br />
            Relation :
                <div class="boldcapsblack"><?php echo $insuredInfoList->relationBenefi2 ?></div><br /><br />
        </li>
        <li>
            <3><br />
            First Name : 
                <div class="boldcapsblack"><?php echo $insuredInfoList->firstNameBenefi3 ?></div><br />
            Last Name :
                <div class="boldcapsblack"><?php echo $insuredInfoList->lastNameBenefi3 ?></div><br />
            Date of Birth :
                <div class="boldcapsblack"><?php echo $insuredInfoList->DOBBenefi3 ?></div><br />
            SSN# :
                <div class="boldcapsblack"><?php echo 'XXX-XX-'.substr($insuredInfoList->ssBenefi3, -4) ?></div><br />
            Priorty :
                <div class="boldcapsblack"><?php echo $insuredInfoList->primaryBenefi3 ?></div><br />
            Portion  :
                <div class="boldcapsblack"><?php echo $insuredInfoList->portionBenefi3 ?></div><br />
            Relation :
                <div class="boldcapsblack"><?php echo $insuredInfoList->relationBenefi3 ?></div><br /><br />   
        </li>
        <li>
            <4><br />
        First Name : 
            <div class="boldcapsblack"><?php echo $insuredInfoList->firstNameBenefi4 ?></div><br />
        Last Name :
            <div class="boldcapsblack"><?php echo $insuredInfoList->lastNameBenefi4 ?></div><br />
        Date of Birth :
            <div class="boldcapsblack"><?php echo $insuredInfoList->DOBBenefi4 ?></div><br />
        SSN# :
            <div class="boldcapsblack"><?php echo 'XXX-XX-'.substr($insuredInfoList->ssBenefi4, -4) ?></div><br />
        Priorty :
            <div class="boldcapsblack"><?php echo $insuredInfoList->primaryBenefi4 ?></div><br />
        Portion  :
            <div class="boldcapsblack"><?php echo $insuredInfoList->portionBenefi4 ?></div><br />
        Relation :
            <div class="boldcapsblack"><?php echo $insuredInfoList->relationBenefi4 ?></div><br /><br />
        </li>
     </ul>
     
     
     
     
     <ul>
            
        <span class="subhed_h3">MEDICAL SCHEDULE</span>
        <li>
    
        First choice :
            <div class="boldcapsblack"><?php echo $insuredInfoList->medicalFirstDate;?></div> &nbsp; &nbsp; <div class="boldcapsblack"><?php echo $insuredInfoList->medicalFirstTime?></div><br />
        Second choice :
            <div class="boldcapsblack"><?php echo $insuredInfoList->medicalSecondDate;?></div> &nbsp; &nbsp; <div class="boldcapsblack"><?php echo $insuredInfoList->medicalSecondTime ?></div><br />
        Medical exam will take place at :
            <div class="boldcapsblack"><?php echo $insuredInfoList->medicalVisitAddress; ?></div><br /><br />
        
        </li>
     </ul>
        
     
     

</div>


