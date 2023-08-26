<!DOCTYPE html>
<html lang="en">
<style>
    *{
        margin:0;
        padding:0;
    }
    td{
     
     border: 1px solid black;
     border-radius:5px;
     background-color: white;
     color:black;
     justify-content: center;
     text-align: center ;
     padding: 1% 2%;
     width: 80px;
     padding-left:40px;
     padding-right:40px;
     font-family: Verdana, Geneva, Tahoma, sans-serif;
 }
 th{
     border: 1px solid black;
     border-radius:5px;
     padding:20px;
     background-color: rgb(19, 80, 172);
     color: white;
    font-family:verdana;
 }
 .uplis{
  display:flex;
  position:relative;
  left:37.1%;

}
.a{
  text-decoration:none;
  padding:10px;
}
.lis{
  position:relative;
  list-style: none;
  border:2px solid white;
  font-size:18px;
  border-radius:20px;
  padding-left:20px;
  padding-right:20px;
  margin:14px;
  background:white;
  color: rgb(19, 80, 172);
}
.headtop{
    text-align: center;
font-size: 35px;
background-color: rgb(19, 80, 172);
padding: 30px;
color: white;
font-family: Verdana, Geneva, Tahoma, sans-serif;

}
body{
    overflow-x:hidden;
}
</style>
<body>
<center>
<div class="tab">
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="test";
if(isset($_POST['enter'])){
    $a = $_POST['pid'];
    $sql1 = "DELETE FROM police where pid='$a';";
    $conn = mysqli_connect($servername,$username,$password,$database_name);
    //echo "Test";
    if(!$conn)
    {
        die("Connection Failed:" . mysqli_error());
    }
    if ($conn->query($sql1) === TRUE)
    {   echo'
        <body>
<div class="headtop">
<h3 >Police Database After Deletion</h3>

<ul class="uplis">

  <li class="lis"><a href="adminhomepage.html" class="a">Home</a></li>
  <li class="lis"><a href="police.php" class="a">Police Database</a></li>
  

</ul>

</div>';echo '<br>';
        
        echo '<br>';
        $sql2 = "SELECT * from police ";
        $result = $conn->query($sql2);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Police ID</th><th>Police Name</th><th>Address</th><th>Position</th><th>Department ID</th><th>Date of Birth</th><th>Station ID</th></tr>";
        while($row = $result->fetch_assoc())
         {
                echo "<br>";
        echo "<tr>
        <td>" . $row["pid"]. "</td
        ><td>" . $row["pname"]    . "</td>
        <td>". $row["address"]. "</td>
        <td>" .$row["position"] . "</td>
        <td>" .$row["did"] . "</td> 
        <td>" .$row["dob"] . "</td>
        <td>" .$row["sid"] . "</td>
        </tr>";
        }
        echo "</table>";
        } 
        else 
        { echo "0 results"; }
    }
    else
    {
        echo 'Data is not deleted ...!!';
    } 
}

elseif(isset($_POST['enter1'])){
    $a = $_POST['prisoner_id'];
    $sql3 = "DELETE FROM prisoner where prisoner_id='$a';";
    $conn = mysqli_connect($servername,$username,$password,$database_name);
    //echo "Test";
    if(!$conn)
    {
        die("Connection Failed:" . mysqli_error());
    }
    if ($conn->query($sql3) === TRUE)
    {
        echo'
        <body>
<div class="headtop">
<h3 >Prisoner Database After Deletion</h3>

<ul class="uplis">

  <li class="lis"><a href="adminhomepage.html" class="a">Home</a></li>
  <li class="lis"><a href="prison.php" class="a">Prisoner Database</a></li>
  

</ul>

</div>';echo '<br>';

        $sql4 = "SELECT * from prisoner ";
        $result = $conn->query($sql4);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Prisoner ID</th><th> Prison ID</th><th>Prisoner Name</th><th>IN DATE</th><th>OUT DATE</th><th>CRIME</th><th>Arrest Police ID</th><th>Station ID</th></tr>";
        while($row = $result->fetch_assoc())
         {
                echo "<br>";
        echo "<tr><td>" . $row["prisoner_id"]. "</td><td>" . $row["prison_id"]    . "</td><td>". $row["prisoner_name"]. "</td><td>" .$row["in_date"] . "</td><td>" .$row["out_date"] . "</td> <td>" .$row["crime"] . "</td> <td>" .$row["arrest_pid"] . "</td> <td>" .$row["sid"] . "</td></tr>";
        }
        echo "</table>";
        } 
        else 
        { echo "0 results"; }
    }
    else
    {
        echo 'Data is not deleted ...!!';
    } 
}


elseif(isset($_POST['enter2'])){
    $a = $_POST['sid'];
    $sql5 = "DELETE FROM station where sid='$a';";
    $conn = mysqli_connect($servername,$username,$password,$database_name);
    //echo "Test";
    if(!$conn)
    {
        die("Connection Failed:" . mysqli_error());
    }
    if ($conn->query($sql5) === TRUE)
    {echo'
        <body>
<div class="headtop">
<h3 >Station Database After Deletion</h3>

<ul class="uplis">

  <li class="lis"><a href="adminhomepage.html" class="a">Home</a></li>
  <li class="lis"><a href="station.php" class="a">Station Database</a></li>
  

</ul>

</div>';echo '<br>';
        $sql6 = "SELECT * from station ";
        $result = $conn->query($sql6);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Station ID</th><th>Location</th><th>Station Head</th></tr>";
        while($row = $result->fetch_assoc())
         {
                echo "<br>";
        echo "<tr>
        <td>" . $row["sid"]. "</td>
        <td>" . $row["location"] . "</td>
        <td>" . $row["pid_head"] . "</td>
        </tr>";
        }
        echo "</table>";
        } 
        else 
        { echo "0 results"; }
    }
    else
    {
        echo 'Data is not deleted ...!!';
    } 
}



elseif(isset($_POST['enter3'])){
    $a = $_POST['vid'];
    $sql7 = "DELETE FROM vehicle where vid='$a';";
    $conn = mysqli_connect($servername,$username,$password,$database_name);
    //echo "Test";
    if(!$conn)
    {
        die("Connection Failed:" . mysqli_error());
    }
    if ($conn->query($sql7) === TRUE)
    {echo'
        <body>
<div class="headtop">
<h3 >Vehicle Database After Deletion</h3>

<ul class="uplis">

  <li class="lis"><a href="adminhomepage.html" class="a">Home</a></li>
  <li class="lis"><a href="vehicle.php" class="a">Vehicle Database</a></li>
  

</ul>

</div>';echo '<br>';
        $sql8 = "SELECT * from vehicle ";
        $result = $conn->query($sql8);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Vehicle ID</th><th>Model</th><th>Patrol Route</th><th>Station ID</th></tr>";
        while($row = $result->fetch_assoc())
         {
                echo "<br>";
        echo "<tr>
        <td>" . $row["vid"]. "</td>
        <td>" . $row["model"] . "</td>
        <td>" . $row["patrol_route"]. "</td>
        <td>" . $row["sid"]. "</td>
        </tr>";
        }
        echo "</table>";
        } 
        else 
        { echo "0 results"; }
    }
    else
    {
        echo 'Data is not deleted ...!!';
    } 
}





elseif(isset($_POST['enter4'])){
    $a = $_POST['dept_id'];
    $sql9 = "DELETE FROM department where dept_id='$a';";
    $conn = mysqli_connect($servername,$username,$password,$database_name);
    //echo "Test";
    if(!$conn)
    {
        die("Connection Failed:" . mysqli_error());
    }
    if ($conn->query($sql9) === TRUE)
    {  echo'
        <body>
<div class="headtop">
<h3 >Department Database After Deletion</h3>

<ul class="uplis">

  <li class="lis"><a href="adminhomepage.html" class="a">Home</a></li>
  <li class="lis"><a href="department.php" class="a">Department Database</a></li>
  

</ul>

</div>';echo '<br>';
        $sql10 = "SELECT * from department ";
        $result = $conn->query($sql10);
        if ($result->num_rows > 0) {
        // output data of each row
        echo "<table><tr><th>Department ID</th><th>Department Name</th><th>Station ID</th></tr>";
        while($row = $result->fetch_assoc())
         {
                echo "<br>";
        echo "<tr>
        <td>" . $row["dept_id"]. "</td>
        <td>" . $row["dept_name"] . "</td>
        <td>" . $row["sid"] . "</td>
  
        </tr>";
        }
        echo "</table>";
        } 
        else 
        { echo "0 results"; }
    }
    else
    {
        echo 'Data is not deleted ...!!';
    } 
}

?>

</div>
</center>

</body>

</html>



