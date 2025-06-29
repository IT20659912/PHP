<!DOCTYPE html>
<head>
   <title>Array Functions</title>
   
</head>
<body>
  <?php
   
         $mynumbers = array(13,15,20,11,35,26);
		 
  ?>
 
  Maximum value : <?php echo max($mynumbers); ?><br> 
  Minimum value : <?php echo min($mynumbers); ?><br>
  Count : <?php echo count($mynumbers); ?><br>

<br>
 Sort : <pre><?php sort($mynumbers); print_r($mynumbers); ?></pre>
 Reverse Sort : <pre><?php rsort($mynumbers); print_r($mynumbers); ?></pre>
 
 <br>
 
</body>

</html>