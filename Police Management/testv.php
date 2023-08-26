
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
        $a=$_POST['vid'];
        $b=$_POST['model'];
        $c=$_POST['patrol_route'];
        $d=$_POST['sid'];
       


        $sql_query="INSERT INTO vehicle(vid,model,patrol_route,sid)
        values('$a','$b','$c','$d');";
        
        if (mysqli_query($conn, $sql_query)){
            header("Location: http://localhost:8080/hr5/testinsertvehicle.php");
            //echo "New Customer added";
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
}
elseif(isset($_POST['selectdet'])){
    
    $l = $_POST['vid'];

    $q1=  " select * from vehicle where vid = '$l';";
    $result1=mysqli_query($conn,$q1);

    
		if(mysqli_affected_rows($conn)>0)
		{
			while($row=mysqli_fetch_array($result1))
			{
				echo "<br/> Vehicle ID: "  .$row['vid'];
				echo "<br>Model: " .$row['model'];
                echo "<br>patrol_route: " .$row['patrol_route'];	
                echo "<br>sid: " .$row['sid'];				
				

				
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