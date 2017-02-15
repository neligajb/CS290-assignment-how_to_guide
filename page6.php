<?php

function page6() { ?>
  <h2>Using node.JS to set up a web server</h2>
  <p>One of the coolest aspects of Node is the ease with which it allows programmers to interface with the web.
    In contrast to installing heavy software packages such as Apache or IIS, Node can be used to quickly create a
  lightweight web server.</p>
  <p>In the following example, we will only be returning simple string data to the requesting client, but it should
  demonstrate how more complex data could be returned.</p>
  <ul>
  <li><p>First, we require the HTTP module: <code>var http = require('http');</code>.</p></li>
  <li><p>Then we use the <code>createServer()</code> function to establish the server and specify a port to listen on.</p></li>
  <li><p>Next, we make a <em>callback function</em> that takes two parameters: the request data and our response data.</p></li>
  <li><p>In the <code>writeHead()</code> function, we send back a response code (200 for OK), as well as the type of data
  we are responding with. In this case, it is just text.</p></li>
  <li><p>Finally, we <code>write()</code> our response, and close the connection with <code>end()</code>.</p></li>
  </ul>
  <p><br><img src="files/node-web-server.png" width="780" ></p>
  <p>Running the code will start up the server, and then we point a browser to http://localhost:8080 to see our
  server's response.</p>
  <p><br>This concludes the tutorial, but hopefully this brief introduction to node.JS has given you the foundation to
    begin programming with this fantastic tool!</p>

<?php } ?>