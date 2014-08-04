<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

	<style>

	tr td{
		width: 50%;
	}

	</style>

</head>

<body style="margin-left: 20px; margin-right: 20px;">

	<?php 

	// $ent = $data->result_array();
	// $ent = $ent[0];

	$ent = $data;

	print_r($ent);

	// $ent = array_values($ent);

	?>

	<h1 style="text-align: center; color: #999999"> Sponsor Profile <?php echo $data[2]; ?></h1>

	<?php

	$name_fields = array('Company ID',
		'User ID',
		'Name of the Company',
		'Description', // contact details begin
		'Name of the Contact',
		'Contact Designation',
		'Contact Phone',
		'Contact Email ID', // calling details begin
		'First Call Date',
		'Latest Call Date',
		'Next Call Date', // auxilliary data begin
		'How to pitch',
		'Final Status',
		'Remarks',
		'Completion Status', // proposal details
		'Date the Proposal was sent', 
		'Name of the person proposal was sent to',
		'Email ID of person'
		);

	$contactDetailsBegin = 4;

		?>

		<table class="table table-bordered table-striped">

			<tbody>

				<?php for($i = 0; $i < count($name_fields); $i = $i + 1): ?>

				<?php if($i == $contactDetailsBegin): ?>

				<tr>
					<td>
						Contact Details
					</td>
				</tr>

			<?php endif;?>

			<tr>

				<td>

					<?php echo $name_fields[$i]; ?>

				</td>

				<td>

					<?php echo $ent[$i]; ?>

				</td>

			</tr>

		<?php endfor; ?>

	</tbody>


</table>

		<!-- <h3> Alumni ID  <?php echo $ent[$i]; $i = $i + 1; ?> </h3>
		<h2> <?php echo $ent[$i]; $i = $i + 1; ?> </h2>
		<h4> <?php echo $ent[$i]; $i = $i + 1; ?> </h4>
		<h4> <?php echo $ent[$i]; $i = $i + 1; ?> </h4>
		<h5> An alumni since  <?php echo $ent[$i]; $i = $i + 1; ?> </h5>

		<h5> Date of Birth: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Roll Number: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>

		<h5> Company: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Designation: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Office Address: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Home Address: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Office Phone: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Home Phone: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Email Office: <?php echo $ent[$i]; $i = $i + 1; ?> </h5>
		<h5> Email Personal: <?php echo $ent[$i]; $i = $i + 1; ?> </h5> -->





	</body>

	</html>