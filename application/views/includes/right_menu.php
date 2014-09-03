
<script type="text/javascript">

var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
var phoneReg = /^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/;
// TAB
$(document).ready(function() {

	//When page loads...
       
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
       
       
	//On Click Event
	$("ul.tabs li").click(function() {
               
                if($(this).prevAll().length == 0){
                    $('#quickQuote_title').removeClass('etc').addClass('life');
                }else{
                   $('#quickQuote_title').removeClass('life').addClass('etc'); 
                }
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});
});



function validateLifeForm(){

    if ($("#quickForm_life input[name='firstName']").val() == ''){
        alert("Please enter a First Name.")
        return false
        }

    if ($("#quickForm_life input[name='lastName']").val() == ''){
        alert("Please enter a Last Name.")
        return false
        }    
    if (emailReg.test($("#quickForm_life input[name='email']"))){
        alert("Please enter a valid email address like you@domain.com")
        return false
        }
    
    if  ($("#quickForm_life input[name='phone']").val() == ''){
        alert("Please enter a phone number.")
        return false
        }
        
    var insuranType = $('#insuranType').val();
    
    //organize the data properly
    var data =  $('#quickForm_life').serialize();
    
     $.ajax({
       type: "POST",
       url: "<?php echo base_url() ?>admin/inquiry_list/add_submit/",
       data: data,
       success: function(msg){
           //alert(msg);
           if(msg == ''){
               alert("DB error occured. Try again!")
           }
           else
           {
               $('#quickForm_life #ins_client_id').val(msg);
               $('#quickForm_life').attr('action',"<?php echo base_url()?>life_insurance/showQuoteList");
               $('#quickForm_life').submit(); 
           }
       }
     });
     
    return false;
 }

function validateHealthForm(){

    if ($("#quickform_health input[name='firstName']").val() == ''){
        alert("Please enter a First Name.")
        return false
        }
    if ($("#quickform_health input[name='lastName']").val() == ''){
        alert("Please enter a Last Name.")
        return false
        }    
    if (!emailReg.test($("#quickform_health input[name='email']").val())){
        alert("Please enter a valid email address like you@domain.com")
        return false
        }
        var phone_number = $("#quickform_health input[name='phone']").val();
    if (phone_number.length < 9 || !phoneReg.test(phone_number)){
        alert("Please enter a phone number.")
        return false
        }
     $("#quickform_health").attr('action', '<?php echo base_url()."admin/inquiry_list/add_submit/";?>');
     $("#quickform_health").submit();
}

function validateBusinessForm(){
     
    if ($("#quickform_business input[name='firstName']").val() == ''){
        alert("Please enter a First Name.")
        return false
        }
    if ($("#quickform_business input[name='lastName']").val() == ''){
        alert("Please enter a Last Name.")
        return false
        }    
    if (!emailReg.test($("#quickform_business input[name='email']").val())){
        alert("Please enter a valid email address like you@domain.com")
        return false
        }
         var phone_number = $("#quickform_business input[name='phone']").val();
    if (phone_number.length < 9 || !phoneReg.test(phone_number)){
        alert("Please enter a phone number.")
        return false
        }
    
     $("#quickform_business").attr('action', '<?php echo base_url()."admin/inquiry_list/add_submit/";?>');
     $("#quickform_business").submit();
}

function validateHouseForm() {
    
    if ($("#quickform_house input[name='firstName']").val() == ''){
        alert("Please enter a First Name.")
        return false
        }
    if ($("#quickform_house input[name='lastName']").val() == ''){
        alert("Please enter a Last Name.")
        return false
        }
    if (!emailReg.test($("#quickform_house input[name='email']").val())){
        alert("Please enter a valid email address like you@domain.com")
        return false
        }
    var phone_number = $("#quickform_house input[name='phone']").val();
   if (phone_number.length < 9 || !phoneReg.test(phone_number)){
        alert("Please enter a phone number.")
        return false
        }
    
     $("#quickform_house").attr('action', '<?php echo base_url()."admin/inquiry_list/add_submit/";?>');
     $("#quickform_house").submit();
}

</script>


<div class="quickQuote_formcontainer">
    <div id="quickQuote_title" class="life"></div>
    <ul class="tabs"> 
        <li><a href="#tab_life">Life</a></li>
        <li><a href="#tab_health">Health</a></li>
        <li><a href="#tab_business">Business</a></li>
        <li><a href="#tab_house">House</a></li>
    </ul>
    <div class="tabLine">&nbsp;</div>
    <div class="tab_container">

        <div id="tab_life" class="tab_content">

        <form id='quickForm_life' name='quickForm_life' method='post'  >

                <input type='hidden' name='insuranType' id="insuranType" value='Life'/>
                <input type='hidden' name='who' id="who" value='self'/>
                <input type="hidden" name="SmokingStatus" id="SmokingStatus" value="1"/><!-- 1 non smoker, 2 smoker, 3 tobacco(non cigarrette) -->
                <input type="hidden" name="ProductType" id="ProductType" value="20"/><!--5,10,15,20,25,30 years -->                
                <input type="hidden" name="Class" id="Class" value="0"/><!-- 0=>very good, 3=>good, 4=>average, 5=>poor -->
                <input type="hidden" name="ins_client_id" id="ins_client_id" value=""/>
                    
                <div class="formcontainer_inside">
                    <div class="formcontainer_text"> State*</div>
                    <div class="formcontainer_form">
                        <select name='state' id='state'>
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
                    </div>
                </div>

                <div class="formcontainer_inside">
                    <div class="formcontainer_text">Sex*</div>
                    <div class="formcontainer_form">
                        <select name='sex' id='sex'>
	                    <option value='Male' selected>Male</option>
                            <option value='Female'>Female</option>                            
                        </select>
                    </div>
                </div>

                <div class="formcontainer_inside">
                    <div class="formcontainer_text">Date of birth*</div>
                    <div class="formcontainer_form">
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
                    </div>
                </div>

                <div class="formcontainer_inside">
                    <div class="formcontainer_text">Coverage*</div>
                    <div class="formcontainer_form">
                        <select name='amount' id='amount'>
                        <option value="100000">$100,000</option>
                        <option value="150000">$150,000</option>
                        <option value="200000">$200,000</option>
                        <option value="250000" selected="selected">$250,000</option>
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
                    </div>
                </div>

                <div class="formcontainer_inside">
                    <div class="formcontainer_text">First Name*</div>
                    <div class="formcontainer_form">
                        <input type='text' name='firstName' id='firstName' class='input_right' size='20'/>
                    </div>
                </div>

                <div class="formcontainer_inside">
                    <div class="formcontainer_text">Last Name*</div>
                    <div class="formcontainer_form">
                        <input type='text' name='lastName' id='lastName' class='input_right' size='20'/>
                    </div>
                </div>

                <div class="formcontainer_inside">
                    <div class="formcontainer_text">E-mail*</div>
                    <div class="formcontainer_form">
                        <input type='text' name='email' id='email' class='input_right' size='20'/>
                    </div>
                </div>

                <div class="formcontainer_inside">
                    <div class="formcontainer_text">Phone*</div>
                    <div class="formcontainer_form">
                        <input type='text' name='phone' id='phone' class='input_right' size='20'/>
                    </div>
                </div>

                
                <div class="formlegalcopy">
                    *All fileds are requried to provide accurate quotes.<br>
**By submitting your request, you agree to this website's Privacy Policy and Terms and Conditions. You may be contacted by InsFilings.
                </div>
                <div class="submit_btn_container">
                   <input class="submit_btn_life" type='button' onclick="validateLifeForm();return false;" />
                </div>
            </form>
        </div>
       

        <div id="tab_health" class="tab_content">
            <form id='quickform_health' name='quickform_health' method='post'>

                <input type='hidden' name='insuranType' id="insuranType" value='Health'>
                <input type='hidden' name='who' id="who" value='self'>
                    <div class="formcontainer_inside">
                    <div class="formcontainer_text">State*</div>
                    <div class="formcontainer_form">
                        <select name='state' id='state'>
                            <option value='Alabama' selected>Alabama</option>
                            <option value='Alaska'>Alaska</option>
                            <option value='Arizona'>Arizona</option>
                            <option value='Arkansas'>Arkansas</option>
                            <option value='California'>California</option>
                            <option value='Colorado'>Colorado</option>
                            <option value='Connecticut'>Connecticut</option>
                            <option value='Delaware'>Delaware</option>
                            <option value='District of Columbia'>District of Columbia</option>
                            <option value='Florida'>Florida</option>
                            <option value='Georgia'>Georgia</option>
                            <option value='Hawaii'>Hawaii</option>
                            <option value='Idaho'>Idaho</option>
                            <option value='Illinois'>Illinois</option>
                            <option value='Indiana'>Indiana</option>
                            <option value='Iowa'>Iowa</option>
                            <option value='Kansas'>Kansas</option>
                            <option value='Kentucky'>Kentucky</option>
                            <option value='Louisiana'>Louisiana</option>
                            <option value='Maine'>Maine</option>
                            <option value='Maryland'>Maryland</option>
                            <option value='Massachusetts'>Massachusetts</option>
                            <option value='Michigan'>Michigan</option>
                            <option value='Minnesota'>Minnesota</option>
                            <option value='Mississippi'>Mississippi</option>
                            <option value='Missouri'>Missouri</option>
                            <option value='Montana'>Montana</option>
                            <option value='Nebraska'>Nebraska</option>
                            <option value='Nevada'>Nevada</option>
                            <option value='New Hampshire'>New Hampshire</option>
                            <option value='New Jersey'>New Jersey</option>
                            <option value='New Mexico'>New Mexico</option>
                            <option value='New York'>New York</option>
                            <option value='North Carolina'>North Carolina</option>
                            <option value='North Dakota'>North Dakota</option>
                            <option value='Ohio'>Ohio</option>
                            <option value='Oklahoma'>Oklahoma</option>
                            <option value='Oregon'>Oregon</option>
                            <option value='Pennsylvania'>Pennsylvania</option>
                            <option value='Rhode Island'>Rhode Island</option>
                            <option value='South Carolina'>South Carolina</option>
                            <option value='South Dakota'>South Dakota</option>
                            <option value='Tennessee'>Tennessee</option>
                            <option value='Texas'>Texas</option>
                            <option value='Utah'>Utah</option>
                            <option value='Vermont'>Vermont</option>
                            <option value='Virginia'>Virginia</option>
                            <option value='Washington'>Washington</option>
                            <option value='West Virginia'>West Virginia</option>
                            <option value='Wisconsin'>Wisconsin</option>
                            <option value='Wyoming'>Wyoming</option>
                        </select>
                    </div>
                    </div>

                    <div class="formcontainer_inside">
                    <div class="formcontainer_text">Type*</div>
                    <div class="formcontainer_form"><select name='sex' id='sex'>
                          <option value='Singles' selected>Singles</option>
                            <option value='Couples'>Couples</option>
                            <option value='Families'>Families</option>
                            <option value='Single parents'>Single parents</option>
                        </select></div>
                    </div>

                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">First Name*</div>
                        <div class="formcontainer_form"><input type='text' name='firstName' id='firstName' width='150'  class='input_right'/></div>
                    </div>

                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">Last Name*</div>
                        <div class="formcontainer_form"><input type='text' name='lastName' id='lastName' width='150'  class='input_right'/></div>
                    </div>

                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">Email*</div>
                        <div class="formcontainer_form"><input type='text' name='email' id='email' width='150'  class='input_right'/></div>
                    </div>

                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">Phone*</div>
                        <div class="formcontainer_form"><input type='text' name='phone' id='phone' width='150'  class='input_right'/></div>
                    </div>

                <div class="formlegalcopy">
                    *All fileds are requried to provide accurate quotes.<br>
**By submitting your request, you agree to this website's Privacy Policy and Terms and Conditions. You may be contacted by InsFilings.
                </div>
                <div class="submit_btn_container">
                   <input class="submit_btn_etc" type='button' onclick="validateHealthForm();return false;" />
                </div>
               
            </form>
        </div>

        <div id="tab_business" class="tab_content">
            <form id='quickform_business' name='quickform_business' method='post'>

                <input type='hidden' name='insuranType' id="insuranType" value='Business'>
                <input type='hidden' name='who' id="who" value='self'>
                <div class="formcontainer_inside">
                        <div class="formcontainer_text">State*</div>
                        <div class="formcontainer_form"><select name='state' id='state'>
                    <option value='Alabama' selected>Alabama</option>
                    <option value='Alaska'>Alaska</option>
                    <option value='Arizona'>Arizona</option>
                    <option value='Arkansas'>Arkansas</option>
                    <option value='California'>California</option>
                    <option value='Colorado'>Colorado</option>
                    <option value='Connecticut'>Connecticut</option>
                    <option value='Delaware'>Delaware</option>
                    <option value='District of Columbia'>District of Columbia</option>
                    <option value='Florida'>Florida</option>
                    <option value='Georgia'>Georgia</option>
                    <option value='Hawaii'>Hawaii</option>
                    <option value='Idaho'>Idaho</option>
                    <option value='Illinois'>Illinois</option>
                    <option value='Indiana'>Indiana</option>
                    <option value='Iowa'>Iowa</option>
                    <option value='Kansas'>Kansas</option>
                    <option value='Kentucky'>Kentucky</option>
                    <option value='Louisiana'>Louisiana</option>
                    <option value='Maine'>Maine</option>
                    <option value='Maryland'>Maryland</option>
                    <option value='Massachusetts'>Massachusetts</option>
                    <option value='Michigan'>Michigan</option>
                    <option value='Minnesota'>Minnesota</option>
                    <option value='Mississippi'>Mississippi</option>
                    <option value='Missouri'>Missouri</option>
                    <option value='Montana'>Montana</option>
                    <option value='Nebraska'>Nebraska</option>
                    <option value='Nevada'>Nevada</option>
                    <option value='New Hampshire'>New Hampshire</option>
                    <option value='New Jersey'>New Jersey</option>
                    <option value='New Mexico'>New Mexico</option>
                    <option value='New York'>New York</option>
                    <option value='North Carolina'>North Carolina</option>
                    <option value='North Dakota'>North Dakota</option>
                    <option value='Ohio'>Ohio</option>
                    <option value='Oklahoma'>Oklahoma</option>
                    <option value='Oregon'>Oregon</option>
                    <option value='Pennsylvania'>Pennsylvania</option>
                    <option value='Rhode Island'>Rhode Island</option>
                    <option value='South Carolina'>South Carolina</option>
                    <option value='South Dakota'>South Dakota</option>
                    <option value='Tennessee'>Tennessee</option>
                    <option value='Texas'>Texas</option>
                    <option value='Utah'>Utah</option>
                    <option value='Vermont'>Vermont</option>
                    <option value='Virginia'>Virginia</option>
                    <option value='Washington'>Washington</option>
                    <option value='West Virginia'>West Virginia</option>
                    <option value='Wisconsin'>Wisconsin</option>
                    <option value='Wyoming'>Wyoming</option>
            </select></div>
                </div>
                <div class="formcontainer_inside">
                    <div class="formcontainer_text" style="width:100px;">Business Name*</div>
                    <div class="formcontainer_form"><input type='text' name='businessName' id='businessName' style="width: 130px;"  class='input_right'/></div>
                </div>

                <div class="formcontainer_inside">
                    <div class="formcontainer_text">First Name*</div>
                    <div class="formcontainer_form"><input type='text' name='firstName' id='firstName' width='150'  class='input_right'/></div>
                </div>
                <div class="formcontainer_inside">
                    <div class="formcontainer_text">Last Name*</div>
                    <div class="formcontainer_form"><input type='text' name='lastName' id='lastName' width='150'  class='input_right'/></div>
                </div>
                <div class="formcontainer_inside">
                    <div class="formcontainer_text">Email*</div>
                    <div class="formcontainer_form"><input type='text' name='email' id='email' width='150'  class='input_right'/></div>
                </div>
                <div class="formcontainer_inside">
                    <div class="formcontainer_text">Phone*</div>
                    <div class="formcontainer_form"><input type='text' name='phone' id='phone' width='150'  class='input_right'/></div>
                </div>

                <div class="formlegalcopy">
                    *All fileds are requried to provide accurate quotes.<br>
**By submitting your request, you agree to this website's Privacy Policy and Terms and Conditions. You may be contacted by InsFilings.
                </div>
                <div class="submit_btn_container">
                   <input class="submit_btn_etc" type='button' onclick="validateBusinessForm();return false;" />
                </div>
                
            </form>
        </div>

        <div id="tab_house" class="tab_content">
            <form id='quickform_house' name='quickform_house' method='post'>

                <input type='hidden' name='insuranType' id="insuranType" value='House'>
                <input type='hidden' name='who' id="who" value='self'>
                    <div class="formcontainer_inside">
                    <div class="formcontainer_text">State*</div>
                        <div class="formcontainer_form">
                            <select name='state' id='state'>
                                <option value='Alabama' selected>Alabama</option>
                                <option value='Alaska'>Alaska</option>
                                <option value='Arizona'>Arizona</option>
                                <option value='Arkansas'>Arkansas</option>
                                <option value='California'>California</option>
                                <option value='Colorado'>Colorado</option>
                                <option value='Connecticut'>Connecticut</option>
                                <option value='Delaware'>Delaware</option>
                                <option value='District of Columbia'>District of Columbia</option>
                                <option value='Florida'>Florida</option>
                                <option value='Georgia'>Georgia</option>
                                <option value='Hawaii'>Hawaii</option>
                                <option value='Idaho'>Idaho</option>
                                <option value='Illinois'>Illinois</option>
                                <option value='Indiana'>Indiana</option>
                                <option value='Iowa'>Iowa</option>
                                <option value='Kansas'>Kansas</option>
                                <option value='Kentucky'>Kentucky</option>
                                <option value='Louisiana'>Louisiana</option>
                                <option value='Maine'>Maine</option>
                                <option value='Maryland'>Maryland</option>
                                <option value='Massachusetts'>Massachusetts</option>
                                <option value='Michigan'>Michigan</option>
                                <option value='Minnesota'>Minnesota</option>
                                <option value='Mississippi'>Mississippi</option>
                                <option value='Missouri'>Missouri</option>
                                <option value='Montana'>Montana</option>
                                <option value='Nebraska'>Nebraska</option>
                                <option value='Nevada'>Nevada</option>
                                <option value='New Hampshire'>New Hampshire</option>
                                <option value='New Jersey'>New Jersey</option>
                                <option value='New Mexico'>New Mexico</option>
                                <option value='New York'>New York</option>
                                <option value='North Carolina'>North Carolina</option>
                                <option value='North Dakota'>North Dakota</option>
                                <option value='Ohio'>Ohio</option>
                                <option value='Oklahoma'>Oklahoma</option>
                                <option value='Oregon'>Oregon</option>
                                <option value='Pennsylvania'>Pennsylvania</option>
                                <option value='Rhode Island'>Rhode Island</option>
                                <option value='South Carolina'>South Carolina</option>
                                <option value='South Dakota'>South Dakota</option>
                                <option value='Tennessee'>Tennessee</option>
                                <option value='Texas'>Texas</option>
                                <option value='Utah'>Utah</option>
                                <option value='Vermont'>Vermont</option>
                                <option value='Virginia'>Virginia</option>
                                <option value='Washington'>Washington</option>
                                <option value='West Virginia'>West Virginia</option>
                                <option value='Wisconsin'>Wisconsin</option>
                                <option value='Wyoming'>Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">Zip code*</div>
                        <div class="formcontainer_form"><input type='text' name='zipCode' id='zipCode' width='150'  class='input_right'/></div>
                    </div>

                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">Interested In*</div>
                        <div class="formcontainer_form">
                            <select name='interested' id='interested'>
                                <option value='Single family' selected>Single family</option>
                                <option value='Multi family'>Multi family</option>
                                <option value='Condo & Co-Op'>Condo & Co-Op</option>
                                <option value='Apartment'>Apartment</option>
                            </select>
                        </div>
                    </div>

                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">Cost*</div>
                        <div class="formcontainer_form">
                            <select name='cost' id='cost'>
                                <option value='$50,000'>$50,000</option>
                                <option value='$75,000'>$75,000</option>
                                <option value='$100,000'>$100,000</option>
                                <option value='$150,000'>150,000</option>
                                <option value='$200,000'>$200,000</option>
                                <option value='$250,000' selected>$250,000</option>
                                <option value='$300,000'>$300,000</option>
                                <option value='$350,000'>$350,000</option>
                                <option value='$400,000'>$400,000</option>
                                <option value='$450,000'>$450,000</option>
                                <option value='$500,000'>$500,000</option>
                                <option value='$550,000'>$550,000</option>
                                <option value='$600,000'>$600,000</option>
                                <option value='$650,000'>$650,000</option>
                                <option value='$700,000'>$700,000</option>
                                <option value='$750,000'>$750,000</option>
                                <option value='$800,000'>$800,000</option>
                                <option value='$850,000'>$850,000</option>
                                <option value='$900,000'>$900,000</option>
                                <option value='$950,000'>$950,000</option>
                                <option value='$1,000,000'>$1,000,000</option>
                                <option value='$1,100,000'>$1,100,000</option>
                                <option value='$1,200,000'>$1,200,000</option>
                                <option value='$1,300,000'>$1,300,000</option>
                                <option value='$1,400,000'>$1,400,000</option>
                                <option value='$1,500,000'>$1,500,000</option>
                                <option value='$1,600,000'>$1,600,000</option>
                                <option value='$1,700,000'>$1,700,000</option>
                                <option value='$1,800,000'>$1,800,000</option>
                                <option value='$1,900,000'>$1,900,000</option>
                                <option value='$2,000,000'>$2,000,000</option>
                                <option value='$2,500,000'>$2,500,000</option>
                                <option value='$3,000,000'>$3,000,000</option>
                                <option value='$3,500,000'>$3,500,000</option>
                                <option value='$4,000,000'>$4,000,000</option>
                                <option value='$4,500,000'>$4,500,000</option>
                                <option value='$5,000,000'>$5,000,000</option>
                                <option value='$5,500,000'>$5,500,000</option>
                                <option value='$6,000,000'>$6,000,000</option>
                                <option value='$6,500,000'>$6,500,000</option>
                                <option value='$7,000,000'>$7,000,000</option>
                                <option value='$7,500,000'>$7,500,000</option>
                            </select>
                        </div>
                    </div>

                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">First Name*</div>
                        <div class="formcontainer_form"><input type='text' name='firstName' id='firstName' width='150'  class='input_right'/></div>
                    </div>
                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">Last Name*</div>
                        <div class="formcontainer_form"><input type='text' name='lastName' id='lastName' width='150'  class='input_right'/></div>
                    </div>
                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">Email*</div>
                        <input type='text' name='email' id='email' width='150'  class='input_right'/>
                    </div>
                    <div class="formcontainer_inside">
                        <div class="formcontainer_text">Phone*</div>
                        <div class="formcontainer_form"><input type='text' name='phone' id='phone' width='150'  class='input_right'/></div>
                    </div>

                <div class="formlegalcopy">
                    *All fileds are requried to provide accurate quotes.<br>
    **By submitting your request, you agree to this website's Privacy Policy and Terms and Conditions. You may be contacted by InsFilings.
                </div>
                <div class="submit_btn_container">
                   <input class="submit_btn_etc" type='button' onclick="validateHouseForm();return false;" />
                </div>
            </form>
        </div>
        
        </div>
</div>

<div class='bn_tools'>
<ul class="link">
<li><a href="<?php echo base_url();?>about/contactus">Contact InsFilings</a></li>
<li><a href="<?php echo base_url();?>about/our-promise">Why InsFilings & Our Promise</a></li>
<li><a href="<?php echo base_url();?>about/faqs">Frequently Asked Questions</a></li>
<li><a href="<?php echo base_url();?>about/learning-center">Learning Center</a></li>
<li><a href="<?php echo base_url();?>about/claim">Claim</a></li>
<li><a href="<?php echo base_url();?>account/signup">Sign Up for E-Delivery</a></li>
</ul>
</div>