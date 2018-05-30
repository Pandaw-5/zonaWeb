<?php
class Member_model extends CI_Model{
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
		$sql = sprintf("UPDATE user SET username ='%s',alamat ='%s',no_tlp='%f',kata_sandi='%s' WHERE id_user='%s'", $this->username, $this->alamat, $this->no_tlp, $this->kata_sandi, $this->id_user);
		$this->db->query($sql);
	}
	public function delete(){
		$sql = sprintf("DELETE FROM username WHERE id_user='%s'",$this->id_user);
		$this->db->query($sql);
	}
	public function read(){
		$sql = "SELECT * FROM member JOIN user WHERE member.id_member = user.id_member ORDER BY member.id_member";
		$query=$this->db->query($sql);
		return $query->result();
	}
	private function attributeLabels(){
		return[
		'id_user'=>'Id User :',
		'username'=>'Username :',
		'alamat'=>'Alamat :',
		'no_tlp'=>'No Telephon :',
		'kata_sandi'=>'Kata Sandi :'
		];
	}
}
?>