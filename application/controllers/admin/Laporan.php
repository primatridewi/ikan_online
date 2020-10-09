<?php 

class Laporan extends CI_Controller{

 	public function __construct(){ //agar tidak bisa diakses melalui url
 		parent::__construct(); 

 		if($this->session->userdata('role_id') != '1'){
 			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
 				Anda Belum Login!
 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 				<span aria-hidden="true">&times;</span>
 				</button>
 				</div>');
 			redirect('auth/login'); 
 		}
 	} 
 	public function index()
 	{
 		$dari = $this->input->post('dari');
 		$sampai = $this->input->post('sampai');
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->load->view('templates_admin/header');
 			$this->load->view('templates_admin/sidebar');
 			$this->load->view('admin/laporan');
 			$this->load->view('templates_admin/footer');	
 		}else{
 			$data['laporan'] = $this->db->query("SELECT * FROM tb_pesanan psn, tb_faktur ftr, tb_barang brg WHERE  psn.id_faktur=ftr.id AND psn.id_brg=brg.id_brg AND date(tgl_pesan) >= '$dari' AND date(tgl_pesan) <= '$sampai'")->result();
 			/*var_dump($data);
 			die();*/
 			$this->load->view('templates_admin/header');
 			$this->load->view('templates_admin/sidebar');
 			$this->load->view('admin/tampilkan_laporan',$data);
 			$this->load->view('templates_admin/footer');
 		}
 		
 	}

 	public function print_laporan()
 	{
 		$dari = $this->input->get('dari');
 		$sampai = $this->input->get('sampai');
 		$data['title'] = "Print Laporan Penjualan";
 		$data['laporan'] = $this->db->query("SELECT * FROM tb_pesanan psn, tb_faktur ftr, tb_barang brg WHERE  psn.id_faktur=ftr.id AND psn.id_brg=brg.id_brg AND date(tgl_pesan) >= '$dari' AND date(tgl_pesan) <= '$sampai'")->result();
 			$this->load->view('templates_admin/header');
 			$this->load->view('admin/print_laporan',$data);

 	}

 	public function _rules()
 	{
 		$this->form_validation->set_rules('dari','Dari Tanggal','required');
 		$this->form_validation->set_rules('sampai','Sampai Tanggal','required');
 	}


 }