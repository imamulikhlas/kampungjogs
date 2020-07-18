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
        $this->load->view("user/kampung/list", $data);
    }
}

?>