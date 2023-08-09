<?php

require("../func/autoload.php");

$result = 0;
$result = $auth->login($_POST["npm"], $_POST["password"]);
echo json_encode(["status" => $result]);