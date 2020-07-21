<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $id;
    public $namadepan;
    public $namabelakang;
	public $namakomunitas;
    public $harga;
    

    public function rules()
    {
        return [
            ['field' => 'namadepan',
            'label' => 'Namadepan',
            'rules' => 'required'],

            ['field' => 'namabelakang',
            'label' => 'Namabelakang',
            'rules' => 'required'],
            
			['field' => 'namakomunitas',
            'label' => 'Namakempung',
            'rules' => 'required'],
			
            ['field' => 'harga',
            'label' => 'Harga',
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
        $this->namadepan = $post["namadepan"];
        $this->namabelakang = $post["namabelakang"];
        $this->namakomunitas = $post["namakomunitas"];
		$this->harga = $post["harga"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
		$post = $this->input->post();
        $this->id = $post["id"];
        $this->namadepan = $post["namadepan"];
        $this->namabelakang = $post["namabelakang"];
        $this->namakomunitas = $post["namakomunitas"];
		$this->harga = $post["harga"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
 
	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}

?>