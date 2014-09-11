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

	<a href="<?php echo site_url("coordinator/viewalias/".$userid); ?>">

		<button class="aliaschangebutton btn btn-lg btn-primary" target="<?php echo site_url("coordinator/viewalias/".$userid); ?>">
			<?php echo $username; ?>
		</button>

	</a>

<?php endforeach; ?>

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

				<div style="font-size: 72px;">

					<i class="icon-ok icon-5x"></i>

				</div>

			</div>

			<div class="modal-footer">
				<a href="<?php echo base_url('dbdisplay/buildTable/0/0'); ?>">
					<button type="button" class="btn btn-success" data-dismiss="modal">Redirect</button>
				</a>
			</div>
		</div>
	</div>
</div>

</body>

<script>

/*

$(document).ready(function(){

	$.each(".aliaschangebutton", function(i, j){

		$(this).on("click", function(){

			var t = $(this);

			alert("" + t.attr("target"));

			$.get(t.attr("target"), function(){
				$("#success").modal();
			});

		});

	});

}

*/

</script>

</html>