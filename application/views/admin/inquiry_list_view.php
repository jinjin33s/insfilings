<div id="home_admin">
    <div id="searchcontainer">
                    <form id='searchForm' method='post' action='<?php echo base_url() . "admin/inquiry_list/search"; ?>' >
                        <div id="searchbox">
                            <input name="searchStr" type="text" autocomplete="off" />
                            <input type="image" src="<?php echo base_url();?>/images/buttons/btn_Magnifyglass.png" style="width:13px; height:12px;"/>
                        </div>
                    </form>
    </div>
    <br>
    <div id="gamebox_container">

        <form id='form' method='post' action='<?php echo base_url() . "admin/inquiry_list/delete";?>'
            <div id="gamebox_container">
                <table cellpadding="0" cellspacing="0" class="list">
                    <thead>
                        <tr>
                            <th width="1" class="center">&nbsp;</th>
                            <th>ID</th>
                            <th>Time</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Type</th>
                            <th>State</th>
                            <th>Sex</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?
                         if (!$applicant_list)
                        {
                            echo "Your search - did not match any data.";
                        }else{
                        foreach($applicant_list as $inquiry)
                        {
                        ?>
                        <tr>
                            <td class="center">
                        <?
                            $data = array(
                                'name'        => 'inquiry_id[]',
                                'value'       => $inquiry['id'],
                                'class'		=> 'no_border'
                                );

                            echo form_checkbox($data);
                        ?>
                            </td>
                                <td>
                                    <? echo $inquiry['id']; ?>
                                </td>
                                <td>
                                    <? echo $inquiry['issuedDate']; ?>
                                </td>
                                <td>
                                    <? echo $inquiry['lastName']; ?>
                                </td>
                                <td>
                                    <? echo $inquiry['firstName']; ?>
                                </td>
                                <td>
                                    <? echo $inquiry['insuranType']; ?>
                                </td>
                                <td>
                                    <? echo $inquiry['state']; ?>
                                </td>
                                <td>
                                    <? echo$inquiry['sex']; ?>
                                </td>
                                <td>
                                    <? echo $inquiry['age']; ?>
                                </td>
                                <td>
                                    <? echo $inquiry['email']; ?>
                                </td>
                                <td>
                                    <? echo $inquiry['phone']; ?>
                                </td>
                                <td>
                                    <? echo $inquiry['status']; ?>
                                </td>
                            </tr>
                                <?
                                        } }
                                ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th class="center">
                                <?
                                    $data = array(
                                                  'name'        => 'submit',
                                                  'id'          => 'submit',
                                                  'value'	=> 'Delete',
                                                  'class'	=> 'submit'
                                                );
                                    echo form_submit($data);
                                ?>
                            </th>
                        <th>ID</th>
                        <th>Time</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Type</th>
                        <th>State</th>
                        <th>Sex</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>  
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
