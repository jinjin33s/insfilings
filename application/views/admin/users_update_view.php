<form id='editForm' method='post' action='<?php echo base_url() . "makepw/add_submit/"; ?>' >
    <div id="tab_data" style="display:block">

            <table class="form">
                <tr>
                    <td>Admin ID:</td>
                    <td><input name='username' id='username'  value='<?= $users_list->username ?>'/></td>
                </tr>
                <tr>
                    <td>Admin Password:</td>
                    <td><input name='password' id='password'  value='<?= $users_list->password ?>'/></td>
               </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="submit" /></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
    </div>
 </form>


