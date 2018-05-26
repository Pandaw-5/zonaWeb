<?php  
class Pemesanan extends CI_Controller {
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		//load model, gunakan fungsi
		$this->load->model('Pemesanan_model');
		$this->model = $this->Pemesanan_model;
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
			$this->model->id_lapangan = $_POST['id_lapangan'];
			$this->model->insert();
			redirect(base_url('Pemesanan'));
		}else{
			$this->load->view('pemesanan/create_pemesanan',['model'=>$this->model]);
		}
	}
	public function read(){
		$rows = $this->model->read();
		$this->load->view('chart', [
			'rows'	=>	$rows,
			'body'	=> "pemesanan/read_pemesanan",
		]);
	}
	public function update ($kode_up){
		if (isset($_POST['btnSubmit'])){
			$id = $kode_up;
			$this->model->id_pesan = $id;
			$this->model->waktu_pesan = $_POST['waktu_pesan'];
			$this->model->waktu_main = $_POST['waktu_main'];
			$this->model->durasi = $_POST['durasi'];
			$this->model->dp = $_POST['dp'];
			$this->model->diskon = $_POST['diskon'];
			$this->model->total_bayar = $_POST['total_bayar'];
			$this->model->id_lapangan = $_POST['id_lapangan'];
			$this->model->update();
			redirect(base_url('Pemesanan'));
	}else{
			$query = $this->db->query("SELECT * FROM pemesanan WHERE id_pesan='$kode_up'");
			$row = $query->row();
			$this->model->id_pesan = $row->id_pesan;
			$this->model->waktu_pesan = $row->waktu_pesan;
			$this->model->waktu_main = $row->waktu_main;
			$this->model->durasi = $row->durasi;
			$this->model->dp = $row->dp;
			$this->model->diskon = $row->diskon;
			$this->model->total_bayar = $row->total_bayar;
			$this->model->id_lapangan = $row->id_lapangan;
			$this->load->view('pemesanan/update_pemesanan', ['model'=>$this->model]);
		}
	}
	public function delete ($kode_del){
		$this->model->id_pesan = $kode_del;
		$this->model->delete();
		redirect(base_url('Pemesanan'));
		}
	
	public function konfirmasi ($kode_konf){
		$id = $kode_konf;
		$this->model->id_pesan = $id;
		$this->model->konfirmasi();
		redirect(base_url('Pemesanan'));
		
	}
}
?>