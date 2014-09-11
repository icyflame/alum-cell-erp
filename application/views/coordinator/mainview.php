<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">

	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-3.2.1/css/font-awesome.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-4.1.0/css/font-awesome.min.css'; ?>">

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bodymargin.css'; ?>">

	<!-- <script src="<?php echo base_url().'bootstrap/jquery-1.10.2.js'; ?>"></script> -->

	<script src="http://code.jquery.com/jquery-1.11.1.js"></script>
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

	<style>

	button{
		margin-right: 20px;
		margin-left: 20px; 
	}

	a{

		text-decoration: none !important;

	}

	</style>

</head>

<body>

	<h3>View portal as:</h3>

	<?php foreach ($users as $userid => $username): ?>

	<button class="aliaschangebutton btn btn-lg btn-primary" target="<?php echo site_url("coordinator/viewalias/".$userid); ?>">
		<?php echo $username; ?>
	</button>

<?php endforeach; ?>

<h3>View full Alumni Database</h3>

<a href="<?php echo site_url('dbdisplay/buildTable/0/0/0'); ?>">

	<button class="btn btn-lg btn-success">
		View Full Alumni Database
	</button>

</a>

<!-- Modals -->

<!-- Modal to be shown if the profile edit is successful -->

<div class="modal fade" id="success" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" >

			<div class="modal-header" style="text-align: center; ">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Edit successful.</h4>
			</div>

			<div class="modal-body" style="text-align: center; ">

				<p> Alias Mode activated! Press Redirect to go to the database view page.
				</p>

				<a href="<?php echo site_url('dbdisplay/buildTable/0/0'); ?>">
					<button type="button" class="btn btn-success">Redirect</button>
				</a>

				<div style="font-size: 72px;">

					<i class="icon-ok icon-5x"></i>

				</div>

			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="fail" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" >

			<div class="modal-header" style="text-align: center; ">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Edit successful.</h4>
			</div>

			<div class="modal-body" style="text-align: center; ">

				<p> You are a student member! You can't move into alias mode.
				</p>

				<div style="font-size: 72px;">

					<i class="fa fa-thumbs-down fa-5x"></i>

				</div>

			</div>

		</div>
	</div>
</div>

</body>

<script>

$(document).ready(function(){

	$(".aliaschangebutton").click(function(){

		<?php if($this->session->userdata("privilege") == COORDINATOR): ?>

		$.get($(this).attr("target"), function(){
			$("#success").modal();
		});

		<?php endif; ?>

		<?php if($this->session->userdata("privilege") == MEMBER): ?>

			$("#fail").modal();

		<?php endif; ?>

	});

});

</script>

</html>