<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>Register user</title>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    	<link rel="stylesheet" href="user css/style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<?php
			session_start();
		?>

		<div class="background">

			<div class="ui menu">
				<div class="item">
					<a href="#"><img src="../img/logo_similanime.png"></a>
				</div>
			</div>

			<div class="ui container">
				<form class="ui form" action="register-user-1.php" method="POST">

					<!-- <p>Username: <input type="text" name="username" maxlength="20" onkeydown="return /[\w_]/i.test(event.key)" required></p>
					<p>Password: <input type="password" name="password" maxlength="30" required></p>
					<p>Name: <input type="text" name="name" maxlength="40" onkeydown="return /\p{L}/u/s/i.test(event.key)"></p> -->
					
					<!-- <button>Save</button> -->




					<div class="two column doubling ui grid" style="margin-top: 0;">					
						<div class="row" style="margin-top: 20px;">
							<div class="column center aligned">
								<h1 class="title"><span class="spanUser">User</span><span class="spanRegistration">Registration</span></h1>
							</div>
						</div>
						
						<div class="row">
							<div class="column" style="display: flex; justify-content: center;">
								<hr style="width: 150px; background-color: rgba(23, 233, 170, 1); height: 2px; border: none; border-radius: 5px;">
							</div>
						</div>

						<div class="row">
							<div class="column center aligned text" style="margin-top: 5px;">
								<span class="text__text1">aaaaaaaaaaaaaaaaa <br>aaaaaa</span>
								<span class="text__text2">aaaaaaaaaa</span>
								<span class="text__text3">.</span>
							</div>
						</div>
		
						
						<div class="row">
							<div class="column" >
								<div class="required field" style="width: 300px;">
									<label>Username</label>
									<div class="ui input">
										<input type="text" name="username" id="username" maxlength="20" onkeydown="return /[\w_]/i.test(event.key)" placeholder="Your nickname" required>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="column" >
								<div class="required field" style="width: 300px;">
									<label>Password</label>
									<div class="ui icon input">
										<input type="password" id="password" name="password" maxlength="30" required>
										<i class="eye slash outline icon" style="color: #fff;" onclick="mouseoverPass();"></i>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="column" >
								<div class="required field" style="width: 300px;">
									<label>Name</label>
									<div class="ui input">
										<input type="text" name="name" id="name" maxlength="40" onkeydown="return /\p{L}/u/s/i.test(event.key)">
									</div>
								</div>
							</div>
						</div>
								

						<div class="row">
							<div class="column center aligned" style="margin-top: 30px;">
								<div class="field">
									<button class="ui animated button large" tabindex="0" id="button_next">
										<div class="visible content">Next</div>
										<div class="hidden content">
											<i class="right arrow icon"></i>
										</div>
									</button>
								</div>
							</div>
						</div>				
					</div>
				</form>

			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
		<script>
				function mouseoverPass() {
					let password = document.querySelector('#password');
					let eye = document.querySelector('.eye.icon');
					if (password.getAttribute("type") === "password") {
						password.setAttribute('type', 'text');
						eye.setAttribute('class', 'eye icon');
					} else {
						password.setAttribute('type', 'password');
						eye.setAttribute('class', 'eye slash outline icon');
					}
				}

		</script>
	</body>
</html>