<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>Register character</title>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    	<link rel="stylesheet" href="register-character css/style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<?php
			session_start();
		?>
		<div class="background">

			<div class="ui menu">
				<div class="item">
					<img src="../img/logo_similanime.png">
				</div>
			</div>


			<div class="ui two column doubling stackable grid container" style="margin: 0">
				
				<div class="column"></div>

				<div class="column center aligned" style="margin-top: 30px;">
					<h1 class="title"><span class="spanCharacter">Character</span><span class="spanRegistration"> registration</span></h1>
				</div>

				<div class="column"></div>

				<div class="column" style="display: flex; justify-content: center;">
					<hr style="width: 150px; background-color: rgba(255, 168, 0, 1); height: 2px; border: none; border-radius: 5px;">
				</div>
					

				<div class="column"></div>

				<div class="column center aligned text" style="margin-top: 5px;">
					<span class="text__text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
				</div>

				<div class="column"></div>

				<form action="register-character-1.php" method="POST" autocomplete="off" class="column center aligned" style="margin-top: 30px;">
					<div class="column">
						<div class="ui input">
							<input type="text" name="name" maxlength="40" onkeydown="return /[a-z ]/i.test(event.key)" id="nameCharacter" placeholder="Character name" required>
							<input type="hidden" name="user" value="<?php echo $_SESSION['username']?>">
							<div class="ui list">
								<div class="item auto_character" id="match_list">

								</div>
							</div>
						</div>
					</div>

					<div class="column"></div>

					<div class="column center aligned">
						<button class="ui animated button large" tabindex="0" id="button_next">
							<div class="visible content">Next</div>
							<div class="hidden content">
								<i class="right arrow icon"></i>
							</div>
						</button>
					</div>

				</form>

				
			
			</div>
		</div>

		
	</body>
	
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="teste.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
	<script>
		
		$(document).ready(function() {
			$(document).on("click", function(e){
				if($(e.target).closest("#nameCharacter")[0]){
					$('#match_list').show();
					e.stopPropagation();
				}else{
					$('#match_list').hide();
				}
			});
		})

	</script>
</html>