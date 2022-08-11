<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>Register user</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			session_start();
		?>
		<form action="save-user.php" method="POST">
			<p>Username: <input type="text" name="username" maxlength="20" onkeydown="return /[\w_]/i.test(event.key)" required></p>
			<p>Password: <input type="password" name="password" maxlength="30" required></p>
			<p>Name: <input type="text" name="name" maxlength="40" onkeydown="return /\p{L}/u/s/i.test(event.key)"></p>
			<p>Weight: <input type="number" name="weight" min="0" step="0.1"></p>
			<p>Height: <input type="number" name="height" min="0" step="0.01"></p>
			<p>Blood type:
				<select name="blood-type">
					<option>-</option>
					<option>A</option>
					<option>B</option>
					<option>O</option>
					<option>AB</option>
				</select>
			</p>
			<p>Gender:
				<select name="gender">
					<option>-</option>
					<option>male</option>
					<option>female</option>
					<option>non-binary</option>
				</select>
			</p>
			<p>Sexuality:
				<select name="sexuality">
					<option>-</option>
					<option>straight</option>
					<option>gay</option>
					<option>bi/pan</option>
					<option>asexual</option>
				</select>
			</p>
			<p>Birth date: <input type="date" name="birth-date"></p>
			<p>Zodiac sign:
				<select name="zodiac-sign">
					<option>-</option>
					<option>aries</option>
					<option>taurus</option>
					<option>gemini</option>
					<option>cancer</option>
					<option>leo</option>
					<option>virgo</option>
					<option>libra</option>
					<option>scorpio</option>
					<option>sagittarius</option>
					<option>capricorn</option>
					<option>aquarius</option>
					<option>pisces</option>
				</select>
			</p>
			<p>MBTI:
				<select name="mbti">
					<option>-</option>
					<option>INTP</option>
					<option>INTJ</option>
					<option>ENTJ</option>
					<option>ENTP</option>
					<option>INFJ</option>
					<option>INFP</option>
					<option>ENFJ</option>
					<option>ENFP</option>
					<option>ISTJ</option>
					<option>ISFJ</option>
					<option>ESTJ</option>
					<option>ESFJ</option>
					<option>ISTP</option>
					<option>ISFP</option>
					<option>ESTP</option>
					<option>ESFP</option>
				</select>
			</p>
			<p>Occupation: <input type="text" name="occupation" maxlength="30"></p>
			<button>Save</button>
		</form>
	</body>
</html>