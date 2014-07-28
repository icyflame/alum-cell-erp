<html>

<head>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<style>

	</style>

</head>

<body>

	<p>Page Begin</p>

	<table class="table table-bordered">

		<thead class="active">
			<th> Alumni ID
			</th>
			<th> Year
			</th>
			<th> Name
			</th>
			<th> Hall
			</th>
			<th> Department
			</th>
			<th> Next Follow Up
			</th>
			<th> Last Date of Calling
			</th>

		</thead>

		<tbody>

			<?php foreach($all as $row): ?>

			<tr>

				<td> <?php echo $row['alumid'] ?> 
				</td>
				<td> <?php echo $row['alumSince'] ?> 
				</td>
				<td> <?php echo $row['name'] ?> 
				</td>
				<td> <?php echo $row['hall'] ?> 
				</td>
				<td> <?php echo $row['dept'] ?> 
				</td>
				<td> <?php echo $row['followup'] ?> 
				</td>
				<td> <?php echo $row['lastdate'] ?> 
				</td>

			</tr>

		<?php endforeach ?>

	</tbody>	

</table>

<p>Page End</p>

</body>

</html>