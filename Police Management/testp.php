
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
        $a=$_POST['prisoner_id'];
        $b=$_POST['prison_id'];
        $c=$_POST['prisoner_name'];
        $d=$_POST['in_date'];
        $e=$_POST['out_date'];
        $f=$_POST['crime'];
        $g=$_POST['arrest_pid'];
        $h=$_POST['sid'];
    



        $sql_query="INSERT INTO prisoner(prisoner_id,prison_id,prisoner_name,in_date,out_date,crime,arrest_pid,sid)
        values('$a','$b','$c','$d','$e','$f','$g','$h');";
        
        if (mysqli_query($conn, $sql_query)){
            header("Location: http://localhost:8080/hr5/testinsertprison.php");
            //echo "New Customer added";
        }
        else {
            echo "Error: " . $sql . "" . mysqli_error($conn); 
        }

        mysqli_close($conn);   
 
}
elseif(isset($_POST['selectdet'])){
    
    $l = $_POST['prisoner_id'];

    $q1=  " select * from prisoner where prisoner_id = '$l';";
    $result1=mysqli_query($conn,$q1);

    
		if(mysqli_affected_rows($conn)>0)
		{
			while($row=mysqli_fetch_array($result1))
			{
				echo "<br/> PRISONER ID: "  .$row['prisoner_id'];
				echo "<br>PRISON ID: " .$row['prison_id'];
                echo "<br>PRISONER NAME: " .$row['prisoner_name'];				
				echo "<br/>IN DATE: ".$row['in_date'];
				echo "<br/>OUT DATE: ".$row['out_date'];
				echo "<br/>CRIME: ".$row['crime'];
				echo "<br/>ARREST ID: ".$row['arrest_pid'];
                echo "<br/>STATION ID: ".$row['sid'];


				
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