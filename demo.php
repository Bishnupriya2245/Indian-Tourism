<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

if (!empty($username)||!empty($email)||!empty($password)||!empty($phone)||!empty($gender)) {
	$host = "localhost";
	$dbusername="root";
	$dbpassword = "";
    $dbname = "trip_it";

    //create connection
    $conn = new mysqli($host, $dbusername, $dbpassword,$dbname);

    if (mysqli_connect_error()) {
    	die('Connection Error('.mysql_connect_errno().')'. mysql_connect_error());
    }
    else{
        
    	$SELECT = "SELECT email From register Where email= ? Limit 1";
    	$INSERT = "INSERT Into register(username,email,password,phone,gender) Value(?, ?, ?, ?, ?)";

    	//Prepare statement
    	$stmt = $connn->prepare($SELECT);
    	$stmt->bind_param("s", $email);
    	$stmt->execute();
    	$stmt->bind_result($email);
    	$stmt->store_result();
    	$rnum = $stmt->num_rows;

    	if ($rnum==0) {
    		$stmt->close();


    		$stmt = $conn->prepare($INSERT);
    		$stmt->bind_param("ssssii", $username, $email, $password, $phone, $gender);
    		$stmt->execute();
    		echo "New record inserted sucessfully";
    	}
    	else{
    		echo "Someone already register using this email";
    	}
    	$stmt->close();
    	$conn->close();
    }

}
else{
	echo "All fields are required";
	die();
}
?>