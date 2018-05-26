<?php
class login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('model_login');
		$this->model = $this->model_login;

		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index(){
		if(isset($_POST['btn_log'])){
			$this->model->username_a = $_POST['username_a'];
			$this->model->kata_sandi_a = $_POST['kata_sandi_a'];
			if ($this->model->cek_log()==TRUE) {
				$this->session->set_userdata('username_a', $this->model->username_a);
				$this->load->view('Beranda', ['model'=>$this->model]);
			}
			else{
				$this->model->notifikasi = "Nama Pengguna dan Kata Sandi Salah !!!";
				$this->load->view('login', ['model'=>$this->model]);
			}
		}else{
			$this->load->view('login', ['model'=>$this->model]);
		}
	}

	public function logout(){
		if ($this->session->has_userdata('username_a')) {
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}
?>