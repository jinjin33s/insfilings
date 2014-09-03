<script type="text/javascript">
    $(document).ready(function(){
       $("#loading").show(); 
       $("#quotes").hide()
       setTimeout(delayedLoad,3000)
    });
    
    function delayedLoad(){
        $("#loading").hide();
        $("#quotes").show();
        $("#quotes").css('height','2000px');
    }
</script>
<div id="loading" style="display:none;height:800px;padding-top:300px;vertical-align: middle;margin:0px auto;text-align:center">
    <img src="<?php  echo base_url()."images/loaderb32.gif";?>" />
    Contacting server...
</div>
<iframe id="quotes" src="<?php echo $iframe_url;?>" style="width:100%;border:none;height:1200px;display:none">

</iframe>

