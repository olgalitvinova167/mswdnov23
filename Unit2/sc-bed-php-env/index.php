<?php

$myName = 'Olga';
$mySurname = 'Litvinova';

echo $myName;
echo $mySurname;

//The . is used for concatenation
echo '<p>My name is ' . $myName . '</p>';

//Variable interpolation
echo "<p>My surname is $myName</p>";

// HEREDOC String
$shortStory = <<<STORY
<p>There once was a man</p>
STORY;
echo $shortStory;

// Fun with data types
$anInt = 42;
echo "<p>The value is $anInt, type is " . gettype($anInt) .'</p>';

$afloat = 42.21;
echo "<p>The value is $afloat, type is " . gettype($afloat) .'</p>';

$country = 'Malta';
echo "<p>The value is $country, type is " . gettype($country) .'</p>';

$isRaining = true;
echo "<p>The value is $isRaining, type is " . gettype($isRaining) .'</p>';

// Using Arrays (Enumerative)
$names = ['Valentino', 'Olga'];
echo '<p> Name of Students:</p>';
print_r($names);

// Constants
define('PI',3.14159);
echo '<p>Approximate value of PI is ' . PI . '</p>';

const L = 6.02e23;
echo '<p>Approximate Avogardo constant: '. L .'</p>';

// Functions
function greetUser($name)
{
    return "Hello there, $name!";
}

echo '<p>' . greetUser('Keith') . '</p>';
echo '<p>' . greetUser('Oksana') . '</p>';

// Using printf
$animal ='fox';
printf('%s Did you know that the quick brown %s jumps over the lazy %s', greetUser('Keith'), $animal, 'dog');

$cartTotal = 89.6592;
printf('<p>Total is in your cart: €%.2f</p>', $cartTotal);

$student1 = 4;
$student2 = 32;
$student3 = 168;
printf('<p>Student 1: %03d, Student 2: %03d, Student 2: %03d,', $student1, $student2, $student3);

// Variable inspection
$sampleArray = ['Joe', 12, 11.23, true, new stdClass()];
echo "<p>The first item in the array is $sampleArray[0]. </p>";

echo '<p>Viewing the entire array with print_r():</p>';
print_r($sampleArray);

echo '<p>Viewing all details with var_damp():</p>';
var_dump($sampleArray);

// Checking if a variable exists
$firstVar = 100;
$secondVar = null;
echo '<p>First variable: ' . (isset($firstVar) ? 'Is Set':'Not Set') .'</p>';
echo '<p>Second variable: ' . (isset($secondVar) ? 'Is Set':'Not Set') .'</p>';
echo '<p>Third variable: ' . (isset($thirdVar) ? 'Is Set':'Not Set') .'</p>';