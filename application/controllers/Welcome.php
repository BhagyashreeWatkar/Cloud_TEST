<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model');
	}

	
	public function index()
	{
		$this->load->view('index');
	}
	public function add_product()
	{
		$this->load->view('add_product');
	}
	public function product_action()
	{
		//echo "ok";
		//print_r($_FILES);
		//$name = time().$_FILES['image_name']['name'];
		//echo $name;
		//$dest=FCPATH."uploads/".$name;
		//echo $dest;
		//$res=move_uploaded_file($_FILES['image_name']['name'], $dest);
	

   	  // if($res)
   	  // {
   	   	//$data[]=$_POST['product_name'];
   	   	//$data[]=$_POST['product_price'];
   	   	//$data[]=$name;
   	   	//print_r($data);

   	   	if($this->welcome_model->insert_product($_POST))
			{
				echo "Product Added";
			}

   	   }

   	   
   	   
		
   public function edit_product()
   	{
   	  $product_id=$this->session->userdata('id');

   	}


   	public function show_product()
   	{
       $result = $this->welcome_model->show_data();
       print_r($result);
    }
}
