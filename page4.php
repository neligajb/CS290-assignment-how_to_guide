<?php

function page4() { ?>
  <h2>Requiring <em>modules</em></h2>
  <p>Modules are essentially a way to <em>include</em> files and/or functions in another file. They provide a way
    for external libraries to be used in your application.</p>
  <p>The following screen shots demonstrate a simple example of how to use the Node global object <code>exports</code>.</p>
  <p>First, we export the <code>restaurant()</code> function from restaurant.js, and store it in the variable called
  <code>price</code>. The full code is <code>module.exports.price = restaurant;</code></p>
  <p><img src="files/module-export.png" ></p>
  <p>Next, we <code>require</code> restaurant.js in app.js, and store the result the variable called <code>meal</code>.
  This allows us to access the <code>restaurant()</code> function using the variable called <code>price</code>.</p>
  <p><img src="files/module-require.png" ></p>
  <p>Note the output of our original <code>restaurant()</code> function in the console window.</p>
<?php } ?>