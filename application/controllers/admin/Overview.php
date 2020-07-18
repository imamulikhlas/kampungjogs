<?php

class Overview extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
        //cek session dan level user
        if($this->login_model->is_role() != "admin"){
            redirect("login/");
		}
	}
	
	public function index ()
	{
		$this -> load -> view("admin/overview");
	}
	
	 public function logout()
    {
        $this->session->sess_destroy();
        redirect('logins');
    }
}

?>