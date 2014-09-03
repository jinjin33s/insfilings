<script type="text/javascript">
		$(document).ready(function() {
			$("a#quote_popup").fancybox({
                            type:'inline',
                            margin:0,
                            padding:0,
                            width:900,
                            height:288,
                            autoDimensions:false,
                            showCloseButton: false,
                            titleShow:false,
                            titlePosition: 'over',
                            titleFormat: formatTitle,
                            autoScale:false,
                            overlayShow	: false,
                            transitionIn: 'elastic',
                            transitionOut: 'elastic'
                            
			});
                        
                        
                });
                
                function formatTitle(title, currentArray, currentIndex, currentOpts) {
                    return '<div id="tip7-title"><span><a href="javascript:;" onclick="$.fancybox.close();"><img src="/data/closelabel.gif" alt="close" /></a></span>' + (title && title.length ? '<b>' + title + '</b>' : '' ) + 'Image ' + (currentIndex + 1) + ' of ' + currentArray.length + '</div>';
                }

 </script>
          
 
 
<div class="sub_header_life">
    
    <a id="quote_popup" href="#life-quote-form-container">Quote</a>
</div>

 
<div id="subMenuContainer">
	<a href="<?php echo base_url();?>life/life-insurance-overview" <?php if($selected_tab == "0"){ ?>class="selected_tab"<?php } ?>>Basics</a>
	<a href="<?php echo base_url();?>life/life-insurance-rate" <?php if($selected_tab == "1"){ ?>class="selected_tab"<?php } ?>> Rate & chart</a>
	<a href="<?php echo base_url();?>life/life-insurance-estimate" <?php if($selected_tab == "2"){ ?>class="selected_tab"<?php } ?>>Estimate my need</a>
	<a href="<?php echo base_url();?>life/life-insurance-type" <?php if($selected_tab == "3"){ ?>class="selected_tab"<?php } ?>>Types and Features</a>
        <a href="<?php echo base_url();?>life/life-insurance-whendoineed" <?php if($selected_tab == "4"){ ?>class="selected_tab"<?php } ?>>when Do I Need</a>
        <a href="<?php echo base_url();?>life/life-insurance-process" <?php if($selected_tab == "5"){ ?>class="selected_tab"<?php } ?>>Process</a>
        <a href="<?php echo base_url();?>life/life-insurance-states" <?php if($selected_tab == "6"){ ?>class="selected_tab"<?php } ?>>States</a>
        <a href="<?php echo base_url();?>life/life-insurance-existing-policy-review" <?php if($selected_tab == "7"){ ?>class="selected_tab"<?php } ?>>Existing Policy Review</a>
        
	<!--a href="<?php echo base_url();?>life/life-insurance-quote">Initiate a Life Insurance Plan</a-->
        <!--a id="quote_popup" href="#life-quote-form-container">Initiate a Life Insurance Plan</a-->
</div>


<script type="text/javascript" charset="utf-8">
                    
                 function disableFrequency(){
                      if($("#Tobacco").val() == "0"){
                             $("#frequency").val(8);
                      }else{
                             $("#frequency").val(1);
                      }
                 }   
                 function submitQuote(){
                          
                            var data = $('#quoteForm').serialize();
                            //alert(data);
                            $.ajax({
                                url: "<?php echo base_url();?>admin/inquiry_list/add_submit",
                                type: "POST",
                                data: data ,
                                cache: false,
                                async:true,
                                success: function (msg)
                                {
                                       $('#quoteForm #ins_client_id').val(msg);
                                      
                                       $('#quoteForm').attr('action', '<?php echo base_url();?>life_insurance/showQuoteList');
                                       
                                       $('#quoteForm').submit(); 
                                }
                            });
                            return false;
                 }
                 
                 
        </script>
        
        <script type="text/javascript">
            <?php if(isset($state)){ ?>
            $(document).ready(function(){
                
                $('#state').val('<?= $state; ?>');
            });
            <?php } ?>
              <?php if(isset($state)){ ?>
            $(document).ready(function(){
                $('#sex').val('<?= $sex; ?>');
            });
             <?php } ?>
              <?php if(isset($state)){ ?>
            $(document).ready(function(){
                $('#coverage').val('<?= $coverage; ?>');
            }); <?php } ?>
        </script>
        <script language="javascript">

      

       var MAX_DUMP_DEPTH = 10;

      

       function dumpObj(obj, name, indent, depth) {

              if (depth > MAX_DUMP_DEPTH) {

                     return indent + name + ": <Maximum Depth Reached>\n";

              }

              if (typeof obj == "object") {

                     var child = null;

                     var output = indent + name + "\n";

                     indent += "\t";

                     for (var item in obj)
                     {

                           try {
                                  child = obj[item];

                           } catch (e) {
                                  child = "<Unable to Evaluate>";
                           }

                           if (typeof child == "object") {
                                  output += dumpObj(child, item, indent, depth + 1);
                           } else {
                                  output += indent + item + ": " + child + "\n";
                           }
                     }

                     return output;

              } else {

                     return obj;

              }

       }

      

</script>
   
<div style="display:none" style_production="display:block;width:900px;height:410px;position:absolute;top:800px;left:0xp;z-index:10000">     
    
<!-- Quotte form Popup //-->    
<div id="life-quote-form-container" >
    
    
    <div id="quoteFormContainer">
    <form name="quoteForm" method="post"  id="quoteForm">
            
            <input type='hidden' name='who' id="who" value='self'/>
            <input type="hidden" name="ins_client_id" id="ins_client_id"/>
            <input type='hidden' name='insuranType' id="insuranType" value='Life'/>
            
            <div id="form_title">
                        <div class="popup_up_title"><img src="<? echo base_url();?>images/quote_popup_title.png"></div>
                        <div class="subtitle">Your instant free quote is just a click away!</div>
                        <div id="custom_closeBtn">
                            <a href="#" onclick="$.fancybox.close();">
                                <img src="<? echo base_url();?>js/fancybox/fancy_close.png" alt="close" />
                            </a>
                        </div>
            </div>
            <div class="form_hor_line">&nbsp;</div>    
            <div id="form_content">
                        <div class="form_column">
                            
                            <div id="box-table-b-form">                            
                                <div class="coverage">
                                    <div class="form_title"><img src="<?php echo base_url();?>images/icons/circledNumber1.png" />Select Coverage &amp; Period</div>
                                    <div class="form_content">
                                        <table>
                                        <tr>
                                            <td class="box-table-b-form-question">Coverage Amount</td>
                                            <td class="box-table-b-form-answer">
                                                <select name="amount" id="coverage" value="<?= $coverage?>" class="frmControls">
                                                        <option value="50000">$50,000</option>
                                                        <option value="75000">$75,000</option>
                                                        <option value="100000">$100,000</option>
                                                        <option value="150000">$150,000</option>
                                                        <option value="200000">$200,000</option>
                                                        <option value="250000" selected>$250,000</option>
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
                                                                                    
                                            <td class="box-table-b-form-question">Level Period</td>
                                            <td class="box-table-b-form-answer">
                                                                                                
                                                <select name="ProductType" id="ProductType" >
                                                        <option value='10'>10 Years</option>
                                                        <option value='15'>15 Years</option>
                                                        <option value='20' selected>20 Years</option>
                                                        <option value='25'>25 Years</option>
                                                        <option value='30'>30 Years</option>

                                                </select>
                                                            

                                            </td>
                                        </tr>
                                          
                                        <tr>
                                            <td class="box-table-b-form-question" onMouseOver="tooltip.show(health, 300);" onMouseOut="tooltip.hide();">Your Overall Health</td>
                                            <td class="box-table-b-form-answer">
                                                <select name="Class" id="Class" class="frmControls">
                                                        <option value="1" selected >Very Good</option>
                                                        <option value="3">Good</option>
                                                        <option value="4">Average </option>
                                                        <option value="5">Poor</option>
                                      
                                                </select>
                                            </td>
                                                                                  
                                            <td class="box-table-b-form-question">Smoking Status</td>
                                            <td class="box-table-b-form-answer">
                                                
                                                <select name="SmokingStatus" id="SmokingStatus" >
                                                        <option value='1' selected="selected">Non Smoker</option>
                                                        <option value='3'>Smoker</option>
                                                        <option value='2'>Tobacco(non cigarette)</option>
                                                </select>                                                            
                                            </td>
                                        </tr>
                                        
                                        
                                        
                                         <tr>
                                            <td class="box-table-b-form-question">Date of Birth</td>
                                            <td class="box-table-b-form-answer" colspan="3">
                                                <select name="month" id="month" class="frmControls">
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
                                                <select name="day" id="day" class="frmControls">
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
                                                <select name="year" id="year" class="frmControls">
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
                                        </table>
                                    </div>
                                </div>
                                
                                <div class="form_hor_line">&nbsp;</div>  
                                
                                <div class="basic">
                                    <div class="form_title"><img src="<?php echo base_url();?>images/icons/circledNumber2.png" />Health &amp; Basic Information</div>
                                    <div class="form_content">
                                        <table>
                                        <tr>
                                                <td>First Name:</td>
                                                <td><input type="text" name="firstName" id="firstName" style="color: black; width: 100px; " /></td>
                                                <td>Last Name:</td>
                                                <?php if(isset($lastName)) { ?>
                                                <td><input type="text" name="lastName" id="lastName" value="<?= $lastName?>" style="color: black; width: 100px; "/></td>
                                                 <?php }else{ ?>
                                                <td><input type="text" name="lastName" id="lasttName" style="color: black; width: 100px; "/></td>
                                                 <?php }?>
                                            </tr>
                                            <tr>
                                                <td>Telephone:</td><td><input type="text" name="phone" id="phone"  style="color: black; width: 100px; " /></td>
                                                <td>E-Mail:</td><td><input type="text" name="email"  id="email" style="color: black; width: 100px;" /></td>                                 
                                            </tr>
                                              <tr>
                                                <td class="box-table-b-form-question">Gender</td>
                                                <td class="box-table-b-form-answer">
                                                    <select name="sex" id="sex" value="" class="frmControls">
                                                            <option selected="selected" value="Male">Male</option>
                                                            <option value="Female">Female</option>

                                                    </select>
                                                </td>
                                                 <td class="box-table-b-form-question">State</td>
                                                 <td class="box-table-b-form-answer">
                                                        <select name="state" id="state" class="frmControls">
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
                                        </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="form_hor_line">&nbsp;</div>  
                               <div id="form_submit">
                                   <div class="submitBtn"><input type='image' id="quoteSumit" onclick="submitQuote(); return false" src='<?php echo base_url(); ?>images/bt_submit.png' /></div>     
                                   <div id="submit_slogan">View premium rates and ratings from over 100 major insurance providers on the next screen</div>
                                </div>
                                
                            </div>   
                                        

                                    
                        </div>
                        <div class="form_right">
                            <div>We make purchasing online life insurance simple and reliable</div>
                            <br /><br />
                            <div class="question">Have a Question?</div>
                            <div class="answer">Let us answer 800-838-6640</div>
                        </div>
                        
                    
             </div>
                
            
    </form>
    </div>
    
</div>
</div>