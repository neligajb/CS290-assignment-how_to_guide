<?php

include "page1.php";
include "page2.php";
include "page3.php";
include "page4.php";

function pageContent() {
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page'] === '1')) {
      page1();
    }
    else if ((isset($_GET['page']) && $_GET['page'] === '2')) {
      page2();
    }
    else if ((isset($_GET['page']) && $_GET['page'] === '3')) {
      page3();
    }
    else if ((isset($_GET['page']) && $_GET['page'] === '4')) {
      page4();
    }
  }
}
?>