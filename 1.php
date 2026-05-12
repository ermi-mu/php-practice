<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <<h1>my first php page</h1>
    <?php
        echo "hello world";
        echo "<br>";
        $sum = 5 + 10;
        echo "the sum of 5 and 10 is: " . $sum;
        echo "<br>";

        if ($sum > 10) {
            echo "the sum is greater than 10";
        } else if ($sum == 10) {
            echo "the sum is equal to 10";
        } else {
            echo "the sum is less than 10";
        }
    ?>
</body>
</html>