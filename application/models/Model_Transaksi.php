<?php
class Model_Tansaksi extends CI_Model {
	
	function get_table(){
        return $this->db->get("pemesanan");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM transaksi JOIN pemesanan WHERE pemesanan.id_pesan=transaksi.id_pesan");
		return $query->result();
	}

}