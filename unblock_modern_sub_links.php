<?php
// Really simple way to fix my issues with markdown-resume
if (count($argv) != 3)
	die('Specify source and desination please');
$entire_resume = file_get_contents($argv[1]);
$fixed = str_replace("a[href$='.pdf']", "blockquote p a[href$='.pdf']", $entire_resume);

$fp = fopen($argv[2], 'w');
fwrite($fp, $fixed);
fclose($fp);
