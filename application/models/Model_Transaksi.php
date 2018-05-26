<?php
class Model_Transaksi extends CI_Model{
	//buat 4 tipe variabel dengan tipe public dengan nama seperti nama kolom di tabel barang
	public $id_transaksi;
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
		$sql = sprintf("INSERT INTO transaksi VALUES (NULL ,'%f','%f','%f','%f','%f','%f','total_bayar')", $this->waktu_pesan, $this->waktu_main, $this->durasi, $this->dp, $this->diskon, $this->total_bayar);
		$this->db->query($sql);
	}
	public function update(){
		$sql = sprintf("UPDATE transaksi SET waktu_pesan ='%s',waktu_main ='%s',durasi='%d',dp='%d',diskon='%d', total_bayar='%f' WHERE id_transaksi='%s'", $this->waktu_pesan, $this->waktu_main, $this->durasi, $this->dp, $this->diskon, $this->total_bayar, $this->id_transaksi);
		$this->db->query($sql);
	}
	public function delete(){
		$sql = sprintf("DELETE FROM transaksi WHERE id_transaksi='%s'",$this->id_transaksi);
		$this->db->query($sql);
	}
	public function read(){
		$sql = sprintf("SELECT * FROM transaksi JOIN pemesanan WHERE transaksi.id_pesan=pemesanan.id_pesan AND pemesanan.status='sudah dibayar' ");
		$query=$this->db->query($sql);
		return $query->result();
	}
	private function attributeLabels(){
		return[
		'id_transaksi'=>'Id Transaksi :',
		'waktu_pesan'=>'Waktu Pesan :',
		'waktu_main'=>'Waktu Main :',
		'durasi'=>'Durasi :',
		'dp'=>'DP :',
		'diskon'=>'Diskon :',
		'total_bayar'=>'Total Bayar :'
		];
	}
}
?>