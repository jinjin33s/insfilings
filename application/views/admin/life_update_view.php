<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/uploadify/uploadify.css" />
<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/uploadify/jquery.uploadify.v2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>ckfinder/ckfinder.js"></script>

 <script type="text/javascript">
    var inputFieldID;
    var imgID;
    function browseServer(flID,igID) {
        // You can use the "CKFinder" class to render CKFinder in a page:
        inputFeldID = flID;
        imgID = igID;
        var finder = new CKFinder();
        finder.basePath = '/ckfinder/'; // The path for the installation of CKFinder (default = "/ckfinder/").
        finder.selectActionFunction = setFileField;
        finder.popup();
    }

    // This is a sample function which is called when a file is selected in CKFinder.
    function setFileField(fileUrl) {
        document.getElementById('imagepath').value = fileUrl;
        if(imgID != null)
        {
            document.getElementById('imageview').src = fileUrl;
        }

    }
</script>

<script type="text/javascript" language="javascript">
    $(document).ready(function(){

        $("#upload").uploadify({
            uploader: '<?php echo base_url(); ?>uploadify/uploadify.swf',
            script: '<?php echo base_url(); ?>uploadify/uploadify.php',
            cancelImg: '<?php echo base_url(); ?>uploadify/cancel.png',
            folder: 'upload',
            scriptAccess: 'always',
            multi: true,
            'onError' : function (a, b, c, d) {
                if (d.status == 404)
                    alert('Could not find upload script.');
                else if (d.type === "HTTP")
                    alert('error '+d.type+": "+d.status);
                else if (d.type ==="File Size")
                    alert(c.name+' '+d.type+' Limit: '+Math.round(d.sizeLimit/1024)+'KB');
                else
                    alert('error '+d.type+": "+d.text);
            },
            'onComplete'   : function (event, queueID, fileObj, response, data) {
                //Post response back to controller
                $.post('<?php echo site_url('upload/uploadify'); ?>',{filearray: response},function(info){
                    $("#target").append(info);  //Add response returned by controller
                });
            }
        });
    });
</script>

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

<form id='editForm' method='post' action='<?php echo base_url() . "admin/life_list/update_submit/" . $applicantInfo->id; ?>' >
    <div id="tab_data" style="display:block">

            <table class="form">

                <tr>
                    <td>LIFE Inquiry Basic</td>
                    <td></td><td></td><td></td>
               </tr>               
                <tr>
                    <td>ID:</td>
                    <td><input name='id' id='id'  value='<?= $applicantInfo->id ?>' disabled="disabled"/></td>
                    <td>Source:</td>
                    <td><input name='source' id='source'  value='<?= $applicantInfo->source ?>'/></td>
                </tr>
                <tr>
                    <td>Create Date:</td>
                    <td><input name='created_at' id='created_at'  value='<?= $applicantInfo->created_at ?>'/></td>
                    <td>Update Date:</td>
                    <td><input name='updated_at' id='updated_at'  value='<?= $applicantInfo->updated_at ?>'/></td>
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
                    <td>Share with Client </td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>Application Sent Date:</td>
                    <td><input name='applicationSentDate' id='applicationSentDate'  value='<?= $applicantInfo->applicationSentDate ?>'/></td>
                    <td>Sent Tracking No:</td>
                    <td><input name='sentTrackingNo' id='sentTrackingNo'  value='<?= $applicantInfo->sentTrackingNo ?>'/></td>
               </tr>
               <tr>
                    <td>Application Received Date:</td>
                    <td><input name='applicationReceivedDate' id='applicationReceivedDate'  value='<?= $applicantInfo->applicationReceivedDate ?>'/></td>
                    <td>Received Tracking No:</td>
                    <td><input name='receivedTrackingNo' id='receivedTrackingNo'  value='<?= $applicantInfo->receivedTrackingNo ?>'/></td>
               </tr>
               <tr>
                    <td>Application Submit Date:</td>
                    <td><input name='applicationSubmitDate' id='applicationSubmitDate'  value='<?= $applicantInfo->applicationSubmitDate ?>'/></td>
                    <td>Underwriting Status:</td>
                    <td><input name='underwritingStatus' id='underwritingStatus'  value='<?= $applicantInfo->underwritingStatus ?>'/></td>
               </tr>
               <tr>
                    <td>Notice Of Underwriting Status:</td>
                    <td><input name='noticeOfUnderwritingStatus' id='noticeOfUnderwritingStatus'  value='<?= $applicantInfo->noticeOfUnderwritingStatus ?>'/></td>
                    <td>Policy Sent To Customer:</td>
                    <td><input name='policySentToCustomer' id='policySentToCustomer'  value='<?= $applicantInfo->policySentToCustomer ?>'/></td>
               </tr>
               <tr>
                    <td>Medical In File:</td>
                    <td><input name='medicalInFile' id='medicalInFile'  value='<?= $applicantInfo->medicalInFile ?>'/></td>
                    <td>Notice Of Issue:</td>
                    <td><input name='noticeOfIssue' id='noticeOfIssue'  value='<?= $applicantInfo->noticeOfIssue ?>'/></td>
               </tr>
               <tr>
                    <td>Signed Delivery Receipt:</td>
                    <td><input name='signedDeliveryReceipt' id='signedDeliveryReceipt'  value='<?= $applicantInfo->signedDeliveryReceipt ?>'/></td>
                    <td>Check:</td>
                    <td><input name='checkThis' id='checkthis'  value='<?= $applicantInfo->checkThis ?>'/></td>
               </tr>
               <tr>
                    <td>LIFE INFOMATION </td>
                    <td></td><td></td><td></td>
               </tr>
               <tr>
                    <td>company:</td>
                    <td><input name='company' id='company'  value='<?= $lifeInfo->company ?>'/></td>
                    <td>faceAmount:</td>
                    <td><input name='faceAmount' id='faceAmount'  value='<?= $lifeInfo->faceAmount ?>'/></td>
               </tr>
               <tr>
                    <td>faceOption:</td>
                    <td><input name='faceOption' id='faceOption'  value='<?= $lifeInfo->faceOption ?>'/></td>
                    <td>medicalSchedule:</td>
                    <td><input name='medicalSchedule' id='medicalSchedule'  value='<?= $lifeInfo->medicalSchedule ?>'/></td>
               </tr>
               <tr>
                    <td>medicalComplete:</td>
                    <td><input name='medicalComplete' id='medicalComplete'  value='<?= $lifeInfo->medicalComplete ?>'/></td>
                    <td>NOTE_TO_CLIENT:</td>
                    <td><input name='medicalNote' id='medicalNote'  value='<?= $lifeInfo->medicalNote ?>'/></td>
               </tr>
               <tr>
                    <td>premiumAnnual:</td>
                    <td><input name='premiumAnnual' id='premiumAnnual'  value='<?= $lifeInfo->premiumAnnual ?>'/></td>
                    <td>premiumMode:</td>
                    <td><input name='premiumMode' id='premiumMode'  value='<?= $lifeInfo->premiumMode ?>'/></td>
               </tr>
               <tr>
                    <td>premiumAmount:</td>
                    <td><input name='premiumAmount' id='premiumAmount'  value='<?= $lifeInfo->premiumAmount ?>'/></td>
                    <td>policy:</td>
                    <td><input name='policy' id='policy'  value='<?= $lifeInfo->policy ?>'/></td>
               </tr>
               <tr>
                    <td>issueDate:</td>
                    <td><input name='issueDate' id='issueDate'  value='<?= $lifeInfo->issueDate ?>'/></td>
                    <td>policyDelivery:</td>
                    <td><input name='policyDelivery' id='policyDelivery'  value='<?= $lifeInfo->policyDelivery ?>'/></td>
               </tr>
               <tr>
                    <td>commissionAnnual:</td>
                    <td><input name='commissionAnnual1' id='commissionAnnual1'  value='<?= $lifeInfo->commissionAnnual ?>'/></td>
                    <td>commissionMonth:</td>
                    <td><input name='commissionMonth' id='commissionMonth'  value='<?= $lifeInfo->commissionMonth ?>'/></td>
               </tr>
               <tr>
                    <td>address_R:</td>
                    <td><input name='address_R' id='address_R'  value='<?= $lifeInfo->address_R ?>'/></td>
                    <td>address_R_apt:</td>
                    <td><input name='address_R_apt' id='address_R_apt'  value='<?= $lifeInfo->address_R_apt ?>'/></td>
               </tr>
               <tr>
                    <td>address_R_city:</td>
                    <td><input name='address_R_city' id='address_R_city'  value='<?= $lifeInfo->address_R_city ?>'/></td>
                    <td>address_R_state:</td>
                    <td><input name='address_R_state' id='address_R_state'  value='<?= $lifeInfo->address_R_state ?>'/></td>
               </tr>
               <tr>
                    <td>address_R_zip:</td>
                    <td><input name='address_R_zip' id='address_R_zip'  value='<?= $lifeInfo->address_R_zip ?>'/></td>
                    <td>DOB:</td>
                    <td><input name='DOB' id='DOB'  value='<?= $lifeInfo->DOB ?>'/></td>
               </tr>
               <tr>
                    <td>birthPlace:</td>
                    <td><input name='birthPlace' id='birthPlace'  value='<?= $lifeInfo->birthPlace ?>'/></td>
                    <td>maritalStatus:</td>
                    <td><input name='maritalStatus' id='maritalStatus'  value='<?= $lifeInfo->maritalStatus ?>'/></td>
               </tr>
               <tr>
                    <td>licenseId:</td>
                    <td><input name='licenseId' id='licenseId'  value='<?= $lifeInfo->licenseId ?>'/></td>
                    <td>idstate:</td>
                    <td><input name='idstate' id='idstate'  value='<?= $lifeInfo->idstate ?>'/></td>
               </tr>
               <tr>
                    <td>idExp:</td>
                    <td><input name='idExp' id='idExp'  value='<?= $lifeInfo->idExp ?>'/></td>
                    <td>idIssue:</td>
                    <td><input name='idIssue' id='idIssue'  value='<?= $lifeInfo->idIssue ?>'/></td>
               </tr>
               <tr>
                    <td>citizen:</td>
                    <td><input name='citizen' id='citizen'  value='<?= $lifeInfo->citizen ?>'/></td>
                    <td>employerName:</td>
                    <td><input name='employerName' id='employerName'  value='<?= $lifeInfo->employerName ?>'/></td>
               </tr>
               <tr>
                    <td>employerAddress:</td>
                    <td><input name='employerAddress' id='employerAddress'  value='<?= $lifeInfo->employerAddress ?>'/></td>
                    <td>jobTitle:</td>
                    <td><input name='jobTitle' id='jobTitle'  value='<?= $lifeInfo->jobTitle ?>'/></td>
               </tr>
               <tr>
                    <td>yearsAtWork:</td>
                    <td><input name='yearsAtWork' id='yearsAtWork'  value='<?= $lifeInfo->yearsAtWork ?>'/></td>
                    <td>ss:</td>
                    <td><input name='ss' id='ss'  value='<?= $lifeInfo->ss ?>'/></td>
               </tr>
               <tr>
                    <td>annualIncome:</td>
                    <td><input name='annualIncome' id='annualIncome'  value='<?= $lifeInfo->annualIncome ?>'/></td>
                    <td>householdIncome:</td>
                    <td><input name='householdIncome' id='householdIncome'  value='<?= $lifeInfo->householdIncome ?>'/></td>
               </tr>
               <tr>
                    <td>asset:</td>
                    <td><input name='asset' id='asset'  value='<?= $lifeInfo->asset ?>'/></td>
                    <td>liability:</td>
                    <td><input name='liability' id='liability'  value='<?= $lifeInfo->liability ?>'/></td>
               </tr>
               <tr>
                    <td>netAsset:</td>
                    <td><input name='netAsset' id='netAsset'  value='<?= $lifeInfo->netAsset ?>'/></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                    <td>INSURED 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <td>lastName_insured1:</td>
                    <td><input name='lastName_insured1' id='lastName_insured1'  value='<?= $lifeInfo->lastName_insured1 ?>'/></td>
                    <td>firstName_insured1:</td>
                    <td><input name='firstName_insured1' id='firstName_insured1'  value='<?= $lifeInfo->firstName_insured1 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>relation_insured1:</td>
                    <td><input name='relation_insured1' id='relation_insured1'  value='<?= $lifeInfo->relation_insured1 ?>'/></td>
                    <td>gender_insured1:</td>
                    <td><input name='gender_insured1' id='gender_insured1   '  value='<?= $lifeInfo->gender_insured1 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>address_R_insured1:</td>
                    <td><input name='address_R_insured1' id='address_R_insured1'  value='<?= $lifeInfo->address_R_insured1 ?>'/></td>
                    <td>address_R_apt_insured1:</td>
                    <td><input name='address_R_apt_insured1' id='address_R_apt_insured1'  value='<?= $lifeInfo->address_R_apt_insured1 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>address_R_city_insured1:</td>
                    <td><input name='address_R_city_insured1' id='address_R_city_insured1'  value='<?= $lifeInfo->address_R_city_insured1 ?>'/></td>
                    <td>address_R_state_insured1:</td>
                    <td><input name='address_R_state_insured1' id='address_R_state_insured1'  value='<?= $lifeInfo->address_R_state_insured1 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>address_R_zip_insured1:</td>
                    <td><input name='address_R_zip_insured1' id='address_R_zip_insured1'  value='<?= $lifeInfo->address_R_zip_insured1 ?>'/></td>
                    <td>DOB_insured1:</td>
                    <td><input name='DOB_insured1' id='DOB_insured1'  value='<?= $lifeInfo->DOB_insured1 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>birthPlace_insured1:</td>
                    <td><input name='birthPlace_insured1' id='birthPlace_insured1'  value='<?= $lifeInfo->birthPlace_insured1 ?>'/></td>
                    <td>maritalStatus_insured1:</td>
                    <td><input name='maritalStatus_insured1' id='maritalStatus_insured1'  value='<?= $lifeInfo->maritalStatus_insured1 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>idLicense_insured1:</td>
                    <td><input name='idLicense_insured1' id='idLicense_insured1'  value='<?= $lifeInfo->idLicense_insured1 ?>'/></td>
                    <td>idState_insured1:</td>
                    <td><input name='idState_insured1' id='idState_insured1'  value='<?= $lifeInfo->idState_insured1 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>idExp_insured1:</td>
                    <td><input name='idExp_insured1' id='idExp_insured1'  value='<?= $lifeInfo->idExp_insured1 ?>'/></td>
                    <td>idIssue_insured1:</td>
                    <td><input name='idIssue_insured1' id='idIssue_insured1'  value='<?= $lifeInfo->idIssue_insured1 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>phone_insured1:</td>
                    <td><input name='phone_insured1' id='phone_insured1'  value='<?= $lifeInfo->phone_insured1 ?>'/></td>
                    <td>citizen_insured1:</td>
                    <td><input name='citizen_insured1' id='citizen_insured1'  value='<?= $lifeInfo->citizen_insured1 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>employerName_insured1:</td>
                    <td><input name='employerName_insured1' id='employerName_insured1'  value='<?= $lifeInfo->employerName_insured1 ?>'/></td>
                    <td>employerAddress_insured1:</td>
                    <td><input name='employerAddress_insured1' id='employerAddress_insured1'  value='<?= $lifeInfo->employerAddress_insured1 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>jobTitle_insured1:</td>
                    <td><input name='jobTitle_insured1' id='jobTitle_insured1'  value='<?= $lifeInfo->jobTitle_insured1 ?>'/></td>
                    <td>yearAtWork_insured1:</td>
                    <td><input name='yearAtWork_insured1' id='yearAtWork_insured1'  value='<?= $lifeInfo->yearAtWork_insured1 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>ss_insured1:</td>
                    <td><input name='ss_insured1' id='ss_insured1'  value='<?= $lifeInfo->ss_insured1 ?>'/></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <td>INSURED 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <td>lastName_insured2:</td>
                    <td><input name='lastName_insured2' id='lastName_insured2'  value='<?= $lifeInfo->lastName_insured2 ?>'/></td>
                    <td>firstName_insured2:</td>
                    <td><input name='firstName_insured2' id='firstName_insured2'  value='<?= $lifeInfo->firstName_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>relation_insured2:</td>
                    <td><input name='relation_insured2' id='relation_insured2'  value='<?= $lifeInfo->relation_insured2 ?>'/></td>
                    <td>gender_insured2:</td>
                    <td><input name='gender_insured2' id='gender_insured2'  value='<?= $lifeInfo->gender_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>address_R_insured2:</td>
                    <td><input name='address_R_insured2' id='address_R_insured2'  value='<?= $lifeInfo->address_R_insured2 ?>'/></td>
                    <td>address_R_apt_insured2:</td>
                    <td><input name='address_R_apt_insured2' id='address_R_apt_insured2'  value='<?= $lifeInfo->address_R_apt_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>address_R_city_insured2:</td>
                    <td><input name='address_R_city_insured2' id='address_R_city_insured2'  value='<?= $lifeInfo->address_R_city_insured2 ?>'/></td>
                    <td>address_R_state_insured2:</td>
                    <td><input name='address_R_state_insured2' id='address_R_state_insured2'  value='<?= $lifeInfo->address_R_state_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>address_R_zip_insured2:</td>
                    <td><input name='address_R_zip_insured2' id='address_R_zip_insured2'  value='<?= $lifeInfo->address_R_zip_insured2 ?>'/></td>
                    <td>DOB_insured2:</td>
                    <td><input name='DOB_insured2' id='DOB_insured2'  value='<?= $lifeInfo->DOB_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>birthPlace_insured2:</td>
                    <td><input name='birthPlace_insured2' id='birthPlace_insured2'  value='<?= $lifeInfo->birthPlace_insured2 ?>'/></td>
                    <td>maritalStatus_insured2:</td>
                    <td><input name='maritalStatus_insured2' id='maritalStatus_insured2'  value='<?= $lifeInfo->maritalStatus_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>idLicense_insured2:</td>
                    <td><input name='idLicense_insured2' id='idLicense_insured2'  value='<?= $lifeInfo->idLicense_insured2 ?>'/></td>
                    <td>idState_insured2:</td>
                    <td><input name='idState_insured2' id='idState_insured2'  value='<?= $lifeInfo->idState_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>idExp_insured2:</td>
                    <td><input name='idExp_insured2' id='idExp_insured2'  value='<?= $lifeInfo->idExp_insured2 ?>'/></td>
                    <td>idIssue_insured2:</td>
                    <td><input name='idIssue_insured2' id='idIssue_insured2'  value='<?= $lifeInfo->idIssue_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>phone_insured2:</td>
                    <td><input name='phone_insured2' id='phone_insured2'  value='<?= $lifeInfo->phone_insured2 ?>'/></td>
                    <td>citizen_insured2:</td>
                    <td><input name='citizen_insured2' id='citizen_insured2'  value='<?= $lifeInfo->citizen_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>employerName_insured2:</td>
                    <td><input name='employerName_insured2' id='employerName_insured2'  value='<?= $lifeInfo->employerName_insured2 ?>'/></td>
                    <td>employerAddress_insured2:</td>
                    <td><input name='employerAddress_insured2' id='employerAddress_insured2'  value='<?= $lifeInfo->employerAddress_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>jobTitle_insured2:</td>
                    <td><input name='jobTitle_insured2' id='jobTitle_insured2'  value='<?= $lifeInfo->jobTitle_insured2 ?>'/></td>
                    <td>yearsAtWork_insured2:</td>
                    <td><input name='yearsAtWork_insured2' id='yearsAtWork_insured2'  value='<?= $lifeInfo->yearsAtWork_insured2 ?>'/></td>
               </tr>
               <tr>
                    <td>ss_insured2:</td>
                    <td><input name='ss_insured2' id='ss_insured2'  value='<?= $lifeInfo->ss_insured2 ?>'/></td>
                    <td></td>
                    <td></td>
               </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <td>BENEFICIARY</td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                   <td>lastName_benefi1:</td>
                    <td><input name='lastName_benefi1' id='lastName_benefi1'  value='<?= $lifeInfo->lastName_benefi1 ?>'/></td>
                    <td>firstName_benefi1:</td>
                    <td><input name='firstName_benefi1' id='firstName_benefi1'  value='<?= $lifeInfo->firstName_benefi1 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>DOB_benefi1:</td>
                    <td><input name='DOB_benefi1' id='DOB_benefi1'  value='<?= $lifeInfo->DOB_benefi1 ?>'/></td>
                    <td>ss_benefi1:</td>
                    <td><input name='ss_benefi1' id='ss_benefi1'  value='<?= $lifeInfo->ss_benefi1 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>relation_benefi1:</td>
                    <td><input name='relation_benefi1' id='relation_benefi1'  value='<?= $lifeInfo->relation_benefi1 ?>'/></td>
                    <td>primary_benefi1:</td>
                    <td><input name='primary_benefi1' id='primary_benefi1'  value='<?= $lifeInfo->primary_benefi1 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>contingent_benefi1:</td>
                    <td><input name='contingent_benefi1' id='contingent_benefi1'  value='<?= $lifeInfo->contingent_benefi1 ?>'/></td>
                    <td></td><td></td>
                   
               </tr>
               <tr>
                   <td>lastName_benefi2:</td>
                    <td><input name='lastName_benefi2' id='lastName_benefi2'  value='<?= $lifeInfo->lastName_benefi2 ?>'/></td>
                    <td>firstName_benefi2:</td>
                    <td><input name='firstName_benefi2' id='firstName_benefi2'  value='<?= $lifeInfo->firstName_benefi2 ?>'/></td>
                    
                    
               </tr>
               <tr>
                   <td>DOB_benefi2:</td>
                    <td><input name='DOB_benefi2' id='DOB_benefi2'  value='<?= $lifeInfo->DOB_benefi2 ?>'/></td>
                   <td>ss_benefi2:</td>
                    <td><input name='ss_benefi2' id='ss_benefi2'  value='<?= $lifeInfo->ss_benefi2 ?>'/></td>
                    
                    
               </tr>
               <tr>
                   <td>relation_benefi2:</td>
                    <td><input name='relation_benefi2' id='relation_benefi2'  value='<?= $lifeInfo->relation_benefi2 ?>'/></td>
                   <td>primary_benefi2:</td>
                    <td><input name='primary_benefi2' id='primary_benefi2'  value='<?= $lifeInfo->primary_benefi2 ?>'/></td>
                   
                   
               </tr>
               <tr>
                    <td>contingent_benefi2:</td>
                    <td><input name='contingent_benefi2' id='contingent_benefi2'  value='<?= $lifeInfo->contingent_benefi2 ?>'/></td>
                    <td></td><td></td>
               </tr>
               <tr>
                    <td>lastName_benefi3:</td>
                    <td><input name='lastName_benefi3' id='lastName_benefi3'  value='<?= $lifeInfo->lastName_benefi3 ?>'/></td>
                    <td>firstName_benefi3:</td>
                    <td><input name='firstName_benefi3' id='firstName_benefi3'  value='<?= $lifeInfo->firstName_benefi3 ?>'/></td>
                   
               </tr>
               <tr>
                    <td>DOB_benefi3:</td>
                    <td><input name='DOB_benefi3' id='DOB_benefi3'  value='<?= $lifeInfo->DOB_benefi3 ?>'/></td>
                    <td>ss_benefi3:</td>
                    <td><input name='ss_benefi3' id='ss_benefi3'  value='<?= $lifeInfo->ss_benefi3 ?>'/></td>
                  
               </tr>
               <tr>
                     <td>relation_benefi3:</td>
                    <td><input name='relation_benefi3' id='relation_benefi3'  value='<?= $lifeInfo->relation_benefi3 ?>'/></td>
                    <td>primary_benefi3:</td>
                    <td><input name='primary_benefi3' id='primary_benefi3'  value='<?= $lifeInfo->primary_benefi3 ?>'/></td>
                    
               </tr>
               <tr>
                   <td>contingent_benefi3:</td>
                    <td><input name='contingent_benefi3' id='contingent_benefi3'  value='<?= $lifeInfo->contingent_benefi3 ?>'/></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                   <td>lastName_benefi4:</td>
                    <td><input name='lastName_benefi4' id='lastName_benefi4'  value='<?= $lifeInfo->lastName_benefi4 ?>'/></td>
                   <td>firstName_benefi4:</td>
                    <td><input name='firstName_benefi4' id='firstName_benefi4'  value='<?= $lifeInfo->firstName_benefi4 ?>'/></td>
               </tr>
               <tr>
                    <td>DOB_benefi4:</td>
                    <td><input name='DOB_benefi4' id='DOB_benefi4'  value='<?= $lifeInfo->DOB_benefi4 ?>'/></td>
                    <td>ss_benefi4:</td>
                    <td><input name='ss_benefi4' id='ss_benefi4'  value='<?= $lifeInfo->ss_benefi4 ?>'/></td>
               </tr>
               <tr>
                    <td>relation_benefi4:</td>
                    <td><input name='relation_benefi4' id='relation_benefi4'  value='<?= $lifeInfo->relation_benefi4 ?>'/></td>
                    <td>primary_benefi4:</td>
                    <td><input name='primary_benefi4' id='primary_benefi4'  value='<?= $lifeInfo->primary_benefi4 ?>'/></td>
               </tr>
               <tr>
                    <td>contingent_benefi4:</td>
                    <td><input name='contingent_benefi4' id='contingent_benefi4'  value='<?= $lifeInfo->contingent_benefi4 ?>'/></td>
                    <td></td><td></td>
               </tr>
               <tr>
                    <td>PAYOR(IF NOT OWNER OR INSURED)</td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                   <td>name_payor:</td>
                    <td><input name='name_payor' id='name_payor'  value='<?= $lifeInfo->name_payor ?>'/></td>
                    <td>relation_payor:</td>
                    <td><input name='relation_payor' id='relation_payor'  value='<?= $lifeInfo->relation_payor ?>'/></td>
               </tr>
               <tr>
                    <td>general Note:</td>
                    <td colspan="3"><textarea name='generalNote' id='generalNote' cols='100'><? echo $lifeInfo->generalNote; ?></textarea>
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


