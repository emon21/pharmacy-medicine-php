<?php 

/*session_start();
$sid = session_id();
echo $sid;


$from = strtotime(filectime('yourfile.php'));// for linux use filemtime
$today = time();
$diff= $today - $from;
if(floor($diff/ (60 * 60 * 24)) > 86400)
{
  echo "File expired (1 days)";
  
}*/

$startdate = "11-nov-2020";
$expire = strtotime($startdate. ' + 2 days');
$today = strtotime("today midnight");

if($today >= $expire){
    echo "expired";
} else {
    echo "active";
}

?>