<?php 
if(!$_SESSION['loggedin']){
	header('location: ../index.php?action=login');
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php echo 'Hello: '.$_SESSION['user']; ?><br>
<a href="?action=logout">Logout</a>
<table>
	<thead>
		<tr>
			<th>Servers list</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>IP </td>
			<td>Owner</td>
		</tr>
		<?php foreach ($servers as $server):?>
		<tr>
			<td><?php echo $server['ip'] ?> </td>
			<td><?php echo $server['owner'] ?> </td>
			<td><a href="index.php?controller=server&action=edit&ip=<?php echo $server['ip'] ?>">Edit</a></td>
			<td><a href="#">Delete</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>