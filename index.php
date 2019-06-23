<?php
include "a.php";
include "b.php";

use second\a;
// $a = new second\a;
$a = new a; // unqualified classname
// $a = new SecondA; // qualified classname
$a = new \a;
