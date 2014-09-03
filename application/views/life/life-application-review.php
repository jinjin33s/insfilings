
<script type="text/javascript">
    $(document).ready(function(){
        $("#terms_use_popup").fancybox({
            'width' : 1020,
            'height': 400
        })
    })
    
    function validate()
    {
        if(document.form.chkTerms.checked == false)
            {
                alert ("NOTICE: \nPlease read and accept the Terms of Use - (Disclaimer)");
                return false
            }
            
        for (var i=0; i< document.form.agree_radio.length; i++)
            {
                if (document.form.agree_radio[i].checked)
                    {
                        var agree_val = document.form.agree_radio[i].value;
                    }
            }
            
        if (agree_val != '0')
            {
                alert ("NOTICE: \nPlease read and accept the Terms of Use")
                return false
            }
            
    }
    
</script>

<div id="sub_contentscontainer">

    <div id="breadcrumb">OWNER RESPONSIBLE PARTY - INSURED - BENEFICIARY - SCHEDULE MEDICAL - <span class="on">REVIEW&nbsp;&amp;&nbsp;COMPLETE</span></div>  
    
    <div class="page_short_info">Not sure what to fill out? No Problem! InsFilings guarantees an error-proof review process that will ensure your application is in accordance with insurance regulation and state compliant.</div>
    <div class="subtitle">Review & Submit</div>



    <div class="subtitle_desc">Please review your order. You may edit information by clicking the 'Edit' button located to the left of the section you wish to edit. When you are ready, please read and accept the “<span style="font-weight:bold">Terms of Use</span>” at the bottom of the page, then click 'Continue' to submit your order. </div>

    <br /><br />

    <div class="review_title_container">
            <div class="review_title">
                <span class="subtitle_s">LIFE INSURANCE COVERAGE INFORMATION</span>
            </div>
            <div class="review_edit_button">
                <form name="form2" action="<?php echo base_url() . "admin/lifeApplication_list/owner_edit/" . $insuredId ?>" method="POST">
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
                    <input type="submit" value="EDIT" >  
                </form>
            </div>
    </div>

    <div id="review_summary_container">
    <?php include "life-application-summary-inc.php"; ?>
    </div>    

    <form name="form" action="<?php echo base_url() . "admin/lifeApplication_list/receipt/".$insuredId; ?>" method="POST">

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
        
        <div>
            
            <p><b>Terms and Conditions</b></p>
        </div>

<p><input type="checkbox" name="chkTerms" id="chkTerms"> 
		By checking the box, I agree to InsFilings'
		<a href="<?php echo base_url()."about/disclaimer_review";?>" id="terms_use_popup" class="actionButton">Terms of Use - (Disclaimer) </a></p>
            <p>
		I UNDERSTAND THAT THE HEALTH CLASS RATING WILL BE BASED ON MY MEDICAL 
		LAB RESULTS AND MAY BE DIFFERENT FROM THE HEALTH CLASS TO WHICH I 
		INITIALLY APPLIED. IN CASE THE RESULTS DO NOT MEET MY EXPECTATIONS OR IF 
		I AM NOT SATISFIED FOR ANY OTHER REASON, I HAVE 10-30 DAYS AFTER 
		RECEIVING THE INSURANCE POLICY, DEPENDING ON THE TERMS AND STATE 
		REGULATIONS, TO RETURN THE POLICY AND RECEIVE A FULL REFUND OF THE 
		PREMIUM. 
            </p>
            
            <p>
                <input type="radio" name="agree_radio" id="agree_radio" value="0">Yes
                <input type="radio" name="agree_radio" id="agree_radio" value="1">No
            </p>

        <input type="image" onclick="return validate()" src="<?php echo base_url(); ?>images/bt_submit.png" >   

    </form>
</div>

