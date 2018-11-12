<?php
	session_start();
	//Create var
	$username = "";
	$email = "";
	$errors = array();

	//connect to database
	$db = mysqli_connect('localhost','root','','mydb');
	if (mysqli_connect_errno())
	{
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	//SIGN UP
	if(isset($_POST['sig_user']))
	{
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		//Check var
		if(empty($username))
		{
			array_push($errors, "Username is empty");
		}
		if(empty($email))
		{
			array_push($errors, "Email is empty");
		}
		if(empty($password_1))
		{
			array_push($errors, "Password is empty");
		}
		if($password_2 != $password_1)
		{
			array_push($errors, "Password does not match");
		}


		//Check username hop le
		$user_check = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
		$result = mysqli_query($db, $user_check);
		$user = mysqli_fetch_assoc($result); //Tra ve mang KQ cua result/ null neu khong ton tai
		if($user) //Da ton tai user
		{
			if($user['username'] === $username)
			{
				array_push($errors, "Username already exists");
			}
			if($user['email'] === $email)
			{
				array_push($errors, "Email already exists");
			}
		}

		//If no error -> push to database
		if(count($errors)== 0)
		{
			//Set day du thong tin
			$password = md5($password_1);

			// Doan nay tu nghi ra (Can cai thien)
			$id = "SELECT * FROM user";
			$result = mysqli_query($db, $id);
			
			while($row = mysqli_fetch_assoc($result)) {
        		$id_new = $row['id']+1;
    		}

    		//Upload to database
			$sql = "INSERT INTO user(id,username,email,password)
					VALUES ('$id_new','$username','$email','$password')";
			mysqli_query($db,$sql);
			header('location: Login.php');
		}
	}

	//LOG IN
	if(isset($_POST['log_user']))
	{
		// DESTROY LAST USER'S CART
		if(isset($_SESSION['cart']))
		{
			unset($_SESSION['cart']);
		}
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if(empty($username))
		{
			array_push($errors, "Username is empty");
		}
		if(empty($password))
		{
			array_push($errors, "Password is empty");
		}

		if(count($errors)==0)
		{			
		//Find from database
			$password = md5($password);
			$user = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
			$result = mysqli_query($db, $user);	//Lay KQ

			if(mysqli_num_rows($result)==1)	//Tra ve 1 KQ
			{
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Loged in successfully";
				header('location: index01.php');
			}
			else //FAIL
			{
				array_push($errors, "Wrong username/password");
			}

		}
	}

	//CART

	if (isset($_POST['shopping_cart']))
	{
		if(isset($_SESSION['username']))
		{
			$quantity = 0;		
			// KT session cart co duoc tao hay chu
			if(isset($_SESSION['cart']))
			{
				$item_array_id = array_column($_SESSION["cart"], "id");	//return 1 dong tu database voi id = $id
				//FIND FROM DB
				if(!in_array($_GET["id"], $item_array_id))	//Check if that id exists
				{
					$count = count($_SESSION['cart']); //Basically n in an array	
					$item_list = array(
						'id' => $_GET["id"],
						'productname' => $_POST["hidden_name"],
						'price' => $_POST["hidden_price"],		
						'quantity' => $quantity 
					);
					// Add element to array(array.push())
					$_SESSION["cart"][$count] = $item_list;

				}
				// else
				// {
				// 	echo  "<script>alert('Item already added to cart');</script>";
				// }
				
			}
			else
			{
				// Chua thi tao
					
				$item_list = array(
					'id' => $_GET["id"],
					'productname' => $_POST["hidden_name"],
					'price' => $_POST["hidden_price"],		
					'quantity' => $quantity 
				);
				$_SESSION['cart'][0] = $item_list;
			}
		}
		else
		{
			echo '<script>
					alert("You have to log in to use shopping cart");
					window.location.replace("Login.php");
					</script>';
		}
		
	}
	//REMOVE ITEM
	if(isset($_GET["action"]))
	{
		if($_GET["action"] == "delete")
		{
			foreach ($_SESSION["cart"] as $key => $value) 
			{

				if($value["id"] == $_GET["id"])
				{
					unset($_SESSION["cart"][$key]);
					echo '<script>alert("Item Removed")</script>';
					echo '<script>window.location="checkout.php"</script>';
				}
			}
		}
		//ADD
		if($_GET["action"] == "add")
		{
			foreach ($_SESSION["cart"] as $key => $value) 
			{
				
				if($value["id"] == $_GET["id"])
				{
					$item = $_SESSION["cart"][$key];
					$item['quantity'] = $item['quantity']+1;
					$_SESSION["cart"][$key] = $item;
				}
			}
		}
		//SORT ITEM AS PAGES

		if($_GET["action"] == "Sort")
		{
			$item = $_GET["id"]; echo $item;
			$item_check = "SELECT * FROM product WHERE id like '$item%'";
			$result = mysqli_query($db, $item_check);
			$listItem = mysqli_fetch_assoc($result); 
		}
	}


	//LOG OUT
	if(isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
	//CHECK OUT
	$fail = array();
	if(isset($_POST['checkout']))
	{

		$name = $_POST['txtFullname'];
		$email = $_POST['txtEmail'];
		$phone = $_POST['txtPhone'];
		$address = $_POST['txtAddress'];
		//Check var
		if(empty($name))
		{
			array_push($fail, "Full name is empty");
		}
		if(empty($email))
		{
			array_push($fail, "Email is empty");
		}
		if(empty($phone))
		{
			array_push($fail, "Your phonenumber is empty");
		}
		if(empty($address))
		{
			array_push($fail, "Please type in your address");
		}
		if(count($fail)==0)
		{
			if(!isset($_SESSION['cart']))
			{
				echo '<script>alert("There are no item in your shopping cart");</script>';
			}
			else{
				unset($_SESSION['cart']);
				echo '<script>alert("Your order(s) have been placed successfully");</script>';
				echo '<script>window.location="index01.php"</script>';

			}

		}

	}
?>