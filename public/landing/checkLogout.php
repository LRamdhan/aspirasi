<?php

require("../func/autoload.php");

echo json_encode(["status" => $auth->checkLogout()]);