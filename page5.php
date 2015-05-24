<?php

function page5() { ?>
  <h2>Node Package Manager (NPM)</h2>
  <p><a href="https://www.npmjs.com/" target="_blank" title="npm">npm</a> provides a way to quickly and seamlessly install
    new modules for use in Node applications. It is included with current versions of node.JS, so you can start using
  npm to install new modules immediately!</p>
  <p>npm can be used from the command line (within WebStorm or an external shell/terminal), or through a GUI located in
    WebStorm's preferences panel.</p>
  <p>Terminal:<br>note the install syntax: <code>$ npm install moduleName</code></p>
  <p><img src="files/npm-command-line.png" width="600" ></p>
  <p>GUI:</p><p><img src="files/npm-ws.png" width="600" ></p>
  <h3><br>Core Modules</h3>
  <p>Node ships with many pre-defined modules known as the <em>
      <a href="https://nodejs.org/docs/v0.4.12/api/" target="_blank" title="Node core modules">Core Modules</a></em>.</p>
  <p>There are too many to list here, but one of the most commonly used modules is HTTP, which can be used to set
  up a basic web sever! The syntax for including HTTP is <code>var http = require('http')</code>.  It is common
  practice to store the module in a variable of the same name.</p>
  <p><br>Next, we will see how to use the HTTP module to <a href="?page=6" title="page 6">set up a simple web server</a>.</p>
<?php } ?>