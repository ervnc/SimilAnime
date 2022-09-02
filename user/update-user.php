<?php 
	session_start();

	$username = trim($_POST["username"]);
	$password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);
	$name = trim($_POST["name"]);
	$weight = $_POST["weight"];
	$height = $_POST["height"];
	$blood_type = $_POST["blood-type"];
	$gender = $_POST["gender"];
	$sexuality = $_POST["sexuality"];
	$birth_date = $_POST["birth-date"];
	$zodiac_sign = $_POST["zodiac-sign"];
	$mbti = $_POST["mbti"];
	$occupation = trim($_POST["occupation"]);

	$sql = "update users set password='$password', ";

	// $sql .= "name='$name', ";

	if (empty($weight)) {
		$sql .= "weight=NULL, ";
	} else {
		$sql .= "weight='$weight', ";
	}

	if (empty($height)) {
		$sql .= "height=NULL, ";
	} else {
		$sql .= "height='$height', ";
	}

	if ($blood_type == "-") {
		$sql .= "blood_type=NULL, ";
	} else {
		$sql .= "blood_type='$blood_type', ";
	}

	if ($gender == "-") {
		$sql .= "gender=NULL, ";
	} else {
		$sql .= "gender='$gender', ";
	}

	if ($sexuality == "-") {
		$sql .= "sexuality=NULL, ";
	} else {
		$sql .= "sexuality='$sexuality', ";
	}

	if (empty($birth_date)) {
		$sql .= "birth_date=NULL, ";
	} else {
		$sql .= "birth_date='$birth_date', ";
	}
	
	if ($zodiac_sign == "-") {
		$sql .= "zodiac_sign=NULL, ";
	} else {
		$sql .= "zodiac_sign='$zodiac_sign', ";
	}

	if ($mbti == "-") {
		$sql .= "mbti=NULL, ";
	} else {
		$sql .= "mbti='$mbti', ";
	}

	if (empty($occupation)) {
		$sql .= "occupation=NULL ";
	} else {
		$sql .= "occupation='$occupation' ";
	}

	$sql .= "where username = '$username'";

	include_once "../database.php";

	if (mysqli_query($connection, $sql)) {
		// header("Location: ../main/mainPage.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

	mysqli_close($connection);
?>