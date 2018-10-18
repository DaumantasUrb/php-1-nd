<html>

<head></head>

<body>
<div><?php
if (!empty($_POST['name']) && !empty($_POST['message'])) {
    echo 'Thank you for your message, ' . $_POST['name'] . '<br><br>';
}
?></div>
	<form method="POST">
		Name:
		<br>
		<input name="name" />
		<br> Message:
		<br>
		<textarea name="message"></textarea>
		<br>
		<input type="submit" />
	</form>
</body>

</html>
