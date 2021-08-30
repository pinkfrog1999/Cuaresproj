<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller {

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
	 * So any other public meth ods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
	{
		parent::__construct();
		if($this->nativesession->get("privilege") == null)
		{
			redirect("login/index");
		}
		$this->load->model("Users_model");
	}
	public function index()
	{
		$data['meal'] = $this->Users_model->getMeal();
		$data['snacks'] = $this->Users_model->getSnacks();
		$data['desserts'] = $this->Users_model->getDesserts();
		$this->load->view("head");
		$this->load->view("home",$data);
		$this->load->view("footer");
		$this->nativesession->set("alert","0");
	}
	public function payup()
	{
		$this->load->view("head");
		$this->load->view("payup");
		$this->load->view("footer");
	}
	public function tables()
	{
		$data['orders'] = $this->Users_model->getOrders();
		$data['reservations'] = $this->Users_model->getReservations();
		$this->load->view("head");
		$this->load->view("tables",$data);
		$this->load->view("footer");
	}
	public function order()
	{
		$data['foods'] = $this->Users_model->getFoods();
		$total = 0;
		$orders = "";
		foreach($data['foods'] as $food)
		{
			$id = $this->input->post("id".$food->id);
			if($id == $food->id)
			{
				$quantity[$food->id] = $this->input->post($food->id);
				if($quantity[$food->id] == null || $quantity[$food->id] == "0" || $quantity[$food->id] == " ")
				{
					continue;
				}
				else
				{
					$price[$food->id] = $this->input->post("price".$food->id);
					$subtotal[$food->id] = $quantity[$food->id]*$price[$food->id];
					$total += $subtotal[$food->id];
					$orders .= "<tr><td>".$food->name."</<td><td>".$quantity[$food->id]."</td><td>".$price[$food->id]."</td><td>Php ".$subtotal[$food->id]."</td></tr>";
				}
				
			}
		}
		$this->nativesession->set("option",$this->input->post('option'));
		$this->nativesession->set("total",$total);
		$this->nativesession->set("orders",$orders);
		redirect("users/payup");
	}
	public function done()
	{
		$time = date('h:s:i');
		$date = date('d-m-Y');
		$pay = $this->input->post('amount');
		$change = $this->input->post('change');
		if($this->nativesession->get('option') == 'order')
		{
			$data = ['date'=>$date, 'time'=>$time, 'particulars'=>$this->nativesession->get('orders'),'total'=>$this->nativesession->get("total"), 'pay'=>$pay, 'change'=>$change];
			$this->Users_model->addOrder($data);
		}
		else
		{
			$reserve_date = $this->input->post('date');
			$reserve_time = $this->input->post('time');
			$data = ['date'=>$date, 'time'=>$time, 'particulars'=>$this->nativesession->get('orders'), 'reserve_time'=>$reserve_time, 'reserve_date'=>$reserve_date,'total'=>$this->nativesession->get("total"), 'pay'=>$pay, 'change'=>$change];
			$this->Users_model->addReservation($data);
		}
		$this->nativesession->set("alert","1");
		redirect("users/index");
	}
	public function changeStatus()
	{
		$id = $this->input->get("id");
		$data = ['status'=>'none'];
		$this->Users_model->changeStatus($id,$data);
		redirect("users/tables");
	}
	public function logOut()
	{
		$this->nativesession->delete('privilege');
		redirect(base_url());
	}
}