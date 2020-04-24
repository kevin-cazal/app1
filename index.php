<?php

if (version_compare(phpversion(), '7.4.5', '!=')) {
	echo "<h1>Wrong version of PHP installed</h1>";
	die();
} else {
	echo "<h1>Hello World from docker</h1>";
}
