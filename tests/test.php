<?php

require "../NineGridClassification.php";

use defyma\helper\NineGridClassification;

$x = 3;
$y = 3;
$expected = 5;
$result = NineGridClassification::calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";

$x = 1;
$y = 5;
$expected = 7;
$result = NineGridClassification::calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";

$x = 4.1;
$y = 2;
$expected = 3;
$result = NineGridClassification::calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";

$x = 3.1;
$y = 0;
$expected = 2;
$result = NineGridClassification::calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";

$x = 0;
$y = 0;
$expected = 1;
$result = NineGridClassification::calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";