<?php 
	session_start();

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
	$user = $_POST["user"];

	echo $user;

	$sql = "insert into characters(name, weight, height, blood_type, gender, sexuality, birth_date, zodiac_sign, mbti, occupation, user, similarity) values(";

	if (empty($name)) {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$name', ";
	}

	if (empty($weight)) {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$weight', ";
	}

	if (empty($height)) {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$height', ";
	}

	if ($blood_type == "-") {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$blood_type', ";
	}

	if ($gender == "-") {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$gender', ";
	}

	if ($sexuality == "-") {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$sexuality', ";
	}

	if (empty($birth_date)) {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$birth_date', ";
	}
	
	if ($zodiac_sign == "-") {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$zodiac_sign', ";
	}

	if ($mbti == "-") {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$mbti', ";
	}

	if (empty($occupation)) {
		$sql .= "NULL, ";
	} else {
		$sql .= "'$occupation', ";
	}

	$sql .= "'$user', NULL)";

	include_once "../database.php";

	if (mysqli_query($connection, $sql)) {
		header("Location: register-character.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

	mysqli_close($connection);
?>