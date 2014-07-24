<html>

<head>

	<style>

	a{

		text-decoration: none !important;

	}

	.selected{
		font-weight: bold;
	}

	.overall{

		font-size: 30px;

	}

	</style>

</head>

<body>

	<p>Page Begin</p>

	<?php

	echo 'Logged in.'.'<br/>'.'<br/>';

	echo 'Hey '.$this->session->userdata('username').'<br/>';
	echo 'You have a privilege of '.$this->session->userdata('privilege').'<br/>'.'<br/>';

	echo print_r($this->session->all_userdata());

	?>

	<h1>Networking Summary</h1>

	<div class="overall">

		<a href="#" class="selected">All Years</a>
		<a href="#">1965</a>
		<a href="#">1975</a>
		<a href="#">1990</a>

	</div>

	<h3> Total Number of Alumni Allocated: <?php echo $totalallocated ?> </h3>

	<h3 style="text-decoration: underline;"> Searching Status </h3>

	<table border="1">

		<tr>
			<td> Found
			</td>
			<td> Ready
			</td>
			<td> Yet to be searched
			</td>
			<td> Not Found
			</td>
		</tr>

		<tr>
			<td> <?php echo $found ?>
			</td>
			<td> <?php echo $ready ?>
			</td>
			<td> <?php echo $yet ?>
			</td>
			<td> <?php echo $notfound ?>
			</td>
		</tr>

	</table>

	<h3 style="text-decoration: underline;"> Response Status </h3>

	<table border="1">

		<tr>
			<td> Called (2-way)
			</td>
			<td> Neutral
			</td>
			<td> Positive
			</td>
			<td> Negative
			</td>
		</tr>

		<tr>
			<td> <?php echo $called2way ?>
			</td>
			<td> <?php echo $negative ?>
			</td>
			<td> <?php echo $neutral ?>
			</td>
			<td> <?php echo $positive ?>
			</td>
		</tr>

	</table>

	<p>Page End</p>

</body>

</html>