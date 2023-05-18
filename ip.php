<?php
echo "
<center>
	<div>
	<h1>What is your IP?</h1>
	<div class=\"vulnerable_code_area\">
		<hr />
		Your IP address is: <em>{$_SERVER[ 'REMOTE_ADDR' ]}</em><br /><br />
		[<em><a href=\"?page=include.php\">back</a></em>]
	</div>
</center>
</div>\n";
?>