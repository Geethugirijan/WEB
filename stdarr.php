<?php
// Step 1: Create an array of student names
$students = array("John", "Alice", "Bob", "Charlie", "David");

// Step 2: Display the original array using print_r
echo "Original Student Names: ";
print_r($students);
echo "<br>";

// Step 3: Sort the array in ascending order using asort()
asort($students);
echo "Sorted (Ascending) Student Names: ";
print_r($students);
echo "<br>";

// Step 4: Sort the array in descending order using arsort()
arsort($students);
echo "Sorted (Descending) Student Names: ";
print_r($students);
echo "<br>";
?>

