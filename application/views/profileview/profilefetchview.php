<html>

<head>

	<script src="<?php echo base_url().'bootstrap/jquery-1.10.2.js'; ?>"></script>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-3.2.1/css/font-awesome.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-4.1.0/css/font-awesome.min.css'; ?>">


</head>

<body style="margin-left: 20px; margin-right: 20px;">

	<h3> Alumni ID <?php echo $alumid ?> <i id="doing" class="fa fa-spinner fa-spin" style="display: none; "></i> </h3> 
	<h2> <?php echo $name ?> </h2>
	<h4> <?php echo $hall ?> </h4>
	<h4> <?php echo $dept ?> </h4>
	<h5> An alumni since <?php echo $alumSince ?> </h5>

	<h2> Change the search status </h2>

	<ul id="searchTabs" class="nav nav-pills nav-justified" role="menu">

		<li id="search1" class='<?php echo $s_1 ?>'><a href="#">Yet to be searched</a></li>
		<li id="search2" class='<?php echo $s_2 ?>'><a href="#">Not Found</a></li>
		<li id="search3" class='<?php echo $s_3 ?>'><a href="#">Found</a></li>
		<li id="search4" class='<?php echo $s_4 ?>'><a href="#">Ready</a></li>

	</ul>

	<h2> Change the calling status </h2>

	<ul id="callingTabs" class="nav nav-pills nav-justified" role="menu">

		<li id="calling1" class="<?php echo $c_1 ?>"><a href="#">Called (2 way)</a></li>
		<li id="calling2" class="<?php echo $c_2 ?>"><a href="#">Negative</a></li>
		<li id="calling3" class="<?php echo $c_3 ?>"><a href="#">Neutral</a></li>
		<li id="calling4" class="<?php echo $c_4 ?>"><a href="#">Positive</a></li>

	</ul>

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

					<p> Status has been edited successfully!
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

	<div class="modal fade" id="fail" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" >

				<div class="modal-header" style="text-align: center; ">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Profile edit failed.</h4>
				</div>

				<div class="modal-body" style="text-align: center; ">

					<p> Something doesn't seem right. We were unable to edit the status. Please try again after some time.
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

$(document).ready(function(){

	/**************

	Search Buttons


	************/

	$("#search1").on("click", function(){

		$("#doing").toggle();

		var t = $(this);

		$.get("<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/1') ?>", function(){
			$("#searchTabs .active").removeClass("active");
			t.addClass("active");
			$("#success").modal();
		});

		$("#doing").toggle();

	});

	$("#search2").on("click", function(){

		$("#doing").toggle();

		var t = $(this);

		$.get("<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/2') ?>", function(){
			$("#searchTabs .active").removeClass("active");
			t.addClass("active");
			$("#success").modal();
		});

		$("#doing").toggle();

	});

	$("#search3").on("click", function(){

		$("#doing").toggle();

		var t = $(this);

		$.get("<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/3') ?>", function(){
			$("#searchTabs .active").removeClass("active");
			t.addClass("active");
			$("#success").modal();
		});

		$("#doing").toggle();

	});

	$("#search4").on("click", function(){

		$("#doing").toggle();

		var t = $(this);

		$.get("<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/4') ?>", function(){
			$("#searchTabs .active").removeClass("active");
			t.addClass("active");
			$("#success").modal();
		});

		$("#doing").toggle();

	});

	/**************

	Calling Buttons


	************/

	$("#calling1").on("click", function(){

		$("#doing").toggle();

		var t = $(this);

		$.get("<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/1') ?>", function(){
			$("#callingTabs .active").removeClass("active");
			t.addClass("active");
			$("#success").modal();
		});

		$("#doing").toggle();

	});

	$("#calling2").on("click", function(){

		$("#doing").toggle();

		var t = $(this);

		$.get("<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/2') ?>", function(){
			$("#callingTabs .active").removeClass("active");
			t.addClass("active");
			$("#success").modal();
		});

		$("#doing").toggle();

	});

	$("#calling3").on("click", function(){

		$("#doing").toggle();

		var t = $(this);

		$.get("<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/3') ?>", function(){
			$("#callingTabs .active").removeClass("active");
			t.addClass("active");
			$("#success").modal();
		});

		$("#doing").toggle();

	});

	$("#calling4").on("click", function(){

		$("#doing").toggle();

		var t = $(this);

		$.get("<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/4') ?>", function(){
			$("#callingTabs .active").removeClass("active");
			t.addClass("active");
			$("#success").modal();
		});

		$("#doing").toggle();

	});

});

</script>

</html>