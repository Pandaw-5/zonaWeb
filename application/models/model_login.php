<?php 
 
class model_login extends CI_Model{	

	public $username_a;
	public $kata_sandi_a;
	public $notifikasi = "";

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function cek_log(){
		$sql = sprintf("SELECT COUNT(*) AS username_a FROM admin WHERE username_a='%s' AND kata_sandi_a='%s'",
			$this->username_a,
			$this->kata_sandi_a);
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row['username_a'] == 1;
		}
	}
?>

	
