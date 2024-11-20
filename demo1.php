<?php
$numericArray = [5, 2, 8, 1, 3];
sort($numericArray); // Ascending
rsort($numericArray); // Descending
// Associative Array
$assocArray = [
    'Soham' => 21,
    'Om' => 25,
    'Akash' => 35,
    'Sarang' => 28
];
asort($assocArray); // Ascending by values
arsort($assocArray); // Descending by values

// Multidimensional Array
$multiArray = [
    ['name' => 'Soham', 'age' => 22],
    ['name' => 'Om', 'age' => 25],
    ['name' => 'Akash', 'age' => 35],
    ['name' => 'Sarang', 'age' => 28]
];
usort($multiArray, function ($a, $b) {
    return $a['age'] - $b['age'];
}); // Ascending by age
usort($multiArray, function ($a, $b) {
    return $b['age'] - $a['age'];
}); // Descending by age


print_r($numericArray);
print_r($assocArray);
print_r($multiArray);
