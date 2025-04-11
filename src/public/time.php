<?php

$date = new DateTime();
echo $date->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime('1999-11-02 05:27:42');
echo $date->format('Y-m-d H:i:s') . '<br>';

// year
$date = new DateTime();
echo $date->format('Y') . '<br>';

// month
$date = new DateTime();
echo $date->format('m') . '<br>';

// date
$date = new DateTime();
echo $date->format('d') . '<br>';

// day of week
$date = new DateTime();
echo $date->format('D') . '<br>';


// hours
$date = new DateTime();
echo $date->format('H') . '<br>';

// minutes
$date = new DateTime();
echo $date->format('i') . '<br>';

// seconds
$date = new DateTime();
echo $date->format('s') . '<br>';


// 出力形式別

// ATOM
$date = new DateTime();
echo $date->format(DateTime::ATOM) . '<br>';

// COOKIE
$date = new DateTime();
echo $date->format(DateTime::COOKIE) . '<br>';

// RSS
$date = new DateTime();
echo $date->format(DateTime::RSS) . '<br>';

// W3C
$date = new DateTime();
echo $date->format(DateTime::W3C) . '<br>';


// date calculation

// one year later / before
$date = new DateTime();
echo $date->modify('-1 years')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo $date->modify('1 years')->format('Y-m-d H:i:s') . '<br>';

// one month later / before
$date = new DateTime();
echo $date->modify('-1 months')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo $date->modify('1 months')->format('Y-m-d H:i:s') . '<br>';

// one day later / before
$date = new DateTime();
echo $date->modify('-1 days')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo $date->modify('1 days')->format('Y-m-d H:i:s') . '<br>';

// one hour later / before
$date = new DateTime();
echo $date->modify('-1 hours')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo $date->modify('1 hours')->format('Y-m-d H:i:s') . '<br>';

// one minute later / before
$date = new DateTime();
echo $date->modify('-1 minutes')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo $date->modify('1 minutes')->format('Y-m-d H:i:s') . '<br>';

// one second later / before
$date = new DateTime();
echo $date->modify('-1 seconds')->format('Y-m-d H:i:s') . '<br>';

$date = new DateTime();
echo $date->modify('1 seconds')->format('Y-m-d H:i:s') . '<br>';
