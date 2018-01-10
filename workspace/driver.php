<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Drivers</title>
    </head>
    
    <nav> 
			<ul>
  				<li><a href="Homepage.html">Home</a></li>
  				<li><a href="Dispatcher.html">Dispatcher</a></li>
		</ul> 
    <body>
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
    //include '/Admin.php';
    $d_id = $_POST['drvid'];
    $c_id = $_POST['custid'];

    echo "Your Driver and their Details:<br>";
    echo "<br>";
    //$sql='SELECT name, contact,make, model, year, colour, licenseplate FROM drvinfo";
    $update = $db->query("UPDATE custreq SET driver_id = '$d_id' WHERE cust_id='$c_id'");
    $results= $db->query("SELECT * FROM drvinfo WHERE id = '$d_id'");
    if($results->num_rows>0){
            echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Car Make</th>
                <th>Car Model</th>
                <th>Car Year</th>
                <th>Car Colour</th>
                <th>License Plate</th>
            </tr>";
                while($row=$results->fetch_assoc()){
              echo "<tr>
                        <td> ".$row["id"]."</td>
                        <td> ". $row["name"] ."</td>
                        <td>". $row["contact"]."</td>
                        <td>".$row["make"]."</td>
                        <td>". $row["model"]."</td>
                        <td>".$row["year"]."</td>
                        <td>".$row["colour"]."</td>
                        <td>".$row["licenseplate"]."</td>
                        
            </tr>";}
             echo "</table>";
    }else{
        echo "Driver does not exist in database";
    }
    ?>
    </body>
</html>