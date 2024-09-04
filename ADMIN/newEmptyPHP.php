<?php
$hoy = getdate();
print_r($hoy);

?>
<?php
// Set the new timezone
//date_default_timezone_set('Peru');
$date = date('y-m-d h:i:s');
echo $date;
?>
<?php
// Executed at March 05, 2014
$futureDate = mktime(0, 0, 0, date("m")+30, date("d"), date("Y"));
echo 'ff';

$date1 = date('Y-m-d H:i:s');
echo $date1;
?>