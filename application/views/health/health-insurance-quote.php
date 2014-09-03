<?php 
$selected_tab = "8";
include "health-insurance-inc.php" ;
?>


<div id="sub_contentscontainer">
<body>
    <p><span class="subtitle" style="line-height: 1.1em;">Find out How Affordable Health <br>Insurance can be</span></p>
	 
   <table width="570" height="311" border="0" bgcolor="#cccccc" cellpadding="5" cellspacing="1">
	<tr>
        <td bgcolor="#82c6ed"><font color="#ffffff"><strong>STEP 1. Free no-obligation inquiry</strong></font></td>
      </tr>
      <tr>

      <form id='form1' name='form1' method='post' action='<?php echo base_url() . "admin/inquiry_list/health_initiate/"; ?>'>
        <td bgcolor="#ffffff" style="padding-left: 40px;">      
         <table width="480" border="0" cellpadding="5" cellspacing="0" bgcolor="white">
			   
			   <tr><td  width="141" align="right">
                First Name</td>
                    <td bgcolor="#ffffff" width="316"><input type='text' name='firstName' id='firstName' style="color: black; width: 100px; height: 18px; " /></td></tr>
				<tr><td width="141" align="right">
                Last Name</td>
                    <td bgcolor="#ffffff" width="316"><input type='text' name='lastName' id='lastName' style="color: black; width: 100px; height: 18px; " /></td></tr>
                <tr><td  width="141" align="right">
                Zip Code</td>
                    <td bgcolor="#ffffff" width="316"><input type='text' name='zip' id='zip' style="color: black; width: 100px; height: 18px; " /></td></tr>

                <tr><td  width="141" align="right">
				Health Insurance for :  </td> <td bgcolor="#ffffff" width="316">
                  <select name="healthFor" id="healthFor">
                    <option value="MEDICAL">MEDICAL</option>
                    <option value="DENTAL">DENTAL</option>
                    <option value="VISION">VISION</option>
                    <option value="DISABILITY">DISABILITY</option>
                    <option value="PHARMACY">PHARMACY</option>
                    <option value="STUDENT">STUDENT</option>
                    <option value="PET">PET</option>
                  </select>
				  </td></tr>
                <tr><td  width="141" align="right">
              <td bgcolor="#ffffff" width="316"><input type="radio" name="lifeType" id="sex"/>
              Singles<input type="radio" name="lifeType" id="sex"/>
              Couples<input type="radio" name="lifeType" id="sex"/>
              Single Parents<input type="radio" name="lifeType" id="sex"/>
              Families
			  </td></tr>
              <tr><td  width="141" align="right">
              E-Mail</td>
              <td bgcolor="#ffffff" width="316"><input type='text' name='email' id='email' style="color: black; width: 100px; height: 18px; " /></td></tr>
              <tr><td  width="141" align="right">
              Phone</td>
              <td bgcolor="#ffffff" width="316"><input type='text' name='phone' id='phone' style="color: black; width: 100px; height: 18px; " /></td></tr>
		  </table>
		  <table width="450"><tr><td align="right">
              <input type="image" src='<?php echo base_url();?>/images/btn_next.png' width="74" height="30">
			  </td></tr></table>          
        </td></form>
      </tr>
      <tr>
        <td bgcolor="#47a5d4"><font color="#ffffff">STEP 2. Plan &amp; Price Comparison</font></td>
      </tr>
      <tr>
        <td bgcolor="#2793c7"><font color="#ffffff">STEP 3. Application</font></td>
      </tr>
      <tr>
        <td bgcolor="#0f85bc"><font color="#ffffff">STEP 4. Confirmation &amp; Approval</font></td>
      </tr>
</table>
    
<p> There are many health coverage options available. You might have insurance through an employer. Or you might start your coverage with InsFilings. Either way, knowing the basics will help you to get the most out of your health insurance coverage.</p>
<p>By requesting a free no-obligation quote, you authorize InsFilings to contact you regarding insurance quotes. If we reach your voicemail, we may leave you a pre-recorded message with more information about your quotes.</p>

</body>

</div>


