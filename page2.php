<?php

function page2() { ?>
  <h2>Installing node.JS</h2>
  <p>The official node.JS website provides several options for downloading and installing the library.
  <p>The source code is made available and requires Python to build the program, and there are also reliable pre-built
    installers for Windows and OS X.
  <p><a href="https://nodejs.org/download/" target="_blank" title="Download Page" >node.JS Download Page</a></p>
  <p>This tutorial will also be geared for use with the
    <a href="https://www.jetbrains.com/" target="_blank" title="JetBrains"> JetBrains</a> IDE,
    <a href="https://www.jetbrains.com/webstorm/" target="_blank" title="WebStorm"> WebStorm</a>. Plain text editors
  will work fine with node.JS, but WebStorm provides some built in tools that make developing node.JS applications
  a snap! Individual licenses for WebStorm can be purchased for $49, and there is also a 30 day free trial option.
  (JetBrains offers free access to <a href="https://www.jetbrains.com/student/" target="_blank" title="student's page">
    students and teachers</a>!)</p>
  <p><br>Once everything is installed, you can start a New Project in WebStorm! The IDE should have the Node.JS plugin
  already enabled, but you can verify this by opening Preferences -> Plugins.</p>
  <p><img src="files/ws-preferences.png" width="600"></p>
  <p>You should also verify that WebStorm knows where to find your Node interpreter:</p>
  <p><img src="files/ws-node-interpreter.png" width="600"></p>
  <p>If WebStorm tells you which version of Node you're using, then it is correctly configured.</p>
  <p><br>Next, we'll get started by creating the necessary files for a <a href="?page=3" title="page 3">
      node.JS application...</a></p>
<?php } ?>