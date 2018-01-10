<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    $id=                $_POST['id'];
    $name=              $_POST['dvn'];
    $trn=               $_POST['trn'];
    $email=             $_POST['email'];
    $address=           $_POST['address'];
    $contact=           $_POST['number'];
    $make=              $_POST['carmake'];
    $model=             $_POST['carmodel'];
    $year=              $_POST['cy'];
    $colour=            $_POST['cc'];
    $licenseplate=      $_POST['lp'];
    
    
    $sql= "INSERT INTO drvinfo (id,name,trn,email,address,contact,make,model,year,colour,licenseplate) VALUES ('$id','$name','$trn','$email','$address','$contact','$make','$model','$year','$colour','$licenseplate')";
    $db -> query($sql) or die("I could not send to database lol ".$db->error);
    $newURL = 'https://swen-electroheart.c9users.io/Admin.html';
    header('location:'.$newURL);
    
    echo " SELECT * FROM drvinfo";
    
    
?>