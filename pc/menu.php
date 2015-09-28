
<?php
$dir    = './';
$files = scandir($dir);
// $files2 = scandir($dir, 1);

// print_r($files1);
// print_r($files2);
echo "<ul>";
foreach($files as $file) {
	if(endsWith($file, ".php") && $file != "menu.php") {
		printf("<li><a href=\"%s\">%s</a></li>", $file, $file);
	}
}
echo "</ul>";

function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}
?>