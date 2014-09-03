<script type="text/javascript" src="<?php echo base_url(); ?>ckfinder/ckfinder.js"></script>

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

<form id='editForm' method='post' action='<?php echo base_url() . "admin/house_list/add_submit/"; ?>' >
    <div id="tab_data" style="display:block">

            <table class="form">
                <tr>
                    <td>ID:</td>
                    <td><input name='id' id='id'  value='' disabled="disabled"/></td>
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
                    <td><input name='lastName' id='lastName'  value=''/></td>
                    <td>First Name:</td>
                    <td><input name='firstName' id='firstName'  value=''/></td>
               </tr>
               <tr>
                    <td>Type:</td>
                    <td><input name='insuranType' id='insuranType'  value='House' disabled="disabled"/></td>
                    <td>Age:</td>
                    <td><input name='age' id='age'  value=''/></td>
               </tr>
                <tr>
                    <td>Source:</td>
                    <td><input name='source' id='source'  value=''/></td>
                    <td>Phone:</td>
                    <td><input name='phone' id='phone'  value=''/></td>
               </tr>
               <tr>
                    <td>Email:</td>
                    <td><input name='email' id='email'  value=''/></td>
                    <td>Sex:</td>
                    <td><input name='sex' id='sex'  value=''/></td>
               </tr>
                <tr>
                    <td>Company:</td>
                    <td><input name='company' id='company'  value=''/></td>
                    <td>State:</td>
                    <td><input name='state' id='state'  value=''/></td>
               </tr>
               <tr>
                    <td>Issued Date:</td>
                    <td><input name='issuedDate' id='issuedDate'  value=''/></td>
                    <td>Commission Annual:</td>
                    <td><input name='commissionAnnual' id='commissionAnnual'  value=''/></td>
               </tr>
               <tr>
                    <td>Zip:</td>
                    <td><input name='zip' id='zip'  value=''/></td>
                    <td>Policy:</td>
                    <td><input name='policy' id='policy'  value=''/></td>
               </tr>
               <tr>
                    <td>Agent1:</td>
                    <td><input name='agent1' id='agent1'  value=''/></td>
                    <td>Agent2:</td>
                    <td><input name='agent2' id='agent2'  value=''/></td>
               </tr>
               <tr>
                    <td>Agent3:</td>
                    <td><input name='agent3' id='agent3'  value=''/></td>
                    <td>Agent4:</td>
                    <td><input name='agent4' id='agent4'  value=''/></td>
               </tr>
               <tr>
                    <td>Create Date:</td>
                    <td><input name='created_at' id='created_at'  value='' disabled="disabled"/></td>
                    <td>Update Date:</td>
                    <td><input name='updated_at' id='updated_at'  value='' disabled="disabled"/></td>
               </tr>

               <tr>
                   <td>BASIC INFO</td>
                   <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>State:</td>
                    <td><input name='state' id='state'  value=''/></td>
                    <td>coverageType:</td>
                    <td><input name='coverageType' id='coverageType'  value=''/></td>
               </tr>
               <tr>
                    <td>premiumAmountAnnual:</td>
                    <td><input name='premiumAmountAnnual' id='premiumAmountAnnual'  value=''/></td>
                    <td>premiumMode:</td>
                    <td><input name='premiumMode' id='premiumMode'  value=''/></td>
               </tr>
               <tr>
                    <td>premium:</td>
                    <td><input name='premium' id='premium'  value=''/></td>
                    <td>commissionAnnual:</td>
                    <td><input name='commissionAnnual' id='commissionAnnual'  value=''/></td>
               </tr>
               <tr>
                    <td>commissionMonth:</td>
                    <td><input name='commissionMonth' id='commissionMonth'  value=''/></td>
                    <td>company:</td>
                    <td><input name='company' id='company'  value=''/></td>
               </tr>
               <tr>
                    <td>policy:</td>
                    <td><input name='policy1' id='policy1'  value=''/></td>
                    <td>coverageEffectiveDate:</td>
                    <td><input name='coverageEffectiveDate' id='coverageEffectiveDate'  value=''/></td>
               </tr>
               <tr>
                    <td>issueDate:</td>
                    <td><input name='issueDate' id='issueDate'  value=''/></td>
                    <td></td><td></td>
               </tr>
              
               <tr>
                   <td>ownerLastName_basic1:</td>
                    <td><input name='ownerLastName_basic1' id='ownerLastName_basic1'  value=''/></td>
                    <td>ownerFirstName_basic1:</td>
                    <td><input name='ownerFirstName_basic1' id='ownerFirstName_basic1'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>ownerDOB_basic1:</td>
                    <td><input name='ownerDOB_basic1' id='ownerDOB_basic1'  value=''/></td>
                    <td>ownerNote_basic1:</td>
                    <td><input name='ownerNote_basic1' id='ownerNote_basic1'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>ownerLastName_basic2:</td>
                    <td><input name='ownerLastName_basic2' id='ownerLastName_basic2'  value=''/></td>
                    <td>ownerFirstName_basic2:</td>
                    <td><input name='ownerFirstName_basic2' id='ownerFirstName_basic2'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>ownerDOB_basic2:</td>
                    <td><input name='ownerDOB_basic2' id='ownerDOB_basic2'  value=''/></td>
                    <td>ownerNote_basic2:</td>
                    <td><input name='ownerNote_basic2' id='ownerNote_basic2'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>address_R:</td>
                    <td><input name='address_R' id='address_R'  value=''/></td>
                    <td>address_R_apt:</td>
                    <td><input name='address_R_apt' id='address_R_apt'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>address_R_city:</td>
                    <td><input name='address_R_city' id='address_R_city'  value=''/></td>
                    <td>address_R_state:</td>
                    <td><input name='address_R_state' id='address_R_state'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>address_R_zip:</td>
                    <td><input name='address_R_zip' id='address_R_zip'  value=''/></td>
                    <td>mortgageCompanyName:</td>
                    <td><input name='mortgageCompanyName' id='mortgageCompanyName'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>mortgageCompanyAddress:</td>
                    <td><input name='mortgageCompanyAddress' id='mortgageCompanyAddress'  value=''/></td>
                    <td>mortgageNumber:</td>
                    <td><input name='mortgageNumber' id='mortgageNumber'  value=''/></td>                    
               </tr>
               <tr>
                   <td>PREVIOUS POLICY</td>
                   <td></td><td></td><td></td>
               </tr>
               <tr>                   
                    <td>previousInsuranceCompany:</td>
                    <td><input name='previousInsuranceCompany' id='previousInsuranceCompany'  value=''/></td>
                    <td>anyLoss:</td>
                    <td><input name='anyLoss' id='anyLoss'  value=''/></td>
               </tr>
               <tr>
                    <td>reasonLeftPreviousCompany:</td>
                    <td><input name='reasonLeftPreviousCompany' id='reasonLeftPreviousCompany'  value=''/></td>
                     <td>previousPolicyNo:</td>
                    <td><input name='previousPolicyNo' id='previousPolicyNo'  value=''/></td>
               </tr>
               <tr>
                   <td>COVERAGE</td>
                   <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>coverage:</td>
                    <td><input name='coverage' id='coverage'  value=''/></td>
                    <td>dwelling:</td>
                    <td><input name='dwelling' id='dwelling'  value=''/></td>
               </tr>
               <tr>
                    <td>personalProperty:</td>
                    <td><input name='personalProperty' id='personalProperty'  value=''/></td>
                    <td>liability:</td>
                    <td><input name='liability' id='liability'  value=''/></td>
               </tr>
               <tr>
                    <td>medical:</td>
                    <td><input name='medical' id='medical'  value=''/></td>
                    <td>occupancy:</td>
                    <td><input name='occupancy' id='occupancy'  value=''/></td>
               </tr>
               <tr>
                   <td>DWELLING INFO</td>
                   <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>marketValue:</td>
                    <td><input name='marketValue' id='marketValue'  value=''/></td>
                    <td>yearBuilt:</td>
                    <td><input name='yearBuilt' id='yearBuilt'  value=''/></td>
               </tr>
               <tr>
                    <td>construction:</td>
                    <td><input name='construction' id='construction'  value=''/></td>
                    <td>roof:</td>
                    <td><input name='roof' id='roof'  value=''/></td>
               </tr>
               <tr>
                    <td>alarm:</td>
                    <td><input name='alarm' id='alarm'  value=''/></td>
                    <td>squareFoot:</td>
                    <td><input name='squareFoot' id='squareFoot'  value=''/></td>
               </tr>
               <tr>
                    <td>noOfStories:</td>
                    <td><input name='noOfStories' id='noOfStories'  value=''/></td>
                    <td>noOfFamily:</td>
                    <td><input name='noOfFamily' id='noOfFamily'  value=''/></td>
               </tr>
               <tr>                    
                    <td>general Note:</td>
                    <td colspan="3"><textarea name='generalNote' id='generalNote'  cols="100" value=''></textarea>
                    <?php
                    echo form_ckeditor(array('id' => 'generalNote',
                        'width' => '500',
                        'height' => '300',
                        'value' => ''));
                    ?>
                    </td>
               </tr>
               
                <tr>
                    <td colspan="2"><input type="submit" value="submit" /></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
    </div>
 </form>


