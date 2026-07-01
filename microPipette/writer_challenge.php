<?php
$a = $_POST['highScoreCh'];
file_put_contents("dataCh/".$_SERVER['cn'],$a);

?>
