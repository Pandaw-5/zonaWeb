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
		$sql = sprintf("INSERT INTO pemesanan VALUES (NULL ,'%s','%s','%f','%d','%d','%d','belum dibayar')", $this->waktu_pesan, $this->waktu_main, $this->durasi, $this->dp, $this->diskon, $this->total_bayar);
		$this->db->query($sql);
	}
	public function update(){
		$sql = sprintf("UPDATE pemesanan SET waktu_main ='%s',durasi='%d',dp='%d',diskon='%d', total_bayar='%f' WHERE id_pesan='%s'",  $this->waktu_main, $this->durasi, $this->dp, $this->diskon, $this->total_bayar, $this->id_pesan);
		$this->db->query($sql);
	}
	public function delete(){
		$sql = sprintf("DELETE FROM pemesanan WHERE id_pesan='%s'",$this->id_pesan);
		$this->db->query($sql);
	}
	public function read(){
		$sql = "SELECT * FROM pemesanan ORDER BY id_pesan";
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
		'waktu_pesan'=>'Waktu Pesan :',
		'waktu_main'=>'Waktu Main :',
		'durasi'=>'Durasi :',
		'dp'=>'DP :',
		'diskon'=>'Diskon :',
		'total_bayar'=>'Total Bayar :',
		'status'=>'Status :'
		];
	}
}
?>