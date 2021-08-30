<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

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
		if($this->nativesession->get("privilege") != "admin")
		{
			redirect("users/index");
		}
		$this->load->model("Admin_model");
	}
	public function index()
	{
		$data['meal'] = $this->Admin_model->getMeal();
		$data['snacks'] = $this->Admin_model->getSnacks();
		$data['desserts'] = $this->Admin_model->getDesserts();
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
		$data['orders'] = $this->Admin_model->getOrders();
		$data['reservations'] = $this->Admin_model->getReservations();
		$this->load->view("head");
		$this->load->view("tables",$data);
		$this->load->view("footer");
	}
	public function addMenu()
	{
		$file_ext = pathinfo($_FILES["pic"]["name"], PATHINFO_EXTENSION);
		$data['max'] = $this->Admin_model->getMax();
		$code = ($data['max']->code+1);
		$name = $this->input->post("name");
		$price = $this->input->post("price");
		$category = $this->input->post("category");
		$data = ['name'=>$name, 'price'=>$price, 'category'=>$category, 'code'=>$code, 'ext'=>'.'.$file_ext];
		$config['file_name'] = $code;
		$config['upload_path'] = './assets/foods/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload',$config);
		$this->upload->do_upload('pic');
		$this->Admin_model->addMenu($data);
		$this->nativesession->set("alert","1");
		redirect("admin/index");
	}
	public function order()
	{
		$data['foods'] = $this->Admin_model->getFoods();
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
		redirect("admin/payup");
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
			$this->Admin_model->addOrder($data);
		}
		else
		{
			$reserve_date = $this->input->post('date');
			$reserve_time = $this->input->post('time');
			$data = ['date'=>$date, 'time'=>$time, 'particulars'=>$this->nativesession->get('orders'), 'reserve_time'=>$reserve_time, 'reserve_date'=>$reserve_date,'total'=>$this->nativesession->get("total"), 'pay'=>$pay, 'change'=>$change];
			$this->Admin_model->addReservation($data);
		}
		$this->nativesession->set("alert","1");
		redirect("admin/index");
	}
	public function deleteOrder()
	{
		$id = $this->input->get("id");
		$this->Admin_model->deleteOrder($id);
		redirect("admin/tables");
	}
	public function deleteMenu()
	{
		$id = $this->input->get("id");
		$this->Admin_model->deleteMenu($id);
		redirect("admin/index");
	}
	public function changeStatus()
	{
		$id = $this->input->get("id");
		$data = ['status'=>'none'];
		$this->Admin_model->changeStatus($id,$data);
		redirect("admin/tables");
	}
	public function editMenu()
	{
		$id = $this->input->get("id");
		$data['menu'] = $this->Admin_model->getMenu($id);
		$this->load->view("head");
		$this->load->view("editMenu",$data);
		$this->load->view("footer");
	}
	public function update()
	{
		$id = $this->input->post("id");
		$name = $this->input->post("name");
		$price = $this->input->post("price");
		$category = $this->input->post("category");
		$data = ['name'=>$name, 'price'=>$price, 'category'=>$category];
		$this->Admin_model->updateMenu($id,$data);
		redirect("admin/index");
	}
	public function logOut()
	{
		$this->nativesession->delete('privilege');
		redirect(base_url());
	}
}