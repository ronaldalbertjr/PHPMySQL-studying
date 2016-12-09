<?php
	$login = $_POST['login'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	if(empty($login) || empty($password) || empty($email))
	{
		echo "<script>
				alert('Preencha todos os campos para se resgistrar');
				window.open('register.html');
				window.close();
			  </script>";
	}
	else
	{
		$conn = mysqli_connect('localhost', 'root', '', 'trabjamv');
		$query = mysqli_query($conn ,"INSERT INTO user(login, password, email) VALUES ('$login', '$password', '$email')");
		mysqli_close($conn);
	}
?>