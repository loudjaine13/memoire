<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des patient</title>
</head>
<body>
     <?php include "siteflex.html"
     ?>
     <?php

    $servername = "localhost" ;
    $username ="root" ;
    $password ="" ;
    $dbname ="test" ;

    $conn = mysqli_connect($servername, $username ,  $password , $dbname);
    if($conn->connect_error) {
        die("can't connect to MYSQL");
    }

    $sql ="SELECT * FROM patient";
    $result = $conn->query($sql);
    $conn->close();
     ?>

     <?php
    while($row = $result->fetch_assoc()) {
        echo $row['id'] ;
        echo $row['name'] ;
        echo $row['medecin_T'] ;
        echo $row['num_dossier'] ;
        echo  "<br/>";
           }

     ?>
</body>
</html>