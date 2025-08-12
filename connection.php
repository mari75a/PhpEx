<?php

$host = "localhost" ;
$user = "root";
$password = "200301403251A";
$db_name ="db1";

$db = mysqli_connect($host, $user, $password);

$db_selected = mysqli_select_db($db, $db_name);

if(!$db){
    die("Connection failed: " . mysqli_connect_error());
}

    $sql="SELECT * FROM user";
    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result)>0){

        while($row = mysqli_fetch_assoc($result)){
            echo "ID : " . $row["id"] . "<br>";
            echo "Name : " . $row["name"] . "<br>";
        }

    }
    echo mysqli_info($db);
    die("Database connection successful");


?>