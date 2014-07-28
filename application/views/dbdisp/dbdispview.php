<html>

<head>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<style>

	body{
		margin-left: 20px;
		margin-right: 20px;
	}

	</style>

</head>

<body>

	<p>Page Begin</p>

	<div class="container-fluid">

		<div class="col-md-3">

			<h1> Database View </h1>

			<ul class="nav nav-pills nav-stacked">

				<li><a href="<?php echo current_url() ?>">View full list</a></li>
				<li><a href="<?php echo current_url().'/3' ?>">Yet to be contacted</a></li>
				<li><a href="<?php echo current_url().'/1' ?>">Yet to be searched</a></li>
				<li><a href="<?php echo current_url().'/2' ?>">Dumped</a></li>

			</ul>

		</div>

		<div class="col-md-9">

			<table class="table table-bordered table-striped">

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

	</div>

	<!-- <div class="">

	</div> -->

</div>

<p>Page End</p>

</body>

</html>