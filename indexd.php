<?php
// Get user input from form
$userid = $_POST['userid'];
$password = $_POST['password'];

// Validate user ID and password
if ($userid == 'user123' && $password == 'password123') {

	header("location: ./department_landing.html ",true,301);
	
	exit;
//    echo "Login successful";
}
elseif($userid == 'user1234' && $password == 'password1234'){
	header("location: ./index.html ",true,301);
	
	exit;

}




else {
	echo "Invalid user ID or password";
}
?>
