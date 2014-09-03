<script type="text/javascript">
    
    $(document).ready(function(){
        
        $('#DOBBenefi1').datepicker({dateFormat:'yy-mm-dd'});
        $('#DOBBenefi2').datepicker({dateFormat:'yy-mm-dd'});
        $('#DOBBenefi3').datepicker({dateFormat:'yy-mm-dd'});
        $('#DOBBenefi4').datepicker({dateFormat:'yy-mm-dd'});

    });
    
    function requiredField()
    {    
        
        if(document.form.firstNameBenefi1.value.length < 1)
        {
            alert ("Input First Name")
            return false
        }
        
        if(document.form.lastNameBenefi1.value.length < 1)
        {
            alert ("Input Last Name")
            return false
        }

        if(document.form.DOBBenefi1.value.length < 1)
        {
            alert ("Input Date of Birth")
            return false
        }

        if(document.form.ssBenefi1.value.length < 1)
        {
            alert ("Input SSN# Number")
            return false
        }

        if(document.form.portionBenefi1.value.length < 1)
        {
            alert ("Input Portion")
            return false
        }  
        
        if(document.form.relationBenefi1.value.length < 1)
        {
            alert ("Input Relation")
            return false
        }  
        
   }
   
</script>  

<div id="sub_contentscontainer">
    
<div id="breadcrumb">OWNER RESPONSIBLE PARTY - INSURED - <span class="on">BENEFICIARY</span> - SCHEDULE MEDICAL - REVIEW&nbsp;&amp;&nbsp;COMPLETE</div>
<div class="page_short_info">Not sure what to fill out? No Problem! InsFilings guarantees an error-proof review process that will ensure your application is in accordance with insurance regulation and state compliant.</div>
   
<div class="subtitle">Beneficiary Information</div>

<div class="subtitle_desc">* PRIMARY BENEFICIARY is first in line to receive named benefits. <br />
                      * SECONDARY BENEFICIARY will only receive benefits if the primary beneficiary has died.<br /> 
                      * There can be more than one primary beneficiary
</div>
<div class="mainbody">
    
    * Proportion for both PRIMARY and SECONDARY(OPTIONAL) must be 100% EACH.  <br>
    ex1.  Primary 50%, Primary 50% ex.2 Primary 100% Secondary 33.3 secondary 33.3 Secondary 33.3 <br></br>
   <?php echo $ins_client_id ?>
<form name="form" action="<?php echo base_url() . "admin/lifeApplication_list/add_beneficiary/" . $ownerId ?>" method="POST">
    
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

    <?php 
        for ($i = 0;$i<4;$i++){
            $no = $i  + 1;
    ?>
    <br />
    <table class="frm_tbl">
        <tr>
            <td class="no"> <?php echo $no;?>.</td>
            <td class="label1">First Name:</td>
            <td class="input1"> <input type="text" name="firstNameBenefi<?php echo $no;?>" size="15"></td>
            <td class="label2">Last Name:</td>
            <td class="input2"><input type="text" name="lastNameBenefi<?php echo $no;?>" size="15"></td>
        </tr>
       
        <tr>
            <td class="no"></td>
            <td class="label1">Date of Birth:</td>
            <td class="input1"><input type="text" name="DOBBenefi<?php echo $no;?>" id="DOBBenefi<?php echo $no;?>" size="15"></td>
            <td class="label2">SSN#</td>
            <td class="input2"><input type="text" size="15" name="ssBenefi<?php echo $no;?>"></td>
        </tr>
       
        <tr>
            <td class="left"></td>
            <td class="label1">Priorty:</td>
            <td class="input1">
                <select name="primaryBenefi<?php echo $no;?>" id="Month0" class="frmControls">
                    <option value="">Please select</option>
                    <option selected="selected" value="Primary">Primary</option>
                    <option value="Secondary">Secondary</option>
                </select></td>
            <td class="label2">Portion</td>
            <td class="input2"><input type="text" size="3" name="portionBenefi<?php echo $no;?>">%</td>    
        </tr>
       
        <tr>
            <td class="left"></td>
            <td class="label1">Relation:</td>
            <td class="input1"><input type="text" size="15" name="relationBenefi<?php echo $no;?>"></td>
             <td class="label2">&nbsp;</td>
            <td class="input2">&nbsp;</td>   
        </tr>
    </table>
    
   <?php } ?>
    
    
    
        
     <input type="image" src="<?php echo base_url(); ?>images/btn_next.png" onclick="return requiredField()">
</form>
</div>

