<html>

<head>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>

	<p>Page Begin</p>

	<table border="1">

		<?php foreach($all as $row): ?>

		<tr>

			<td> <?php echo $row['alumid'] ?> </td>
			<td> <?php echo $row['hall'] ?> </td>

		</tr>

	<?php endforeach ?>

</table>

<p>Page End</p>

</body>

</html>