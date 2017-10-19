<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>id_admin</th>
			<th>username</th>
			<th>password</th>
		</tr>
		<?php foreach($admin as $a){ ?>
		<tr>
			<td><?php echo $a->id_admin ?></td>
			<td><?php echo $a->username ?></td>
			<td><?php echo $a->password ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>