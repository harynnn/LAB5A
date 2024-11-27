<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
        // Function to calculate the area of a rectangle
        function calculateArea($width, $length) {
            return $width * $length;
        }
        $width = 4;
        $length = 2;

        // Call the function and store the result
        $area = calculateArea($width, $length);
    ?>

    <p><strong>The area of a rectangle with a width of <?php echo $width; ?> and length of <?php echo $length; ?> is <?php echo $area; ?></strong>.</p>
</body>
</html>
