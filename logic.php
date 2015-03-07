<?php

date_default_timezone_set('America/New_York');


$today = date("g:i:sA");

$date = date("G");

$image = "";

function doAll($word) {
   global $image;
   global $backColor;
   global $title;
   $image = "img/" . $word . ".png";
   $backColor = $word;
   $title = "Good " . ucfirst($word) . "!";
}

if($date >= 5 && $date < 11) { 
   doAll("morning");
}
else if($date >= 11 && $date < 16) { 
   doAll("day");
}
else if($date >= 16 && $date < 20) { 
   doAll("evening");
}
else {
   doAll("night");
}



?>

