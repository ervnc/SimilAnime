<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>Login</title>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    	<link rel="stylesheet" href="style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<?php
			session_start();
		?>
		<div class="background">
	
			<div class="ui container">
	
				<form action="../user/authenticate-user.php" method="POST">
	
					<div class="two column doubling ui grid" style="margin-top: 0;">
						<div class="sixteen wide column center aligned" style="position: absolute; left: 0; height: 100vh; padding: 0;">
							<svg width="162" height="100vh" viewBox="0 0 162 100vh" fill="none" xmlns="http://www.w3.org/2000/svg">
								<defs>
									<path id="path1" d="M3.62295 1024C3.62295 1002.55 1 981.631 1 960.083C1 938.531 1 916.979 1 895.427C1 873.556 5.33659 853.402 9.45173 831.954C13.1027 812.925 14.5321 793.741 18.0492 774.695C26.0366 731.442 44.947 692.763 58.5592 651.3C76.9324 595.335 96.7377 538.498 96.7377 478.71C96.7377 385.679 73.4697 294.467 77.357 201.219C80.5179 125.397 117.251 59.2274 161 0"/>
									<mask id="mask1"><use class="mask" xlink:href="#path1"></use></mask>
								</defs>
								<use class="paths" xlink:href="#path1" mask="url(#mask1)"></use>
								
							</svg>
							
						</div>
					
						<div class="row" style="margin-top: 60px;">
							<div class="column center aligned">
								<h1 class="title"><span class="spanSimil">Simil</span><span class="spanAnime">Anime</span></h1>
							</div>
						</div>
		
						<div class="row">
							<div class="column center aligned text" style="margin-top: 5px;">
								<span class="text__text1">The system that shows you <br>who you</span>
								<span class="text__text2">look like</span>
								<span class="text__text3">.</span>
							</div>
						</div>
		
						<div class="row">
							<div class="column" style="display: flex; justify-content: center;">
								<hr style="width: 150px; background-color: rgba(29, 144, 244, 1); height: 2px; border: none; border-radius: 5px;">
							</div>
						</div>
						
						<div class="row">
							<div class="column center aligned" style="margin-top: 30px;">
								<div class="ui icon input">
									<input type="text" placeholder="Username" id="username" name="username" required>
									<i class="user outline icon" style="color: #fff;"></i>
								</div>
							</div>
						</div>
		
						<div class="row">
							<div class="column center aligned">
								<div class="ui icon input">
									<input type="password" placeholder="Password" id="password" name="password" required>
									<i class="eye icon" style="color: #fff;"></i>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="column center aligned">
								<button class="ui animated button large" tabindex="0" id="button_login">
									<div class="visible content">Log in</div>
									<div class="hidden content">
										<i class="right arrow icon"></i>
									</div>
								</button>
							</div>
						</div>

						<div class="row" style="padding: 0;">
							<div class="column center aligned account">
								<span class="account__text">Don't have an account?</span>
								<a href="../user/register-user.php"><span class="account__text1">Sign up</span></a>
							</div>
						</div>
		
		
						<div class="row" style="margin-top: 80px;">
							<div class="column center aligned footer">
								<p>Feito por Evandro Risso e Laura Teixeira</p>
							</div>
						</div>
						
					</div>
				</form>
			</div>
	</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</html>