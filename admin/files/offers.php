<?php
	include_once('../includes/db_connect.php');

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['checked']) && isset($_POST['product_id'])){

			if($_POST['checked'] == 'true'){

				$query = 'INSERT INTO offers(product_id) VALUES('.$_POST["product_id"].')';

			}elseif($_POST['checked'] == 'false'){

				$query = 'DELETE FROM offers where product_id ='.$_POST["product_id"];
			}else{
				return false;
			}

			$result = mysqli_query($conn,$query);
			return $result;
		}
	}