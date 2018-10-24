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

	//LOG OUT
	if(isset($_GET['logout']))
	{
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}

?>