<script type="text/javascript" src="<?php echo base_url(); ?>ckfinder/ckfinder.js"></script>

<script type="text/javascript">
            $(document).ready(function(){
                $('#issuedDate').datepicker({dateFormat:'yy-mm-dd'});
                $('#created_at').datepicker({dateFormat:'yy-mm-dd'});
                $('#updated_at').datepicker({dateFormat:'yy-mm-dd'});

                $('#DOB1').datepicker({dateFormat:'yy-mm-dd'});
                $('#idExp').datepicker({dateFormat:'yy-mm-dd'});
                $('#idIssue').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_m1').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_m2').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_m3').datepicker({dateFormat:'yy-mm-dd'});
                $('#DOB_m4').datepicker({dateFormat:'yy-mm-dd'});
            });
</script>

<form id='editForm' method='post' action='<?php echo base_url() . "admin/health_list/add_submit/"; ?>' >
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
                    <td><input name='insuranType' id='insuranType'  value='Health' disabled="disabled"/></td>
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
                    <td>HEALTH INFOMATION </td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>commissionAnnual:</td>
                    <td><input name='commissionAnnual1' id='commissionAnnual1'  value=''/></td>
                    <td>commissionMonth:</td>
                    <td><input name='commissionMonth' id='commissionMonth'  value=''/></td>
               </tr>
               <tr>
                    <td>State:</td>
                    <td><input name='state' id='state'  value=''/></td>                    
                    <td>product:</td>
                    <td><input name='product' id='product'  value=''/></td>
               </tr>               
               <tr>
                    <td>tier:</td>
                    <td><select name='tier' id='tier'  value=''>
                            <option value="SINGLE">SINGLE</option>
                            <option value="COUPLE">COUPLE</option>
                            <option value="ADULT_CHILDREN">ADULT_CHILDREN</option>
                            <option value="FAMILY">FAMILY</option>
                        </select>
                    </td>
                    <td>AgpremiumAmountent4:</td>
                    <td><input name='premiumAmount' id='premiumAmount'  value=''/></td>
               </tr>
               <tr>
                    <td>premiumMode:</td>
                    <td><input name='premiumMode' id='premiumMode'  value=''/></td>
                    <td>memberId:</td>
                    <td><input name='memberId' id='memberId'  value=''/></td>
               </tr>
               <tr>
                    <td>groupId:</td>
                    <td><input name='groupId' id='groupId'  value=''/></td>
                    <td>address_R:</td>
                    <td><input name='address_R' id='address_R'  value=''/></td>
               </tr>
               <tr>
                    <td>address_R_apt:</td>
                    <td><input name='address_R_apt' id='address_R_apt'  value=''/></td>
                    <td>address_R_city:</td>
                    <td><input name='address_R_city' id='address_R_city'  value=''/></td>
               </tr>
               <tr>
                    <td>address_R_state:</td>
                    <td><input name='address_R_state' id='address_R_state'  value=''/></td>
                    <td>address_R_zip:</td>
                    <td><input name='address_R_zip' id='address_R_zip'  value=''/></td>
               </tr>
               <tr>
                    <td>DOB:</td>
                    <td><input name='DOB1' id='DOB1'  value=''/></td>
                    <td>birthPlace:</td>
                    <td><input name='birthPlace' id='birthPlace'  value=''/></td>
               </tr>
               <tr>
                    <td>maritalStatus:</td>
                    <td><input name='maritalStatus' id='maritalStatus'  value=''/></td>
                    <td>coverageEffectiveDate:</td>
                    <td><input name='coverageEffectiveDate' id='coverageEffectiveDate'  value=''/></td>
               </tr>
               <tr>
                    <td>idLicense:</td>
                    <td><input name='idLicense' id='idLicense'  value=''/></td>
                    <td>idState:</td>
                    <td><input name='idState' id='idState'  value=''/></td>
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
                    <td>ss:</td>
                    <td><input name='ss' id='ss'  value=''/></td>
               </tr>
               <tr>
                   <td>EMPLOYER</td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
               <tr>
                    <td>companyName_em:</td>
                    <td><input name='companyName_em' id='companyName_em'  value=''/></td>
                    <td>contactFirstName_em:</td>
                    <td><input name='contactFirstName_em' id='contactFirstName_em'  value=''/></td>
               </tr>
               <tr>
                    <td>contactLastName_em:</td>
                    <td><input name='contactLastName_em' id='contactLastName_em'  value=''/></td>
                    <td>title_em:</td>
                    <td><input name='title_em' id='title_em'  value=''/></td>
               </tr>
               <tr>
                    <td>address_em:</td>
                    <td><input name='address_em' id='address_em'  value=''/></td>
                    <td>apt_em:</td>
                    <td><input name='apt_em' id='apt_em'  value=''/></td>
               </tr>
               <tr>
                    <td>city_em:</td>
                    <td><input name='city_em' id='city_em'  value=''/></td>
                    <td>state_em:</td>
                    <td><input name='state_em' id='state_em'  value=''/></td>
               </tr>
               <tr>
                    <td>zip_em:</td>
                    <td><input name='zip_em' id='zip_em'  value=''/></td>
                    <td>taxId_em:</td>
                    <td><input name='taxId_em' id='taxId_em'  value=''/></td>
               </tr>
               <tr>
                    <td>phone_em:</td>
                    <td><input name='phone_em' id='phone_em'  value=''/></td>
                    <td>fax_em:</td>
                    <td><input name='fax_em' id='fax_em'  value=''/></td>
               </tr>
               <tr>
                   <td>MEMBER 1</td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
               <tr>
                    <td>name_m1:</td>
                    <td><input name='name_m1' id='name_m1'  value=''/></td>
                    <td>DOB_m1:</td>
                    <td><input name='DOB_m1' id='DOB_m1'  value=''/></td>
               </tr>
               <tr>
                    <td>ss_m1:</td>
                    <td><input name='ss_m1' id='ss_m1'  value=''/></td>
                    <td>note_m1:</td>
                    <td><input name='note_m1' id='note_m1'  value=''/></td>
               </tr>
               <tr>
                   <td>MEMBER 2</td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
               <tr>
                    <td>name_m2:</td>
                    <td><input name='name_m2' id='name_m2'  value=''/></td>
                    <td>DOB_m2:</td>
                    <td><input name='DOB_m2' id='DOB_m2'  value=''/></td>
               </tr>
               <tr>
                   <td>ss_m2:</td>
                    <td><input name='ss_m2' id='ss_m2'  value=''/></td>
                    <td>note_m2:</td>
                    <td><input name='note_m2' id='note_m2'  value=''/></td>                    
               </tr>
                <tr>
                   <td>MEMBER 3</td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
               <tr>
                   <td>name_m3:</td>
                    <td><input name='name_m3' id='name_m3'  value=''/></td>
                    <td>DOB_m3:</td>
                    <td><input name='DOB_m3' id='DOB_m3'  value=''/></td>                    
               </tr>
               <tr>
                   <td>ss_m3:</td>
                    <td><input name='ss_m3' id='ss_m3'  value=''/></td>
                    <td>note_m3:</td>
                    <td><input name='note_m3' id='note_m3'  value=''/></td>                    
               </tr>
                <tr>
                   <td>MEMBER 4</td>
                   <td></td>
                   <td></td>
                   <td></td>
               </tr>
               <tr>
                   <td>name_m4:</td>
                    <td><input name='name_m4' id='name_m4'  value=''/></td>
                    <td>DOB_m4:</td>
                    <td><input name='DOB_m4' id='DOB_m4'  value=''/></td>                   
               </tr>
               <tr>
                    <td>ss_m4:</td>
                    <td><input name='ss_m4' id='ss_m4'  value=''/></td>
                    <td>note_m4:</td>
                    <td><input name='note_m4' id='note_m4'  value=''/></td>                   
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


