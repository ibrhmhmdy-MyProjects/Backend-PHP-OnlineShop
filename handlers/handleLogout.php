<?php

require_once "../App.php";

$session->destroy();
$req->Redirect("../index.php");