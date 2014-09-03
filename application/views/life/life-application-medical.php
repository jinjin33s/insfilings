<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/uploadify/uploadify.css" />

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript">
    
    window.history.forward(0);
    
    $(document).ready(function(){
        
        $('#medicalFirstDate').datepicker({dateFormat:'yy-mm-dd'});
        $('#medicalSecondDate').datepicker({dateFormat:'yy-mm-dd'});
        
        $('[name="medicalPreferred"]').click(function(){
            $('#medicalvisit').css('display',($('[name="medicalPreferred"]:checked').val() == "iWillGo") ? 'none' : 'block') 
           
        });

    });
    
    function requiredField()
    {    
        
        if(document.form.medicalFirstDate.value.length < 1)
        {
            alert ("Input First Choice")
            return false
        }
   }
    
</script>  


<div id="sub_contentscontainer">
    
<div id="breadcrumb">OWNER RESPONSIBLE PARTY - INSURED - BENEFICIARY - <span class="on">SCHEDULE MEDICAL</span> - REVIEW&nbsp;&amp;&nbsp;COMPLETE</div>
    
        
<div class="page_short_info">Not sure what to fill out? No Problem! InsFilings guarantees an error-proof review process that will ensure your application is in accordance with insurance regulation and state compliant.</div>
    
<div class="subtitle">SCHEDULE MEDICAL</div>

<div class="subtitle_desc">*Required for the insured, the person who's life will be placed on this policy, for underwriting and health rating purpose.</div>
                      
<div class="mainbody">
    <ul class="info_list">
        <li>1. Only one Medical Exam is required; and takes 20-40 minutes.</li>
        <li>2. ALL MEDICAL EXAMS ARE PAID FOR AND BY THE INSURANCE COMPANIES.</li>
        <li>3. Results of Medical Exams are 100% Confidential and only released to and by the applicants.</li>
    </ul>
    
    <ul class="partners"><span>*PROUD PARTNER OF MEDICAL LAB PROVIDER </span>
        <li><a href="http://www.portamedic.com" target="_blank">
            <img src="<?php echo base_url();?>images/medical/medical1.jpg" width="160" hspace="10" vspace="" align="left">
        </a></li>
        <li><a href="http://www.hooperholmes.com" target="_blank">
            <img src="<?php echo base_url();?>images/medical/medical2.jpg" width="160" hspace="10" vspace="" align="center">
        </a></li>
        <li><a href="http://www.examone.com" target="_blank">
            <img src="<?php echo base_url();?>images/medical/medical3.jpg" width="160" hspace="10" vspace="" align="right">
        </a>
        </li>
    </ul>
    
    <form name="form" action="<?php echo base_url() . "admin/lifeApplication_list/add_medical/" . $ownerId ?>" method="POST">
    
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
    
        PLEASE CHOOSE 2 PREFERRED DATES.
        <br></br>
        <p>
        First choice
        <input type="text" name="medicalFirstDate" id="medicalFirstDate" size="15"> &nbsp;
        <select name="medicalFirstTime">
            <option value="12:00 AM" selected="selected">12:00 AM</option>        
            <option value="7:00 AM">7:00 AM</option>
            <option value="8:00 AM">8:00 AM</option>
            <option value="9:00 AM">9:00 AM</option>
            <option value="10:00 AM">10:00 AM</option>
            <option value="11:00 AM">11:00 AM</option>
            <option value="12:00 AM">12:00 PM</option>
            <option value="1:00 PM">1:00 PM</option>
            <option value="2:00 PM">2:00 PM</option>
            <option value="3:00 PM">3:00 PM</option>
            <option value="4:00 PM">4:00 PM</option>
            <option value="5:00 PM">5:00 PM</option>
            <option value="6:00 PM">6:00 PM</option>
            <option value="7:00 PM">7:00 PM</option>
            <option value="8:00 PM">8:00 PM</option>
            <option value="9:00 PM">9:00 PM</option>             
        </select>
        <br>
             
    </p>
    
    <p>
        Second choice
        <input type="text" name="medicalSecondDate" id="medicalSecondDate" size="15"> &nbsp;
        <select name="medicalSecondTime">
            <option value="12:00 AM" selected="selected">12:00 AM</option>        
            <option value="7:00 AM">7:00 AM</option>
            <option value="8:00 AM">8:00 AM</option>
            <option value="9:00 AM">9:00 AM</option>
            <option value="10:00 AM">10:00 AM</option>
            <option value="11:00 AM">11:00 AM</option>
            <option value="12:00 AM">12:00 PM</option>
            <option value="1:00 PM">1:00 PM</option>
            <option value="2:00 PM">2:00 PM</option>
            <option value="3:00 PM">3:00 PM</option>
            <option value="4:00 PM">4:00 PM</option>
            <option value="5:00 PM">5:00 PM</option>
            <option value="6:00 PM">6:00 PM</option>
            <option value="7:00 PM">7:00 PM</option>
            <option value="8:00 PM">8:00 PM</option>
            <option value="9:00 PM">9:00 PM</option>         
        </select>
            
        </p><br />

        <input type="radio" name="medicalPreferred" value="iWillGo">I WILL GO TO MEDICAL EXAM FACILITY. <span class="subtitle_desc">*Nearest location will be provided in email</span><br /><br />
        <input type="radio" name="medicalPreferred" value="beVisited" checked>MEDICAL EXAMINER WILL VISIT YOU AT:<span class="subtitle_desc"> *Preferred Method</span><br>
        <br />
        <div id="medicalvisit">
            <input type="radio" name="medicalVisitAddressType" value="home" checked>
                Select this address(Home) :<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input style="border-style:none;" type="text" name="homeAddr" size="65" value="<?php echo $lifeApplicationList->address ?>" readonly></input>
                    <br>
            <input type="radio" name="medicalVisitAddressType" value="company">
                Select this address(Company) :<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input style="border-style:none;" type="text" name="companyAddr" size="65" value="<?php echo $lifeApplicationList->employerAddr ?>" readonly></input>
                    <br>
            <input type="radio" name="medicalVisitAddressType" value="newAddr">    
                Provide new address<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" size="65" name="newAddr"></input>
                    <br></br>
        </div>
        <input type="image" src="<?php echo base_url(); ?>images/btn_next.png" onclick="return requiredField()">   
    
    </form>
    
</div>

