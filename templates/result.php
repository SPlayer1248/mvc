<html>
<head>
	<title>Results</title>
</head>
<body>
<?php foreach ($users as $user):?> 
	<div><?php echo $user['username'] ?></div>
	<div><?php if($user['admin']){
		echo 'admin';
	}else{
		echo 'user';
	} ?></div>
	<div>---------------------------</div>
<?php endforeach; ?>
</body>
</html>