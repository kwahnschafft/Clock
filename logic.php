<?php

date_default_timezone_set('America/New_York');


$today = date("g:i:sA");

$date = date("G");

if($date >= 5 && $date < 11) { 
   $image = "img/morning.png";
   $backColor = "morning";
   $title = "Good Morning!";
}
else if($date >= 11 && $date < 16) { 
   $image = "img/daytime.png";
   $backColor = "daytime";
   $title = "Good Day!";
}
else if($date >= 16 && $date < 20) { 
   $image = "img/evening.png";
   $backColor = "evening";
   $title = "Good Evening!";
}
else {
   $image = "img/night.png";
   $backColor = "night";
   $title = "Good Night!";
}


?>