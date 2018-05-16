<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function __construct(){
	parent::__construct();
	$this->load->model('M_menu','',TRUE);
	}	
	
	public function index(){
	$data['menu'] = $this->M_menu->getMenu(0,"");
    $this->load->view('v_blog',$data);	
	}
	
	public function read($id_menu){
		
	$data['menu'] = $this->M_menu->getMenu(0,"");
	$data['isi_menu']=$this->M_menu->read($id_menu);
    $data['halaman']='menu/view_menu';
    $this->load->view('v_blog',$data);	
		
	}		

}

?>
