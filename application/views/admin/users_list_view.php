<div id="home_admin">

    <!-- h line
    <div style="width:630px; height:3px; border:#000; background-color:#111; margin-top:15px;"> </div>
    -->
    <a href="<?php echo base_url() . '/makepw/add/'; ?>" >add new admin ID</a>

     <div id="searchcontainer">
                    <form id='searchForm' method='post' action='<?php echo base_url() . "admin/life_list/search"; ?>' >
                        <div id="searchbox">
                            <input name="searchStr" type="text" autocomplete="off" />
                            <input type="image" src="<?php echo base_url();?>/images/buttons/btn_Magnifyglass.png" style="width:13px; height:12px;"/>
                        </div>
                    </form>
    </div>
    <br>
    <div id="gamebox_container">

        <form id='form' method='post' action='<?php echo base_url() . "admin/makepw/delete";?>'
              <div id="gamebox_container">
                  <table cellpadding="0" cellspacing="0" class="list">
                    <thead>
                        <tr>
                    <th width="1" class="center">&nbsp;</th>
                    <th>Number</th>
                    <th>Created Date</th>
                    <th>Admin ID</th>
                </tr>
            </thead>
            <tbody>
                <?
                 if (!$users_list)
                {
                    echo "Your search - did not match any data.";
                }else{
                    foreach($users_list as $alist)
                    {
                ?>
                    <tr>
                        <td class="center">
                <?
                    $data = array(
                        'name'        => 'alist_id[]',
                        'value'       => $alist['id'],
                        'class'		=> 'no_border'
                        );

                    echo form_checkbox($data);
                ?>
                        </td>
                            <td>
                                <? echo anchor('/makepw/edit/'.$alist['id'], $alist['id']); ?>
                            </td>
                            <td>
                                <? echo $alist['created_at']; ?>
                            </td>
                            <td>
                                <? echo $alist['username']; ?>
                            </td>
                        </tr>
                    <?
                            }
                }
                    ?>
            </tbody>
            <tfoot>
                    <tr>
                        <th class="center">
                                <?
                                        $data = array(
                                                      'name'    => 'submit',
                                                      'id'      => 'submit',
                                                      'value'	=> 'Delete',
                                                      'class'	=> 'submit'
                                                    );
                                        echo form_submit($data);
                                ?>
                        </th>
                        <th>Number</th>
                        <th>Created Date</th>
                        <th>Admin ID</th>
                    </tr>
            </tfoot>
    </table>

        <div class="pagination">
                <?// echo $this->pagination->create_links($kclass_list['pagination_info']['page'], $kclass_list['pagination_info']['page_count'], 'admin/kclass/overview/');?>
        </div>
</div>
    </form>
</div>
</div>

