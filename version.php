<?php 

$version="OSS"; 
$version_revision="1.7";
$githash = file_get_contents("../githash.txt");
if (!empty($githash)) {
  $version_revision .= " (".substr($githash,0,8).")";
}

?>
