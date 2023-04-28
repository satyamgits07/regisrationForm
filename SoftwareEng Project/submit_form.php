<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$branch = $_POST['branch'];



// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg_Form";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Insert form data into database
$sql = "INSERT INTO admission_form (name, email, mobile_number, dob, gender, course, branch) VALUES ('$name', '$email', '$mobile_number', '$dob', '$gender', '$course', '$branch')";

if (mysqli_query($conn, $sql)) {
	$message = "THANK YOU FOR SHOWING INTEREST IN TULAS INSTITUTE....OUR TEAM WILL CONTACT YOU SOON";

echo "<div style='background-image: url(https://media.istockphoto.com/id/1129050990/vector/abstract-diagonal-lines-striped-black-and-gray-gradient-background-and-texture-for-your.jpg?s=612x612&w=0&k=20&c=6p1HGXtIEWXHFUB6-2YJijS8FYHsn3N18X6kewEF4z4=); background-size: 100%; color: #fff; text-shadow: 1px 1px #000; padding: 10px; font-size: 30px; text-align: center;'>$message</div>";


}



