<?php

require "../NineGridClassification.php";

use defyma\helper\NineGridClassification;

$_9Grid = new NineGridClassification();
$_9Grid->setPoin(6,6, 4,5,3,5);

$x = 3;
$y = 3;
$expected = 1;
$result = $_9Grid->calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";

$x = 1;
$y = 5;
$expected = 4;
$result = $_9Grid->calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";

$x = 4.1;
$y = 2;
$expected = 2;
$result = $_9Grid->calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";

$x = 3.1;
$y = 0;
$expected = 1;
$result = $_9Grid->calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";

$x = 0;
$y = 0;
$expected = 1;
$result = $_9Grid->calculate($x, $y);
echo "Expected Result: " . $expected . " | Function Result: ";
print_r($result);
if ($result == $expected) echo " | Pass";
else echo " | Error";
echo "<br><br>";