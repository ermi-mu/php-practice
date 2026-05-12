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
        // welcome to php programming
        echo "hello world";
        echo "<br>";

        // sum of two numbers
        $sum = 5 + 10;
        echo "the sum of 5 and 10 is: " . $sum;
        echo "<br>";
        // if condition
        if ($sum > 10) {
            echo "the sum is greater than 10";
        } else if ($sum == 10) {
            echo "the sum is equal to 10";
        } else {
            echo "the sum is less than 10";
        }

        echo "<br>";

        // for loop with different syntax
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

        // foreach loop array
        $names = ["abebe","kebede","chala"];
        foreach ($names as $name){
            echo '<h3> '.$name.'</h3>';
        } 

        // while loop
        $counter = 0;
        while ($counter < 10) {
            echo '<h3>the counter is: ' . $counter . '</h3>';
            $counter++;
        }

        // do while loop
        echo "<br>";
        $counter = 0;
        do {
            echo '<h3>the counter is: ' . $counter . '</h3>';
            $counter++;
        } while ($counter < 10);

        echo "<br>";
        
        // function definition and call
        function add($a, $b) {
            return $a + $b;
        }
        echo "the sum of 5 and 10 is: " . add(5, 10);

        // index array
        $students = ["abebe","kebede","chala"];
        echo $students[0]; // abebe
        $students[1] = "tadesse"; // change kebede to tadesse
        for($i=0; $i < count($students); $i++){
            echo '<h3> the student is: '.$students[$i].'</h3>';
        }
        //assosiative array
        $students = ["abebe","kebede","chala"];
        $age = array("abebe" => 20, "kebede" => 22, "chala" => 21);
        echo "the age of abebe is: " . $age["abebe"];
        $age["abebe"]= 25; // change abebe's age to 25

        $students= array("name"=>"ermias", "age"=>22 , "dept"=>"software engineering");
        foreach($students as $key => $value){
            echo '<h3> the '.$key.' is: '.$value.'</h3>';
        }
        // multidimensional array
        $student =array(
            array("ermias ",22," software"."<br>"),
            array("dawit ",21," software"."<br>"),
            array("ebba ",20," software"."<br>")
            );
        for($i=0; $i<3; $i++){
            for($j=0; $j<3; $j++){
                echo $student[$i][$j];
            }
        }
        echo "<br>";
        $student =array(
            array("name"=>"ermias","age"=>22,"dept"=>"software"),
            array("name"=>"dawit","age"=>21,"dept"=>"software"),
            array("name"=>"ebba","age"=>20,"dept"=>"software")
            );
        foreach($student as $row){
            echo '<h3>name = '.$row['name'].'<br></h3>';
            echo '<h3>age = '.$row['age'].'<br></h3>';
            echo '<h3>dept = '.$row['dept'].'<br><br></h3>';
        }
    ?>
</body>
</html>