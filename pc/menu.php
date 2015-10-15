<?php
$dir    = './';
$files = scandir($dir);

$development_files = array();
$component_files = array();
$reference_files = array();
$other_files = array();

foreach ($files as $file) {
	if(endsWith($file, ".php")) {
		if(startsWith($file, "component-")) {
			array_push($component_files, $file);
		} else if(startsWith($file, "reference-")) {
			array_push($reference_files, $file);
		} else if(startsWith($file, "other-")) {
			array_push($other_files, $file);
		}
		else if($file != "menu.php") {
			array_push($development_files, $file);
		}
	}
}

echoList("Developments", $development_files);
echoList("Components", $component_files);
echoList("References", $reference_files);
echoList("Others", $other_files);

function echoList($name, $list) {
	echo "<h1>" . $name . "</h1>";
	echo "<ul>";
	foreach($list as $item) {
		printf("<li><a href=\"%s\">%s</a></li>", $item, $item);
	}
	echo "</ul>";
}

function startsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (strpos($haystack, $needle, 0) !== FALSE);
}

function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}
?>