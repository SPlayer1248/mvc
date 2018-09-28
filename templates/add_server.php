<html>
<head>
	<title>Add servers</title>
</head>
<body>

	<h2>Add server</h2>
	<?php echo 'Hello: '.$_SESSION['user']; ?><br>
<a href="?action=logout">Logout</a>
<form action="" method="post">
	IP:<br>
	<input type="text" name="ip"><br>
	<input type="submit" name="add" value="Add">
</form>
<br>
or
<br><br>
<form action="" method="post" enctype="multipart/form-data">
    Select file of IPs to upload:
    <input type="file" name="fileIP" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>
</body>
</html>