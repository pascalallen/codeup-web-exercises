<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
		<link rel="stylesheet" href="/css/site.css">
	</head>
	<body>
		<main>
			<div id="wrapper">

				<h2 class="fancy-header">User Login</h2>

				<form method="POST" action="/my_first_form.php">
				    <p>
				        <label for="username">Username</label>
				        <input id="username" name="username" type="text" autofocus placeholder="username">
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input id="password" name="password" type="password" placeholder="password">
				    </p>
				    <p>
				        <button type="submit">Login</button>
				    </p>
				</form>

				<hr>

				<form method="POST" action="/my_first_form.php">
					
					<h2>Compose An E-Mail</h2>

						<label for="to">To</label>
					<p>
				        <input id="to" name="to" type="text"  placeholder="To">
				    </p>

				    	<label for="from">From</label>
				    <p>
				        <input id="from" name="from" type="text"  placeholder="From">
				    </p>

				    	<label for="subject">Subject</label>
				    <p>
				    	<input id="subject" name="subject" type="text"  placeholder="Subject">
				    </p>

				    	<label for="body">Body</label>
				    <p>
				        <textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Content Here"></textarea>
				    </p>
						<label for="mailing_list">Save copy to sent folder?</label>
						<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
				    	<button type="submit">Send</button>
				</form>

				<hr>

				<form method="POST" action="/my_first_form.php">

					<h2>Multiple Choice Test</h2>

					<p>What is your favorite color?</p>
						<label>
						    <input type="radio" name="q1" value="black">
						    Black
						</label>
						<label>
						    <input type="radio" name="q1" value="red">
						    Red
						</label>

					<p>Where do you live?</p>
						<label>
						    <input type="radio" name="q2" value="austin">
						    Austin
						</label>
						<label>
						    <input type="radio" name="q2" value="san antonio">
						    San Antonio
						</label>

					<p>How do you pronounce your name?</p>
						<label>
							<input type="checkbox" id="1" name="1[]" value="bob">bob</label>
						<label>
							<input type="checkbox" id="2" name="2[]" value="tiger">tiger</label>
						<label>
							<input type="checkbox" id="3" name="3[]" value="passkool">passkool
						</label>
					<p><button type="submit">Done</button></p>
				</form>

				<hr>

				<form method="POST" action="/my_first_form.php">
					<h2>Select Testing:</h2>

					<label for="transmission">Do you want to play a game?</label>
					<p>
					<select id="transmission" name="transmission">
    					<option disabled selected>Select answer</option>
    					<option value="1">Yes</option>
    					<option value="0">No</option>
					</select>
					</p>
					<button type="submit">Done</button>

				</form>

				<form method="POST" action="/my_first_form.php">
					<label for="os">What operating systems have you used? </label>
					<p>
					<select id="os" name="os[]" multiple>
    					<option value="linus">Linux</option>
    					<option value="osx">OS X</option>
    					<option value="windows">Windows</option>
    					<option value="none" selected>None of the above</option>
    				</select>
    				</p>
    				<button type="submit">Done</button>

    			</form>

			</div>
		</main>
	</body>

