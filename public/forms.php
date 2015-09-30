<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
	</head>
	<body>

		<h1>GET</h1>
    	<?php var_dump($_GET); ?>

    	<h1>POST</h1>
    	<?php var_dump($_POST); ?>

		<main>
			<div id="wrapper">

				<form method="GET" action="/forms.php">
				    <p>
				    	<!-- &nbsp; = Special character for 'space' --> 
				        <label for="search"><h2>&nbsp;Search&nbsp;</h2></label>
				        <input id="search" name="search" type="text" autofocus placeholder="asdfasdfhjfsdhjdfjhdfjdfjhdfjhdfjhdfdfjhdfjh">
				        <button type="submit">Go!</button>
				    </p>
				</form>

				<form method="POST" action="/loginform.php">
				    <p>
				    	<h2>Log in Form</h2>
				        <label for="username">Username</label>
				        <input id="username" name="username" type="text" placeholder="username">
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input id="password" name="password" type="password" placeholder="password">
				        <button type="submit">Login</button>
				    </p>			    
				</form>

				<form method="POST" action="/sign-upform.php">
				    <p>
				    	<h2>Sign-up Form</h2>
				        <label for="first name">First name</label>
				        <input id="first name" name="first name" type="text" placeholder="first name">
				    </p>
				    <p>
				    	<label for="last name">Last name</label>
				    	<input id="last name" name="last name" type="text" placeholder="last name">
				    </p>
				    <p>
				    	<label for="email address">E-Mail Address</label>
				    	<input id="email address" name="email address" type="text" placeholder="e-mail address">
				    </p>
				    <p>
				    	<label for="username">Username</label>
				    	<input id="username" name="username" type="text" placeholder="username">
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input id="password" name="password" type="password" placeholder="password">
				    </p>
				    <button type="submit">Sign Up!</button>
				</form>

				<form method="POST" action="/contact_me.php">
					<p>
						<h2>Contact Me</h2>
						<label for="address">Address</label>
						<input id="address" name="address" type="text" placeholder="your address">
					</p>
					<p>
						<label for="subject">Subject</label>
						<input id="subject" name="subject" type="text" placeholder="subject">
					</p>
					<p>
						<label for="body">Body</label>
						<textarea id="body" name="body" type="text" placeholder="your message here"></textarea>
					</p>
						<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
						<label for="mailing_list">Save copy to sent folder?</label>
					<button type="submit">Send</button>

				</form>
				
			</div>
		</main>
	</body>