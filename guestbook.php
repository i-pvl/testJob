<?php
require_once "application/model/GBModel.php";
require_once "application/view/GBView.php";
require_once "application/controller/GBController.php";

$gb = new GBController();
$gb->index();

?>