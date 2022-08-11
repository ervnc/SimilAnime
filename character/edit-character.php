<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>Edit character</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			session_start();

			if (!isset($_SESSION['username'])) {
				header('Location: index.php');
			}

			include_once "../database.php";

			$name = $_GET["name"];
	        $sql = "select * from characters where name like '$name'";
	        $result = mysqli_query($connection, $sql);
	        while ($row = mysqli_fetch_assoc($result)) {
		?>
    	<form action="update-character.php" method="POST">
			<p>Name: <input type="text" name="name" maxlength="40" onkeydown="return /[a-z]/i.test(event.key)" value="<?php echo $row["name"]?>" readonly required></p>
			<p>Weight: <input type="number" name="weight" min="0" step="0.1" value="<?php echo $row["weight"]?>"></p>
			<p>Height: <input type="number" name="height" min="0" step="0.01" value="<?php echo $row["height"]?>"></p>
			<p>Blood type:
				<select name="blood-type">
					<option <?php if ($row['blood_type'] == null) echo "selected"; ?>>-</option>
					<option <?php if ($row['blood_type'] == 'A') echo "selected"; ?>>A</option>
					<option <?php if ($row['blood_type'] == 'B') echo "selected"; ?>>B</option>
					<option <?php if ($row['blood_type'] == 'O') echo "selected"; ?>>O</option>
					<option <?php if ($row['blood_type'] == 'AB') echo "selected"; ?>>AB</option>
				</select>
			</p>
			<p>Gender:
				<select name="gender">
					<option <?php if ($row['gender'] == null) echo "selected"; ?>>-</option>
					<option <?php if ($row['gender'] == 'male') echo "selected"; ?>>male</option>
					<option <?php if ($row['gender'] == 'female') echo "selected"; ?>>female</option>
					<option <?php if ($row['gender'] == 'non-binary') echo "selected"; ?>>non-binary</option>
				</select>
			</p>
			<p>Sexuality:
				<select name="sexuality">
					<option <?php if ($row['sexuality'] == null) echo "selected"; ?>>-</option>
					<option <?php if ($row['sexuality'] == 'straight') echo "selected"; ?>>straight</option>
					<option <?php if ($row['sexuality'] == 'gay') echo "selected"; ?>>gay</option>
					<option <?php if ($row['sexuality'] == 'bi/pan') echo "selected"; ?>>bi/pan</option>
					<option <?php if ($row['sexuality'] == 'asexual') echo "selected"; ?>>asexual</option>
				</select>
			</p>
			<p>Birth date: <input type="date" name="birth-date" value="<?php echo $row["birth_date"]?>"></p>
			<p>Zodiac sign:
				<select name="zodiac-sign">
					<option <?php if ($row['zodiac_sign'] == null) echo "selected"; ?>>-</option>
					<option <?php if ($row['zodiac_sign'] == 'aries') echo "selected"; ?>>aries</option>
					<option <?php if ($row['zodiac_sign'] == 'taurus') echo "selected"; ?>>taurus</option>
					<option <?php if ($row['zodiac_sign'] == 'gemini') echo "selected"; ?>>gemini</option>
					<option <?php if ($row['zodiac_sign'] == 'cancer') echo "selected"; ?>>cancer</option>
					<option <?php if ($row['zodiac_sign'] == 'leo') echo "selected"; ?>>leo</option>
					<option <?php if ($row['zodiac_sign'] == 'virgo') echo "selected"; ?>>virgo</option>
					<option <?php if ($row['zodiac_sign'] == 'libra') echo "selected"; ?>>libra</option>
					<option <?php if ($row['zodiac_sign'] == 'scorpio') echo "selected"; ?>>scorpio</option>
					<option <?php if ($row['zodiac_sign'] == 'sagittarius') echo "selected"; ?>>sagittarius</option>
					<option <?php if ($row['zodiac_sign'] == 'capricorn') echo "selected"; ?>>capricorn</option>
					<option <?php if ($row['zodiac_sign'] == 'aquarius') echo "selected"; ?>>aquarius</option>
					<option <?php if ($row['zodiac_sign'] == 'pisces') echo "selected"; ?>>pisces</option>
				</select>
			</p>
			<p>MBTI:
				<select name="mbti">
					<option <?php if ($row['mbti'] == null) echo "selected"; ?>>-</option>
					<option <?php if ($row['mbti'] == 'INTP') echo "selected"; ?>>INTP</option>
					<option <?php if ($row['mbti'] == 'INTJ') echo "selected"; ?>>INTJ</option>
					<option <?php if ($row['mbti'] == 'ENTJ') echo "selected"; ?>>ENTJ</option>
					<option <?php if ($row['mbti'] == 'ENTP') echo "selected"; ?>>ENTP</option>
					<option <?php if ($row['mbti'] == 'INFJ') echo "selected"; ?>>INFJ</option>
					<option <?php if ($row['mbti'] == 'INFP') echo "selected"; ?>>INFP</option>
					<option <?php if ($row['mbti'] == 'ENFJ') echo "selected"; ?>>ENFJ</option>
					<option <?php if ($row['mbti'] == 'ENFP') echo "selected"; ?>>ENFP</option>
					<option <?php if ($row['mbti'] == 'ISTJ') echo "selected"; ?>>ISTJ</option>
					<option <?php if ($row['mbti'] == 'ISFJ') echo "selected"; ?>>ISFJ</option>
					<option <?php if ($row['mbti'] == 'ESTJ') echo "selected"; ?>>ESTJ</option>
					<option <?php if ($row['mbti'] == 'ESFJ') echo "selected"; ?>>ESFJ</option>
					<option <?php if ($row['mbti'] == 'ISTP') echo "selected"; ?>>ISTP</option>
					<option <?php if ($row['mbti'] == 'ISFP') echo "selected"; ?>>ISFP</option>
					<option <?php if ($row['mbti'] == 'ESTP') echo "selected"; ?>>ESTP</option>
					<option <?php if ($row['mbti'] == 'ESFP') echo "selected"; ?>>ESFP</option>
				</select>
			</p>
			<p>Occupation: <input type="text" name="occupation" maxlength="30" value="<?php echo $row["occupation"]?>"></p>
			<?php
				}
			?>
			<button>Update</button>
		</form>
	</body>
</html>