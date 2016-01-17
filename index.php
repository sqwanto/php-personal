<?php
		if ($_POST["submit"]){

			$results = "Form submitted";

			if (!$_POST['name']){
				$error = "<br>Please enter your name";
			}

			if (!$_POST['email']){
				$error.= "<br>Please enter your email address";
			}

			if (!$_POST['comments']){
				$error.= "<br>Please enter your comments";
			}

			if ($error){

				$results = "There were errors in your form:  ".$error;

			} else {
				mail("cjtully14@gmail.com", "Comment from website", "Name:  ".$_POST['name'].

					"Email:  ".$_POST['email'].

					"Comment:  ".$_POST['comments']);
			}
		}

		/*mail($mailTo, $subject, $message, $headers);*/
		
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CJ Tully PHP</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">

</head>
<body>

<div>
	<h3>Contact Us</h3>

	<?php
		echo $results;
	?>

	<form method="post">

		<label for="name">Name</label>
		<input type="text" name="name">
		<br>
		<br>
		<label for="email">Email</label>
		<input type="email" name="email">
		<br>
		<br>
		<label for="comments">Comments</label>
		<textarea name="comments" rows="4" cols="50"></textarea>
		<br>
		<br>
		<input type="submit" value="Submit" name="submit">

	</form>

</div>
</body>
</html>