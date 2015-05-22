<?php
include "index.php";
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php function meat()
{
  if ($_GET == "") {
    echo '<h2>What is node.JS?</h2>';
    echo '<p>node.JS is an alternative server side script.</p><br>';
    echo '<p>To those who are used to PHP as the only option for a server side language, node.JS provides an alternative
      that allows the power of PHP, and the intuitiveness of JavaScript.</p>';
  }
} ?>