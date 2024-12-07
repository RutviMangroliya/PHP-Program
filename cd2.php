<?php
//$dat = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
//$dat=$dat->format('H');
date_default_timezone_set("Asia/Calcutta");
echo "Current Time:".date("h:i:s A")."<br/>";
$dat=date("G");
if($dat < 12) 
{
  echo "Good morning..."; 
}
else if($dat < 17) 
{
  echo "Good afternoon..";
}
else if($dat<20)
{
  echo "Good evening.."; 
}
else 
{
  echo "Good night....";
}
?>