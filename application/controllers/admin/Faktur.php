<?php 

 class Faktur extends CI_Controller{

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
	} //
 	public function index()
 	{
 		$data['faktur'] = $this->Model_faktur->tampil_data();
 		$this->load->view('templates_admin/header');
 		$this->load->view('templates_admin/sidebar');
 		$this->load->view('admin/faktur',$data);
 		$this->load->view('templates_admin/footer');
 	}

 	public function detail($id_faktur)
 	{
 		$data['faktur'] = $this->Model_faktur->ambil_id_faktur($id_faktur);
 		$data['pesanan'] = $this->Model_faktur->ambil_id_pesanan($id_faktur);
 		$this->load->view('templates_admin/header');
 		$this->load->view('templates_admin/sidebar');
 		$this->load->view('admin/detail_faktur',$data);
 		$this->load->view('templates_admin/footer');
 	}

 	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->Model_faktur->hapus_data($where,'tb_faktur');
		$where = array('id_faktur' => $id);
		$this->Model_faktur->hapus_data($where,'tb_pesanan');
		redirect('admin/faktur/index');
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['faktur']=$this->Model_faktur->get_keyword($keyword);
		$this->load->view('templates_admin/header');
 		$this->load->view('templates_admin/sidebar');
 		$this->load->view('admin/faktur',$data);
 		$this->load->view('templates_admin/footer');
	}

	public function print_faktur($id)
	{

 		$data['pesanan'] = $this->db->query("SELECT * FROM tb_pesanan psn, tb_faktur ftr, tb_barang brg WHERE  psn.id_faktur=ftr.id AND psn.id_brg=brg.id_brg AND psn.id_faktur='$id' ORDER BY id_faktur DESC")->result();
 			$this->load->view('admin/print_faktur',$data);
	}
	
 }