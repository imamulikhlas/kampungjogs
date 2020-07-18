<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kampungs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kampung_model");
        $this->load->library('form_validation');
	}

    public function index()
    {
        $data["kampungs"] = $this->kampung_model->getAll();
        $this->load->view("owner/kampung/list", $data);
    }

    public function add()
    {
        $kampung = $this->kampung_model;
        $validation = $this->form_validation;
        $validation->set_rules($kampung->rules());

        if ($validation->run()) {
            $kampung->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("owner/kampung/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('owner/kampungs');
       
        $kampung = $this->kampung_model;
        $validation = $this->form_validation;
        $validation->set_rules($kampung->rules());

        if ($validation->run()) {
            $kampung->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kampung"] = $kampung->getById($id);
        if (!$data["kampung"]) show_404();
        
        $this->load->view("owner/kampung/edit_form", $data);
    }
	
}

?>