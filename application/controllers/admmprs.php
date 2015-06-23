<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');
class admmprs extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->model('model_adm_manipulation');
		$this->load->library('pagination');
	}




	public function index()
	{
		// $data['data_user'] = $this->model_adm_manipulation->add_user();

			if($this->session->userdata('isLogin') == TRUE)
			{
			 
					redirect ('admmprs/dashboard');
 
			}
			else
			{
				$this->load->view('view_login');
			}
	}


	public function dashboard()
	{
		 
		 	if($this->session->userdata('isLogin') == TRUE)
			{
			  	
 				$this->load->view('dashboard');
			} 
			else
			{
				$this->load->view('view_login');
			}
	}



	public function register_user()
	{
		$data['judul'] = 'Register User';
        $this->load->view('View_adduser', $data);
	}


	public function registuser_ok()
	{

		    $u = $this->input->post("username");
            $l = $this->input->post("level");
            $p = $this->input->post("password");
          
            $this->model_adm_manipulation->register_user_model($u,$l,$p); 
 
        redirect ('admmprs/dashboard');
	}





	
	//article
	public function articlesMpltd()
	{
		$data['data_article'] = $this->model_adm_manipulation->retrieve_data_articles();
        $data['judul'] = 'Articles Data';
        $this->load->view('View_article', $data);
	}


	public function addarticle()
	{
		$data['judul'] = 'Input Data Article';
        $this->load->view('View_addarticle', $data);
	}


	public function addarticle_ok()
	{

		    $judul = $this->input->post("judul");
            $isi = $this->input->post("isi");
            $tanggal = $this->input->post("tanggal");
            $foto = $this->input->post("foto");

             $lokasi_file = $_FILES['foto']['tmp_name'];
             $tipe_file   = $_FILES['foto']['type'];
             $nama_file   = $_FILES['foto']['name'];
             $direktori   = "asset/img-fe/works/$nama_file";
             $namafoto = base_url()."asset/img-fe/works/$nama_file";

  //            if ( ! @copy($lokasi_file,$direktori))
		// {
		// 	if ( ! @move_uploaded_file($lokasi_file,$direktori))
		// 	{
		// 		//$this->set_error('upload_destination_error');
		// 		//return FALSE;
		// 	}
		// }
             move_uploaded_file($lokasi_file,$direktori); 

          //   print_r($lokasi_file." ".$direktori);

             $this->model_adm_manipulation->input_article_process($judul,$isi,$tanggal,$namafoto); 
 
        redirect ('admmprs/articlesMpltd');
	}


	public function editarticle($id)
	{
		$data['judul'] = 'Edit Data Article';
        $data['data_article'] = $this->model_adm_manipulation->get_article($id);
        $this->load->view('View_updatearticle',$data);
	}

	public function update_article($id)
	{
		    $judul = $this->input->post("judul");
            $isi = $this->input->post("isi");
            $tanggal = $this->input->post("tanggal");
            $foto = $this->input->post("foto");

             $lokasi_file = $_FILES['foto']['tmp_name'];
             $tipe_file   = $_FILES['foto']['type'];
             $nama_file   = $_FILES['foto']['name'];
             $direktori   = "asset/img-fe/works/$nama_file";
             $namafoto = base_url()."asset/img-fe/works/$nama_file";

   
             move_uploaded_file($lokasi_file,$direktori);
 
	        $this->model_adm_manipulation->update_article_process($id,$judul,$isi,$tanggal,$namafoto);
	        redirect ('admmprs/articlesMpltd');
    }


	public function deletearticle($id)
	{
		 $this->model_adm_manipulation->delete_article_process($id); 
	     redirect ('admmprs/articlesMpltd');
	}




	public function postarticle($id,$status)
	{
		$this->model_adm_manipulation->update_post_article_process($id,$status); 
	    redirect ('admmprs/articlesMpltd');
	}




	public function galleryMpltd()
	{
		$data['data_gallery'] = $this->model_adm_manipulation->retrieve_data_gallery();
        $data['judul'] = 'Photos Gallery Data';
        $this->load->view('View_gallery', $data);
	}


	public function addphoto()
	{
		$data['judul'] = 'Input Data Photo';
        $this->load->view('View_addphoto', $data);
	}


	public function addphoto_ok()
	{

		    $judul = $this->input->post("judul");
            $foto = $this->input->post("foto");

             $lokasi_file = $_FILES['foto']['tmp_name'];
             $tipe_file   = $_FILES['foto']['type'];
             $nama_file   = $_FILES['foto']['name'];
             $direktori   = "asset/img-fe/works/$nama_file";
             $namafoto = base_url()."asset/img-fe/works/$nama_file";

  //            if ( ! @copy($lokasi_file,$direktori))
		// {
		// 	if ( ! @move_uploaded_file($lokasi_file,$direktori))
		// 	{
		// 		//$this->set_error('upload_destination_error');
		// 		//return FALSE;
		// 	}
		// }
             move_uploaded_file($lokasi_file,$direktori);


             $this->model_adm_manipulation->input_gallery_process($judul,$namafoto); 

		 
        redirect ('admmprs/galleryMpltd');
	}


	public function deletephoto($id)
	{
		 $this->model_adm_manipulation->delete_gallery_process($id); 
	     redirect ('admmprs/galleryMpltd');
	}







	public function feedbackMpltd()
	{
		$data['data_feedback'] = $this->model_adm_manipulation->retrieve_data_feedback();
        $data['judul'] = 'Feedback Data';
        $this->load->view('View_feedback', $data);
	}
}
