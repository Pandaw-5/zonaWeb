<?php  
class Transaksi extends CI_Controller {
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		//load model, gunakan fungsi
		$this->load->model('Model_Transaksi');
		$this->model = $this->Model_Transaksi;
		$this->load->database();
		$this->load->helper ('url');//sebagai redirect

	}
	public function index(){
		$this->read();
	}
	public function create(){
		if(isset($_POST['btnSubmit'])){
			$this->model->waktu_pesan = $_POST['waktu_pesan'];
			$this->model->waktu_main = $_POST['waktu_main'];
			$this->model->durasi = $_POST['durasi'];
			$this->model->dp = $_POST['dp'];
			$this->model->diskon = $_POST['diskon'];
			$this->model->total_bayar = $_POST['total_bayar'];
			$this->model->insert();
			redirect(base_url('Transaksi'));
		}else{
			$this->load->view('Transaksi/create_transaksi',['model'=>$this->model]);
		}
	}
	public function read(){
		$rows = $this->model->read();
		$this->load->view('tab-panel', [
			'rows'	=>	$rows,
			'body'	=> "Transaksi/read_transaksi",
		]);
	}
	public function update ($kode_up){
		if (isset($_POST['btnSubmit'])){
			$id = $kode_up;
			$this->model->id_transaksi = $id;
			$this->model->waktu_pesan = $_POST['waktu_pesan'];
			$this->model->waktu_main = $_POST['waktu_main'];
			$this->model->durasi = $_POST['durasi'];
			$this->model->dp = $_POST['dp'];
			$this->model->diskon = $_POST['diskon'];
			$this->model->total_bayar = $_POST['total_bayar'];
			$this->model->update();
			redirect(base_url('Transaksi'));
	}else{
			$query = $this->db->query("SELECT * FROM pemesanan WHERE id_pesan='$kode_up'");
			$row = $query->row();
			$this->model->id_transaksi = $row->id_transaksi;
			$this->model->waktu_pesan = $row->waktu_pesan;
			$this->model->waktu_main = $row->waktu_main;
			$this->model->durasi = $row->durasi;
			$this->model->dp = $row->dp;
			$this->model->diskon = $row->diskon;
			$this->model->total_bayar = $row->total_bayar;
			$this->load->view('Transaksi/update_transaksi', ['model'=>$this->model]);
		}
	}
	public function delete ($kode_del){
		$this->model->id_transaksi = $kode_del;
		$this->model->delete();
		redirect(base_url('Transaksi'));
	}
}
?>