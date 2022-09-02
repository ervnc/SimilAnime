<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="user css-1/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register user</title>
</head>

    <?php
        $user = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
    ?>

<body>
    <div class="ui menu">
        <div class="item">
            <a href="register-user.php"><img src="../img/logo_similanime.png"></a>
        </div>
    </div>

    <div class="ui column centered doubling stackable grid container">
        
        <form class="ui form" action="save-user.php" method="post">
            <input type="hidden" name="username" value="<?php echo $user?>">
            <input type="hidden" name="name" value="<?php echo $name?>">
            <input type="hidden" name="password" value="<?php echo $password?>">    

            <div class="column center aligned">
                <div class="two fields">
                    <div class="field" style="margin-right: 30px;">
                        <label>MBTI</label>
                        <select class="ui selection dropdown" name="mbti">
                            <option value="-">-</option>
                            <option value="INTP">INTP</option>
                            <option value="INTJ">INTJ</option>
                            <option value="ENTJ">ENTJ</option>
                            <option value="ENTP">ENTP</option>
                            <option value="INFJ">INFJ</option>
                            <option value="INFP">INFP</option>
                            <option value="ENFJ">ENFJ</option>
                            <option value="ENFP">ENFP</option>
                            <option value="ISTJ">ISTJ</option>
                            <option value="ISFJ">ISFJ</option>
                            <option value="ESTJ">ESTJ</option>
                            <option value="ESFJ">ESFJ</option>
                            <option value="ISTP">ISTP</option>
                            <option value="ISFP">ISFP</option>
                            <option value="ESTP">ESTP</option>
                            <option value="ESFP">ESFP</option>
                        </select>
                    </div>

                    <div class="field">
                        <label>Blood type</label>
                        <select class="ui selection dropdown" name="blood-type">
                            <option value="-">-</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                </div>
                
                <div class="two fields" style="margin-top: 30px;">
                    <div class="field" style="margin-right: 30px;">
                        <label>Birth date</label>
                        <div class="ui icon input">
                            <input type="text" placeholder="yyyy/mm/dd" name="birth-date" id="birth-date">
                            <i class="calendar alternate outline icon" style="color: #fff;"></i>
                        </div>
                    </div>

                    <div class="field">
                        <label>Weight</label>
                        <div class="ui input">
                            <input type="number" name="weight" min="0" step="0.1" id="weight">
                        </div>
                    </div>
                </div>

                <div class="two fields" style="margin-top: 30px;">
                    <div class="field" style="margin-right: 30px;">
                        <label>Gender</label>
                        <select class="ui selection dropdown" name="gender">
                            <option value="-">-</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Non-binary">Non-binary</option>
                        </select>
                    </div>

                    <div class="field">
                        <label>Height</label>
                        <div class="ui input">
                            <input type="number" name="height" min="0" step="0.01" id="height">
                        </div>
                    </div>

                </div>
                
                <div class="two fields" style="margin-top: 30px;">
                    <div class="field" style="margin-right: 30px;">
                        <label>Sexuality</label>
                            <select class="ui selection dropdown" name="sexuality">
                            <option value="-">-</option>
                            <option value="Straight">Straight</option>
                            <option value="Gay">Gay</option>
                            <option value="Bi/pan">Bi/pan</option>
                            <option value="Asexual">Asexual</option>
                            </select>
                    </div>

                    <div class="field">
                        <label>Zodiac sign</label>
                        <select class="ui selection dropdown" name="zodiac-sign" id="zodiac">
                            <option value="-">-</option>
                            <option value="Aries">Aries</option>
                            <option value="Taurus">Taurus</option>
                            <option value="Gemini">Gemini</option>
                            <option value="Cancer">Cancer</option>
                            <option value="Leo">Leo</option>
                            <option value="Virgo">Virgo</option>
                            <option value="Libra">Libra</option>
                            <option value="Scorpio">Scorpio</option>
                            <option value="Sagittarius">Sagittarius</option>
                            <option value="Capricorn">Capricorn</option>
                            <option value="Aquarius">Aquarius</option>
                            <option value="Pisces">Pisces</option>
                        </select>
                    </div>
                </div>

                <div class="two fields" style="margin-top: 30px;">
                    <div class="field" style="margin-right: 30px;">
                            <label>Occupation</label>
                            <div class="ui input">
                                <input type="text" name="occupation" maxlength="30" id="occupation">
                            </div>
                    </div>

                    <div class="field">
                        <button class="ui animated button large" tabindex="0" id="button_register">
                            <div class="visible content">Register</div>
                            <div class="hidden content">
                                <i class="right arrow icon"></i>
                            </div>
                        </button>
                    </div>
                </div>                
            </div>
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









<!-- <p>Weight: <input type="number" name="weight" min="0" step="0.1"></p> -->
			<!-- <p>Height: <input type="number" name="height" min="0" step="0.01"></p> -->
			<!-- <p>Blood type:
				<select name="blood-type">
					<option>-</option>
					<option>A</option>
					<option>B</option>
					<option>O</option>
					<option>AB</option>
				</select>
			</p> -->
			<!-- <p>Gender:
				<select name="gender">
					<option>-</option>
					<option>male</option>
					<option>female</option>
					<option>non-binary</option>
				</select>
			</p> -->
			<!-- <p>Sexuality:
				<select name="sexuality">
					<option>-</option>
					<option>straight</option>
					<option>gay</option>
					<option>bi/pan</option>
					<option>asexual</option>
				</select>
			</p> -->
			<!-- <p>Birth date: <input type="date" name="birth-date"></p> -->
			<!-- <p>Zodiac sign:
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
			</p> -->
			<!-- <p>MBTI:
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
			</p> -->
			<!-- <p>Occupation: <input type="text" name="occupation" maxlength="30"></p> -->