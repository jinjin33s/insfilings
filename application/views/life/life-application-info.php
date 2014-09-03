<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/uploadify/uploadify.css" />

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript">
    var addhint = "street, city, state and zip";
    
    $(document).ready(function() {
        
        setAddressField($('input[name="address"]'));
        setAddressField($('input[name="otheraddress"]'));
        setAddressField($('input[name="employerAddr"]'));
        
    });
     
     
    function setAddressField(address){
       
        
        address.addClass("idleField");
        address.val(addhint);
        address.focus(function() {
                        $(this).removeClass("idleField").addClass("focusField");
                     
                        if (this.value == addhint){
                            this.value = '';
                        }
                        if(this.value != addhint){
                            this.select();
                        }
         });
        address.blur(function() {
            
            if ($.trim(this.value) == ''){
                    this.value = addhint;
                    $(this).removeClass("focusField").addClass("idleField");
            }
            
        });

    }
    
    function checkAddressField(address){
        if(address.val() == addhint){
            address.val('');
        }
    }
    
</script>
<script type="text/javascript">
    
     
        
    if(top.location.href !=  window.location.href && top.frames.length > 0)
     {
        top.location.href = window.location.href;
     }
 
    $(document).ready(function(){
        
        $('#dob').datepicker({dateFormat:'yy-mm-dd'});
        $('#driverIssueDate').datepicker({dateFormat:'yy-mm-dd'});
        $('#driverExpDate').datepicker({dateFormat:'yy-mm-dd'});

        document.getElementById('self').style.display = "";
        document.getElementById('other').style.display = "none";
    });
    
    function div_OnOff(v,id)
    {
        // compare with radio button value conditions
         if(v == "other"){
          document.getElementById('other').style.display = "";
          document.getElementById('self').style.display = "none";
         }else if(v == "self"){
          document.getElementById('self').style.display = "";
          document.getElementById('other').style.display = "none";
         }
    }
    
    function requiredField()
    {        
        
        checkAddressField($('input[name="address"]'));
        checkAddressField($('input[name="otheraddress"]'));
        checkAddressField($('input[name="employerAddr"]'));
     
        if((document.getElementById('rbself').checked) == true){//self �면
            
            if(document.form1.lastName.value.length < 1)
            {
                alert ("Input Last Name")
                return false
            }

            if(document.form1.firstName.value.length < 1)
            {
                alert ("Input First Name")
                return false
            }

            if(document.form1.address.value.length < 1)
            {
                alert ("Input Address")
                return false
            }

            if(document.form1.tel.value.length < 1)
            {
                alert ("Input Tel Number")
                return false
            }

            if(document.form1.email.value.length < 1)
            {
                alert ("Input Email")
                return false
            }
        }else{//other �면
            
            if(document.form1.otherlastName.value.length < 1)
            {
                alert ("Input self Last Name")
                return false
            }

            if(document.form1.otherfirstName.value.length < 1)
            {
                alert ("Input First Nmae")
                return false
            }

            if(document.form1.otheraddress.value.length < 1)
            {
                alert ("Input Address")
                return false
            }

            if(document.form1.othertel.value.length < 1)
            {
                alert ("Input Tel Number")
                return false
            }

            if(document.form1.otheremail.value.length < 1)
            {
                alert ("Input Email")
                return false
            }
        }        
        
   }
   
   

</script>    
   

<!-- <div class="mainbody_top">Not sure what to fill out? No Problem! InsFilings guarantees an error-proof review process that will ensure your application is in accordance with insurance regulation and state compliant.
 </div>-->

<div id="sub_contentscontainer">
<div id="breadcrumb"><span class="on">OWNER RESPONSIBLE PARTY</span> - INSURED - BENEFICIARY - SCHEDULE MEDICAL - REVIEW&nbsp;&amp;&nbsp;COMPLETE</div>
<div class="page_short_info">Not sure what to fill out? No Problem! InsFilings guarantees an error-proof review process that will ensure your application is in accordance with insurance regulation and state compliant.</div>

<div class="subtitle">Applicant / Owner Information</div>

<div class="subtitle_desc"> This will be the owner and the controller of this policy.</br> 
Please provide the information necessary to complete your life insurance policy.
</div>
<div class="mainbody">

        <form name="form1" action="<?php echo base_url() . "admin/lifeApplication_list/add_lifeApplication/".$ins_client_id; ?>" method="POST">        

            <input type="hidden" name="ins_clinent_id" value="<?php echo $ins_client_id ?>"/>
            <input type="hidden" name="templastName" value="<?php echo $lastName ?>"/>
            <input type="hidden" name="tempfirstName" value="<?php echo $firstName ?>"/>
            <input type="hidden" name="temptel" value="<?php echo $tel ?>"/>
            <input type="hidden" name="tempemail" value="<?php echo $email ?>"/>
            <input type="hidden" name="tempgender" value="<?php echo $gender ?>"/>
            <input type="hidden" name="policyState" value="<?php echo $state ?>"/>
            <input type="hidden" name="tempcoverage" value="<?php echo $coverage ?>"/>    
            <input type="hidden" name="naic" value="<?php echo $company_naic_code ?>"/>
            <input type="hidden" name="coverage" value="<?php echo $coverage ?>" size="30"></input>
            <input type="hidden" name="insuranceCompany" value="<?php echo $insuranceCompany ?>" size="30"></input>
            <input type="hidden" name="pName" value="<?php echo $pName ?>" size="30"></input>
            <input type="hidden" name="termPeriod" value="<?php echo $termPeriod ?>" size="30"></input>
            <input type="hidden" name="healthStatus" value="<?php echo $healthStatus ?>" size="30"></input>
            <input type="hidden" name="insuredDateofBirth" value="<?php echo $mm;?>/<?php echo $dd;?>/<?php echo $yy; ?>" size="30"></input>
            <input type="hidden" name="ann" value="<?php echo $ann ?>"></input> 
            <input type="hidden" name="semi" value="<?php echo $semi ?>"></input>
            <input type="hidden" name="quar" value="<?php echo $quar ?>"></input>
            <input type="hidden" name="month" value="<?php echo $month ?>"></input>
            
            
            <ul class="summary">
                <li><span class="label">Amount of Insurance:</span><span class="data"><?php echo "\$".number_format($coverage, 0, '', ',') ?></span></li>
                <li><span class="label">Insurance Company:</span><span class="data"> <?php echo $insuranceCompany ?></span></li>
                <li><span class="label">Name of Policy:</span><span class="data"><?php echo $pName ?></span></li>
                <li><span class="label">Term Period:</span><span class="data"><?php echo $termPeriod ?>&nbsp; years</span></li>
                <li><span class="label">Policy State:</span><span class="data"><?php echo $state ?></span></li>
                <li><span class="label">Health Status:</span><span class="data"><?php echo $healthStatus ?></span></li>
                <li><span class="label">Insured Date of Birth:</span><span class="data"><?php echo $mm;?>/<?php echo $dd;?>/<?php echo $yy; ?></span></li>
                <li><span class="label">Gender:</span><span class="data"><?php echo $gender ?></span></li>
            </ul>    
            <div id="prerequisite">
            Premium Options: <select id="premiumOption" name="premiumOption" value="">
            <option value="<?php echo $ann ?> (Annual)" selected="selected"><?php echo $ann ?> (Annual)</option>
            <option value="<?php echo $semi ?> (Semi-Annual)"><?php echo $semi ?> (Semi-Annual)</option>
            <option value="<?php echo $quar ?> (Quarterly)"><?php echo $quar ?> (Quarterly) </option>
            <option value="<?php echo $month ?> (Monthly)"><?php echo $month ?> (Monthly)</option>
            </select><br /> <br /> 

            THIS LIFE INSURANCE APPLICATION IS BASED ON THE LIFE OF: 
                
            <input type="radio" name="who" id="rbself" value="self" onclick="div_OnOff(this.value,'self')" checked><b><font color="#357EC7">SELF</font></b>
            <input type="radio" name="who" id="rbother" value="other" onclick="div_OnOff(this.value,'other')"><b><font color="#B93B8F">OTHER</font></b>
        </div>
            
           <!-- 
            ###
            ### OTHER ###
            ###
           --> 
          <div id="other" style="display:none"> 
                    
                    Last Name
                    <input type="text" name="otherlastName" value=""></input>
                    First Name
                    <input type="text" name="otherfirstName" value=""></input>
                    Middle Initial
                    <input type="text" name="othermiddleName" size="1" value=""></input>
                    <br /><br />        
                    Address:
                    <input type="text" name="otheraddress" size="50" value=""></input>
                     <br /><br />        
                    I lived in this address for:
                    <input type="text" name="otheraddrYears" size="4" value=""></input>
                  
                    Years
                    <br /><br />        
                    Tel:
                    <input type="text" name="othertel" value=""></input>
                    Email:
                    <input type="text" name="otheremail" value=""></input>
                    <br /><br />
                    Gender:
                    <input type="radio" name="othergender" value="male" ><b><font color="#357EC7">Male</font></b>
                    <input type="radio" name="othergender" value="female"><b><font color="#B93B8F">Female</font></b>
                    <br /><br />
                    DOB:
                    <select name="othermonth" id="othermonth" class="frmControls">
                            <option selected="selected" value="01">Jan</option>
                            <option value="02">Feb</option>
                            <option value="03">Mar</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">Aug</option>
                            <option value="09">Sept</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>

                    </select>&nbsp;
                    <select name="otherday" id="otherday" class="frmControls">
                            <option selected="selected" value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>

                    </select>&nbsp;
                    <select name="otheryear" id="otheryear" class="frmControls">
                            <option value="1910">1910</option>
                            <option value="1911">1911</option>
                            <option value="1912">1912</option>
                            <option value="1913">1913</option>
                            <option value="1914">1914</option>
                            <option value="1915">1915</option>
                            <option value="1916">1916</option>
                            <option value="1917">1917</option>
                            <option value="1918">1918</option>
                            <option value="1919">1919</option>
                            <option value="1920">1920</option>
                            <option value="1921">1921</option>
                            <option value="1922">1922</option>
                            <option value="1923">1923</option>
                            <option value="1924">1924</option>
                            <option value="1925">1925</option>
                            <option value="1926">1926</option>
                            <option value="1927">1927</option>
                            <option value="1928">1928</option>
                            <option value="1929">1929</option>
                            <option value="1930">1930</option>
                            <option value="1931">1931</option>
                            <option value="1932">1932</option>
                            <option value="1933">1933</option>
                            <option value="1934">1934</option>
                            <option value="1935">1935</option>
                            <option value="1936">1936</option>
                            <option value="1937">1937</option>
                            <option value="1938">1938</option>
                            <option value="1939">1939</option>
                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option selected="selected" value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>

                    </select>
                    Social Security No.
                    <input type="text" name="otherssn" value=""></input>
                    <br /><br />
                    Driver License/State ID No.
                    <input type="text" name="otherdriverNo" value=""></input>
                    State
                    <select name='otherdriverState' id='otherdriverState'>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>

                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>

                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>

                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>

                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>

                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>

                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>

                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>

                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                        <option value="GM">Guam</option>
                        <option value="PR">Puerto Rico</option>

                        <option value="VI">Virgin Islands</option>
                    </select>
                    <br /><br />
                    Issue Date
                    <select name="otherissuemonth" id="otherissuemonth" class="frmControls">
                            <option selected="selected" value="01">Jan</option>
                            <option value="02">Feb</option>
                            <option value="03">Mar</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">Aug</option>
                            <option value="09">Sept</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>

                    </select>&nbsp;
                    <select name="otherissueday" id="otherissueday" class="frmControls">
                            <option selected="selected" value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>

                    </select>&nbsp;
                    <select name="otherissueyear" id="otherissueyear" class="frmControls">
                            <option value="1900">1900</option>
                            <option value="1910">1910</option>
                            <option value="1911">1911</option>
                            <option value="1912">1912</option>
                            <option value="1913">1913</option>
                            <option value="1914">1914</option>
                            <option value="1915">1915</option>
                            <option value="1916">1916</option>
                            <option value="1917">1917</option>
                            <option value="1918">1918</option>
                            <option value="1919">1919</option>
                            <option value="1920">1920</option>
                            <option value="1921">1921</option>
                            <option value="1922">1922</option>
                            <option value="1923">1923</option>
                            <option value="1924">1924</option>
                            <option value="1925">1925</option>
                            <option value="1926">1926</option>
                            <option value="1927">1927</option>
                            <option value="1928">1928</option>
                            <option value="1929">1929</option>
                            <option value="1930">1930</option>
                            <option value="1931">1931</option>
                            <option value="1932">1932</option>
                            <option value="1933">1933</option>
                            <option value="1934">1934</option>
                            <option value="1935">1935</option>
                            <option value="1936">1936</option>
                            <option value="1937">1937</option>
                            <option value="1938">1938</option>
                            <option value="1939">1939</option>
                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option selected="selected" value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            

                    </select>
                    Exp. Date
                    <select name="otherexpDatemonth" id="otherexpDatemonth" class="frmControls">
                            <option selected="selected" value="01">Jan</option>
                            <option value="02">Feb</option>
                            <option value="03">Mar</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">Aug</option>
                            <option value="09">Sept</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>

                    </select>&nbsp;
                    <select name="otherexpDateday" id="otherexpDateday" class="frmControls">
                            <option selected="selected" value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>

                    </select>&nbsp;
                    <select name="otherexpDateyear" id="otherexpDateyear" class="frmControls">
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012" selected="selected">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>

                    </select>
                    <br /><br />
                    Citizenship
                    <input type="radio" name="othercitizenship" value="USA" >U.S.A.
                    <input type="radio" name="othercitizenship" value="Legal resident">Legal resident
                    <font color="#FF0000"> *For non-US Citizen, copy of green card or valid visa required </font>
                    <br /><br />
                    Birth place
                    <input type="text" name="otherbirthPlace" value=""></input>
                    <br /><br />
                    Occupation
                    <input type="text" name="otheroccupation" value=""></input>
                    Title
                    <input type="text" name="otheroccupationTitle" value=""></input><br /><br />
                    Employer Name
                    <input type="text" name="otheremployerName" value=""></input><br /><br />
                    Employer Address
                    <input type="text" name="otheremployerAddr" size="60" value=""></input>
                    <br /><br />
                    Are you a a currently full-time member of Armed Forces? 
                    <input type="radio" name="otherarmedForce" value="yes" >Yes
                    <input type="radio" name="otherarmedForce" value="no">No
                    <br /><br /> 

                    <b><font color="#FF0080">Financial Information & Suitability</font></b>
                    <br /><br />
                    <font color="#B93B8F">
                    Annual Wage & Salary
                    <input type="text" name="otherAnnual" value=""></input><br /><br />
                    Annual Household Income
                    <input type="text" name="otherHouseIncome" value=""></input><br /><br />
                    Annual Additional Income
                    <input type="text" name="otherAdditionalIncome" value=""></input><br /><br />
                    Total Net Worth (All Assets)
                    <input type="text" name="otherTotalNetWorth" value=""></input><br /><br />
                    Liquid Net Worth (All Assets minus properties)
                    <input type="text" name="otherLiquidNetWorth" value=""></input><br /><br />
                    Purpose of the insurance policy:<br>
                    <input type="radio" name="otherPurposePolicy" value="Family protection/Income replacement" >Family protection/Income replacement 
                    <input type="radio" name="otherPurposePolicy" value="Mortgage/Debt payment">Mortgage/Debt payment 
                    <input type="radio" name="otherPurposePolicy" value="Other">Other
                    <br /><br />
                    Have you recently filed for bankruptcy?
                    <input type="radio" name="otherBankrupcy" value="yes" >Yes
                    <input type="radio" name="otherBankrupcy" value="no">No
                    <br /><br />
                    Have you sold or plan to sell this policy to a life settlement provider?
                    <input type="radio" name="otherSellPolicy" value="yes" >Yes
                    <input type="radio" name="otherSellPolicy" value="no">No
                    <br /><br />
                    Do you plan to take out loan(s) to pay for this policy?
                    <input type="radio" name="otherLoanPayPolicy" value="yes" >Yes
                    <input type="radio" name="otherLoanPayPolicy" value="no">No
                    <br /><br />
                    Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
                    <input type="radio" name="otherPurchasingPolicy" value="yes" >Yes
                    <input type="radio" name="otherPurchasingPolicy" value="no">No
                    <br /><br />        
                    </font>        
                </div>   

           
           <!-- 
            ###
            ### SELF ###
            ###
           --> 
           
                <div id="self" style="display:none">
                    Last Name
                    <input type="text" name="lastName" value="<?php echo $lastName ?>"></input>
                    First Name
                    <input type="text" name="firstName" value="<?php echo $firstName ?>"></input>
                    Middle Initial
                    <input type="text" name="middleName" size="1" value=""></input>
                    <br /><br />        
                    Address:
                    <input type="textarea" name="address" size="50" value=""></input>
                    <br /><br />        
                    I lived in this address for:
                    <input type="text" name="addrYears" size="4" value=""></input>
                    Years
                    <br /><br />        
                    Tel:
                    <input type="text" name="tel" value="<?php echo $tel ?>"></input>
                    Email:
                    <input type="text" name="email" value="<?php echo $email ?>"></input>
                    <br /><br />
                    Gender:
                    <input type="radio" name="gender" value="male" ><b><font color="#357EC7">Male</font></b>
                    <input type="radio" name="gender" value="female"><b><font color="#B93B8F">Female</font></b>
                    <br /><br />
                    DOB:     
                    <select name="dobmonth" id="month" class="frmControls">
                            <option selected="selected" value="01">Jan</option>
                            <option value="02">Feb</option>
                            <option value="03">Mar</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">Aug</option>
                            <option value="09">Sept</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>

                    </select>&nbsp;
                    <select name="dobday" id="day" class="frmControls">
                            <option selected="selected" value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>

                    </select>&nbsp;
                    <select name="dobyear" id="year" class="frmControls">
                           
                            <option selected="selected" value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>

                    </select>
                    
                    Social Security No.
                    <input type="text" name="ssn" value=""></input>
                    <br /><br />
                    Driver License/State ID No.
                    <input type="text" name="driverNo" value=""></input>
                    State
                    <select name='driverState' id='driverState'>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>

                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>

                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>

                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>

                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>

                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>

                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>

                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>

                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                        <option value="GM">Guam</option>
                        <option value="PR">Puerto Rico</option>

                        <option value="VI">Virgin Islands</option>
                    </select>
                    <br /><br />
                    Issue Date                    
                    <select name="issuemonth" id="issuemonth" class="frmControls">
                            <option selected="selected" value="01">Jan</option>
                            <option value="02">Feb</option>
                            <option value="03">Mar</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">Aug</option>
                            <option value="09">Sept</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>

                    </select>&nbsp;
                    <select name="issueday" id="issueday" class="frmControls">
                            <option selected="selected" value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>

                    </select>&nbsp;
                    <select name="issueyear" id="issueyear" class="frmControls">
                           
                            <option value="1900">1900</option>
                            <option value="1910">1910</option>
                            <option value="1911">1911</option>
                            <option value="1912">1912</option>
                            <option value="1913">1913</option>
                            <option value="1914">1914</option>
                            <option value="1915">1915</option>
                            <option value="1916">1916</option>
                            <option value="1917">1917</option>
                            <option value="1918">1918</option>
                            <option value="1919">1919</option>
                            <option value="1920">1920</option>
                            <option value="1921">1921</option>
                            <option value="1922">1922</option>
                            <option value="1923">1923</option>
                            <option value="1924">1924</option>
                            <option value="1925">1925</option>
                            <option value="1926">1926</option>
                            <option value="1927">1927</option>
                            <option value="1928">1928</option>
                            <option value="1929">1929</option>
                            <option value="1930">1930</option>
                            <option value="1931">1931</option>
                            <option value="1932">1932</option>
                            <option value="1933">1933</option>
                            <option value="1934">1934</option>
                            <option value="1935">1935</option>
                            <option value="1936">1936</option>
                            <option value="1937">1937</option>
                            <option value="1938">1938</option>
                            <option value="1939">1939</option>
                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option selected="selected" value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>

                    </select>
                    
                    Exp. Date                    
                    <select name="expDatemonth" id="expDatemonth" class="frmControls">
                            <option selected="selected" value="01">Jan</option>
                            <option value="02">Feb</option>
                            <option value="03">Mar</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">Aug</option>
                            <option value="09">Sept</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>

                    </select>&nbsp;
                    <select name="expDateday" id="expDateday" class="frmControls">
                            <option selected="selected" value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>

                    </select>&nbsp;
                    <select name="expDateyear" id="expDateyear" class="frmControls">
                            
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012" selected="selected">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>                           

                    </select>
                    
                    <br /><br />
                    Citizenship
                    <input type="radio" name="citizenship" value="USA" >U.S.A.
                    <input type="radio" name="citizenship" value="Legal resident">Legal resident
                    <font color="#FF0000"> *For non-US Citizen, copy of green card or valid visa required</font>
                    <br /><br />
                    Birth place
                    <input type="text" name="birthPlace" value=""></input>
                    <br /><br />
                    Occupation
                    <input type="text" name="occupation" value=""></input>
                    Title
                    <input type="text" name="occupationTitle" value=""></input><br /><br />
                    Employer Name
                    <input type="text" name="employerName"  value=""></input><br /><br />
                    Employer Address
                    <input type="text" name="employerAddr" size="60" value=""></input>
                    <br /><br />
                    Are you a a currently full-time member of Armed Forces? 
                    <input type="radio" name="armedForce" value="yes" >Yes
                    <input type="radio" name="armedForce" value="no">No
                    <br /><br />  
                    
                    Do you have any other existing life insurance policies?
                    <input type="radio" name="existing" value="yes" >Yes
                    <input type="radio" name="existing" value="no">No
                    <br>If yes, Name of company
                    <input type="text" name="yesCompany" value=""></input>
                    amount
                    <input type="text" name="yesAmount" value=""></input>
                    <br /><br />
                    Will this policy cause termination, replacement or change of any existing policy (does not include employer provided policies)?
                    <input type="radio" name="replacementChange" value="yes" >Yes
                    <input type="radio" name="replacementChange" value="no">No
                    <br /><br />
                    <b><font color="#2554C7">Health & Life Style Questions</font></b>
                    <br /><br />
                    <font color="#357EC7">
                    Have you recently had a driver's license suspended, revoked or restricted?
                    <input type="radio" name="driverRevoked" value="yes" >Yes
                    <input type="radio" name="driverRevoked" value="no">No
                    <br /><br />
                    Have you recently been convicted of, or pleaded guilty to, reckless or negligent driving or driving under the influence of alcohol or drugs?
                    <input type="radio" name="convict" value="yes" >Yes
                    <input type="radio" name="convict" value="no">No
                    <br /><br />
                    Have you recently been disabled for two or more weeks?
                    <input type="radio" name="disabled" value="yes" >Yes
                    <input type="radio" name="disabled" value="no">No
                    <br /><br />
                    Have you ever applied for a life or health insurance and been declined?
                    <input type="radio" name="healthDeclined" value="yes" >Yes
                    <input type="radio" name="healthDeclined" value="no">No
                    <br /><br />
                    Have you ever been convicted of, or plead guilty or no contest to, a felony, or are current felony charges pending?
                    <input type="radio" name="felonyPending" value="yes" >Yes
                    <input type="radio" name="felonyPending" value="no">No
                    <br /><br />
                    Do you ever plan to travel for an extended period or reside in foreign countries?
                    <input type="radio" name="travel" value="yes" >Yes
                    <input type="radio" name="travel" value="no">No
                    <br /><br />
                    Have you recently piloted any kind or aircraft or plan to do so?
                    <input type="radio" name="aircraft" value="yes" >Yes
                    <input type="radio" name="aircraft" value="no">No
                    <br /><br />
                    Have you recently been involved in or plan to engage in motor racing, underwater diving, skydiving, ballooning, hang gliding, parachuting or other potentially hazardous sports or hobbies?
                    <input type="radio" name="skydiving" value="yes" >Yes
                    <input type="radio" name="skydiving" value="no">No
                    <br /><br />
                    Have you ever received medical treatment or been advised by a physician to reduce or discontinue the use of alcohol or prescribed or non-prescribed drugs?
                    <input type="radio" name="medicalTreatment" value="yes" >Yes
                    <input type="radio" name="medicalTreatment" value="no">No
                    <br /><br />
                    Do you use tobacco or nicotine products?
                    <input type="radio" name="tobacco" value="yes" >Yes
                    <input type="radio" name="tobacco" value="no">No
                    <br /><br />
                    Have you recently experienced rapid weight gain/loss?
                    <input type="radio" name="rapidWeight" value="yes" >Yes
                    <input type="radio" name="rapidWeight" value="no">No
                    <br /><br />
                    Do you have a pre-existing heart condition or disease; or experienced stroke, or had cancer?
                    <input type="radio" name="preDisease" value="yes" >Yes
                    <input type="radio" name="preDisease" value="no">No
                    <br /><br />
                    Within the past 10 years, have you been diagnosed or treated for Acquired Immune Deficiency Syndrome (AIDS) or AIDS-Related Complex (ARC) by a member of the medical profession? 
                    <input type="radio" name="diagnosed" value="yes" >Yes
                    <input type="radio" name="diagnosed" value="no">No
                    <br /><br />
                    Have you recently been hospitalized?
                    <input type="radio" name="hospitalized" value="yes" >Yes
                    <input type="radio" name="hospitalized" value="no">No
                    <br /><br />
                    </font>  

                    <b><font color="#2554C7">Financial Information & Suitability</font></b>
                    <br /><br />
                    <font color="#357EC7">
                    Annual Wage & Salary
                    <input type="text" name="selfAnnual" value=""></input><br /><br />
                    Annual Household Income
                    <input type="text" name="selfHouseIncome" value=""></input><br /><br />
                    Annual Additional Income
                    <input type="text" name="selfAdditionalIncome" value=""></input><br /><br />
                    Total Net Worth (All Assets)
                    <input type="text" name="selfTotalNetWorth" value=""></input><br /><br />
                    Liquid Net Worth (All Assets minus properties)
                    <input type="text" name="selfLiquidNetWorth" value=""></input><br /><br />
                    Purpose of the insurance policy:<br>
                    <input type="radio" name="selfPurposePolicy" value="Family protection/Income replacement" >Family protection/Income replacement 
                    <input type="radio" name="selfPurposePolicy" value="Mortgage/Debt payment">Mortgage/Debt payment 
                    <input type="radio" name="selfPurposePolicy" value="Other">Other
                    <br /><br />
                    Have you recently filed for bankruptcy?
                    <input type="radio" name="selfBankrupcy" value="yes" >Yes
                    <input type="radio" name="selfBankrupcy" value="no">No
                    <br /><br />
                    Have you sold or plan to sell this policy to a life settlement provider?
                    <input type="radio" name="selfSellPolicy" value="yes" >Yes
                    <input type="radio" name="selfSellPolicy" value="no">No
                    <br /><br />
                    Do you plan to take out loan(s) to pay for this policy?
                    <input type="radio" name="selfLoanPayPolicy" value="yes" >Yes
                    <input type="radio" name="selfLoanPayPolicy" value="no">No
                    <br /><br />
                    Has any compensation or other inducement been offered or arranged in connection with applying for and or purchasing this policy?
                    <input type="radio" name="selfPurchasingPolicy" value="yes" >Yes
                    <input type="radio" name="selfPurchasingPolicy" value="no">No
                    <br /><br />        
                    </font>

                </div>
            <br />
            <input type="image" src="<?php echo base_url(); ?>images/btn_next.png" onclick="return requiredField()">

        </form>
        </div>
</div>
