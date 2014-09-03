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
                $('#yearBuilt').datepicker({dateFormat:'yy-mm-dd'});
                $('#effectiveDate_disability').datepicker({dateFormat:'yy-mm-dd'});
                $('#issueDate_disability').datepicker({dateFormat:'yy-mm-dd'});
                $('#effectiveDate_workers').datepicker({dateFormat:'yy-mm-dd'});
                $('#issueDate_workers').datepicker({dateFormat:'yy-mm-dd'});
            });
</script>

<form id='editForm' method='post' action='<?php echo base_url() . "admin/business_list/update_submit/" . $applicantInfo->id; ?>' >
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
                    <td>BUSINESS INFOMATION </td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>companyName:</td>
                    <td><input name='companyName' id='companyName'  value='<?= $businessInfo->companyName ?>'/></td>
                    <td>contactFirstName:</td>
                    <td><input name='contactFirstName' id='contactFirstName'  value='<?= $businessInfo->contactFirstName ?>'/></td>
               </tr>
               <tr>
                    <td>contactLastName:</td>
                    <td><input name='contactLastName' id='contactLastName'  value='<?= $businessInfo->contactLastName ?>'/></td>
                    <td>title:</td>
                    <td><input name='title' id='title'  value='<?= $businessInfo->title ?>'/></td>
               </tr>
               <tr>
                    <td>commissionAnnual:</td>
                    <td><input name='commissionAnnual1' id='commissionAnnual1'  value='<?= $businessInfo->commissionAnnual ?>'/></td>
                    <td>commissionMonth:</td>
                    <td><input name='commissionMonth' id='commissionMonth'  value='<?= $businessInfo->commissionMonth ?>'/></td>
               </tr>
               <tr>
                    <td>company:</td>
                    <td><input name='company' id='company'  value='<?= $businessInfo->company ?>'/></td>
                    <td>policy:</td>
                    <td><input name='policy' id='policy'  value='<?= $businessInfo->policy ?>'/></td>
               </tr>
               <tr>
                    <td>coverageEffectiveDate:</td>
                    <td><input name='coverageEffectiveDate' id='coverageEffectiveDate'  value='<?= $businessInfo->coverageEffectiveDate ?>'/></td>
                    <td>issueDate:</td>
                    <td><input name='issueDate' id='issueDate'  value='<?= $businessInfo->issueDate ?>'/></td>
               </tr>
               <tr>
                    <td>address:</td>
                    <td><input name='address' id='address'  value='<?= $businessInfo->address ?>'/></td>
                    <td>suite:</td>
                    <td><input name='suite' id='suite'  value='<?= $businessInfo->suite ?>'/></td>
               </tr>
               <tr>
                    <td>city:</td>
                    <td><input name='city' id='city'  value='<?= $businessInfo->city ?>'/></td>
                    <td>state:</td>
                    <td><input name='state1' id='state1'  value='<?= $businessInfo->state ?>'/></td>
               </tr>
               <tr>
                    <td>zip:</td>
                    <td><input name='zip1' id='zip1'  value='<?= $businessInfo->zip ?>'/></td>
                    <td>taxId:</td>
                    <td><input name='taxId' id='taxId'  value='<?= $businessInfo->taxId ?>'/></td>
               </tr>
               <tr>
                    <td>phone:</td>
                    <td><input name='phone1' id='phone1'  value='<?= $businessInfo->phone ?>'/></td>
                    <td>fax:</td>
                    <td><input name='fax' id='fax'  value='<?= $businessInfo->fax ?>'/></td>
               </tr>
               <tr>
                    <td>businessDescription:</td>
                    <td><input name='businessDescription' id='businessDescription'  value='<?= $businessInfo->businessDescription ?>'/></td>
                    <td>yearsInBusiness:</td>
                    <td><input name='yearsInBusiness' id='yearsInBusiness'  value='<?= $businessInfo->yearsInBusiness ?>'/></td>
               </tr>
               <tr>
                    <td>annualGrossSale:</td>
                    <td><input name='annualGrossSale' id='annualGrossSale'  value='<?= $businessInfo->annualGrossSale ?>'/></td>
                    <td>operationDays:</td>
                    <td><input name='operationDays' id='operationDays'  value='<?= $businessInfo->operationDays ?>'/></td>
               </tr>
               <tr>
                    <td>operationHours:</td>
                    <td><input name='operationHours' id='operationHours'  value='<?= $businessInfo->operationHours ?>'/></td>
                    <td>businessDetail:</td>
                    <td><input name='businessDetail' id='businessDetail'  value='<?= $businessInfo->businessDetail ?>'/></td>
               </tr>
               <tr>
                    <td>PREVIOUS POLICY</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>previousPolicy:</td>
                    <td><input name='previousPolicy' id='previousPolicy'  value='<?= $businessInfo->previousPolicy ?>'/></td>
                    <td>previousInsuranceCompany:</td>
                    <td><input name='previousInsuranceCompany' id='previousInsuranceCompany'  value='<?= $businessInfo->previousInsuranceCompany ?>'/></td>
               </tr>
               <tr>
                    <td>reasonLeftPreviousCompany:</td>
                    <td><input name='reasonLeftPreviousCompany' id='reasonLeftPreviousCompany'  value='<?= $businessInfo->reasonLeftPreviousCompany ?>'/></td>
                    <td>previousPolicyNo:</td>
                    <td><input name='previousPolicyNo' id='previousPolicyNo'  value='<?= $businessInfo->previousPolicyNo ?>'/></td>
               </tr>
               <tr>
                    <td>anyLoss:</td>
                    <td><input name='anyLoss' id='anyLoss'  value='<?= $businessInfo->anyLoss ?>'/></td>
                    <td>building:</td>
                    <td><input name='building' id='building'  value='<?= $businessInfo->building ?>'/></td>
               </tr>
               <tr>
                    <td>BUILDING</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>construction:</td>
                    <td><input name='construction' id='construction'  value='<?= $businessInfo->construction ?>'/></td>
                    <td>noOfFloor:</td>
                    <td><input name='noOfFloor' id='noOfFloor'  value='<?= $businessInfo->noOfFloor ?>'/></td>
               </tr>
               <tr>
                    <td>yearBuilt:</td>
                    <td><input name='yearBuilt' id='yearBuilt'  value='<?= $businessInfo->yearBuilt ?>'/></td>
                    <td>totalArea:</td>
                    <td><input name='totalArea' id='totalArea'  value='<?= $businessInfo->totalArea ?>'/></td>
               </tr>
               <tr>
                    <td>publicArea:</td>
                    <td><input name='publicArea' id='publicArea'  value='<?= $businessInfo->publicArea ?>'/></td>
                    <td>rightExposure:</td>
                    <td><input name='rightExposure' id='rightExposure'  value='<?= $businessInfo->rightExposure ?>'/></td>
               </tr>
               <tr>
                    <td>leftExposure:</td>
                    <td><input name='leftExposure' id='leftExposure'  value='<?= $businessInfo->leftExposure ?>'/></td>
                    <td>safetySystems:</td>
                    <td><input name='safetySystems' id='safetySystems'  value='<?= $businessInfo->safetySystems ?>'/></td>
               </tr>
               <tr>
                    <td>buildingDetail:</td>
                    <td><input name='buildingDetail' id='buildingDetail'  value='<?= $businessInfo->buildingDetail ?>'/></td>
                    <td></td><td></td>
               </tr>
               <tr>
                    <td>PROPERTY</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>building:</td>
                    <td><input name='building' id='property'  value='<?= $businessInfo->building ?>'/></td>
                    <td>personalProperty:</td>
                    <td><input name='personalProperty' id='personalProperty'  value='<?= $businessInfo->personalProperty ?>'/></td>
               </tr>
               <tr>
                    <td>productLiability:</td>
                    <td><input name='productLiability' id='productLiability'  value='<?= $businessInfo->productLiability ?>'/></td>              
                    <td>propertyDetail:</td>
                    <td><input name='propertyDetail' id='propertyDetail'  value='<?= $businessInfo->propertyDetail ?>'/></td>                    
               </tr>
               <tr>
                    <td>PROPERTY</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>                   
                    <td>generalAggregate:</td>
                    <td><input name='generalAggregate' id='generalAggregate'  value='<?= $businessInfo->generalAggregate ?>'/></td>
                    <td>prodCompOptAggregate:</td>
                    <td><input name='prodCompOptAggregate' id='prodCompOptAggregate'  value='<?= $businessInfo->prodCompOptAggregate ?>'/></td>
               </tr>
               <tr>                     
                    <td>fireDamage:</td>
                    <td><input name='fireDamage' id='fireDamage'  value='<?= $businessInfo->fireDamage ?>'/></td>
                    <td>medical:</td>
                    <td><input name='medical' id='medical'  value='<?= $businessInfo->medical ?>'/></td>

               </tr>
               <tr>
                   <td>liabilityDetail:</td>
                   <td><input name='liabilityDetail' id='liabilityDetail'  value='<?= $businessInfo->liabilityDetail ?>'/></td>
                   <Td></Td><td></td>
               </tr>
               <tr>
                    <td>VEHICLES</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                   <td>makeYearModel1:</td>
                    <td><input name='makeYearModel1' id='makeYearModel1'  value='<?= $businessInfo->makeYearModel1 ?>'/></td>
                    <td>makeYearModel2:</td>
                    <td><input name='makeYearModel2' id='makeYearModel2'  value='<?= $businessInfo->makeYearModel2 ?>'/></td>                    
               </tr>
               <tr>
                   <td>makeYearModel3:</td>
                    <td><input name='makeYearModel3' id='makeYearModel3'  value='<?= $businessInfo->makeYearModel3 ?>'/></td>
                    <td>makeYearModel4:</td>
                    <td><input name='makeYearModel4' id='makeYearModel4'  value='<?= $businessInfo->makeYearModel4 ?>'/></td>                    
               </tr>
               <tr>
                   <td>makeYearModel5:</td>
                    <td><input name='makeYearModel5' id='makeYearModel5'  value='<?= $businessInfo->makeYearModel5 ?>'/></td>
                    <td>vehicleDetail:</td>
                    <td><input name='vehicleDetail' id='vehicleDetail'  value='<?= $businessInfo->vehicleDetail ?>'/></td>
               </tr>
               <tr>
                    <td>DISABILITY</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>policyNo_disability:</td>
                    <td><input name='policyNo_disability' id='policyNo_disability'  value='<?= $businessInfo->policyNo_disability ?>'/></td>
                    <td>effectiveDate_disability:</td>
                    <td><input name='effectiveDate_disability' id='effectiveDate_disability'  value='<?= $businessInfo->effectiveDate_disability ?>'/></td>
               </tr>
               <tr>
                    <td>issueDate_disability:</td>
                    <td><input name='issueDate_disability' id='issueDate_disability'  value='<?= $businessInfo->issueDate_disability ?>'/></td>
                    <td>nameAndTitle1_disability:</td>
                    <td><input name='nameAndTitle1_disability' id='nameAndTitle1_disability'  value='<?= $businessInfo->nameAndTitle1_disability ?>'/></td>
               </tr>
               <tr>
                    <td>nameAndTitle2_disability:</td>
                    <td><input name='nameAndTitle2_disability' id='nameAndTitle2_disability'  value='<?= $businessInfo->nameAndTitle2_disability ?>'/></td>
                    <td>nameAndTitle3_disability:</td>
                    <td><input name='nameAndTitle3_disability' id='nameAndTitle3_disability'  value='<?= $businessInfo->nameAndTitle3_disability ?>'/></td>
               </tr>
               <tr>
                    <td>nameAndTitle4_disability:</td>
                    <td><input name='nameAndTitle4_disability' id='nameAndTitle4_disability'  value='<?= $businessInfo->nameAndTitle4_disability ?>'/></td>
                    <td>nameAndTitle5_disability:</td>
                    <td><input name='nameAndTitle5_disability' id='nameAndTitle5_disability'  value='<?= $businessInfo->nameAndTitle5_disability ?>'/></td>
               </tr>
               <tr>
                    <td>WORKERS COMPENSATION</td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>policyNo_workers:</td>
                    <td><input name='policyNo_workers' id='policyNo_workers'  value='<?= $businessInfo->policyNo_workers ?>'/></td>
                    <td>effectiveDate_workers:</td>
                    <td><input name='effectiveDate_workers' id='effectiveDate_workers'  value='<?= $businessInfo->effectiveDate_workers ?>'/></td>
               </tr>
               <tr>
                    <td>issueDate_workers:</td>
                    <td><input name='issueDate_workers' id='issueDate_workers'  value='<?= $businessInfo->issueDate_workers ?>'/></td>
                    <td>nameAndTitle1_workers:</td>
                    <td><input name='nameAndTitle1_workers' id='nameAndTitle1_workers'  value='<?= $businessInfo->nameAndTitle1_workers ?>'/></td>
               </tr>
               <tr>
                    <td>nameAndTitle2_workers:</td>
                    <td><input name='nameAndTitle2_workers' id='nameAndTitle2_workers'  value='<?= $businessInfo->nameAndTitle2_workers ?>'/></td>
                    <td>nameAndTitle3_workers:</td>
                    <td><input name='nameAndTitle3_workers' id='nameAndTitle3_workers'  value='<?= $businessInfo->nameAndTitle3_workers ?>'/></td>
               </tr>
               <tr>
                    <td>nameAndTitle4_workers:</td>
                    <td><input name='nameAndTitle4_workers' id='nameAndTitle4_workers'  value='<?= $businessInfo->nameAndTitle4_workers ?>'/></td>
                    <td>nameAndTitle5_workers:</td>
                    <td><input name='nameAndTitle5_workers' id='nameAndTitle5_workers'  value='<?= $businessInfo->nameAndTitle5_workers ?>'/></td>
               </tr>
               <tr>
                    <td>general Note:</td>
                    <td colspan="3"><textarea name='generalNote' id='generalNote' cols='100'><? echo $businessInfo->generalNote; ?></textarea>
                    <?php
                        echo form_ckeditor(array('id' => 'generalNote',
                            'width' => '500',
                            'height' => '300'));
                    ?>
                    </td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="submit" /></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
    </div>
 </form>


