<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/local_shibboleth.php';
$isAdmin=in_array($_SERVER['cn'],json_decode(file_get_contents("whitelist.txt")));
?>
