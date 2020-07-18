<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kampung_model extends CI_Model
{
    private $_table = "kampung";

    public $id;
    public $nama;
    public $lokasi;
	public $kriteria;
    public $deskripsi;
	public $gambar = "default.jpg";
    

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'lokasi',
            'label' => 'Lokasi',
            'rules' => 'required'],
            
			['field' => 'kriteria',
            'label' => 'Kriteria',
            'rules' => 'required'],
			
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->lokasi = $post["lokasi"];
        $this->kriteria = $post["kriteria"];
		$this->deskripsi = $post["deskripsi"];
		$this->gambar = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
		$post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->lokasi = $post["lokasi"];
        $this->kriteria = $post["kriteria"];
		$this->deskripsi = $post["deskripsi"];
		if (!empty($_FILES["gambar"]["nama"])) {
			$this->gambar = $this->_uploadImage();
			} else {
			$this->gambar = $post["old_gambar"];
			}
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
	
	private function _uploadImage()
{
    $config['upload_path']          = './upload/kampung/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
 
}

?>