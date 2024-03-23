<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
	$applicantName = $_POST['applicantName'];
	$dogName = $_POST['dogName'];
	$breed = $_POST['breed'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];
    $sql = "INSERT INTO users (applicantName,dogName,breed,gender,email,number)
     VALUES ('$applicantName','$dogName','$breed','$gender','$email','$number')";
     if (mysqli_query($conn, $sql)) {
        echo "Registration Succesfull !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>