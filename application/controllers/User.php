<?php  
class User extends CI_Controller {
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		//load model, gunakan fungsi
		$this->load->model('User_model');
		$this->model = $this->User_model;
		$this->load->database();
		$this->load->helper ('url');//sebagai redirect

	}
	public function index(){
		$this->read();
	}
	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->id_user = $_POST['id_user'];
			$this->model->username = $_POST['username'];
			$this->model->alamat = $_POST['alamat'];
			$this->model->no_tlp = $_POST['no_tlp'];
			$this->model->kata_sandi = $_POST['kata_sandi'];
			$this->model->insert();
			redirect(base_url('User'));
		}else{
			$this->load->view('user/create_user',['model'=>$this->model]);
		}
	}
	public function read(){
		$rows = $this->model->read();
		$this->load->view('ui', [
			'rows'	=>	$rows,
			'body'	=> "user/read_user",
		]);
	}
	public function update ($kode_up){
		if (isset($_POST['btnSubmit'])){
			$id = $kode_up;
			$this->model->id_user = $id;
			$this->model->username = $_POST['username'];
			$this->model->alamat = $_POST['alamat'];
			$this->model->no_tlp = $_POST['no_tlp'];
			$this->model->kata_sandi = $_POST['kata_sandi'];
			$this->model->update();
			redirect(base_url('User'));
	}else{
			$query = $this->db->query("SELECT * FROM user WHERE id_user='$kode_up'");
			$row = $query->row();
			$this->model->id_user = $_POST['id_user'];
			$this->model->username = $_POST['username'];
			$this->model->alamat = $_POST['alamat'];
			$this->model->no_tlp = $_POST['no_tlp'];
			$this->model->kata_sandi = $_POST['kata_sandi'];
			$this->load->view('user/update_user', ['model'=>$this->model]);
		}
	}
	public function delete ($kode_del){
		$this->model->id_user = $kode_del;
		$this->model->delete();
		redirect(base_url('User'));
	}
}
?>