
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="test";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_error());
}
if(isset($_POST['Enter']))
{
       
        $a=$_POST['sid'];
        $b=$_POST['location'];
        $c=$_POST['pid_head'];

       


        $sql_query="INSERT INTO station(sid,location,pid_head)
        values('$a','$b','$c');";
        
        if (mysqli_query($conn, $sql_query)){
            header("Location: http://localhost:8080/hr5/testinsertstation.php");
            
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
}
elseif(isset($_POST['selectdet'])){
    
    $l = $_POST['sid'];

    $q1=  " select * from station where sid = '$l';";
    $result1=mysqli_query($conn,$q1);

    
		if(mysqli_affected_rows($conn)>0)
		{
			while($row=mysqli_fetch_array($result1))
			{
				echo "<br/> Station ID: "  .$row['sid'];
				echo "<br>Location: " .$row['location'];
                echo "<br>Station Head: " .$row['pid_head'];					
				

				
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