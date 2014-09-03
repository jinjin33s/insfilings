<?php 
$selected_tab = "2";
include "house-insurance-inc.php" ;
?>

<div id="sub_contentscontainer">

    <p><span class="subtitle">Find Quotes, Compare & Success.</span></p><br>


	<table width="570" height="311" border="0" bgcolor="#cccccc" cellpadding="5" cellspacing="1">
	<tr>
        <td bgcolor="#82c6ed"><font color="#ffffff"><strong>STEP 1. Free no-obligation inquiry</strong></font></td>
      </tr>
      <tr>
          <form id='form1' name='form1' method='post' action='<?php echo base_url() . "admin/inquiry_list/house_initiate/"; ?>'>
        <td bgcolor="#ffffff" style="padding-left: 50px;">         
            <h3>Find out How Affordable Health Insurance can be.</h3>
		
                                    <table width="480" border="0" cellpadding="5" cellspacing="1" bgcolor="white">
			   
			   <tr><td width="141" align="right">
                Business Name</td>
                    <td bgcolor="#ffffff" width="316"><input type='text' name='BusinessName' id='BusinessName' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
                 <td align="right">  
                First Name</td>
                    <td bgcolor="#ffffff" ><input type='text' name='firstName' id='firstName' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
                <td align="right">   
                Last Name</td>
                    <td bgcolor="#ffffff" ><input type='text' name='lastName' id='lastName' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
                <td align="right">    
                Address</td>
                    <td bgcolor="#ffffff" ><input type='text' name='address' id='address' style="color: black; width: 300px; height: 18px; " /></td></tr>
					<tr>
                <td align="right">    
                State</td>
                    <td bgcolor="#ffffff" ><input type='text' name='state' id='state' style="color: black; width: 100px; height: 18px; " /></td></tr>
					<tr>
                <td align="right">   
                Zip Code</td>
                    <td bgcolor="#ffffff" ><input type='text' name='zip' id='zip' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
                <td align="right">  
                I'm interested in </td>  
				<td bgcolor="#ffffff" >
                  <select name="interested" id="interested">
                    <option value="Single Family">Single Family</option>
                    <option value="Multi Family">Multi Family</option>
                    <option value="Condo Co-Op">Condo Co-Op</option>
                    <option value="Apartment">Apartment</option>
                  </select>
				  </td></tr><tr>
                <td align="right">             
             Cost Value of Desired Coverage</td>
			  <td bgcolor="#ffffff">
              <select name="coverage" id="coverage">
                    <option value="50000">$50,000</option>
                    <option value="75000">$75,000</option>
                    <option selected="selected" value="100000">$100,000</option>
                    <option value="150000">$150,000</option>
                    <option value="200000">$200,000</option>
                    <option value="250000">$250,000</option>
                    <option value="300000">$300,000</option>
                    <option value="350000">$350,000</option>
                    <option value="400000">$400,000</option>
                    <option value="450000">$450,000</option>
                    <option value="500000">$500,000</option>
                    <option value="550000">$550,000</option>
                    <option value="600000">$600,000</option>
                    <option value="650000">$650,000</option>
                    <option value="700000">$700,000</option>
                    <option value="750000">$750,000</option>
                    <option value="800000">$800,000</option>
                    <option value="850000">$850,000</option>
                    <option value="900000">$900,000</option>
                    <option value="950000">$950,000</option>
                    <option value="1000000">$1,000,000</option>
                    <option value="1100000">$1,100,000</option>
                    <option value="1200000">$1,200,000</option>
                    <option value="1300000">$1,300,000</option>
                    <option value="1400000">$1,400,000</option>
                    <option value="1500000">$1,500,000</option>
                    <option value="1600000">$1,600,000</option>
                    <option value="1700000">$1,700,000</option>
                    <option value="1800000">$1,800,000</option>
                    <option value="1900000">$1,900,000</option>
                    <option value="2000000">$2,000,000</option>
                    <option value="2250000">$2,250,000</option>
                    <option value="2500000">$2,500,000</option>
                    <option value="2750000">$2,750,000</option>
                    <option value="3000000">$3,000,000</option>
                    <option value="3250000">$3,250,000</option>
                    <option value="3500000">$3,500,000</option>
                    <option value="3750000">$3,750,000</option>
                    <option value="4000000">$4,000,000</option>
                    <option value="4250000">$4,250,000</option>
                    <option value="4500000">$4,500,000</option>
                    <option value="4500000">$4,750,000</option>
                    <option value="5000000">$5,000,000</option>
                  </select></td></tr><tr>
               <td align="right">
              E-Mail</td>
			  <td bgcolor="#ffffff">
              <input type='text' name='email' id='email' style="color: black; width: 100px; height: 18px; " /></td></tr><tr>
              <td align="right">
              Phone</td>
			  <td bgcolor="#ffffff">
              <input type='text' name='phone' id='phone' style="color: black; width: 100px; height: 18px; " /></td></tr></table>
             <table width="450"><tr><td align="right">
              <input type="image" src='<?php echo base_url();?>images/btn_next.png' width="74" height="30">
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
<br>
<p> There are many health coverage options available. You might have insurance through an employer. Or you might start your coverage with InsFilings. Either way, knowing the basics will help you to get the most out of your health insurance coverage.</p>
<p>By requesting a free no-obligation quote, you authorize InsFilings to contact you regarding insurance quotes. If we reach your voicemail, we may leave you a pre-recorded message with more information about your quotes.</p>

</div>
