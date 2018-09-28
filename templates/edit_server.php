<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php echo 'Hello: '.$_SESSION['user']; ?><br>
<a href="?action=logout">Logout</a>
<form action="" method="post">
	<input type="text" name="newIP" value="<?php echo $oldIP ?>">
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>