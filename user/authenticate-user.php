<?php
	session_start();

	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		include_once "../database.php";


		// verificar se o user existe
		// verificar se a senha ta certa
		$query = "select * from users where username = '$username'";
		$result = mysqli_query($connection, $query);

		if (mysqli_num_rows($result)) {
			if ($row = mysqli_fetch_assoc($result)) {
				if (password_verify($password, $row["password"])) {
					$_SESSION["username"] = $row["username"];
					$_SESSION["name"] = $row["name"];
					header("Location: ../main/mainPage.php");
				} else {
					$_SESSION['logou'] = false;
					$_SESSION['toast'] = false;
					header("Location: ../login/login.php");
				}
			}
		} else {
			$_SESSION['logou'] = false;
			$_SESSION['toast'] = false;
			header("Location: ../login/login.php");
		}
		mysqli_close($connection);
	}
?>