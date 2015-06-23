<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_adm_manipulation');
		$this->load->library(array('form_validation','session'));
		$this->load->database(); //berlanjut ke bawah ini ….
		//lanjutan yang diatas
		$this->load->helper('url');
	}

	// public function index()
	// {
	// 	$session = $this->session->userdata('isLogin');
	// 	if($session == TRUE)
	// 	{
	// 		//redirect('login/view_login');
	// 		redirect('pegawai');
	// 		//$this->load->base_url();
	// 	}
	// 	else
	// 	{
	// 		$this->load->view('view_login');
	// 	}
	// }

	public function cek()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');
		//$this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		if($this->form_validation->run()==FALSE)
		{
			//$this->load->base_url();	
			//$this->load->view('view_login');
			redirect(base_url('admmprs'));
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			 
			$getsalt = $this->model_adm_manipulation->getsalt($username);
			$garam = "0";
				foreach ($getsalt as $dataaaaaaa)
                {
                    $garam = $dataaaaaaa ->salt;
                     
				}

			// echo $garam."<br>".$password."<br>" ;

			$cekdata = $this->model_adm_manipulation->retrieve_user($username, $password, $garam);
		 	// print_r($cekpegawai);
			if($cekdata > 0)
			{
				$this->session->set_userdata('isLogin', TRUE);
				$this->session->set_userdata('username',$username);
				 
			$guest = $this->model_adm_manipulation->data_user($username, $password, $garam);
				 
 				foreach ($guest as $dp)
                {
                    $iduser = $dp ->id_user;
                    $level = $dp ->level;
                    $this->session->set_userdata('id_user', $iduser);
                    $this->session->set_userdata('level', $level);
					
				}
 
 				redirect ('admmprs/dashboard');
			}
			else
			{
			?>
				<script>
				alert('Gagal Login: Cek username dan password anda!');
				history.go(-1);
				</script>
			<?php
				
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url()."admmprs");
	}
}