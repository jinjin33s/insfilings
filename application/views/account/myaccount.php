<div style="margin-top: 30px;">
</div>

<div id="sub_contentscontainer">
<p><span class="subtitle">Our Status Center</span></p>
<br>

<body>
 <form id='form1' name='form1' method='post' action='<?php echo base_url() . "admin/inquiry_list/signup/"; ?>'>
    <p><b>Your Information</b><br>
    
    
        <table cellspacing="1" cellpadding="3" border="0" bgcolor="#CCCCCC">
          <tr height="25" bgcolor="#eeeeee">
            <td width="86" height="25"  align="center"><strong>Application Date</strong></td>
             <td width="54" align="center"><strong> Type </strong></td>
            <td width="58" align="center" ><strong> Insurance Amount </strong></td>
            <td width="107" align="center"><strong> Company </strong></td>
            <td width="107" align="center"><strong> Product </strong></td>
            <td width="108" align="center"><strong> Term Period </strong></td>
            <td width="108" align="center"><strong> Status </strong></td>
          </tr>
          
          <?php foreach($myaccountInfo as $mi){?>
          
          <tr height="20">
            <td width="86" height="20" align="center" bgcolor="#ffffff"> <?php echo $mi->created_at; ?> </td>
             <td width="54" bgcolor="#ffffff" align="center"> LIFE </td>
            <td width="58" align="center" bgcolor="#ffffff"> <?php echo $mi->coverage; ?> </td>
            <td align="right" width="107" bgcolor="#ffffff"> <?php echo $mi->insuranceCompany; ?></td>
            <td align="right" width="107" bgcolor="#ffffff"> </td>
            <td align="right" width="108" bgcolor="#ffffff"> <?php echo $mi->termPeriod; ?></td>
            <td align="right" width="108" bgcolor="#ffffff"> <?php echo $mi->status; ?></td>
          </tr>
          
          <?php } ?>
          
        </table>
        
        
    <br>
    <p>Check the status of your application as it progresses step by step.</p>
    
    

 </form>

<br><br>
</body>

</div>

