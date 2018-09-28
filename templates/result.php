<html>
<head>
	<title>Results</title>
</head>
<body>
<?php foreach ($reports as $report):?> 
	<div><?php echo $report['ip'] ?></div>
	<div><?php echo $report['hostname'] ?></div>
	<div><?php echo $report['osname'] ?></div>
	<div><?php echo $report['open_ports'] ?></div>
	<div><?php echo $report['filtered_ports'] ?></div>
	<div>---------------------------</div>
<?php endforeach; ?>
</body>
</html>