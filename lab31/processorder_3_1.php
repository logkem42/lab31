<?php
require('class.php');


$Page = new Page();
$Page -> header();
$Page -> connect();
$Page -> processorder($tiregty, $oilgty, $sparkqty, $fio, $address);
$Page -> tooter();

?>
