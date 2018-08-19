<?php
$weight_lb = 190;
$lb_to_kg = 0.453592;
$kg_to_lb = 2.20462;

$distance = 2;
$m_km = 1.60934;
$km_m = 0.621371;

$weight_in_kgs = $weight_lb * $lb_to_kg;

echo "Weight: $weight_lb lb\n";
echo "Weight: $weight_in_kgs kg\n";

$distance_in_kms = $distance * $m_km;

echo "Distance: $distance m\n";
echo "Distance: $distance_in_kms km\n"


?>