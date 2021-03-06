<?php
class user_model extends CI_Model{
	//buat 4 tipe variabel dengan tipe public dengan nama seperti nama kolom di tabel barang
	public $id_user;
	public $username;
	public $alamat;
	public $no_tlp;
	public $kata_sandi;

	public $label = [];

	public function __construct(){
		parent::__construct();
		$this->labels = $this->attributeLabels();
		$this->load->database(); //fungsi untuk memuat database
	}
	
	public function update(){
		$sql = sprintf("UPDATE user SET username ='%s',alamat ='%s',no_tlp='%f' WHERE id_user='%s'", $this->username, $this->alamat, $this->no_tlp, $this->id_user);
		$this->db->query($sql);
	}
	public function transaksi($id){
		$sql1 = sprintf("INSERT INTO `member` (`id_member`, `tanggal_jadi_member`, `saldo`) VALUES ($id, CURRENT_TIMESTAMP, '0')");
		$sql2 = sprintf("UPDATE user SET id_member =$id WHERE id_user=$id");
		$this->db->query($sql1);
		$this->db->query($sql2);
	}
	public function delete(){
		$sql = sprintf("DELETE FROM username WHERE id_user='%s'",$this->id_user);
		$this->db->query($sql);
	}
	public function read(){
		$sql = "SELECT * FROM user ORDER BY id_user";
		$query=$this->db->query($sql);
		return $query->result();
	}
	private function attributeLabels(){
		return[
		'id_user'=>'Id User :',
		'username'=>'Username :',
		'alamat'=>'Alamat :',
		'no_tlp'=>'No Telephon :',
		];
	}
}
?>