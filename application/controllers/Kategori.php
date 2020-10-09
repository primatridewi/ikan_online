<?php 


class Kategori extends CI_Controller{
	public function ikan_laut()
	{
		$data['ikan_laut'] = $this->Model_kategori->data_ikan_laut()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('ikan_laut',$data);
		$this->load->view('templates/footer');
	}

	public function ikan_tawar()
	{
		$data['ikan_tawar'] = $this->Model_kategori->data_ikan_tawar()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('ikan_tawar',$data);
		$this->load->view('templates/footer');
	}

	public function ikan_asin()
	{
		$data['ikan_asin'] = $this->Model_kategori->data_ikan_asin()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('ikan_asin',$data);
		$this->load->view('templates/footer');
	}

	public function udang()
	{
		$data['udang'] = $this->Model_kategori->data_udang()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('udang',$data);
		$this->load->view('templates/footer');
	}

	public function kepiting()
	{
		$data['kepiting'] = $this->Model_kategori->data_kepiting()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kepiting',$data);
		$this->load->view('templates/footer');
	}

	public function cumi_cumi()
	{
		$data['cumi_cumi'] = $this->Model_kategori->data_cumi_cumi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('cumi_cumi',$data);
		$this->load->view('templates/footer');
	}
}