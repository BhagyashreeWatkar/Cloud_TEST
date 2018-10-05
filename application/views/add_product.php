

<div class="container">
	<form method="post" action="<?php echo base_url().'/index.php/welcome/product_action/';?>">

		<!--<input type="text" name="id" value="<?php //echo $id; ?>"><br>-->
		Product name:<input type="text" name="product_name"><br>
		Product price:<input type="text" name="product_price"><br>

		Select image:<input type="file" name="image_name"><br>
		<button type="submit" class="btn_product">Add product</button>
	</form>
	<div class="msg_pro"></div>
</div>

<table>
	<thead>
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Image</th>
	</tr>
	
	<tr>
		<td></td>
	</tr>
		
	</thead>

</table>

