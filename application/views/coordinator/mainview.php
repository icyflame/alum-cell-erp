<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">

	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-3.2.1/css/font-awesome.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'font-awesome/font-awesome-4.1.0/css/font-awesome.min.css'; ?>">

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bodymargin.css'; ?>">

	<script src="<?php echo base_url().'bootstrap/jquery-1.10.2.js'; ?>"></script>
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

	<style>

	button{
		margin-right: 20px;
		margin-left: 20px; 
	}

	</style>

</head>

<body>

	<h3>View portal as:</h3>

	<?php foreach ($users as $username): ?>

	<button class="btn btn-lg btn-primary"><?php echo $username; ?> </button>

	<?php endforeach; ?>

</body>

</html>