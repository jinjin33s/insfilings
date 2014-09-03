<?php
class Makepw extends Controller {


	function index()
	{
            echo 'Make the Admin User!';
            echo '<hr />';
            echo anchor('makepw/listview', 'Click!!!');
	}

        function pw()
        {
            echo 'Enter the Password';
            echo '<hr/>';
            $passwd = md5(Pizza016);
            echo $passwd;
        }

        public function listview() {

            $usersModel = new Users();
            $users_list = $usersModel->getList();

            $data['users_list'] = $users_list;
            $data['view_name'] = "users_list_view";

            $this->load->view("admin/common/template", $data);
        }

        public function add() {

        $data['view_name'] = "users_add_view";
        $this->load->view("admin/common/template",$data);
        }

        public function add_submit(){

            $a = new Users();

            $a->username = $this->input->post('username');
            $a->password = md5($this->input->post('password'));

            echo md5($this->input->post('password')); 

            $a->save();
            
            $redirectURL = "http://www.insfilings.com/index.php?/makepw/listview";
            redirect($redirectURL);
        }

        public function edit($aid) {

        $users_list = Doctrine::getTable('Users')->find($aid);

        $data['users_list'] = $users_list;

        $data['view_name'] = "users_update_view";
        $this->load->view("admin/common/template", $data);
        }

    public function update_submit($aid) {

        $a = new USers();
        $a = Doctrine::getTable('Users')->find($aid);

        $a->username = $this->input->post('username');
        $a->password = md5($this->input->post('password'));
        
        $a->save();

        $redirectURL = base_url() . "makepw/edit/". $aid;
        redirect($redirectURL);
        }

        public function delete() {

        if ($this->input->post('alist_id')){
            foreach ($this->input->post('alist_id') as $alist_id) {
                $this->deleteID($alist_id);
            }
        }
        $redirectURL = base_url() . "admin/users_list";
        redirect($redirectURL);

        $data['view_name'] = "users_list";
        $this->load->view("admin/common/template", $data);
        }

        private function deleteID($alist_id) {

            $remove = Doctrine::getTable('Users')->find($alist_id);
            $remove->delete();
        }
    
}
?>