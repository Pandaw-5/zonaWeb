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