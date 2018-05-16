<?php  
class crud extends CI_Controller {
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		//load model, gunakan fungsi
		$this->load->model('barang_model');
		$this->model = $this->barang_model;

		$this->load->database();
		$this->load->helper ('url');//sebagai redirect

	}
	public function index(){
		$this->read();
	}
	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->kode = $_POST['kode'];
			$this->model->nama = $_POST['nama'];
			$this->model->harga = $_POST['harga'];
			$this->model->stok = $_POST['stok'];
			$this->model->insert();
			redirect('crud');
		}else{
			$this->load->view('CRUD/crud_create_view',['model'=>$this->model]);
		}
	}
	public function read(){
		$rows = $this->model->read();
		$this->load->view('index', [
			'rows'	=>	$rows,
			'body'	=> "CRUD/crud_read_view",
		]);
	}
	public function update ($kode_up){
		if (isset($_POST['btnSubmit'])){
			$this->model->kode = $_POST['kode'];
			$this->model->nama = $_POST['nama'];
			$this->model->harga = $_POST['harga'];
			$this->model->stok = $_POST['stok'];
			$this->model->update();
			redirect('crud');
		}else{
			$query = $this->db->query("SELECT * FROM barang WHERE kode='$kode_up'");
			$row = $query->row();
			$this->model->kode = $row->kode;
			$this->model->nama = $row->nama;
			$this->model->harga = $row->harga;
			$this->model->stok = $row->stok;
			$this->load->view('CRUD/crud_update_view', ['model'=>$this->model]);
		}
	}
	public function delete ($kode_del){
		$this->model->kode = $kode_del;
		$this->model->delete();
		redirect('crud');
	}
}
?>