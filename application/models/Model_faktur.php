<?php 

class Model_faktur extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama	= $this->input->post('nama');
		$alamat	= $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$namarek = $this->input->post('namarek');


		$faktur = array (
			'nama'			=> $nama,
			'alamat'		=> $alamat,
			'no_telp'		=> $no_telp,
			'namarek'			=> $namarek,
			'tgl_pesan'		=>	date('Y-m-d H:i:s'),
			'batas_bayar'	=>date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'), date('m'),date('d') + 1,date('Y'))),
		);
		$this->db->insert('tb_faktur', $faktur);
		$id_faktur = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_faktur'	=> $id_faktur,
				'id_brg'	=> $item['id'],
				'nama_brg'	=> $item['name'],
				'jumlah'	=> $item['qty'],
				'harga'		=> $item['price'],
			);
			$this->db->insert('tb_pesanan', $data);
		}

		return TRUE;
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_faktur'); /////
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function ambil_id_faktur($id_faktur)
	{
		$result = $this->db->where('id', $id_faktur)->limit(1)->get('tb_faktur');
		if($result->num_rows() > 0){
			return $result->row();
		}else {
			return false;
		}
	}

	public function ambil_id_pesanan($id_faktur)
	{
		$result = $this->db->where('id_faktur', $id_faktur)->get('tb_pesanan');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_faktur');
		$this->db->like('id', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('no_telp', $keyword);
		$this->db->or_like('namarek', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('tgl_pesan', $keyword);
		return $this->db->get()->result();
	}
	
}