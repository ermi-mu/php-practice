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
            echo '<h3>the counter is: ' . $counter . '</h3>';
        }
        for($counter = 0 ; $counter < 5; $counter++) {
            ?>
            <h3>the counter is: <?php echo $counter; ?></h3>
            <?php
        }
        for($counter = 0 ; $counter < 5; $counter++) {
            ?>
            <h3>the counter is: <?= $counter; ?></h3>
            <?php
        }
        for($counter = 0 ; $counter < 5; $counter++):
            ?>
            <h3>the counter is: <?= $counter; ?></h3>
            <?php endfor;
        $names = ["abebe","kebede","chala"];
        foreach ($names as $name){
            echo '<h3> '.$name.'</h3>';
        } 

        $counter = 0;
        while ($counter < 10) {
            echo '<h3>the counter is: ' . $counter . '</h3>';
            $counter++;
        }
        echo "<br>";
        $counter = 0;
        do {
            echo '<h3>the counter is: ' . $counter . '</h3>';
            $counter++;
        } while ($counter < 10);

        echo "<br>";
        function add($a, $b) {
            return $a + $b;
        }
        echo "the sum of 5 and 10 is: " . add(5, 10);
    ?>
</body>
</html>