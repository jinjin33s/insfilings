<script type="text/javascript" src="<?php echo base_url(); ?>ckfinder/ckfinder.js"></script>



<form id='editForm' method='post' action='<?php echo base_url() . "admin/business_list/add_submit/"; ?>' >
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
                    <td><input name='insuranType' id='insuranType'  value='Business' disabled="disabled"/></td>
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
                    <td>BUSINESS INFOMATION </td>
                    <td></td><td></td><td></td>
               </tr> 
               <tr>
                    <td>companyName:</td>
                    <td><input name='companyName' id='companyName'  value=''/></td>
                    <td>contactFirstName:</td>
                    <td><input name='contactFirstName' id='contactFirstName'  value=''/></td>
               </tr>
               <tr>
                    <td>contactLastName:</td>
                    <td><input name='contactLastName' id='contactLastName'  value=''/></td>
                    <td>title:</td>
                    <td><input name='title' id='title'  value=''/></td>
               </tr>
               <tr>
                    <td>commissionAnnual:</td>
                    <td><input name='commissionAnnual' id='commissionAnnual'  value=''/></td>
                    <td>commissionMonth:</td>
                    <td><input name='commissionMonth' id='commissionMonth'  value=''/></td>
               </tr>
               <tr>
                    <td>company:</td>
                    <td><input name='company' id='company'  value=''/></td>
                    <td>policy:</td>
                    <td><input name='policy' id='policy'  value=''/></td>
               </tr>
               <tr>
                    <td>coverageEffectiveDate:</td>
                    <td><input name='coverageEffectiveDate' id='coverageEffectiveDate'  value=''/></td>
                    <td>issueDate:</td>
                    <td><input name='issueDate' id='issueDate'  value=''/></td>
               </tr>
               <tr>
                    <td>address:</td>
                    <td><input name='address' id='address'  value=''/></td>
                    <td>suite:</td>
                    <td><input name='suite' id='suite'  value=''/></td>
               </tr>
               <tr>
                    <td>city:</td>
                    <td><input name='city' id='city'  value=''/></td>
                    <td>state:</td>
                    <td><input name='state1' id='state1'  value=''/></td>
               </tr>
               <tr>
                    <td>zip1:</td>
                    <td><input name='zip1' id='zip1'  value=''/></td>
                    <td>tax Id:</td>
                    <td><input name='taxId' id='taxId'  value=''/></td>
               </tr>
               <tr>
                    <td>phone:</td>
                    <td><input name='phone1' id='phone1'  value=''/></td>
                    <td>fax:</td>
                    <td><input name='fax' id='fax'  value=''/></td>
               </tr>
               <tr>
                    <td>businessDescription:</td>
                    <td><input name='businessDescription' id='businessDescription'  value=''/></td>
                    <td>yearsInBusiness:</td>
                    <td><input name='yearsInBusiness' id='yearsInBusiness'  value=''/></td>
               </tr>
               <tr>
                    <td>annualGrossSale:</td>
                    <td><input name='annualGrossSale' id='annualGrossSale'  value=''/></td>
                    <td>operationDays:</td>
                    <td><input name='operationDays' id='operationDays'  value=''/></td>
               </tr>
               <tr>
                    <td>operationHours:</td>
                    <td><input name='operationHours' id='operationHours'  value=''/></td>
                    <td>businessDetail:</td>
                    <td><input name='businessDetail' id='businessDetail'  value=''/></td>
               </tr>
               <tr>
                    <td>PREVIOUS POLICY</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>previousPolicy:</td>
                    <td><input name='previousPolicy' id='previousPolicy'  value=''/></td>
                    <td>previousInsuranceCompany:</td>
                    <td><input name='previousInsuranceCompany' id='previousInsuranceCompany'  value=''/></td>
               </tr>
               <tr>
                    <td>reasonLeftPreviousCompany:</td>
                    <td><input name='reasonLeftPreviousCompany' id='reasonLeftPreviousCompany'  value=''/></td>
                    <td>previousPolicyNo:</td>
                    <td><input name='previousPolicyNo' id='previousPolicyNo'  value=''/></td>
               </tr>
               <tr>
                    <td>anyLoss:</td>
                    <td><input name='anyLoss' id='anyLoss'  value=''/></td>
                    <td>building:</td>
                    <td><input name='building' id='building'  value=''/></td>
               </tr>
               <tr>
                    <td>BUILDING</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>construction:</td>
                    <td><input name='construction' id='construction'  value=''/></td>
                    <td>noOfFloor:</td>
                    <td><input name='noOfFloor' id='noOfFloor'  value=''/></td>
               </tr>
               <tr>
                    <td>yearBuilt:</td>
                    <td><input name='yearBuilt' id='yearBuilt'  value=''/></td>
                    <td>totalArea:</td>
                    <td><input name='totalArea' id='totalArea'  value=''/></td>
               </tr>
               <tr>
                    <td>publicArea:</td>
                    <td><input name='publicArea' id='publicArea'  value=''/></td>
                    <td>rightExposure:</td>
                    <td><input name='rightExposure' id='rightExposure'  value=''/></td>
               </tr>
               <tr>
                    <td>leftExposure:</td>
                    <td><input name='leftExposure' id='leftExposure'  value=''/></td>
                    <td>safetySystems:</td>
                    <td><input name='safetySystems' id='safetySystems'  value=''/></td>
               </tr>
               <tr>
                    <td>buildingDetail:</td>
                    <td><input name='buildingDetail' id='nambuildingDetail_m1'  value=''/></td>
                    <td></td><td></td>
               </tr>
               <tr>
                    <td>PROPERTY</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>building:</td>
                    <td><input name='building' id='building'  value=''/></td>
                    <td>personalProperty:</td>
                    <td><input name='personalProperty' id='personalProperty'  value=''/></td>
               </tr>
               <tr>                    
                    <td>productLiability:</td>
                    <td><input name='productLiability' id='productLiability'  value=''/></td>
                    <td>propertyDetail:</td>
                    <td><input name='propertyDetail' id='propertyDetail'  value=''/></td>
               </tr>
               <tr>
                    <td>PROPERTY</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>generalAggregate:</td>
                    <td><input name='generalAggregate' id='generalAggregate'  value=''/></td>
                    <td>prodCompOptAggregate:</td>
                    <td><input name='prodCompOptAggregate' id='prodCompOptAggregate'  value=''/></td>
               </tr>
               <tr>
                    <td>fireDamage:</td>
                    <td><input name='fireDamage' id='fireDamage'  value=''/></td>
                    <td>medical:</td>
                    <td><input name='medical' id='medical'  value=''/></td>
               </tr>
               <tr>
                    <td>liabilityDetail:</td>
                    <td><input name='liabilityDetail' id='liabilityDetail'  value=''/></td>
                    <td></td><td></td>
               </tr>
               <tr>
                    <td>VEHICLES</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>makeYearModel1:</td>
                    <td><input name='makeYearModel1' id='makeYearModel1'  value=''/></td>
                    <td>makeYearModel2:</td>
                    <td><input name='makeYearModel2' id='makeYearModel2'  value=''/></td>                    
               </tr>
               <tr>
                   <td>makeYearModel3:</td>
                    <td><input name='makeYearModel3' id='makeYearModel3'  value=''/></td>
                    <td>makeYearModel4:</td>
                    <td><input name='makeYearModel4' id='makeYearModel4'  value=''/></td>                    
               </tr>
               <tr>
                   <td>makeYearModel5:</td>
                    <td><input name='makeYearModel5' id='makeYearModel5'  value=''/></td>
                   <td>vehicleDetail:</td>
                    <td><input name='vehicleDetail' id='vehicleDetail'  value=''/></td>
               </tr>
               <tr>
                    <td>DISABILITY</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>policyNo_disability:</td>
                    <td><input name='policyNo_disability' id='policyNo_disability'  value=''/></td>
                    <td>effectiveDate_disability:</td>
                    <td><input name='effectiveDate_disability' id='effectiveDate_disability'  value=''/></td>
               </tr>
               <tr>
                    <td>issueDate_disability:</td>
                    <td><input name='issueDate_disability' id='issueDate_disability'  value=''/></td>
                    <td>nameAndTitle1_disability:</td>
                    <td><input name='nameAndTitle1_disability' id='nameAndTitle1_disability'  value=''/></td>
               </tr>
               <tr>
                    <td>nameAndTitle2_disability:</td>
                    <td><input name='nameAndTitle2_disability' id='nameAndTitle2_disability'  value=''/></td>
                    <td>nameAndTitle3_disability:</td>
                    <td><input name='nameAndTitle3_disability' id='nameAndTitle3_disability'  value=''/></td>
               </tr>
               <tr>
                    <td>nameAndTitle4_disability:</td>
                    <td><input name='nameAndTitle4_disability' id='nameAndTitle4_disability'  value=''/></td>
                    <td>nameAndTitle5_disability:</td>
                    <td><input name='nameAndTitle5_disability' id='nameAndTitle5_disability'  value=''/></td>
               </tr>
               <tr>
                    <td>WORKERS COMPENSATION</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>policyNo_workers:</td>
                    <td><input name='policyNo_workers' id='policyNo_workers'  value=''/></td>
                    <td>effectiveDate_workers:</td>
                    <td><input name='effectiveDate_workers' id='effectiveDate_workers'  value=''/></td>
               </tr>
               <tr>
                    <td>issueDate_workers:</td>
                    <td><input name='issueDate_workers' id='issueDate_workers'  value=''/></td>
                    <td>nameAndTitle1_workers:</td>
                    <td><input name='nameAndTitle1_workers' id='nameAndTitle1_workers'  value=''/></td>
               </tr>
               <tr>
                    <td>nameAndTitle2_workers:</td>
                    <td><input name='nameAndTitle2_workers' id='nameAndTitle2_workers'  value=''/></td>
                    <td>nameAndTitle3_workers:</td>
                    <td><input name='nameAndTitle3_workers' id='nameAndTitle3_workers'  value=''/></td>
               </tr>
               <tr>
                    <td>nameAndTitle4_workers:</td>
                    <td><input name='nameAndTitle4_workers' id='nameAndTitle4_workers'  value=''/></td>
                    <td>nameAndTitle5_workers:</td>
                    <td><input name='nameAndTitle5_workers' id='nameAndTitle5_workers'  value=''/></td>
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


