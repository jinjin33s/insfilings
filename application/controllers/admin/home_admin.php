<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_Admin extends Controller
{
	function Home_Admin()
	{
		parent::Controller();
		log_message('debug','insfilings: my controller');
        
                $this->load->library('DX_Auth');

                if ( ! $this->dx_auth->is_logged_in()){
                    $this->dx_auth->deny_access('login');

                }
        }
        

        function index()
        {
            $data['view_name'] = "home_admin_view";

            $this->load->view('admin/common/template',$data);
        }
}
/* End of file home.php */
/* Location: ./system/application/controllers/admin/home.php */