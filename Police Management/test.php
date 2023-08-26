
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="test";

$conn = mysqli_connect($servername,$username,$password,$database_name);
//echo "Test";
if(!$conn)
{
    die("Connection Failed:" . mysqli_error());
}
if(isset($_POST['Enter']))
{
        //echo "Inside";
        $a=$_POST['pid'];
        $b=$_POST['pname'];
        $c=$_POST['address'];
        $d=$_POST['position'];
        $e=$_POST['did'];
        $f=$_POST['dob'];
        $g=$_POST['sid'];



        $sql_query="INSERT INTO police(pid,pname,address,position,did,dob,sid)
        values('$a','$b','$c','$d','$e','$f','$g');";
        
        if (mysqli_query($conn, $sql_query)){
            header("Location: http://localhost:8080/hr5/testinsertpolice.php");
            
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
}
elseif(isset($_POST['selectdet'])){
    
    $l = $_POST['pid'];

    $q1=  " select * from police where pid = '$l';";
    $result1=mysqli_query($conn,$q1);

    
		if(mysqli_affected_rows($conn)>0)
		{
			while($row=mysqli_fetch_array($result1))
			{
				echo "<br/> Police ID: "  .$row['pid'];
				echo "<br>Police Nmae: " .$row['pname'];				
				echo "<br/>Address: ".$row['address'];
				echo "<br/>Position: ".$row['position'];
				echo "<br/>Department Id: ".$row['did'];
				echo "<br/Dob: ".$row['dob'];
                echo "<br/Sid: ".$row['sid'];

				
			}
				
		}
		else
		{
			echo 'Data is not found ...!!';
		}
}
elseif(isset($_POST['delete'])){
       
}
    
?>