<?php

require '../vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->year . '<br>';

$dt = Carbon::now();
echo $dt->month . '<br>';

$dt = Carbon::now();
echo $dt->day . '<br>';


$dt = Carbon::now();
echo $dt->hour . '<br>';

$dt = Carbon::now();
echo $dt->minute . '<br>';

$dt = Carbon::now();
echo $dt->second . '<br>';
echo '<br>';


$dt = Carbon::now();
echo $dt->addYear();
echo '<br>';

$dt = Carbon::now();
echo $dt->subYear();
echo '<br>';

$dt = Carbon::now();
echo $dt->addMonth();
echo '<br>';

$dt = Carbon::now();
echo $dt->subMonth();
echo '<br>';

$dt = Carbon::now();
echo $dt->addDay();
echo '<br>';

$dt = Carbon::now();
echo $dt->subDay();
echo '<br>';

$dt = Carbon::now();
echo $dt->addHour();
echo '<br>';

$dt = Carbon::now();
echo $dt->subHour();
echo '<br>';

$dt = Carbon::now();
echo $dt->addMinute();
echo '<br>';

$dt = Carbon::now();
echo $dt->subMinute();
echo '<br>';

$dt = Carbon::now();
echo $dt->addSeconds();
echo '<br>';

$dt = Carbon::now();
echo $dt->subSeconds();
