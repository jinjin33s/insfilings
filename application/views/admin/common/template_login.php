<? include "header.php" ?>

        <div id="container">
                         <div id="header">
                                <div class="div1">
                                </div>
                                <div class="admin_title">INSFilings ADMIN  </div>
                                <div class="div2">
                                        
                                        <div class="top_bar_item" >
                                            <a href="<?=base_url();?>">go to HOME </a>
                                        </div>
                                        <div class="top_bar_item" >
                                            <a href="<?=base_url();?>auth/login" >Login</a>
                                        </div>
                                        
                                </div>
                         </div>

                         
                        <div id="content" >
                            <div class="box">
                                <div class="left"></div>
                                <div class="right"></div>
                                <div class="heading">
                                    <h1 class="viewname"><? echo $view_name;?></h1>
                                </div>
                                <div class="content">
                                    <?
                                        $this->load->view("admin/".$view_name);
                                    ?>
                                </div>
                            </div>
                        </div>
        </div>

<? include "footer.php" ?>
                   