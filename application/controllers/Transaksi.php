<<<<<<< HEAD
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
=======
<?php
class Transaksi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Transaksi'); 
	}
	
	function home(){
		if(isset($_POST['btnSubmit'])){
			$nama_siswa = $_POST['nama_siswa'];
			$data = array(
					'data'=>$this->Model_Nilai->cari($nama_siswa));
			$this->load->view('App/list_sswa_nilai',$data);
		} else{
		$data = array(
				'data'=>$this->Model_Nilai->get_data());
		$this->load->view('App/list_sswa_nilai',$data);
	}
	}
	
        function lihat (){
		$data = array(
            'data' => $this->Model_Nilai->get_data1($id, $id1),
		);
		$this->load->view("Transaksi_View", $data);	
	}	

	function raport (){
		$id = $this->uri->segment(3);
		$id1 = $this->uri->segment(4);
		$data = array(
            'data' => $this->Model_Nilai->get_data2($id, $id1),
		);
		$this->load->view("App/lihat_raport", $data);	
	}	
}
>>>>>>> 833d3bfcab338ba0e3dbe6e5953ad42ee4158b3d
