<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_login extends CI_Controller {

	private $data;

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
    }
	public function index($type)
	{
		$this->load->model("Mdl_user");
		$this->load->model("Mdl_product");

		switch($type){
			case "user":
				$where = [];
				if(isset($_GET['user_id']))
					$where['user_id'] = $this->input->get("user_id",true);
				if(isset($_GET['name']))
					$where['name'] = $this->input->get("name",true);
				if(isset($_GET['age']))
					$where['age'] = $this->input->get("age",true);
				if(isset($_GET['contact']))
					$where['contact'] = $this->input->get("contact",true);

				if(empty($where)){
					$dataList = $this->Mdl_user->getAll();

				}else{
					$dataList = $this->Mdl_user->getWhere($where);
				}
				$this->data['title'] = "User Table";
				break;

			case "product":
				$where = [];
				if(isset($_GET['product_id']))
					$where['product_id'] = $this->input->get("product_id",true);
				if(isset($_GET['name']))
					$where['name'] = $this->input->get("name",true);
				if(isset($_GET['stock']))
					$where['stock'] = $this->input->get("stock",true);
				if(isset($_GET['contact']))
					$where['price'] = $this->input->get("price",true);

				if(empty($where)){
					$dataList = $this->Mdl_product->getAll();

				}else{
					$dataList = $this->Mdl_product->getWhere($where);
				}
				$this->data['title'] = "Product Table";
				break;
		}
		$this->data[$type.'s'] = $dataList;
        $this->load->view("header");
		$this->load->view("login",$this->data);
		$this->load->view("footer");
		
	}

	public function login(){

	}
}
