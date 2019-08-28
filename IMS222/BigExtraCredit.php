<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<?php
$TodayDate=date('m-d-Y');
echo '<p>Today is '.$TodayDate.'</p>';
$TimeNow=date('g:ia');
echo '<p>The time is now '.$TimeNow.'</p>';
$SecondHand=date('s');
if (intval($SecondHand)%2==0)
   echo 'The second hand ('.$SecondHand.') is even';
else
   echo 'The second hand ('.$SecondHand.') is odd';
?>
</body>
</html>
