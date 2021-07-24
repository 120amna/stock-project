<?php
class user extends my_controller
{
	public function user_sing_in()
	{
		$this->load->view('users/sing_in');
	}
	public function user_login()
	{
		$this->load->view('users/login_form');
	}
	public function product_iteams()
	{
		$this->load->view('users/product_iteams');
	}
	public function add_image()
	{
		$this->load->view('users/add_image');
	}
	public function product_edit()
	{
		$this->load->view('users/product_edit');
	}
	 public function user_dashborad()
	{
		$this->load->view('users/user_dashborad');
	}
	public function cart()
	{
		$this->load->view('users/cart');
	}
	public function mange_to_cart()
	{
		$this->load->view('users/mange_to_cart');
	}
}
?>