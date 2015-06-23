<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');
class mprs extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->model('model_web_manipulation');
		$this->load->library('pagination');
	}




	public function index()
	{
		 $data['data_article'] = $this->model_web_manipulation->retrieve_data_articles();
		 $data['data_gallery'] = $this->model_web_manipulation->retrieve_data_gallery();
  
		 $this->load->view('webpage',$data);
	}

	public function morephotos()
	{
		  $data['data_gallery'] = $this->model_web_manipulation->retrieve_more_gallery();
  
		 $this->load->view('view_morephotos',$data);
	}

	public function morearticles()
	{
		  $data['data_article'] = $this->model_web_manipulation->retrieve_more_articles();
		
		 $this->load->view('view_morearticles',$data);
	}

	public function Artcl($id)
	{
		  $data['data_article'] = $this->model_web_manipulation->getarticle($id);
		
		 $this->load->view('view_det_article',$data);
	}


	public function sendfeedback()
	{
		    $n = $this->input->post("name");
            $e = $this->input->post("email");
            $s = $this->input->post("subject");
         	$m = $this->input->post("message");
          
            $this->model_web_manipulation->sendfbck_process($n,$e,$s,$m); 
 
        redirect (base_url()."#contact");
	}
	 
}
