<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Rectangle Area</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($length, $width) {
            return $length * $width;
        }

        // Example values for length and width
        $length = 2; // Replace with your value
        $width = 4;  // Replace with your value

        // Call the function and store the result
        $area = calculateArea($length, $width);

        // Display the result
        echo "The area of a rectangle with a width of $width and $length is $area.";
    ?>
</body>
</html>
