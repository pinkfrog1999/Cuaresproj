<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	
	public function getMeal()
	{
		$this->db->from("foods");
		$this->db->where("category","meal");
		return $this->db->get()->result();
	}
	public function getSnacks()
	{
		$this->db->from("foods");
		$this->db->where("category","snacks");
		return $this->db->get()->result();
	}
	public function getDesserts()
	{
		$this->db->from("foods");
		$this->db->where("category","dessert");
		return $this->db->get()->result();
	}
	public function getFoods()
	{
		$this->db->from("foods");
		return $this->db->get()->result();
	}
	public function getMenu($id)
	{
		$this->db->from("foods");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}
	public function getMax()
	{
		$this->db->from("foods");
		$this->db->select_max("code");
		return $this->db->get()->row();
	}
	public function addOrder($data)
	{
		$this->db->insert('orders',$data);
	}
	public function addReservation($data)
	{
		$this->db->insert('reservations',$data);
	}
	public function getOrders()
	{
		$this->db->from("orders");
		return $this->db->get()->result();
	}
	public function getReservations()
	{
		$this->db->from("reservations");
		return $this->db->get()->result();
	}
	public function changeStatus($id, $data)
	{
		$this->db->where("id",$id);
		$this->db->update('reservations',$data);
	}
}
?>