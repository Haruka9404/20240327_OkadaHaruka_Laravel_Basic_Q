<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->year;
echo '</br>';

$dt = Carbon::now();
echo $dt->month;
$dt = Carbon::now();
echo $dt->day;
$dt = Carbon::now();
echo $dt->hour;
$dt = Carbon::now();
echo $dt->minute;
$dt = Carbon::now();
echo $dt->second;
echo '</br>';

$dt = Carbon::now();
echo $dt->addYear();

$dt = Carbon::now();
echo $dt->subYear();
echo '</br>';

$dt = Carbon::now();
echo $dt->addSeconds();

$dt = Carbon::now();
echo $dt->subSeconds();
