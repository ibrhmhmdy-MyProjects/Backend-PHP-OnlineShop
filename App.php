<?php

namespace App;
require_once "classes/Sessions.php";
require_once "classes/databases/MYSQL.php";
require_once "classes/Request.php";
require_once "classes/Strings.php";

require_once "classes/Validations/Validator.php";

use Classes\Databases\MYSQL;
use Classes\Sessions;
use classes\Validations\Validator;
use Classes\Request;
use classes\Strings;


$hostname = "localhost";
$dbname = "db_shops";
$username = "root";
$password = "";
$db = new MYSQL($hostname,$dbname,$username,$password);
$db->Connect();
$valid = new Validator();
$req = new Request();
$str = new Strings();
$session = new Sessions();
