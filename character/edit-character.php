<!DOCTYPE html>
<html lang="en-us">
	<head>

	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="edit css/style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Edit character</title>
	</head>
	<body>
		<?php
			session_start();

			if (!isset($_SESSION['username'])) {
				header('Location: ../login/login.php');
			}

			include_once "../database.php";

			$name = $_GET["name"];
	        $sql = "select * from characters where name like '$name'";
	        $result = mysqli_query($connection, $sql);
	        while ($row = mysqli_fetch_assoc($result)) {
		?>

		
		<div class="ui menu">
        	<div class="item">
            	<a href="../main/mainPage.php"><img src="../img/logo_similanime.png"></a>
        	</div>
		</div>
	
		<div class="ui column centered doubling stackable grid container">

			<form class="ui form" action="update-character.php" method="POST">
	
				<div class="column center aligned" style="margin-top: 50px;">
					<div class="two fields">
						<input type="hidden" name="name" value="<?php echo $row["name"]?>">
						<div class="field" style="margin-right: 30px;">
							<label>MBTI</label>
							<select class="ui selection dropdown" name="mbti">
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
						</div>
	
						<div class="field">
							<label>Blood type</label>
							<select class="ui selection dropdown" name="blood-type">
								<option <?php if ($row['blood_type'] == null) echo "selected"; ?>>-</option>
								<option <?php if ($row['blood_type'] == 'A') echo "selected"; ?>>A</option>
								<option <?php if ($row['blood_type'] == 'B') echo "selected"; ?>>B</option>
								<option <?php if ($row['blood_type'] == 'O') echo "selected"; ?>>O</option>
								<option <?php if ($row['blood_type'] == 'AB') echo "selected"; ?>>AB</option>
							</select>
						</div>
					</div>
	
	
					<div class="two fields" style="margin-top: 30px;">
						<div class="field" style="margin-right: 30px;">
							<label>Birth date</label>
							<div class="ui icon input">
								<input type="text" name="birth-date" value="<?php echo $row["birth_date"]?>" id="birth-date">
								<i class="calendar alternate outline icon" style="color: #fff;"></i>
							</div>
						</div>
	
						<div class="field">
							<label>Weight</label>
							<div class="ui input">
								<input type="number" name="weight" min="0" step="0.1" value="<?php echo $row["weight"]?>" id="weight">
							</div>
						</div>
					</div>
	
					<div class="two fields" style="margin-top: 30px;">
						<div class="field" style="margin-right: 30px;">
							<label>Gender</label>
							<select class="ui selection dropdown" name="gender">
								<option <?php if ($row['gender'] == null) echo "selected"; ?>>-</option>
								<option <?php if ($row['gender'] == 'male') echo "selected"; ?>>Male</option>
								<option <?php if ($row['gender'] == 'female') echo "selected"; ?>>Female</option>
								<option <?php if ($row['gender'] == 'non-binary') echo "selected"; ?>>Non-binary</option>
							</select>
						</div>
	
						<div class="field">
							<label>Height</label>
							<div class="ui input">
								<input type="number" name="height" min="0" step="0.01" value="<?php echo $row["height"]?>" id="height">
							</div>
						</div>
	
					</div>
	
					<div class="two fields" style="margin-top: 30px;">
						<div class="field" style="margin-right: 30px;">
							<label>Sexuality</label>
							<select class="ui selection dropdown" name="sexuality">
								<option <?php if ($row['sexuality'] == null) echo "selected"; ?>>-</option>
								<option <?php if ($row['sexuality'] == 'straight') echo "selected"; ?>>Straight</option>
								<option <?php if ($row['sexuality'] == 'gay') echo "selected"; ?>>Gay</option>
								<option <?php if ($row['sexuality'] == 'bi/pan') echo "selected"; ?>>Bi/pan</option>
								<option <?php if ($row['sexuality'] == 'asexual') echo "selected"; ?>>Asexual</option>
							</select>
						</div>
	
						<div class="field">
							<label>Zodiac sign</label>
							<select class="ui selection dropdown" name="zodiac-sign" id="zodiac">
								<option <?php if ($row['zodiac_sign'] == null) echo "selected"; ?>>-</option>
								<option <?php if ($row['zodiac_sign'] == 'aries') echo "selected"; ?>>Aries</option>
								<option <?php if ($row['zodiac_sign'] == 'taurus') echo "selected"; ?>>Taurus</option>
								<option <?php if ($row['zodiac_sign'] == 'gemini') echo "selected"; ?>>Gemini</option>
								<option <?php if ($row['zodiac_sign'] == 'cancer') echo "selected"; ?>>Cancer</option>
								<option <?php if ($row['zodiac_sign'] == 'leo') echo "selected"; ?>>Leo</option>
								<option <?php if ($row['zodiac_sign'] == 'virgo') echo "selected"; ?>>Virgo</option>
								<option <?php if ($row['zodiac_sign'] == 'libra') echo "selected"; ?>>Libra</option>
								<option <?php if ($row['zodiac_sign'] == 'scorpio') echo "selected"; ?>>Scorpio</option>
								<option <?php if ($row['zodiac_sign'] == 'sagittarius') echo "selected"; ?>>Sagittarius</option>
								<option <?php if ($row['zodiac_sign'] == 'capricorn') echo "selected"; ?>>Capricorn</option>
								<option <?php if ($row['zodiac_sign'] == 'aquarius') echo "selected"; ?>>Aquarius</option>
								<option <?php if ($row['zodiac_sign'] == 'pisces') echo "selected"; ?>>Pisces</option>
							</select>
						</div>
	
					</div>
	
					<div class="two fields" style="margin-top: 30px;">
						<div class="field" style="margin-right: 30px;">
							<label>Occupation</label>
							<div class="ui input">
								<input type="text" name="occupation" maxlength="30" value="<?php echo $row["occupation"]?>" id="occupation">
							</div>
						</div>
	
						<div class="field">
							<button class="ui animated button large" tabindex="0" id="button_update">
								<div class="visible content">Update</div>
								<div class="hidden content">
									<i class="right arrow icon"></i>
								</div>
							</button>
						</div>
					</div>       
	
	
				</div>
				
				<?php
					}
				?>
				
			</form>
		</div>









		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function() {

				$('.ui.selection.dropdown')
					.dropdown()
				;
			})
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
	</body>
</html>