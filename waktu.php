<?php

$diff  = date_diff( date_create('1983-07-02'), date_create() );
//echo $diff->format('Usia anda adalah %a hari'); 


//$date=date_create("2013-03-15");
$date=date_create(date("Y-m-d h:i:s"));
//$date=date_create("Y-m-d h:i:s");
//date_sub($date,date_interval_create_from_date_string("40 days"));
date_sub($date,date_interval_create_from_date_string("2 days"));
echo date_format($date,"Y-m-d h:i:s");

?>