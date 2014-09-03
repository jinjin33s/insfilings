<script type="text/javascript" src="<?php echo base_url(); ?>ckfinder/ckfinder.js"></script>

 
<script type="text/javascript">
    $(document).ready(function(){
        $('#status').val('<?= $applicantInfo->status ?>');
    });
</script>

<script type="text/javascript">
            $(document).ready(function(){
                $('#issuedDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#created_at').datepicker({dateFormat:'yy-mm-dd'});
                $('#updated_at').datepicker({dateFormat:'yy-mm-dd'});

                $('#coverageEffectiveDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#issueDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#ownerDOB_basic1').datepicker({dateFormat:'yy-mm-dd'});
                $('#yearBuilt').datepicker({dateFormat:'yy-mm-dd'});
            });
</script>

<form id='editForm' method='post' action='<?php echo base_url() . "admin/house_list/update_submit/" . $applicantInfo->id; ?>' >
    <div id="tab_data" style="display:block">

            <table class="form">
                <tr>
                    <td>ID:</td>
                    <td><input name='h_id' id='h_id'  value='<?= $applicantInfo->id ?>' disabled="disabled"/></td>
                    <td>STATUS:</td>
                    <td><select name='status' id='status'  value=''>
                            <option value="INQUIRY">INQUIRY</option>
                            <option value="FOLLOW-UP">FOLLOW-UP</option>
                            <option value="PENDING">PENDING</option>
                            <option value="CLIENT">CLIENT</option>
                            <option value="CANCEL">CANCEL</option>
                            <option value="TRASH">TRASH</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input name='lastName' id='lastName'  value='<?= $applicantInfo->lastName ?>'/></td>
                    <td>First Name:</td>
                    <td><input name='firstName' id='firstName'  value='<?= $applicantInfo->firstName ?>'/></td>
               </tr>
               <tr>
                    <td>Type:</td>
                    <td><input name='insuranType' id='insuranType'  value='<?= $applicantInfo->insuranType ?>'/></td>
                    <td>Age:</td>
                    <td><input name='age' id='age'  value='<?= $applicantInfo->age ?>'/></td>
               </tr>
                <tr>
                    <td>Source:</td>
                    <td><input name='source' id='source'  value='<?= $applicantInfo->source ?>'/></td>
                    <td>Phone:</td>
                    <td><input name='phone' id='phone'  value='<?= $applicantInfo->phone ?>'/></td>
               </tr>
               <tr>
                    <td>Email:</td>
                    <td><input name='email' id='email'  value='<?= $applicantInfo->email ?>'/></td>
                    <td>Sex:</td>
                    <td><input name='sex' id='sex'  value='<?= $applicantInfo->sex ?>'/></td>
               </tr>
                <tr>
                    <td>Company:</td>
                    <td><input name='company' id='company'  value='<?= $applicantInfo->company ?>'/></td>
                    <td>State:</td>
                    <td><input name='state' id='state'  value='<?= $applicantInfo->state ?>'/></td>
               </tr>
               <tr>
                    <td>Issued Date:</td>
                    <td><input name='issuedDate' id='issuedDate'  value='<?= $applicantInfo->issuedDate ?>'/></td>
                    <td>Commission Annual:</td>
                    <td><input name='commissionAnnual' id='commissionAnnual'  value='<?= $applicantInfo->commissionAnnual ?>'/></td>
               </tr>
               <tr>
                    <td>Zip:</td>
                    <td><input name='zip' id='zip'  value='<?= $applicantInfo->zip ?>'/></td>
                    <td>Policy:</td>
                    <td><input name='policy' id='policy'  value='<?= $applicantInfo->policy ?>'/></td>
               </tr>
               <tr>
                    <td>Agent1:</td>
                    <td><input name='agent1' id='agent1'  value='<?= $applicantInfo->agent1 ?>'/></td>
                    <td>Agent2:</td>
                    <td><input name='agent2' id='agent2'  value='<?= $applicantInfo->agent2 ?>'/></td>
               </tr>
               <tr>
                    <td>Agent3:</td>
                    <td><input name='agent3' id='agent3'  value='<?= $applicantInfo->agent3 ?>'/></td>
                    <td>Agent4:</td>
                    <td><input name='agent4' id='agent4'  value='<?= $applicantInfo->agent4 ?>'/></td>
               </tr>
               <tr>
                    <td>Create Date:</td>
                    <td><input name='created_at' id='created_at'  value='<?= $applicantInfo->created_at ?>'/></td>
                    <td>Update Date:</td>
                    <td><input name='updated_at' id='updated_at'  value='<?= $applicantInfo->updated_at ?>'/></td>
               </tr>
               
               <tr>                    
                    <td>coverageType:</td>
                    <td><input name='coverageType' id='coverageType'  value='<?= $houseInfo->coverageType ?>'/></td>
               </tr>
               <tr>
                    <td>premiumAmountAnnual:</td>
                    <td><input name='premiumAmountAnnual' id='premiumAmountAnnual'  value='<?= $houseInfo->premiumAmountAnnual ?>'/></td>
                    <td>premiumMode:</td>
                    <td><input name='premiumMode' id='premiumMode'  value='<?= $houseInfo->premiumMode ?>'/></td>
               </tr>
               <tr>
                    <td>premium:</td>
                    <td><input name='premium' id='premium'  value='<?= $houseInfo->premium ?>'/></td>
                    <td>commissionAnnual:</td>
                    <td><input name='commissionAnnual' id='commissionAnnual'  value='<?= $houseInfo->commissionAnnual ?>'/></td>
               </tr>
               <tr>
                    <td>commissionMonth:</td>
                    <td><input name='commissionMonth' id='commissionMonth'  value='<?= $houseInfo->commissionMonth ?>'/></td>
                    <td>company:</td>
                    <td><input name='company' id='company'  value='<?= $houseInfo->company ?>'/></td>
               </tr>
               <tr>
                    <td>policy:</td>
                    <td><input name='policy1' id='policy1'  value='<?= $houseInfo->policy ?>'/></td>
                    <td>coverageEffectiveDate:</td>
                    <td><input name='coverageEffectiveDate' id='coverageEffectiveDate'  value='<?= $houseInfo->coverageEffectiveDate ?>'/></td>
               </tr>
               <tr>
                    <td>issueDate:</td>
                    <td><input name='issueDate' id='issueDate'  value='<?= $houseInfo->issueDate ?>'/></td>
                    <td></td><td></td>
               </tr>
               <tr>
                   <td>BASIC INFO</td>
                   <td></td><td></td><td></td>
               </tr>
               <tr>
                   <td>ownerLastName_basic1:</td>
                    <td><input name='ownerLastName_basic1' id='ownerLastName_basic1'  value='<?= $houseInfo->ownerLastName_basic1 ?>'/></td>
                    <td>ownerFirstName_basic1:</td>
                    <td><input name='ownerFirstName_basic1' id='ownerFirstName_basic1'  value='<?= $houseInfo->ownerFirstName_basic1 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>ownerDOB_basic1:</td>
                    <td><input name='ownerDOB_basic1' id='ownerDOB_basic1'  value='<?= $houseInfo->ownerDOB_basic1 ?>'/></td>
                    <td>ownerNote_basic1:</td>
                    <td><input name='ownerNote_basic1' id='ownerNote_basic1'  value='<?= $houseInfo->ownerNote_basic1 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>ownerLastName_basic2:</td>
                    <td><input name='ownerLastName_basic2' id='ownerLastName_basic2'  value='<?= $houseInfo->ownerLastName_basic2 ?>'/></td>
                    <td>ownerFirstName_basic2:</td>
                    <td><input name='ownerFirstName_basic2' id='ownerFirstName_basic2'  value='<?= $houseInfo->ownerFirstName_basic2 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>ownerDOB_basic2:</td>
                    <td><input name='ownerDOB_basic2' id='ownerDOB_basic2'  value='<?= $houseInfo->ownerDOB_basic2 ?>'/></td>
                    <td>ownerNote_basic2:</td>
                    <td><input name='ownerNote_basic2' id='ownerNote_basic2'  value='<?= $houseInfo->ownerNote_basic2 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>address_R:</td>
                    <td><input name='address_R' id='address_R'  value='<?= $houseInfo->address_R ?>'/></td>
                    <td>address_R_apt:</td>
                    <td><input name='address_R_apt' id='address_R_apt'  value='<?= $houseInfo->address_R_apt ?>'/></td>
                  
               </tr>
               <tr>
                     <td>address_R_city:</td>
                    <td><input name='address_R_city' id='address_R_city'  value='<?= $houseInfo->address_R_city ?>'/></td>
                    <td>address_R_state:</td>
                    <td><input name='address_R_state' id='address_R_state'  value='<?= $houseInfo->address_R_state ?>'/></td>
                   
               </tr>
               <tr>
                    <td>address_R_zip:</td>
                    <td><input name='address_R_zip' id='address_R_zip'  value='<?= $houseInfo->address_R_zip ?>'/></td>
                    <td>mortgageCompanyName:</td>
                    <td><input name='mortgageCompanyName' id='mortgageCompanyName'  value='<?= $houseInfo->mortgageCompanyName ?>'/></td>
                   
               </tr>
               <tr>
                    <td>mortgageCompanyAddress:</td>
                    <td><input name='mortgageCompanyAddress' id='mortgageCompanyAddress'  value='<?= $houseInfo->mortgageCompanyAddress ?>'/></td>
                    <td>mortgageNumber:</td>
                    <td><input name='mortgageNumber' id='mortgageNumber'  value='<?= $houseInfo->mortgageNumber ?>'/></td>                    
               </tr>
               <tr>
                   <td>PREVIOUS POLICY</td>
                   <td></td><td></td><td></td>
               </tr>
               <tr>                   
                    <td>previousInsuranceCompany:</td>
                    <td><input name='previousInsuranceCompany' id='previousInsuranceCompany'  value='<?= $houseInfo->previousInsuranceCompany ?>'/></td>                  
                    <td>anyLoss:</td>
                    <td><input name='anyLoss' id='anyLoss'  value='<?= $houseInfo->anyLoss ?>'/></td>
               </tr>
               <tr>
                     <td>reasonLeftPreviousCompany:</td>
                    <td><input name='reasonLeftPreviousCompany' id='reasonLeftPreviousCompany'  value='<?= $houseInfo->reasonLeftPreviousCompany ?>'/></td>
                    <td>previousPolicyNo:</td>
                    <td><input name='previousPolicyNo' id='previousPolicyNo'  value='<?= $houseInfo->previousPolicyNo ?>'/></td>                    
               </tr>               
               <tr>
                   <td>COVERAGE</td>
                   <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>coverage:</td>
                    <td><input name='coverage' id='coverage'  value='<?= $houseInfo->coverage ?>'/></td>
                    <td>dwelling:</td>
                    <td><input name='dwelling' id='dwelling'  value='<?= $houseInfo->dwelling ?>'/></td>
               </tr>
               <tr>
                    <td>personalProperty:</td>
                    <td><input name='personalProperty' id='personalProperty'  value='<?= $houseInfo->personalProperty ?>'/></td>
                    <td>liability:</td>
                    <td><input name='liability' id='liability'  value='<?= $houseInfo->liability ?>'/></td>
               </tr>
               <tr>
                    <td>medical:</td>
                    <td><input name='medical' id='medical'  value='<?= $houseInfo->medical ?>'/></td>
                    <td>occupancy:</td>
                    <td><input name='occupancy' id='occupancy'  value='<?= $houseInfo->occupancy ?>'/></td>
               </tr>
                <tr>
                   <td>DWELLING INFO</td>
                   <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>marketValue:</td>
                    <td><input name='marketValue' id='marketValue'  value='<?= $houseInfo->marketValue ?>'/></td>
                    <td>yearBuilt:</td>
                    <td><input name='yearBuilt' id='yearBuilt'  value='<?= $houseInfo->yearBuilt ?>'/></td>
               </tr>
               <tr>
                    <td>construction:</td>
                    <td><input name='construction' id='construction'  value='<?= $houseInfo->construction ?>'/></td>
                    <td>roof:</td>
                    <td><input name='roof' id='roof'  value='<?= $houseInfo->roof ?>'/></td>
               </tr>
               <tr>
                    <td>alarm:</td>
                    <td><input name='alarm' id='alarm'  value='<?= $houseInfo->alarm ?>'/></td>
                    <td>squareFoot:</td>
                    <td><input name='squareFoot' id='squareFoot'  value='<?= $houseInfo->squareFoot ?>'/></td>
               </tr>
               <tr>
                    <td>noOfStories:</td>
                    <td><input name='noOfStories' id='noOfStories'  value='<?= $houseInfo->noOfStories ?>'/></td>
                    <td>noOfFamily:</td>
                    <td><input name='noOfFamily' id='noOfFamily'  value='<?= $houseInfo->noOfFamily ?>'/></td>
               </tr>
               <tr>                    
                   <td>general Note:</td>
                   <td colspan="3"><textarea name='generalNote' id='generalNote' cols='100'><? echo $houseInfo->generalNote; ?></textarea>
                    <?php
                        echo form_ckeditor(array('id' => 'generalNote',
                            'width' => '500',
                            'height' => '300'));
                    ?>
                    </td>
                    <td></td><td></td>
               </tr>

                <tr>
                    <td colspan="2"><input type="submit" value="submit" /></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
    </div>
 </form>


