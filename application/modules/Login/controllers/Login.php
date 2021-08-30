<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Login_model");
	}
	public function index()
	{	
		if($this->nativesession->get("privilege") != null)
		{
			redirect($this->nativesession->get("privilege")."/index");
		}
		$this->load->view("login");
		
	}
	public function entry()
	{
		$username = $this->input->post("username");
		$password = base64_encode(base64_encode($this->input->post("password")));
		$time = $this->input->post("time");
		$date = $this->input->post("date");
		$data = $this->Login_model->login($username,$password);
		if($data != null)
		{

			$this->nativesession->set("username",$username);
			$this->nativesession->set("privilege",$data->privilege);
			if($data->privilege == "admin")
			{
				$data = ['username'=>$username, 'time'=>$time, 'date'=>$date];
				redirect("admin/index");
			}
			else
			{
				$data = ['username'=>$username, 'time'=>$time, 'date'=>$date];
				redirect("users/index");
			}
		}
		else
		{
			redirect("login/index");
		}
	}
}
