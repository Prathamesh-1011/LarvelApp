<?php

// Function to print a left-sided inverted star triangle
function printLeftSidedInvertedStarTriangle($height) {
    // Loop to iterate through each row
    for ($i = $height; $i >= 1; $i--) {
        // Loop to print stars for the current row
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        // Move to the next line for the next row
        echo "\n";
    }
}

// Define the height of the left-sided inverted triangle
$height = 5;

// Call the printLeftSidedInvertedStarTriangle function
printLeftSidedInvertedStarTriangle($height);

?>



