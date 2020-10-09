<?php 

class Model_kategori extends CI_Model{
	public function data_ikan_laut()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'ikan laut'));
	}

	public function data_ikan_tawar()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'ikan tawar'));
	}

	public function data_ikan_asin()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'ikan asin'));
	}

	public function data_udang()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'udang'));
	}

	public function data_kepiting()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'kepiting'));
	}

	public function data_cumi_cumi()
	{
		return $this->db->get_where("tb_barang",array('kategori' => 'cumi-cumi'));
	}
}