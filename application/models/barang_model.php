<?php
class barang_model extends CI_Model{
	//buat 4 tipe variabel dengan tipe public dengan nama seperti nama kolom di tabel barang
	public $kode;
	public $nama;
	public $harga;
	public $stok;

	public $label = [];

	public function __construct(){
		parent::__construct();
		$this->labels = $this->attributeLabels();
		$this->load->database(); //fungsi untuk memuat database
	}
	public function insert(){
		$sql = sprintf("INSERT INTO barang VALUES ('%s','%s','%f','%d')", $this->kode, $this->nama, $this->harga, $this->stok);
		$this->db->query($sql);
	}
	public function update(){
		$sql = sprintf("UPDATE barang SET nama='%s',harga='%f',stok='%d' WHERE kode='%s'", $this->nama, $this->harga, $this->stok, $this->kode);
		$this->db->query($sql);
	}
	public function delete(){
		$sql = sprintf("DELETE FROM barang WHERE kode='%s'",$this->kode);
		$this->db->query($sql);
	}
	public function read(){
		$sql = "SELECT * FROM barang ORDER BY kode";
		$query=$this->db->query($sql);
		return $query->result();
	}
	private function attributeLabels(){
		return[
		'kode'=>'Kode :',
		'nama'=>'Nama :',
		'harga'=>'Harga :',
		'stok'=>'Stok :'
		];
	}
}
?>