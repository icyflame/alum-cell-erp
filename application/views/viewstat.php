<html>

<body>

	<p>Page Begin</p>

	<?php

	echo $status.'<br/><br/>';

	echo print_r($this->session->all_userdata());

	?>

	<p>Page End</p>

</body>

</html>