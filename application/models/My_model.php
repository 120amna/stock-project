<?php
class my_model extends CI_Model
{
// sing_in page coding
	public function sing_in($array)
	{
		return $this->db->insert('users',$array);
	}
// login page coding
	public function login_user($userName,$pass)
	{
		$q = $this->db->where(['userName'=>$userName,'password'=>$pass])
		         ->from('users')
		         ->get();
		         if($q->num_rows())
		         {
		         	return $q->row()->id;
		         }
		         else
		         {
		         	return false;
		         }
	}
// product iteams insert coding
	public function product_iteams($array)
	{
		return $this->db->insert('products',$array);
	}
// welcome function show data list coding
	public function product_list_view($limit,$offset)
	{
		$q = $this->db->select()
		         ->from('products')
		         ->limit($limit,$offset)
		         ->get();
		          return $q->result();

	}
//coding for pagination
	public function num_rows()
	{
		$q = $this->db->select()
		         ->from('products')
		         ->get();
		          return $q->num_rows();

	}
// upload Image Insert Coding
	public function Image_insert($array)
	{
		return $this->db->insert('productimages',$array);
	}
// one row get data coding
	public function one_row($id)
	{
		$q = $this->db->select(['id','title','description','price'])
		     ->where('id',$id)
		     ->get('products');
		   return 	$q->row();

	}
// product update coding
	public function product_edit($array_id,Array $array_data)
	{
		return $this->db->where('id',$array_id)
		                ->update('products',$array_data);
	}
//join two table products and productImage
	public function user_dashborad_list()
	{
	$q = $this->db->select('products.id,products.title,products.price,productimages.imageUrl')
	        ->from('products')
	        ->join('productimages','products.id = productimages.productId')
	        // ->join('users','users.id = products.id')
	        ->get();
	       return  $q->result();

	}
// add_to_cart coding
	public function add_to_carts($array)
	{
		return $this->db->insert('cart',$array);
    }
 // mange_to_cart
    public function join_cart()
    {
    	$id = $this->session->userdata('id');
      $q = $this->db->select('cart.quantity, products.id,cart.userId,cart.productId,cart.dateTime,products.title,products.price,productimages.imageUrl')
    	->from('cart')
    	->where(['userId'=>$id])
    	->join('products','products.id = cart.productId')
    	->join('productimages','products.id = productimages.productId')
    	->get();
    	return $q->result();
    }
// data insert in order
    public function orders_insert($array)
    {
		return $this->db->insert('orders',$array);
    }
}
?>
