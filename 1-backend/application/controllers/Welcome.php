<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model("Product_Category_Model");
		$items = $this->Product_Category_Model->getAll();
		//print_r($items);
		//die();
		
		$viewData = new stdClass();
		$viewData->items = $items;
		$this->load->view("welcome_message", $viewData);
	}
}
