<?php
namespace fuzzy\temp;
class b {
  function __construct() {
    echo("i am from the class name ".__CLASS__." inside the ".__FILE__."</br>");
    $a = new \a();
  }
}
