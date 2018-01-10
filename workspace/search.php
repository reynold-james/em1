<!DOCTYPE html>
<html> 
        <head>
            <h1>Driver Search</h1>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>

        <style>
        body {
                background-color: #efefef;
        }
                
        </style>
        
<nav> 
	<ul>
  <li><a href="Homepage.html">Home</a></li>
  <li><a href="Admin.html">Administration</a></li>
</ul>

</nav>


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
                $sr = $_POST['search_id'];
                $result= $db->query("SELECT * FROM drvinfo WHERE id = '$sr'");
                if($result->num_rows>0){
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
                while($row=$result->fetch_assoc()){
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
            
    } else {
        echo "Driver does not exist in database";
    }
                ?>
               




</body>
</html>
