<?php

include "page1.php";
include "page2.php";

function pageContent() {
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page'] === '1')) {
      page1();
    }
    else if ((isset($_GET['page']) && $_GET['page'] === '2')) {
      page2();
    }
  }
}
?>