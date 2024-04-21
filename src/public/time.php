<?php
// $date = new DateTime();
// echo $date->format('Y-m-d H:i:s');

$date = new DateTime('1999-11-02 05:27:42');
echo $date->format('Y-m-d H:i:s');
echo '</br>';

$date = new DateTime();
echo $date->format('D');
echo '</br>';

$date = new DateTime();
echo $date->format('Y');
echo '</br>';

$date = new DateTime();
echo $date->format('m');
echo '</br>';

$date = new DateTime();
echo $date->format('d');
echo '</br>';

$date = new DateTime();
echo $date->format('H');
echo '</br>';

$date = new DateTime();
echo $date->format('i');
echo '</br>';

$date = new DateTime();
echo $date->format('s');
echo '</br>';

$date = new DateTime();
echo $date->format(DateTime::ATOM);
echo '</br>';

$date = new DateTime();
echo $date->format(DateTime::COOKIE);
echo '</br>';

$date = new DateTime();
echo $date->format(DateTime::RSS);
echo '</br>';

$date = new DateTime();
echo $date->format(DateTime::W3C);
echo '</br>';

$date = new DateTime();
echo $date->modify('-1 years')->format('Y-m-d H:i:s');
echo '</br>';

$date = new DateTime();
echo $date->modify('1 years')->format('Y-m-d H:i:s');
echo '</br>';

$date = new DateTime();
echo $date->modify('-1 months')->format('Y-m-d H:i:s');
echo '</br>';

$date = new DateTime();
echo $date->modify('1 months')->format('Y-m-d H:i:s');
echo '</br>';

$date = new DateTime();
echo $date->modify('1 days')->format('Y-m-d H:i:s');
echo '</br>';

$date = new DateTime();
echo $date->modify('1 hours')->format('Y-m-d H:i:s');
echo '</br>';

$date = new DateTime();
echo $date->modify('1 minutes')->format('Y-m-d H:i:s');
echo '</br>';

$date = new DateTime();
echo $date->modify('1 seconds')->format('Y-m-d H:i:s');
echo '</br>';

$date = new DateTime();
echo $date->modify('-1 day +1 week')->format('Y-m-d H:i:s');
echo '</br>';