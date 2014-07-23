<html>

<body>

	<p>Page Begin</p>

	<?php

	echo 'Logged in.'.'<br/>'.'<br/>';

	echo 'Hey '.$this->session->userdata('username').'<br/>';
	echo 'You have a privilege of '.$this->session->userdata('privilege').'<br/>'.'<br/>';

	echo print_r($this->session->all_userdata());

	?>

	<h1>Networking Summary</h1>

	<table border="1">

		<tr>
			<td> All years
			</td>
			<td> 1965
			</td>
			<td> 1975
			</td>
			<td> 1985
			</td>
		</tr>
		<tr>
			<td> Total Number of alumni allocated:
			</td>
			<td> 
			</td>
		</tr>

	</table>


	<p>Page End</p>

</body>

</html>