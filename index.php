<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 15</title>
</head>
<body>
    <?php
        // Task 2: Variable Declaration and Data Types
        $string = "Steven Howard";
        $integer = 13;
        $boolean = true;

        echo "<h2>Task 2: Variable Declaration and Data Types </h2>";

        echo "string value is " . $string . " , integer value is " . $integer . " , boolean value is " . $boolean;
        
        echo "<hr>";

        
        
        // Task 3: Conditionals
        echo "<h2>Task 3: Conditionals </h2>";

        if($integer > 10){
            echo "Yes";
        }
        else{
            echo "No";
        }
        
        echo "<hr>";

        // Task 4: Loops
        echo "<h2>Task 4: Loops</h2>";

        // *For Loop
        echo "<h3>*For Loop</h3>";
        for($i = 1; $i <=5; $i ++){
            echo $i;
        }

        echo "<br>";

        // *While Loop
        echo "<h3>*While Loop</h3>";
        $ii = 5;
        while($ii > 0){
            echo $ii;
            $ii--;
        }

        echo "<hr>";

        // Task 5: Arrays
        echo "<h2>Task 5: Arrays</h2>";

        // *Indexed Array
        echo "<h3>*Indexed Array</h3>";
        $array = ["Kambing", "Baka", "Itik"];
        echo $array[0];

        echo "<br>";

        // *Associative Array
        echo "<h3>*Associative Array</h3>";
        $Info = array(
            "name" => "John Doe",
            "age" => 25,
            "city" => "My City"
        );

        echo $Info["name"];

        echo "<hr>";

        // Task 6: Functions
        echo "<h2>Task 6: Functions</h2>";

        // *Create a Function
        function sum($a,$b){
            return $a+$b;
        }

        // *Function Call
        echo sum(10,5);

        echo "<hr>";
       
    ?>
    
        <!-- Task 7: Form Handling (Bonus) -->
        <h2>Task 7: Form Handling (Bonus)</h2>
        <form method="post" action="process.php">
            <label for="name">Enter your name:</label>
            <input type="text" name="name" id="name" required>
            <button type="submit">Submit</button>
        </form>
</body>
</html>