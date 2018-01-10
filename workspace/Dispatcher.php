<html>
	<head>
	    
		<title>Request </title>
	</head>
	

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
        echo "The following clients are requesting a cab:<br>";
        echo"<br>";
        $sql= 'SELECT * FROM custreq';
        $results= $db->query($sql);
        if($results->num_rows>0){
            echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Current Location</th>
                <th>Destination</th>
                <th>Pick Up Time</th>
                <th>Number Of Individuals</th>
                <th>Requested Drive</th>
                <th>Accept/Decline</th>
            </tr>";
            while($row=$results->fetch_assoc()){
              echo "<tr>
                        <td> ". $row["cust_id"] ."</td>
                        <td>". $row["name"]."</td>
                        <td>".$row["contact"]."</td>
                        <td>". $row["currentlocationloc"]."</td>
                        <td>".$row["destination"]."</td>
                        <td>". $row["timeofpickup"]."</td>
                        <td>". $row["numtravel"]."</td>
                        <td>". $row["driverrequest"]."</td>".
                       "<td>
                       <form action='driver.php' method='post'>
                             Driver ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                             <input type= 'text' name='drvid'><br>
                             <input type = 'hidden' name = 'custid' value='".$row["cust_id"]."'>
                             Travel Stamp:&nbsp&nbsp
                             <input type='text' name='jc'><br>
                             <input type= 'submit' name='price' value='Accept'>

                       </form>
                       <form method='post'>
                       <input type= 'submit' value='Decline'>
                       </form>
                       </td>"
                    ."</tr>";
            }
            echo "</table>";
        
        }

        
		?>
	</body>




</html>