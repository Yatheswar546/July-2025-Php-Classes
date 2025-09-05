<?php

    // PHP - PHP:Hypertext Preprocessor
    // PHP is an acronym for "PHP: Hypertext Preprocessor"
    // PHP is a widely-used, open source scripting language
    // PHP scripts are executed on the server
    // PHP is free to download and use
    // It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
    // It is deep enough to run large social networks!
    // It is also easy enough to be a beginner's first server side language!

    // Uses of PHP:
    // PHP can generate dynamic page content
    // PHP can create, open, read, write, delete, and close files on the server
    // PHP can collect form data
    // PHP can send and receive cookies
    // PHP can add, delete, modify data in your database
    // PHP can be used to control user-access
    // PHP can encrypt data

    // Why PHP?
    // PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
    // PHP is compatible with almost all servers used today (Apache, IIS, etc.)
    // PHP supports a wide range of databases
    // PHP is free. Download it from the official PHP resource: www.php.net
    // PHP is easy to learn and runs efficiently on the server side

    //////// Print Statements ////////
    echo "Hello World 1 <br>";
    print("<h6>Hello World 2</h6> <br>");
    print_r("Hello World 3 <br>");

    //////// Variables ////////
    $_name = "SaiNavadeep";
    echo $_name."<br>";
    echo "<br>";

    $x1 = 10;
    echo $x1."<br>";

    $fname = "Vinod";
    echo $fname."<br>";

    // $5age // unaccepted

    //////// Data Types ////////
    // 1. String
    echo "<h3> String Datatype </h3>"."<br>";

    // String Methods
    $fname = "Vinod";
    $lname = "Gadaputi";

    echo $fname."<br>";
    echo $lname."<br>";
    echo $fname." ".$lname."<br>";

    $a = "Hello World"."<br>";
    echo $a;
    echo strpos("Hello World", "World")."<br>";

    echo strtoupper($a)."<br>";
    echo strtolower($a)."<br>";
    echo str_replace("World", "Everyone", $a);

    echo substr($a, 0, 5)."<br>";
    echo substr($a, 6);

    // 2. Number
    echo "<h3> Number Datatype </h3>"."<br>"; 
    $num = 10987;
    echo $num;

    // 3. Float
    echo "<h3> Float Datatype </h3>"."<br>"; 
    $float = 345.7651;
    echo $float;

    //////// Conditional Statements ////////
    echo "<h3> Conditional Statements </h3>"."<br>";

    $a = 5;
    $b = 10;

    if($a>10){
        echo "Yes, a is greater than 10";
    }
    elseif($b>10){
        echo "Yes, b is greater than 10";
    }
    else{
        echo "Either a or b is equal to 10";
    }

    echo "<br>";

    $day = 9;
    switch($day){
        case 1:
            echo "Sunday"; 
            break;
        case 2:
            echo "Monday";
            break;
        case 3:
            echo "Tuesday";
            break;
        case 4:
            echo "Wednesday";
            break;
        case 5:
            echo "Thursday";
            break;
        case 6:
            echo "Friday";
            break;
        case 7:
            echo "Saturday";
            break;
        default:
            echo "Wrong input";
            break;
    }

    //////// Loops ////////
    echo "<h3>Loops</h3>"."<br>";

    echo "while loop"."<br>";
    $num = 5;
    while($num!=0){
        echo $num."<br>";
        $num = $num - 1;
    }

    echo "<br>";

    echo "do-while loop"."<br>";
    $num = 0;
    do{     
        echo $num."<br>";
        $num = $num+1;
    }while($num!=5);

    echo "<br>";

    echo "for loop"."<br>";
    for($x=0; $x<=10; $x+=1){
        echo $x." ";
    }

    echo "<br>";

    echo "for each"."<br>";
    $numbers = [1,2,3,4,5,8,7,6,"name",6.78];
    $numbers1 = array(1,2,3,4,5);

    for($i=0; $i<5; $i++){
        echo $numbers[$i];
    }

    foreach($numbers as $x){
        echo $x."<br>";
    }

    var_dump($numbers);
    echo "<br>";
    var_dump($fname);
    echo "<br>";
    var_dump($num);
    echo "<br>";
    var_dump($float);
    echo "<br>";

    //////// Arrays ////////
    echo "<h3>Arrays</h3>"."<br>";
    $students = array("Naga Harsha", "Vinod", "Krishna", "Iswar Sahu", "Neeraj");
    print_r($students);
    echo "<br>";
    foreach($students as $name){
        echo $name." ";
    }

    echo "<br>";

    // Types of Arrays
    // 1. Indexed Array
    // 2. Associative Array (key, value)
    // 3. Multidimensional Array

    echo "Types of Arrays"."<br>";
    echo "Indexed Arrays"."<br>";
    $students = array("Naga Harsha", "Vinod", "Krishna", "Iswar Sahu", "Neeraj");
    print_r($students);
    for($i=0; $i<5; $i++){
        echo $students[$i]." ";
    }
    echo $students[0]."<br>";

    echo "<br>";

    echo "Associative Array"."<br>";
    $cars = array(
        "brand" => "Ford",
        "model" => "ALTO",
        "year"  => 2017
    );
    echo $cars["year"]."<br>";
    echo $cars["model"]."<br>";

    foreach($cars as $x => $y){
        echo $x." ".$y."<br>";
    }

    echo "<br>";

    echo "Multidimensional Array"."<br>";
    $cars = array(
        array("Ford", 2017),         // 0
             //  0      1
        array("Volvo", 2020),        // 1
             //  0       1
        array("Land Rover", 2024)    // 2
            //     0         1
    );
    var_dump($cars);
    echo "<br>";
    print_r($cars);
    echo "<br>";

    echo $cars[1][0]."<br>";
    echo $cars[2][1]."<br>";

    foreach($cars as $x => $y){
        echo $x;
    }
    echo "<br>";
    foreach($cars as $x => $y){
        // echo $y;
        // print_r($y);
        // var_dump($y);
        // echo "<br>";
    }

    for($row=0; $row<3; $row++){
        for($col=0; $col<2; $col++){
            echo $cars[$row][$col]."<br>";
        }
        // print_r($cars[$row]);
        echo "<br>";
    }

    //////// Functions ////////
    echo "<h3>Functions</h3>";

    echo "<br>";

    // Non-Parameterized
    function message(){
        echo "Hello, I am a Non-Parameterized Function"."<br>";
        return "I am returning statement"."<br>";
    }

    message();
    $msg = message();
    echo $msg;

    echo "<br>";

    // Parameterized
    function addNumbers($a,$b){
        // echo $a + $b;
        $res = $a + $b;
        return $res;
    }

    addNumbers(4,5);
    $res = addNumbers(4,5);
    echo $res;

?>