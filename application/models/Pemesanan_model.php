<?php
class pemesanan_model extends CI_Model{
	//buat 4 tipe variabel dengan tipe public dengan nama seperti nama kolom di tabel barang
	public $id_pesan;
	public $waktu_pesan;
	public $waktu_main;
	public $durasi;
	public $dp;
	public $diskon;
	public $total_bayar;

	public $label = [];

	public function __construct(){
		parent::__construct();
		$this->labels = $this->attributeLabels();
		$this->load->database(); //fungsi untuk memuat database
	}
	public function insert(){
		$sql = sprintf("INSERT INTO pemesanan VALUES (NULL ,'%s',CURRENT_TIMESTAMP,'%s','%f','%d','%d','%d','belum dibayar', NULL, NULL,'%s')", $this->nama, $this->waktu_main, $this->durasi, $this->dp, $this->diskon, $this->total_bayar, $this->id_lapangan);
		$this->db->query($sql);
	}
	public function update(){
		$sql = sprintf("UPDATE pemesanan SET waktu_main ='%s',durasi='%d',dp='%d',diskon='%d', total_bayar='%f', id_lapangan='%s' WHERE id_pesan='%s'",  $this->waktu_main, $this->durasi, $this->dp, $this->diskon, $this->total_bayar, $this->id_lapangan, $this->id_pesan);
		$this->db->query($sql);
	}
	public function delete(){
		$sql = sprintf("DELETE FROM pemesanan WHERE id_pesan='%s'",$this->id_pesan);
		$this->db->query($sql);
	}
	public function read(){
		$sql = "SELECT * FROM pemesanan JOIN lapangan JOIN user WHERE pemesanan.id_lapangan = lapangan.id_lapangan ORDER BY waktu_pesan";
		$query=$this->db->query($sql);
		return $query->result();

	}
	public function konfirmasi(){
		$sql = sprintf("UPDATE pemesanan SET status = sudah dibayar", $this->status);
		$this->db->query($sql);
	}
	private function attributeLabels(){
		return[
		'id_pesan'=>'Id Pesan :',
		'nama'=>'Nama : ',
		'waktu_pesan'=>'Waktu Pesan :',
		'waktu_main'=>'Waktu Main :',
		'durasi'=>'Durasi :',
		'dp'=>'DP :',
		'diskon'=>'Diskon :',
		'total_bayar'=>'Total Bayar :',
		'id_lapangan'=>'Lapangan :',
		'status'=>'Status :'
		];
	}
}
?>