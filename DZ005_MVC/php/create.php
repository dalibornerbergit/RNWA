<?php

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$username = validate($_POST['username']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	$user_data = 'username=' . $username . '&email=' . $email . '&password=' . $password;

	if (empty($username)) {
		header("Location: ../index.php?error=Username is required&$user_data");
	} else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	} else {

		$sql = "INSERT INTO users(username, email, password) 
               VALUES('$username', '$email', '$password')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location: ../read.php?success=successfully created");
		} else {
			header("Location: ../index.php?error=unknown error occurred&$user_data");
		}
	}
}
