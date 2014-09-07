<html>

<head>

	<script src="<?php echo base_url().'bootstrap/jquery-1.10.2.js'; ?>"></script>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-3.2.1/css/font-awesome.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-4.1.0/css/font-awesome.min.css'; ?>">


</head>

<body style="margin-left: 20px; margin-right: 20px;">

	<h3> Alumni ID <?php echo $alumid ?> <i id="doing" class="fa fa-spinner"></i> </h3> 
	<h2> <?php echo $name ?> </h2>
	<h4> <?php echo $hall ?> </h4>
	<h4> <?php echo $dept ?> </h4>
	<h5> An alumni since <?php echo $alumSince ?> </h5>

	<h2> Change the search status </h2>

	<ul class="nav nav-pills nav-justified" role="menu">

		<li class='<?php echo $s_1 ?>'><a href="<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/1') ?>">Yet to be searched</a></li>
		<li class='<?php echo $s_2 ?>'><a href="<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/2') ?>">Not Found</a></li>
		<li class='<?php echo $s_3 ?>'><a href="<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/3') ?>">Found</a></li>
		<li class='<?php echo $s_4 ?>'><a href="<?php echo site_url('profilefetch/updateSearch/'.$alumid.'/4') ?>">Ready</a></li>

	</ul>

	<h2> Change the calling status </h2>

	<ul id="callingTabs" class="nav nav-pills nav-justified" role="menu">

		<li id="calling1" class="<?php echo $c_1 ?>"><a href="#">Called (2 way)</a></li>
		<li id="calling2" class="<?php echo $c_2 ?>"><a href="#">Negative</a></li>
		<li id="calling3" class="<?php echo $c_3 ?>"><a href="#">Neutral</a></li>
		<li id="calling4" class="<?php echo $c_4 ?>"><a href="#">Positive</a></li>

	</ul>

</body>

<script>

$(document).ready(function(){

	$("#calling1").on("click", function(){

		$("#doing").addClass("fa-spin");

		$.get("<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/1') ?>", function(){
			alert("Calling status successfully updated.");
		});

		$("#callingTabs .active").removeClass("active");
		$(this).addClass("active");
		$("#doing").removeClass("fa-spin");

	});

	$("#calling2").on("click", function(){

		$("#doing").addClass("fa-spin");

		$.get("<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/2') ?>", function(){
			alert("Calling status successfully updated.");
		});

		$("#callingTabs .active").removeClass("active");
		$(this).addClass("active");
		$("#doing").removeClass("fa-spin");

	});

	$("#calling3").on("click", function(){

		$("#doing").addClass("fa-spin");

		$.get("<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/3') ?>", function(){
			alert("Calling status successfully updated.");
		});

		$("#callingTabs .active").removeClass("active");
		$(this).addClass("active");
		$("#doing").removeClass("fa-spin");

	});

	$("#calling4").on("click", function(){

		$("#doing").addClass("fa-spin");

		$.get("<?php echo site_url('profilefetch/updateCalling/'.$alumid.'/3') ?>", function(){
			alert("Calling status successfully updated.");
		});

		$("#callingTabs .active").removeClass("active");
		$(this).addClass("active");
		$("#doing").removeClass("fa-spin");

	});

});

</script>

</html>