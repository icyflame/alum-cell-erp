<html>

<body>

	<p>Page Begin</p>

	<?php

	echo $status.'<br/>';

	echo 'Hey '.$this->session->userdata('username').'<br/>';
	echo 'You have a privilege of '.$this->session->userdata('privilege').'<br/>'.'<br/>';

	echo print_r($this->session->all_userdata());

	?>

	<p>Page End</p>

</body>

</html>