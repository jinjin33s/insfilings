<script language="Javascript">
<!--

function form_ck() {
    
    if (document.form1.email.value.length < 1){
        alert("Please enter a Email Address.")
        return false
        }
    if (document.form1.password.value.length < 1){
        alert("Please enter a Password.")
        return false
        }
        
     document.form1.action="<?php echo base_url() . "account/checkMylogin/"; ?>";
     document.form1.submit();
}
</script>



<div id="sub_contentscontainer">
<p><span class="subtitle">Log in to my Status Center</span></p>
<br>


 <form id='form1' name='form1' method='post' action='<?php echo base_url() . "account/checkMylogin/"; ?>'>
    <p><b>View order status and send message</b><br /><br />
    <table class="frm_table">
    <tr>
        <td>Email Address</td>
        <td><input type="text" name="email" id="firstName"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" id="lastName"></td>
    </tr>
    <tr><td>&nbsp;</td>
        <td><input type='image' src='<?php echo base_url();?>images/buttons/btn_signup.png' onclick="return form_ck()"></td>
    </tr>
    </table>
    

 </form>

</div>
<br />
<br />

