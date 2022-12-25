<?php

/*

$db = "Database";

// Normal
echo "connect $db";
echo "<br>";

// problem1
echo "Problem1: connect $dbPd" ; //error or not found $dbPd = connect
echo "<br>";

// solv1
echo "Solve1: connect {$db}Pd";
echo "<br>";

// problem2
echo 'Problem2: connect {$db}Pd'; // find it all to string = Problem: connect {$db}Pd /
echo "<br>";

//solv2
echo 'Solve2: connect '.$db.'Pd';

*/

// defind variable to conncext database
$DB_HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'basic1_crud';

try{ // try detect connection
    $conn = new PDO("mysql: host={$DB_HOST};
                        dbname={$DB_NAME};
                        charset=utf8",
                        $DB_USERNAME,
                        $DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {    //detect error
    echo "Failed connect Database" . $e->getMessage(); 
    exit();
}

// print_r($conn);


?>