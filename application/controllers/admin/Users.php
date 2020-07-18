<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
	}

    public function index()
    {
        $data["users"] = $this->user_model->getAll();
        $this->load->view("admin/user/list", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/users');
       
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
        
        $this->load->view("admin/user/edit_form", $data);
    }
	
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->user_model->hapus_data($where,'user');
		redirect('admin/users');
	}

}

?>