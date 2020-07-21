<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komunitass extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("komunitas_model");
        $this->load->library('form_validation');
	}

    public function index()
    {
        $data["komunitass"] = $this->komunitas_model->getAll();
        $this->load->view("admin/komunitas/list", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/komunitass');
       
        $komunitas = $this->komunitas_model;
        $validation = $this->form_validation;
        $validation->set_rules($komunitas->rules());

        if ($validation->run()) {
            $komunitas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["komunitas"] = $komunitas->getById($id);
        if (!$data["komunitas"]) show_404();
        
        $this->load->view("admin/komunitas/edit_form", $data);
    }
	
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->komunitas_model->hapus_data($where,'komunitas');
		redirect('admin/komunitass');
	}
	
}

?>