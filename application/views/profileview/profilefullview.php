<html>

<head>

	<script src="<?php echo base_url().'bootstrap/jquery-1.10.2.js'; ?>"></script>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-3.2.1/css/font-awesome.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-4.1.0/css/font-awesome.min.css'; ?>">

</head>

<body style="margin-left: 20px; margin-right: 20px;">

	<?php 

	$ent = $data->result_array();
	$ent = $ent[0];

	$ent = array_values($ent);

	?>

	<div style="text-align: center; color: #999999">

		<h1> Alumni Profile (Alumni ID <?php echo $ent[0]; ?>)</h1>

		<a href="<?php echo site_url('alumeditprof/editnow/'.$ent[0]); ?>">
			<button class="btn btn-primary">
				Edit Profile
			</button>
		</a>

		<h4> All dates are in YYYY-MM-DD format.</h4>

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

		<table class="table table-bordered table-striped">

			<tbody>

				<?php for($i = 0; $i < count($name_fields); $i = $i + 1): ?>

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

	<!-- Modals -->

	<!-- Modal to be shown if the profile edit is successful -->

	<div class="modal fade" id="editsuccess" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" >

				<div class="modal-header" style="text-align: center; ">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Edit successful.</h4>
				</div>

				<div class="modal-body" style="text-align: center; ">

					<p> Profile has been edited successfully.
					</p>

					<div style="font-size: 72px;">

						<i class="icon-ok icon-5x"></i>

					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal to be shown if the profile edit was unsuccessful -->

	<div class="modal fade" id="editfail" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" >

				<div class="modal-header" style="text-align: center; ">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Profile edit failed.</h4>
				</div>

				<div class="modal-body" style="text-align: center; ">

					<p> Something doesn't seem right. We were unable to edit the profile. Please try again after some time.
					</p>

					<div style="font-size: 72px;">

						<i class="fa fa-thumbs-down fa-5x"></i>

					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

</body>

<script>

<?php if($hashtag == 'editsuccess'): ?>

$(document).ready(function(){
	$("#editsuccess").modal('show');
});

<?php elseif($hashtag == 'editfail'): ?>

$(document).ready(function(){
	$("#editfail").modal('show');
});

<?php endif; ?>


</script>

</html>