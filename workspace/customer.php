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

    $name=      $_POST  ['g2-name'];
    $num=       $_POST  ['g2-contactnumber'];
    $curloc=    $_POST  ['g2-currentlocation'];
    $dest=      $_POST  ['contact-form-comment-g2-destination'];
    $ttp=       $_POST  ['g2-timeofpickup'];
    $numtravel= $_POST  ['g2-numberofpersonstraveling'];
    $dr=        $_POST  ['g2-specialdriverrequest'];
    
    
    $sql= "INSERT INTO custreq (name,contact,currentlocationloc,destination,timeofpickup,numtravel,driverrequest) VALUES ('$name',$num,'$curloc','$dest','$ttp','$numtravel','$dr')";
    $db -> query($sql) or die("I could not send to database lol ".$db->error);
    $request_id = $db->insert_id;
    $newURL = 'https://swen-electroheart.c9users.io/Custrec.php?id='.$request_id;
    header('Location: '.$newURL);
?>