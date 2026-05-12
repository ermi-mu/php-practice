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

        echo "<br>";

        for($counter = 0 ; $counter < 5; $counter++) {
            echo '<h1>the counter is: ' . $counter . '</h1>';
        }
        for($counter = 0 ; $counter < 5; $counter++) {
            ?>
            <h1>the counter is: <?php echo $counter; ?></h1>
            <?php
        }
        for($counter = 0 ; $counter < 5; $counter++) {
            ?>
            <h1>the counter is: <?= $counter; ?></h1>
            <?php
        }
        for($counter = 0 ; $counter < 5; $counter++):
            ?>
            <h1>the counter is: <?= $counter; ?></h1>
            <?php endfor
        echo "<br>";
        $names = ["abebe","kebede","chala"];
        foreach ($names as $name){
            echo '<h3> '.$name.'</h3>';
        } 
    ?>
</body>
</html>