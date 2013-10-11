<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
foreach(glob('./*/main.php') as $f) {
	echo '<a href="'.$f.'">'.$f.'</a><br>';
}
/*
<a href="blitz/main.php">blitz</a><br>
<a href="blitz-ctx/main.php">blitz context</a><br>
<a href="blitz-ctx-arr/main.php">blitz context arrays</a><br>
<a href="blitzpack/main.php">blitz t-cache</a><br>
<a href="php/main.php">php</a><br>
<a href="phpinc/main.php">php includes</a><br>
<a href="pt/main.php">php_templates</a><br>
<a href="pt-arr/main.php">php_templates arrays</a><br>
<a href="smarty/main.php">smarty</a><br>
*/