<?php 

	// Conexion
	include ('../config/conn.php');


	// Post
	$post = json_decode(file_get_contents('php://input'), true);
	$email = $post['email'];
	$password = $post['contra'];


	// consulta
	$login = "select count(*) counte from users where email='$email' and password='$password' ";
	$login = $conn->query($login)->fetch_array(MYSQLI_ASSOC);


	// session
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;

	if ($login['counte'] == 1) {
		echo 'ok';
	}else{
		echo 'no';
	}
	
?>