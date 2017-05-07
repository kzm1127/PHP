<?php
require("funcs.php");
$sutudents=file_get_contents(JSON);

$fileName = "seat.json";
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename='.$fileName);
echo mb_convert_encoding($sutudents, "SJIS", "UTF-8");
exit;
