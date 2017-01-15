<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Add phone number</title>
</head>
<body>
<div class="container">
	<form id="store-form" action = "index.php?action=store" method="post">
		<h4>Option 1. Add your phone number</h4>
		<div class="form-group">
			<label for = "phone">
				Enter your PHONE:
				<input type = "text" id="phone" name="phone">
			</label>
		</div>
		<div class="form-group">
			<label for = "email">
				Enter your e-mail <sup>*</sup>:
				<input type = "text" id="email" name="email" required>
			</label>
		</div>
		<p>
			Your will be able to retrieve your phone number later on using your e-mail.
		</p>
		<input type = "submit" value="Submit">
	</form>
</div>
</body>
</html>