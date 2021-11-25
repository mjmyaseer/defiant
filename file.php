<?php
$readResult = file_get_contents("defiantTest.txt");
if(isset($matches[1])){
	foreach ($matches[1] as $value) {
		echo($value."  <br>");
	}
}
?>