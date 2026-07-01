<?php
$a = new stdClass();
$a -> stats = json_decode($_REQUEST['stats']);
$a = json_encode($a);
file_put_contents("data/".$_SERVER['cn'],$a);

?>
