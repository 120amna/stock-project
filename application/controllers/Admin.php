<?php
class Admin extends CI_controller
{
// sing_in page coding
	public function sing_in()
	{
		if($this->form_validation->run('form_validation_rules'))
		{
			$data = $this->input->post();

		 $this->load->model('My_model');
		$data_insert =  $this->my_model->sing_in($data);
		// print_r($data_insert);
		$this->load->view('users/login_form');
		}
		else
		{
			$this->load->view('users/sing_in');
		}
	}
// login page coding
	public function login()
	{

		if($this->form_validation->run('login_form_validation'))
		{
			$userName = $this->input->post('userName');
			$Pass = $this->input->post('password');
			// echo $userName."<br><br>".$Pass;
			$data = $this->my_model->login_user($userName,$Pass);
			if($data)
			{
				$this->session->set_userdata('id',$data);
				return redirect('admin/user_dashborad');
			}else
			{
				$this->session->set_flashdata('Login Failed','Invalied UserName/Password');
			$this->load->view('users/login_form');
			}
		}else
		{
			$this->load->view('users/login_form');
		}
	}
// welcome function coding
	public function welcome()
	{
		$this->load->library('pagination');
		$config=[
			'base_url'=>base_url('admin/welcome'),
			'per_page' =>3,
			'total_rows'=>$this->my_model->num_rows(),
			'full_tag_open'=>"<ul class='pagination'>",
			'full_tag_close'=>"</ul>",
			'next_tag_open'=>"<li class='page-link'>",
			'next_tag_close'=>"</li>",
			'prev_tag_open'=>"<li class='page-link'>",
			'prev_tag_close'=>"</li>",
			'num_tag_open'=>"<li class='page-link'>",
			'num_tag_close'=>"</li>",
			'cur_tag_open'=>"<li class='page-link'><a class='active'>",
			'cur_tag_close'=>"</a></li>"
		];
		$this->pagination->initialize($config);
				$data = $this->my_model->product_list_view($config['per_page'],$this->uri->segment(3));
				// print_r($data);
		return $this->load->view('users/product_list',['product_list'=>$data]);
	}
// logout coding
	public function logout()
	{
		// echo "ok";
		$this->session->unset_userdata('id');
		redirect('user/user_login');
	}
// product_iteams coding
	public function product_iteams()
	{
		// echo "product_iteams";
		if($this->form_validation->run('product_itemas_validation'))
		{
			$data = $this->input->post();

		 $this->load->model('my_model');
		$data_insert =  $this->my_model->product_iteams($data);
		// print_r($data_insert);
		$this->session->set_flashdata('product_iteams','Product Insert Successfully');
			$this->session->set_flashdata('product_iteams_class','alert-success');
		return redirect('admin/welcome');
		}else
		{
		$this->session->set_flashdata('Product Insert Not Successfully!!!');
			$this->load->view('users/product_iteams');
		}
	}
// get product id
	public function product_id($id)
	{
		$this->load->view('users/add_image',['id'=>$id]);
	}
// add image coding
	public function upload_image()
	{
			{
		$config=[
			'upload_path'=>'./upload/',
			'allowed_types'=>'gif|jpg|jpeg',
		];
		$this->load->library('upload',$config);

		if($this->upload->do_upload())
		{
			$post = $this->input->post();
			 $data=$this->upload->data();
	$pic_path=base_url("upload/".$data ['raw_name'].$data['file_ext']);

			 $post['imageUrl']=$pic_path;
			 $this->load->model('my_model');
			 $tada=$this->my_model->Image_insert($post);
			 print_r($tada);
			 if($tada)
			 {
			 	return redirect('admin/welcome');
			 }else
			 {
			 	echo "hello";
			 }
		}else
		{
			$upload_error=$this->upload->display_errors();
	$this->load->view('users/add_image',compact('upload_error'));
		}
	}
	}
// one row get data coding
	public function one_row_data($id)
	{
		$this->load->model('my_model');
		$data = $this->my_model->one_row($id);
		$this->load->view('users/product_edit',['product_data'=>$data]);
	}
// Edit Page Coding
	public function product_update($arraydata)
	{
		echo $arraydata;
		 if($this->form_validation->run('product_edit_form_validation'))
		 {
		 	$iteams = $this->input->post();
		 	$this->load->model('my_model');
		 	$data = $this->my_model->product_edit($arraydata,$iteams);
		 	 if($data)
		 	 {
		 	 	$this->session->set_flashdata('msg','Update Successfully');
		 	 	$this->session->set_flashdata('msg_class','alert-success');

		 	 }else
		 	 {
		 	 	$this->session->set_flashdata('msg','Update Not Successfully Try Again!!');
		 	 	$this->session->set_flashdata('msg_class','alert-danger');
		 	 }
		 	 return redirect('admin/welcome');
		 }else
		 {
		 	$this->load->view('users/product_edit');
		 }
	}
// join two table coding
	public function user_dashborad()
	{
		$this->load->model('my_model');
		$data = $this->my_model->user_dashborad_list();
		$this->load->view('users/user_dashborad',['user_data'=>$data]);
	}
// add to chart coding
	public function add_to_cart($id)
	{
			$post = array();
			$post['productId'] = $id;
			$post['dateTime'] = date('Y-m-d h:m:i');
			$post['status'] = 1;
			$post['quantity'] = 1;
			$post['userId'] = $this->session->userdata('id');
		 $data = $this->my_model->add_to_carts($post);
		 if($data)
		 {
		 $this->session->set_flashdata('Product Add','Product Add Successfully');
		 return redirect('admin/user_dashborad');
		 }else
		 {
		 $this->session->set_flashdata('Product Add','Product Not Add Successfully');
		 return redirect('admin/user_dashborad');
		 }

	}
// coding for cart page
	public function cart()
	{
		 $data = $this->my_model->join_cart();
		return  $this->load->view('users/cart',['user_data'=>$data]);
	}
// mange to cart coding
	public function mange_to_cart()
	{
		$data = $this->my_model->join_cart();
		return $this->load->view('users/mange_to_cart',['product_data'=>$data]);
	}
	public function sums($id)
	{
		 $post = $this->input->post();
		  print_r($post);
	}
	public function buy_order($id)
	{
			$order = array();
		  $order['total'] = 'quantity';
			$order['dateTime'] = date('Y-m-d h:m:i');
			$order['status'] = 1;
			$order['userId'] = $this->session->userdata('id');
			echo "<pre>";

			$cartItems = $this->my_model->join_cart();
			$total = 0;
			$orderItems = array();
			foreach ($cartItems as $key => $value) {
				$orderItems[$key] = $value;
				$orderItems[$key]->total = $value->quantity * $value->price;
				$total += $value->quantity * $value->price;
			}
			$order['total'] = $total;


			print_r($order);
			print_r($orderItems);
			echo $total;
	}
	// select sum()
}
?>
