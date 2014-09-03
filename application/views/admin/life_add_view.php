<script type="text/javascript" src="<?php echo base_url(); ?>ckfinder/ckfinder.js"></script>



<script type="text/javascript">
            $(document).ready(function(){
                $('#issuedDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#created_at').datepicker({dateFormat:'yy-mm-dd'});
                $('#updated_at').datepicker({dateFormat:'yy-mm-dd'});
                $('#applicationSentDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#applicationReceivedDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#applicationSubmitDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#issueDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB').datepicker({dateFormat:'yy-mm-dd'});
                $('#idExp').datepicker({dateFormat:'yy-mm-dd'});
                $('#idIssue').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_insured1').datepicker({dateFormat:'yy-mm-dd'});
                $('#idExp_insured1').datepicker({dateFormat:'yy-mm-dd'});
                $('#idIssue_insured1').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_insured2').datepicker({dateFormat:'yy-mm-dd'});
                $('#idExp_insured2').datepicker({dateFormat:'yy-mm-dd'});
                $('#idIssue_insured2').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_benefi1').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_benefi2').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_benefi3').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_benefi4').datepicker({dateFormat:'yy-mm-dd'});
            });
</script>

<form id='editForm' method='post' action='<?php echo base_url() . "admin/life_list/add_submit/"; ?>' >
    <div id="tab_data" style="display:block">

            <table class="form" >

                <tr>
                    <td><b><font color="red">LIFE Basic Inquiry</font></b></td>
                    <td></td><td></td><td></td>
               </tr>
                <tr>
                    <td>ID:</td>
                    <td><input name='id' id='id'  value='' disabled="disabled"/></td>
                    <td>Source:</td>
                    <td><input name='source' id='source'  value=''/></td>
                </tr>
                <tr>
                    <td>Create Date:</td>
                    <td><input name='created_at' id='created_at'  value=''/></td>
                    <td>Update Date:</td>
                    <td><input name='updated_at' id='updated_at'  value=''/></td>
               </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input name='lastName' id='lastName'  value=''/></td>
                    <td>First Name:</td>
                    <td><input name='firstName' id='firstName'  value=''/></td>
               </tr>
               <tr>
                    <td>Type:</td>
                    <td><input name='insuranType' id='insuranType'  value=''/></td>
                    <td>Age:</td>
                    <td><input name='age' id='age'  value=''/></td>
               </tr>
               <tr>
                    <td>Email:</td>
                    <td><input name='email' id='email'  value=''/></td>
                    <td>Phone:</td>
                    <td><input name='phone' id='phone'  value=''/></td>
               </tr>
               <tr>
                    <td>State:</td>
                    <td><input name='state' id='state'  value=''/></td>
                    <td>Zip:(left_over)</td>
                    <td><input name='zip' id='zip'  value=''/></td>
               </tr>

                <tr>
                    <td><b><font color="red">COMMON</font></b></td>
                    <td></td><td></td><td></td>
               </tr>

                <tr>
                    <td>STATUS:</td>
                    <td><select name='status' id='status' value=''>
                            <option value="INQUIRY">INQUIRY</option>
                            <option value="FOLLOW-UP">FOLLOW-UP</option>
                            <option value="PENDING">PENDING</option>
                            <option value="CLIENT">CLIENT</option>
                            <option value="CANCEL">CANCEL</option>
                            <option value="TRASH">TRASH</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
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
                    <td>commissionAnnual:</td>
                    <td><input name='commissionAnnual1' id='commissionAnnual1'  value=''/></td>
                    <td>commissionMonth:</td>
                    <td><input name='commissionMonth' id='commissionMonth'  value=''/></td>
               </tr>
               <tr>
                    <td>Commission Annual(left_over):</td>
                    <td><input name='commissionAnnual' id='commissionAnnual'  value=''/></td>
                    <td></td>
                    <td></td>
               </tr>
               


                <tr>
                    <td style="height: 23px"><b><font color="red">PROCESS STATUS</font></b></td>
                    <td style="height: 23px"></td><td style="height: 23px"></td>
					<td style="height: 23px"></td>
               </tr>

                <tr>
                    <td>Company:</td>
                    <td><input name='company' id='company'  value=''/></td>
                    <td>Policy:</td>
                    <td><input name='policy' id='policy'  value=''/></td>
               </tr>
               <tr>
                    <td>FaceAmount:</td>
                    <td><input name='faceAmount' id='faceAmount'  value=''/></td>
                    <td>faceOption:</td>
                    <td><input name='faceOption' id='faceOption'  value=''/></td>
               </tr>
               <tr>
                    <td>Issued Date:</td>
                    <td><input name='issuedDate' id='issuedDate'  value=''/></td>
                    <td>Policy No</td>
                    <td></td>
               </tr>
               <tr>
                    <td>Application Sent Date:</td>
                    <td><input name='applicationSentDate' id='applicationSentDate'  value=''/></td>
                    <td>Sent Tracking No:</td>
                    <td><input name='sentTrackingNo' id='sentTrackingNo'  value=''/></td>
               </tr>
               <tr>
                    <td>Application Received Date:</td>
                    <td><input name='applicationReceivedDate' id='applicationReceivedDate'  value=''/></td>
                    <td>Received Tracking No:</td>
                    <td><input name='receivedTrackingNo' id='receivedTrackingNo'  value=''/></td>
               </tr>
               <tr>
                    <td>Application Submit Date:</td>
                    <td><input name='applicationSubmitDate' id='applicationSubmitDate'  value=''/></td>
                    <td>Underwriting Status:</td>
                    <td><input name='underwritingStatus' id='underwritingStatus'  value=''/></td>
               </tr>
               <tr>
                    <td>Notice Of Underwriting Status:</td>
                    <td><input name='noticeOfUnderwritingStatus' id='noticeOfUnderwritingStatus'  value=''/></td>
                    <td>Policy Sent To Customer:</td>
                    <td><input name='policySentToCustomer' id='policySentToCustomer'  value=''/></td>
               </tr>
               <tr>
                    <td>Medical In File:</td>
                    <td><input name='medicalInFile' id='medicalInFile'  value=''/></td>
                    <td>Notice Of Issue:</td>
                    <td><input name='noticeOfIssue' id='noticeOfIssue'  value=''/></td>
               </tr>
               <tr>
                    <td>Signed Delivery Receipt:</td>
                    <td><input name='signedDeliveryReceipt' id='signedDeliveryReceipt'  value=''/></td>
                    <td>Check:</td>
                    <td><input name='checkThis' id='checkThis'  value=''/></td>
               </tr>
               <tr>
                    <td>medicalComplete:</td>
                    <td><input name='medicalComplete' id='medicalComplete'  value=''/></td>
                    <td>medicalNote:</td>
                    <td><input name='medicalNote' id='medicalNote'  value=''/></td>
               </tr>
               <tr>
                    <td></td>
                    <td></td>
                    <td>medicalSchedule:</td>
                    <td><input name='medicalSchedule' id='medicalSchedule'  value=''/></td>
               </tr>
               <tr>
                    <td>issueDate:</td>
                    <td><input name='issueDate' id='issueDate'  value=''/></td>
                    <td>policyDelivery:</td>
                    <td><input name='policyDelivery' id='policyDelivery'  value=''/></td>
               </tr>
               <tr>
                    <td>premiumAnnual:</td>
                    <td><input name='premiumAnnual' id='premiumAnnual'  value=''/></td>
                    <td>premiumMode:</td>
                    <td><input name='premiumMode' id='premiumMode'  value=''/></td>
               </tr>
               <tr>
                    <td>premiumAmount:</td>
                    <td><input name='premiumAmount' id='premiumAmount'  value=''/></td>
                    <td></td>
                    <td></td>
               </tr>

                <tr>
                    <td><b><font color="red">APPLICANT INFO</font></b></td>
                    <td></td><td></td><td></td>
               </tr>

               <tr>
                    <td>ss:</td>
                    <td><input name='ss' id='ss'  value=''/></td>
                    <td>Sex:</td>
                    <td><input name='sex' id='sex'  value=''/></td>
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
                    <td>DOB:</td>
                    <td><input name='DOB' id='DOB'  value=''/></td>
               </tr>
               <tr>
                    <td>birthPlace:</td>
                    <td><input name='birthPlace' id='birthPlace'  value=''/></td>
                    <td>maritalStatus:</td>
                    <td><input name='maritalStatus' id='maritalStatus'  value=''/></td>
               </tr>
               <tr>
                    <td>licenseId:</td>
                    <td><input name='licenseId' id='licenseId'  value=''/></td>
                    <td>idstate:</td>
                    <td><input name='idstate' id='idstate'  value=''/></td>
               </tr>
               <tr>
                    <td>idExp:</td>
                    <td><input name='idExp' id='idExp'  value=''/></td>
                    <td>idIssue:</td>
                    <td><input name='idIssue' id='idIssue'  value=''/></td>
               </tr>
               <tr>
                    <td>citizen:</td>
                    <td><input name='citizen' id='citizen'  value=''/></td>
                    <td>employerName:</td>
                    <td><input name='employerName' id='employerName'  value=''/></td>
               </tr>
               <tr>
                    <td>employerAddress:</td>
                    <td><input name='employerAddress' id='employerAddress'  value=''/></td>
                    <td>jobTitle:</td>
                    <td><input name='jobTitle' id='jobTitle'  value=''/></td>
               </tr>
               <tr>
                    <td>yearsAtWork:</td>
                    <td><input name='yearsAtWork' id='yearsAtWork'  value=''/></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <td>annualIncome:</td>
                    <td><input name='annualIncome' id='annualIncome'  value=''/></td>
                    <td>householdIncome:</td>
                    <td><input name='householdIncome' id='householdIncome'  value=''/></td>
               </tr>
               <tr>
                    <td>asset:</td>
                    <td><input name='asset' id='asset'  value=''/></td>
                    <td>liability:</td>
                    <td><input name='liability' id='liability'  value=''/></td>
               </tr>
               <tr>
                    <td>netAsset:</td>
                    <td><input name='netAsset' id='netAsset'  value=''/></td>
                    <td></td>
                    <td></td>
               </tr>

                <tr>
                    <td><b><font color="red">Insured 1</font></b></td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>lastName_insured1:</td>
                    <td><input name='lastName_insured1' id='lastName_insured1'  value=''/></td>
                    <td>firstName_insured1:</td>
                    <td><input name='firstName_insured1' id='firstName_insured1'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>relation_insured1:</td>
                    <td><input name='relation_insured1' id='relation_insured1'  value=''/></td>
                    <td>gender_insured1:</td>
                    <td><input name='gender_insured1' id='gender_insured1   '  value=''/></td>
                    
               </tr>
               <tr>
                   <td>address_R_insured1:</td>
                    <td><input name='address_R_insured1' id='address_R_insured1'  value=''/></td>
                    <td>address_R_apt_insured1:</td>
                    <td><input name='address_R_apt_insured1' id='address_R_apt_insured1'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>address_R_city_insured1:</td>
                    <td><input name='address_R_city_insured1' id='address_R_city_insured1'  value=''/></td>
                    <td>address_R_state_insured1:</td>
                    <td><input name='address_R_state_insured1' id='address_R_state_insured1'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>address_R_zip_insured1:</td>
                    <td><input name='address_R_zip_insured1' id='address_R_zip_insured1'  value=''/></td>
                    <td>DOB_insured1:</td>
                    <td><input name='DOB_insured1' id='DOB_insured1'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>birthPlace_insured1:</td>
                    <td><input name='birthPlace_insured1' id='birthPlace_insured1'  value=''/></td>
                    <td>maritalStatus_insured1:</td>
                    <td><input name='maritalStatus_insured1' id='maritalStatus_insured1'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>idLicense_insured1:</td>
                    <td><input name='idLicense_insured1' id='idLicense_insured1'  value=''/></td>
                    <td>idState_insured1:</td>
                    <td><input name='idState_insured1' id='idState_insured1'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>idExp_insured1:</td>
                    <td><input name='idExp_insured1' id='idExp_insured1'  value=''/></td>
                    <td>idIssue_insured1:</td>
                    <td><input name='idIssue_insured1' id='idIssue_insured1'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>phone_insured1:</td>
                    <td><input name='phone_insured1' id='phone_insured1'  value=''/></td>
                    <td>citizen_insured1:</td>
                    <td><input name='citizen_insured1' id='citizen_insured1'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>employerName_insured1:</td>
                    <td><input name='employerName_insured1' id='employerName_insured1'  value=''/></td>
                    <td>employerAddress_insured1:</td>
                    <td><input name='employerAddress_insured1' id='employerAddress_insured1'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>jobTitle_insured1:</td>
                    <td><input name='jobTitle_insured1' id='jobTitle_insured1'  value=''/></td>
                    <td>yearAtWork_insured1:</td>
                    <td><input name='yearAtWork_insured1' id='yearAtWork_insured1'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>ss_insured1:</td>
                    <td><input name='ss_insured1' id='ss_insured1'  value=''/></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                    <td><b><font color="red">Insured 2</font></b></td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <td>lastName_insured2:</td>
                    <td><input name='lastName_insured2' id='lastName_insured2'  value=''/></td>
                    <td>firstName_insured2:</td>
                    <td><input name='firstName_insured2' id='firstName_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>relation_insured2:</td>
                    <td><input name='relation_insured2' id='relation_insured2'  value=''/></td>
                    <td>gender_insured2:</td>
                    <td><input name='gender_insured2' id='gender_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>address_R_insured2:</td>
                    <td><input name='address_R_insured2' id='address_R_insured2'  value=''/></td>
                    <td>address_R_apt_insured2:</td>
                    <td><input name='address_R_apt_insured2' id='address_R_apt_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>address_R_city_insured2:</td>
                    <td><input name='address_R_city_insured2' id='address_R_city_insured2'  value=''/></td>
                    <td>address_R_state_insured2:</td>
                    <td><input name='address_R_state_insured2' id='address_R_state_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>address_R_zip_insured2:</td>
                    <td><input name='address_R_zip_insured2' id='address_R_zip_insured2'  value=''/></td>
                    <td>DOB_insured2:</td>
                    <td><input name='DOB_insured2' id='DOB_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>birthPlace_insured2:</td>
                    <td><input name='birthPlace_insured2' id='birthPlace_insured2'  value=''/></td>
                    <td>maritalStatus_insured2:</td>
                    <td><input name='maritalStatus_insured2' id='maritalStatus_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>idLicense_insured2:</td>
                    <td><input name='idLicense_insured2' id='idLicense_insured2'  value=''/></td>
                    <td>idState_insured2:</td>
                    <td><input name='idState_insured2' id='idState_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>idExp_insured2:</td>
                    <td><input name='idExp_insured2' id='idExp_insured2'  value=''/></td>
                    <td>idIssue_insured2:</td>
                    <td><input name='idIssue_insured2' id='idIssue_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>phone_insured2:</td>
                    <td><input name='phone_insured2' id='phone_insured2'  value=''/></td>
                    <td>citizen_insured2:</td>
                    <td><input name='citizen_insured2' id='citizen_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>employerName_insured2:</td>
                    <td><input name='employerName_insured2' id='employerName_insured2'  value=''/></td>
                    <td>employerAddress_insured2:</td>
                    <td><input name='employerAddress_insured2' id='employerAddress_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>jobTitle_insured2:</td>
                    <td><input name='jobTitle_insured2' id='jobTitle_insured2'  value=''/></td>
                    <td>yearsAtWork_insured2:</td>
                    <td><input name='yearsAtWork_insured2' id='yearsAtWork_insured2'  value=''/></td>
               </tr>
               <tr>
                    <td>ss_insured2:</td>
                    <td><input name='ss_insured2' id='ss_insured2'  value=''/></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                    <td><b><font color="red">Beneficary</font></b></td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                   <td>lastName_benefi1:</td>
                    <td><input name='lastName_benefi1' id='lastName_benefi1'  value=''/></td>
                    <td>firstName_benefi1:</td>
                    <td><input name='firstName_benefi1' id='firstName_benefi1'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>DOB_benefi1:</td>
                    <td><input name='DOB_benefi1' id='DOB_benefi1'  value=''/></td>
                    <td>ss_benefi1:</td>
                    <td><input name='ss_benefi1' id='ss_benefi1'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>relation_benefi1:</td>
                    <td><input name='relation_benefi1' id='relation_benefi1'  value=''/></td>
                    <td>primary_benefi1:</td>
                    <td><input name='primary_benefi1' id='primary_benefi1'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>contingent_benefi1:</td>
                    <td><input name='contingent_benefi1' id='contingent_benefi1'  value=''/></td>
                    <td></td><td></td>
                   
               </tr>
               <tr>
                   <td>lastName_benefi2:</td>
                    <td><input name='lastName_benefi2' id='lastName_benefi2'  value=''/></td>
                    <td>firstName_benefi2:</td>
                    <td><input name='firstName_benefi2' id='firstName_benefi2'  value=''/></td>
                    
                    
               </tr>
               <tr>
                   <td>DOB_benefi2:</td>
                    <td><input name='DOB_benefi2' id='DOB_benefi2'  value=''/></td>
                   <td>ss_benefi2:</td>
                    <td><input name='ss_benefi2' id='ss_benefi2'  value=''/></td>
                    
                    
               </tr>
               <tr>
                   <td>relation_benefi2:</td>
                    <td><input name='relation_benefi2' id='relation_benefi2'  value=''/></td>
                   <td>primary_benefi2:</td>
                    <td><input name='primary_benefi2' id='primary_benefi2'  value=''/></td>
                   
                   
               </tr>
               <tr>
                    <td>contingent_benefi2:</td>
                    <td><input name='contingent_benefi2' id='contingent_benefi2'  value=''/></td>
                    <td></td><td></td>
               </tr>
               <tr>
                    <td>lastName_benefi3:</td>
                    <td><input name='lastName_benefi3' id='lastName_benefi3'  value=''/></td>
                    <td>firstName_benefi3:</td>
                    <td><input name='firstName_benefi3' id='firstName_benefi3'  value=''/></td>
                   
               </tr>
               <tr>
                    <td>DOB_benefi3:</td>
                    <td><input name='DOB_benefi3' id='DOB_benefi3'  value=''/></td>
                    <td>ss_benefi3:</td>
                    <td><input name='ss_benefi3' id='ss_benefi3'  value=''/></td>
                  
               </tr>
               <tr>
                     <td>relation_benefi3:</td>
                    <td><input name='relation_benefi3' id='relation_benefi3'  value=''/></td>
                    <td>primary_benefi3:</td>
                    <td><input name='primary_benefi3' id='primary_benefi3'  value=''/></td>
                    
               </tr>
               <tr>
                   <td>contingent_benefi3:</td>
                    <td><input name='contingent_benefi3' id='contingent_benefi3'  value=''/></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                   <td>lastName_benefi4:</td>
                    <td><input name='lastName_benefi4' id='lastName_benefi4'  value=''/></td>
                   <td>firstName_benefi4:</td>
                    <td><input name='firstName_benefi4' id='firstName_benefi4'  value=''/></td>
               </tr>
               <tr>
                    <td>DOB_benefi4:</td>
                    <td><input name='DOB_benefi4' id='DOB_benefi4'  value=''/></td>
                    <td>ss_benefi4:</td>
                    <td><input name='ss_benefi4' id='ss_benefi4'  value=''/></td>
               </tr>
               <tr>
                    <td>relation_benefi4:</td>
                    <td><input name='relation_benefi4' id='relation_benefi4'  value=''/></td>
                    <td>primary_benefi4:</td>
                    <td><input name='primary_benefi4' id='primary_benefi4'  value=''/></td>
               </tr>
               <tr>
                    <td>contingent_benefi4:</td>
                    <td><input name='contingent_benefi4' id='contingent_benefi4'  value=''/></td>
                    <td></td><td></td>
               </tr>
               <tr>
                    <td colspan="2"><b><font color="red">PAYOR(IF NOT OWNER OR INSURED)</font></b></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                   <td>name_payor:</td>
                    <td><input name='name_payor' id='name_payor'  value=''/></td>
                    <td>relation_payor:</td>
                    <td><input name='relation_payor' id='relation_payor'  value=''/></td>
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


