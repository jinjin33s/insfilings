<html>
    <head>
        <script charset="utf-8" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <link href="http://www.insfilings.com/css/iframe.css" rel="stylesheet" type="text/css" />
       

        <script type="text/javascript" charset="utf-8">

                $(document).ready(function() {
                    $('#quoteSubmit').click(function () {
                       
                        var data = $('#quoteForm').serialize();

                        $.ajax({
                            url: "/admin/inquiry_list/life_initiate",
                            type: "GET",
                            data: data ,
                            cache: false,
                            async:false,
                            success: function (html)
                            {

                                if (html == "1") {
                                  
                                   $('#quoteForm').action = 'http://vitalterm.ebixlife.com/vtweb/vtnettemplate/results.aspx';
                                   $('#quoteForm').submit();

                                }
                                else alert('Sorry, unexpected error. Please try again later.');
                            }
                        });


                        return false;
                    });
                 });
                 
            </script>
        
            <script type="text/javascript" charset="utf-8">

                 function submitQuote(){
                            var data = $('#quoteForm').serialize();
                           
                            $.ajax({
                                url: "/admin/inquiry_list/life_initiate_ajax",
                                type: "POST",
                                data: data ,
                                cache: false,
                                async:true,
                                success: function (html)
                                {
                                    $('#quoteForm').attr('action', 'http://vitalterm.ebixlife.com/vtweb/vtnettemplate/results.aspx');
                                       $('#quoteForm').submit();
                                    /*
                                    if (html == "1") {
                                       
                                       $('#quoteForm').attr('action', 'http://vitalterm.ebixlife.com/vtweb/vtnettemplate/results.aspx');
                                       $('#quoteForm').submit();

                                    }
                                    else alert('Sorry, unexpected error. Please try again later.');
                                    */
                                }
                            });


                            return false;
                 }
        </script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('#State').val('<?= $state; ?>');
            });
            $(document).ready(function(){
                $('#Sex').val('<?= $sex; ?>');
            });
            $(document).ready(function(){
                $('#Coverage').val('<?= $coverage; ?>');
            });
        </script>
        
    </head>

<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="960">
 <tr>
  <td>
<p><b><font size="4">INSURANCE RATE PORTAL FOR PROFESSIONAL COMMUNITY</font></b></p>
		
				<h2>Affordable and Simple Life Insurance in 3 Easy Steps.</h2>
		
		<h2>Step 1. Choose coverage and amount</h2>

    <form name="Form1" method="post" action="http://vitalterm.ebixlife.com/vtweb/vtnettemplate/results.aspx" id="Form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJMjg2MTkzODc3ZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAQULYnRuQ29udGludWXwaTV0JNpssV+lE8rYzCjS7tc7FQ==" />
</div>

<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="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" />
</div>
      <table align="left">
      <tr>
      <td>
        <table id="box-table-b-form">
           <thead>        
                <tr>
                    <th colspan="2" style="height: 23px">Get a Quote</th>
                </tr>
            </thead> 
            <tbody>         
            <tr>
            	<td>Last Name:</td>
            	<td><input type="text" name="LasttName0" size="20" id="LastName0" value="" maxlength="50" /></td>
            </tr>
            <tr>
            	<td>First Name:</td>
            	<td><input type="text" name="FirstName0" size="20" id="FirstName0" value="" maxlength="50" /></td>
            </tr>
            <tr>
            	<td>Telephone:</td>
            	<td><input type="text" name="FirstName0" size="5" id="FirstName0" value="" maxlength="3" />
            		<input type="text" name="FirstName0" size="5" id="FirstName0" value="" maxlength="3" />
            		<input type="text" name="FirstName0" size="7" id="FirstName0" value="" maxlength="4" />
            	</td>
            </tr>
            <tr>
            	<td>E-Mail:</td>
            	<td><input type="text" name="FirstName0" size="40" id="FirstName0" value="" maxlength="50" /></td>
            </tr>

            <tr>
            	
                <td class="box-table-b-form-question">State</td>
                <td class="box-table-b-form-answer">
                    <select name="State" id="State" class="frmControls">
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
                </td>
            </tr>
            <tr>
                <td class="box-table-b-form-question">Date of Birth</td>
                <td class="box-table-b-form-answer">
                    <select name="Month" id="Month" class="frmControls">
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
                    <select name="Day" id="Day" class="frmControls">
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
          <select name="Year" id="Year" class="frmControls">
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
                </td>
            </tr>
            <tr>
                <td class="box-table-b-form-question">Gender</td>
                <td class="box-table-b-form-answer">
                    <select name="Sex" id="Sex" class="frmControls">
	<option selected="selected" value="Male">Male</option>
	<option value="Female">Female</option>

</select>
                </td>
            </tr>
            <tr>
                <td class="box-table-b-form-question">Height</td>
                <td class="box-table-b-form-answer">
                    
                    <select name="Height_Feet" id="Height_Feet" class="frmControls">
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option selected="selected" value="6">6</option>
	<option value="7">7</option>

</select>
                    &nbsp;ft&nbsp;
                    <select name="Height_Inches" id="Height_Inches" class="frmControls">
	<option selected="selected" value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>

</select>
                    &nbsp;in&nbsp;
                </td>
            </tr>
            <tr>
              <td class="box-table-b-form-question">Weight</td>
              <td class="box-table-b-form-answer">
                <input name="Weight" type="text" value="170" maxlength="3" id="Weight" class="frmControls" style="width:60px;" />&nbsp;lbs
              </td>
            </tr>
            <tr>
                <td class="box-table-b-form-question">
                    Do you use Tobacco or Nicotine?
                </td>
                <td class="box-table-b-form-answer">
                    <select name="Tobacco" id="Tobacco" class="frmControls" onChange="disableFrequency()">
	<option selected="selected" value="0">Never</option>
	<option value="6">None in the last 5 years</option>
	<option value="5">None in the last 4 years</option>
	<option value="4">None in the last 3 years</option>
	<option value="3">None in the last 2 years</option>
	<option value="2">None in the last year</option>
	<option value="1">Current user</option>

</select>                    
                </td>
            </tr>
            <tr>
                <td class="box-table-b-form-question" onMouseOver="tooltip.show('Testing 123', 200);" onMouseOut="tooltip.hide();">
                    If so, how often?
                </td>
                <td class="box-table-b-form-answer">
                    <select name="Frequency" id="Frequency" class="frmControls">
	<option value="1">Cigarettes, less than 1 pack a day</option>
	<option value="2">Cigarettes, more than 1 pack a day</option>
	<option value="3">Cigar or Pipe daily</option>
	<option value="4">Cigar or Pipe, once a week</option>
	<option value="5">Cigar or Pipe, once a month</option>
	<option value="6">Cigar or Pipe, 12 or less a year</option>
	<option value="7">Cigar or Pipe, more than 12 per year</option>
	<option value="8">Nicotine patch or gum</option>
	<option value="8">Chew or snuff</option>
	<option selected="selected" value="8">N/A</option>

</select>
                </td>
            </tr>
            <tr>
                <td class="box-table-b-form-question">Coverage Amount</td>
                <td class="box-table-b-form-answer">
                    <select name="Amount" id="Amount" class="frmControls">
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

</select>                    
                </td>
            </tr>
            <tr>
                <td class="box-table-b-form-question">Level Period</td>
                <td class="box-table-b-form-answer">
                    <select name="ProductType" id="ProductType" class="frmControls">
	<option value="5,10,15,20,25,30">All Products</option>
	<option value="5">5 Years</option>
	<option value="10">10 Years</option>
	<option value="15">15 Years</option>
	<option selected="selected" value="20">20 Years</option>
	<option value="25">25 Years</option>
	<option value="30">30 Years</option>

</select>
                </td>
            </tr>
            <tr>
                <td class="box-table-b-form-question" onMouseOver="tooltip.show(health, 300);" onMouseOut="tooltip.hide();">Your Overall Health</td>
                <td class="box-table-b-form-answer">
                    <select name="Class" id="Class" class="frmControls">
	<option value="0">Very Good</option>
	<option value="3">Good</option>
	<option value="4">Average </option>
	<option value="5">Poor</option>

</select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right; padding-right:0px;">
                    <input type="image" name="btnContinue" id="btnContinue" src="images/bt_submit.png" style="border-width:0px;" /><br />
                    Choose a product that best fits your needs&nbsp;&nbsp;
                </td>
            </tr>
            </tbody> 
        </table>	 
      </td>
      </tr>
      </table>
    </form>

		




</td></tr></table>
</body>
</html>