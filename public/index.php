<?php

session_start();

require_once "../app/core/initialize.php";

$app = new App();
$app->loadController();