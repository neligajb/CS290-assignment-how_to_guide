
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <LINK href="styles.css" rel="stylesheet" type="text/css">
  <title>node.JS How-To Guide</title>
</head>
<?php
include "content.php";
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<body>
  <header>
    <img id="logo" src="files/nodejs-dark.png" />
    <h3 id="title">A Brief Guide to The Basics</h3>
  </header>
  <div id="content">
    <?php pageContent() ?>
  </div>
  <div id="nav-bar">
    <ul>
      <li><a href="?page=1" title="page 1">Introduction to node.JS</a></li>
      <li><a href="?page=2" title="page 2">Getting set up</a></li>
      <li><a href="?page=3" title="page 3">Creating an app</a></li>
      <li><a href="?page=4" title="page 4">Using modules</a></li>
    </ul>
  </div>
</body>
</html>