<!DOCTYPE html>
<html> 
        <head>
                
                <header><h1 id="Heading"> Customer Receipt</h1>
                <link rel="stylesheet" type="text/css" href="style.css">
                </header>

        </head>

        <style>
        body {
                background-color: #efefef;
        }
                
        </style>

<nav> 
	<ul>
  <li><a href="Homepage.html">Home</a></li>
  <li><a href="Customer.html">Request Another Taxi!</a></li>
</ul>

</nav>
<body>
         
   
                <p>Driver details: <?php 
                 $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
   
    $custreq_id = $_GET['id'];
    $sql = $db->query("SELECT * FROM custreq WHERE cust_id= '$custreq_id'");
    $result = $sql->fetch_assoc();
    //print_r($result);
    $driver_id = $result['driver_id'];
 
    $newquery = $db->query("SELECT * FROM drvinfo WHERE id = '$driver_id'");
    
                if($newquery->num_rows>0){
            echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Car Make</th>
                <th>Car Model</th>
                <th>Car Colour</th>
                <th>License Plate</th>
                <th> </th>
                
                
            </tr>";
                while($row=$newquery->fetch_assoc()){
              echo "<tr>
                        <td> ".$row["id"]."</td>
                        <td> ". $row["name"] ."</td>
                        <td>". $row["contact"]."</td>
                        <td>".$row["make"]."</td>
                        <td>". $row["model"]."</td>
                        <td>".$row["colour"]."</td>
                        <td>".$row["licenseplate"]."</td>
                        <td>".$row["lasttravelstamp"]."</td>
            </tr>";}
            
             
    }
                ?></p>




</body>
</html>
