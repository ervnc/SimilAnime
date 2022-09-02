<?php 
	session_start();

	$name = strtolower(trim($_POST["name"]));
	$weight = strtolower($_POST["weight"]);
	$height = strtolower($_POST["height"]);
	$blood_type = $_POST["blood-type"];
	$gender = strtolower($_POST["gender"]);
	$sexuality = strtolower($_POST["sexuality"]);
	$birthday = strtolower($_POST["birthday"]);
	$zodiac_sign = $_POST["zodiac-sign"];
	$mbti = $_POST["mbti"];
	$occupation = strtolower(trim($_POST["occupation"]));

	$sql = "update characters set ";

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

	if (empty($birthday)) {
		$sql .= "birthday=NULL, ";
	} else {
		$sql .= "birthday='$birthday', ";
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

	$sql .= "where name = '$name'";

	include_once "../database.php";

	if (mysqli_query($connection, $sql)) {
		header("Location: ../main/mainPage.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

	mysqli_close($connection);
?>