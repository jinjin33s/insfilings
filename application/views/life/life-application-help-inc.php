<div id="livehelpContainer">
    <div id="livehelp_top"></div>
    <div id="livehelp_middle">         
        
        <div class="help_title">Have a Question?  </div>
        <div class="help_sub_title">Let us answer   800-838-6640</div>

        <ul id="ins_options">
            <span id="app_invoice">APPLICATION INVOICE</span>
            <li>
                <div class="label">INSURANCE COVERAGE</div>
                <div class="data"><?php echo "\$".number_format($coverage, 0, '', ','); ?></div>
            </li>

            <li>
                <div class="label"">INSURANCE PROVIDER</div>
                <div class="data"><img src="<?php echo base_url();?>images/company_logos/<?php echo $company_naic_code;?>.jpg"></div>
            </li>
            <!--div id="companyRating">
                <span>COMPANY RATING:</span>
                <span><?php echo $insuranceCompany ?></span>          
            </div-->
            <li>
                <div class="label">TERM DURATION </div>
                <div class="data"><?php echo $termPeriod ?> YEARS</div>
            </li>
            <li>
                <div class="label">PREMIUM MODE </div>
                <ul class="data list">
                  <li><?php echo $ann ?> (Annual) </li>
                  <li><?php echo $semi ?> (Semi-Annual) </li>                    
                  <li><?php echo $quar ?> (Quarterly)</li>                   
                  <li><?php echo $month ?> (Monthly)</li>
                </ul>
            </li>
        </ul>
        <div class="tail_info">
            
            <ul>
            All our application process includes:

            <li>Error proof document review</li>
            <li>Express 24 Hour Delivery</li>
            <li>Maximum privacy process</li>
            <li>Secure encryption data transaction</li>
            </ul>
        </div>
        
    </div>
    <div id="livehelp_bottom"></div>
</div>