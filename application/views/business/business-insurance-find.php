<?php 
$selected_tab = "0";
include "business-insurance-inc.php" ;
?>

<div id="sub_contentscontainer">
<body>
    <p><span class="subtitle">Find Quotes, Compare & Success.</span></p><br>
    <table width="570" height="311" border="0" bgcolor="#cccccc" cellpadding="5" cellspacing="1">
	<tr>
        <td bgcolor="#82c6ed"><font color="#ffffff"><strong>STEP 1. Free no-obligation inquiry</strong></font></td>
      </tr>
      <tr>
          <form id='form1' name='form1' method='post' action='<?php echo base_url() . "admin/inquiry_list/business_initiate/"; ?>'>
              <td bgcolor="#ffffff" style="padding-left: 50px;">
            <h3>Business & Commercial</h3>
               <table width="480" border="0" cellpadding="5" cellspacing="1" bgcolor="white">
			   
			   <tr><td width="160" align="right">
                Business Name</td>
                    <td bgcolor="#ffffff" width="320"><input type='text' name='BusinessName' id='BusinessName' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
                 <td align="right">  
                First Name</td>
                    <td bgcolor="#ffffff" ><input type='text' name='firstName' id='firstName' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
                <td align="right">   
                Last Name</td>
                    <td bgcolor="#ffffff" ><input type='text' name='lastName' id='lastName' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
                <td align="right">    
                Address</td>
                    <td bgcolor="#ffffff" ><input type='text' name='address' id='address' style="color: black; width: 300px; height: 18px; " /></td></tr><tr>
                <td align="right">   
                Zip Code</td>
                    <td bgcolor="#ffffff" ><input type='text' name='zip' id='zip' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
                <td align="right">  
                I'm interested in </td>  
				<td bgcolor="#ffffff" >
                  <select name="interested" id="interested">
                    <option value="General Liability">General Liability</option>
                    <option value="Commercial Auto">Commercial Auto</option>
                    <option value="Professional Liability">Professional Liability</option>
                    <option value="Umbrella Coverage">Umbrella Coverage</option>
                    <option value="Workers' Compensation">Workers' Compensation</option>
                    <option value="Disability Insurance">Disability Insurance</option>
                  </select>
				  </td></tr><tr>
                <td align="right">             
              Description of Business</td>
			  <td bgcolor="#ffffff">
              <input type='text' name='Description' id='Description' style="color: black; width: 300px; height: 18px; " /></td></tr><tr>
               <td align="right">
              E-Mail</td>
			  <td bgcolor="#ffffff">
              <input type='text' name='email' id='email' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
              <td align="right">
              Phone</td>
			  <td bgcolor="#ffffff">
              <input type='text' name='phone' id='phone' style="color: black; width: 100px; height: 18px; " /></td></tr></table>
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

