<?php
class Welcome_model extends CI_Model
{
	function insert_product($product)
	{
		print_r($product);
		$result=$this->db->insert('product_data',$product);
		return $result;
	}

	function show_data()
	{
		$res = $this->db->query("select * from product_data;");
		return $res;
	}
}
?>