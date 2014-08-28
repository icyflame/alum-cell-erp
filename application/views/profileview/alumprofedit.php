<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body style="margin-left: 20px; margin-right: 20px;">

	<?php 

	$ent = $data['fieldVal'];

	$ent_field = $data['fieldData'];

	// echo '<br/><br/>';

	// var_dump($data);

	// echo '<br/><br/>';

	$ent = array_values($ent);

	?>

	<div style="text-align: center; color: #999999">

		<h1> Alumni Profile (Alumni ID <?php echo $ent[0]; ?>)</h1>

		<a href="<?php echo site_url('profilefetch/showprofile/'.$ent[0]); ?>">
			<button class="btn btn-primary">
				Discard Changes
			</button>
		</a>

		<h3>All dates must be in YYYY-MM-DD format</h3>

		<h4>August 28th, 2014 becomes 2014-08-28</h4>

	</div>

	<?php

	$name_fields = array('Alumni ID',
		'Name',
		'Department',
		'Hall',
		'Alumni Since',
		'Date of birth',
		'Roll Number',
		'Company',
		'Designation',
		'Office Address',
		'Residential Address',
		'Phone (Office)',
		'Phone (Residence)',
		'Email ID (Office)',
		'Email ID (Personal)'
		);

		?>

		<?php echo validation_errors(); ?>

		<?php echo form_open('alumeditprof/editprofile/') ?>

		<input type="text" style="display: none;" value="<?php echo $ent[0]; ?>" name="alumid"></input>

		<table class="table table-bordered table-striped">

			<tbody>

				<?php for($i = 0; $i < count($name_fields); $i = $i + 1): ?>

				<tr>

					<td>

						<?php echo $name_fields[$i]; ?>

					</td>

					<td>

						<?php if($i > 4): ?>

						<input type="text" value="<?php echo $ent[$i]; ?>" name="<?php echo $ent_field[$i]; ?>" class="form-control"></input>

					<?php else: ?>

					<?php echo $ent[$i]; ?>

				<?php endif; ?>

			</td>

		</tr>

	<?php endfor; ?>

</tbody>

</table>

<div style="text-align: center; ">

	<input type="submit" class="btn btn-success" value="Update Profile"></input>

</div> 

</form>

</body>

</html>