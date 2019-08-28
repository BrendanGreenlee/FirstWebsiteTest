<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<style>
img {
   width:70%;
}
</style>
<body>
<?php
$dir = '/img/random/';
echo '<div class="item"><img src="'.$dir.rand(1,2).'.jpg" alt="random"></div>';
?>
</body>
</html>
