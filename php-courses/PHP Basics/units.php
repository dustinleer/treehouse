<?php

// Number in pounds we want to conver to kilograms
$pounds = 140;
// Floating point value for the pund to kilogram coversion
$lbs_to_kg = 0.453592;
// Use the variables above to calculate pounds multiplies by the kilogram conversion
$kilograms = $pounds * $lbs_to_kg;
// Display the pounds to kilograms
echo "Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo " kg";

// Number in miles we want to convert to kilometers
$miles = 2.5;
// Floating point value for the mile to kilometers coversion
$mile_to_km = 1.60934;
// Use the variable above to calculate mile multiplied by the kilomete conversion
$kilometers = $miles * $mile_to_km;
// Display the miles to kilometers
echo "Distance: ";
echo $miles;
echo " miles = ";
echo $kilometers;
echo " km";
?>