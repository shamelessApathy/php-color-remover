<?php
echo 'you are here *';

$directory = $_SESSION['image-path'];

var_dump($directory);


 ?>
 <html>
 <head>
 <link href='../css/styles.css' rel='stylesheet' type='text/css'/>
 </head>
 <body>
 <h2> Click anywhere on picture to select the color you want to remove</h2>
 <canvas id='myCanvas'></canvas>
 <img src="<?php echo '../' . $directory ?>" id='image'/>

 <textarea id='rgb-code'></textarea>
 </body>
 	<script src='../js/jquery.js'></script>
 	<script src='../js/script.js'></script>
 </html>