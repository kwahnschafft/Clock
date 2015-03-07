<?php

date_default_timezone_set('America/New_York');


$today = date("g:i:sA");

$date = date("G");

if($date >= 5 && $date < 11) {
   $image = "img/morning.png";
   $backColor = "morning";
}
else if($date >= 11 && $date < 16) {
   $image = "img/daytime.png";
   $backColor = "daytime";
}
else if($date >= 16 && $date < 20) {
   $image = "img/evening.png";
   $backColor = "evening";
}
else {
   $image = "img/night.png";
   $backColor = "night";
}


?>