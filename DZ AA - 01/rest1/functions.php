<?php

function get_users($id=0)
	{
	global $connection;
	$query="SELECT * FROM users";
	if($id != 0)
	{
		$query.=" WHERE id=".$id." LIMIT 50";
	}
	$response=array();
	$result=mysqli_query($connection, $query);
	while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
	{
		$response[]=$row;
	}
	header('Content-Type: application/json');
	echo json_encode($response);
	}

function insert_user()
	{
		global $connection;

		$data = json_decode(file_get_contents('php://input'), true);
		$id		=$data["id"];
		$username			=$data["username"];
		$password			=$data["password"];
		$salt				=$data["salt"];
		$email				=$data["email"];
		
		echo $query="INSERT INTO users VALUES (NULL, '".$id."','".$username."','".$password."','".$salt."','".$email."',NOW())";
		if(mysqli_query($connection, $query))
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'user Added Successfully.'
			);
		}
		else
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'user Addition Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
function update_user($id)
	{
		global $connection;
		$post_vars = json_decode(file_get_contents("php://input"),true);
		$username			=$data["username"];
		$password			=$data["password"];
		$salt				=$data["salt"];
		$email				=$data["email"];
		
		$query="UPDATE users SET username='".$username."', password='".$password."', salt='".$salt."', email='".$email."' WHERE id=".$id;
		
		$result=mysqli_query($connection, $query);
		$broj_redaka = mysqli_affected_rows($connection);;
		
		if($result)
		{
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'user Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'user Updation Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

function delete_user($id)
	{
	global $connection;
	$query="DELETE FROM users WHERE id=".$id;
	if($result = mysqli_query($connection, $query))
	{
		$response=array(
			'status' => 1,
			'status_message' =>'user Deleted Successfully.'
		);
	}
	else
	{
		$response=array(
			'status' => 0,
			'status_message' =>'user Deletion Failed.'
		);
	}
	header('Content-Type: application/json');
	echo json_encode($response);
	}


?>
