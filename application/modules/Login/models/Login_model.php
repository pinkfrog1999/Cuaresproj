<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function login($username,$password)
	{
		$this->db->from("admins");
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		$route = $this->db->get()->row();
		return $route;
	}
}
?>