<?php
// User-defined function to calculate the sum of two numbers
function addNumbers($a, $b) {
    return $a + $b; // Using the '+' operator
}

// System-defined function to display the array structure
function displayArrayStructure($array) {
    echo "<pre>";
    print_r($array); // Using the 'print_r' system-defined function
    echo "</pre>";
}

// Data structure - an associative array
$sampleData = array(
    "first_number" => 10,
    "second_number" => 20
);

// Using the user-defined function
$sum = addNumbers($sampleData["first_number"], $sampleData["second_number"]);
echo "The sum of the numbers is: " . $sum . "<br>";

// Using the system-defined function
displayArrayStructure($sampleData);
?>
