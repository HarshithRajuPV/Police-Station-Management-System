
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
        $a=$_POST['dept_id'];
        $b=$_POST['dept_name'];
        $c=$_POST['sid'];

       


        $sql_query="INSERT INTO department(dept_id,dept_name,sid)
        values('$a','$b','$c');";
        
        if (mysqli_query($conn, $sql_query)){
            header("Location: http://localhost:8080/hr5/testinsertdepartment.php");
            //echo "New Customer added";
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
}
elseif(isset($_POST['selectdet'])){
    
    $l = $_POST['dept_id'];

    $q1=  " select * from department where sid = '$l';";
    $result1=mysqli_query($conn,$q1);

    
		if(mysqli_affected_rows($conn)>0)
		{
			while($row=mysqli_fetch_array($result1))
			{
				echo "<br/> Department ID: "  .$row['dept_id'];
				echo "<br>Department Name: " .$row['dept_name'];
                echo "<br>Station ID: " .$row['sid'];			
				

				
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