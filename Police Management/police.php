

<body>

<div class="headtop">
<h3 >Police Database</h3>

<ul class="uplis">

  <li class="lis"><a href="adminhomepage.html" class="a">Home</a></li>
  <li class="lis"><a href="testinsertpolice.php" class="a"> Insert</a></li>
  <li class="lis"><a href="http://localhost:8080/hr5/deletep.php" class="a">Delete</a></li>

</ul>

</div>

<center>
        <table class="content-member">
         
            <tr class="name-row">
              <th>Police ID</th>
              <th>Police Name</th>
              <th>Address</th>
              <th>Position</th>
              <th>Department ID</th>
              <th >Date Of Birth</th>
              <th>Station ID</th>
        


            </tr>
         
          <tbody class="intab">
          <?php 
                require 'connection\connection.php';
                $query = $conn->query("SELECT * FROM `police`");
                while($row = $query->fetch_array()) 
                {
                    ?>
                    <tr>
                        <td classs="edit"><?php echo $row['pid'];?></td>
                        <td classs="edit"> <?php echo $row['pname'];?> </td>
                        <td classs="edit"> <?php echo $row['address'];?> </td>
                        <td classs="edit"> <?php echo $row['position'];?></td>
                        <td classs="edit"> <?php echo $row['did'];?></td>
                        <td classs="edit"> <?php echo $row['dob'];?>
                        <td classs="edit"> <?php echo $row['sid'];?></td><?php $pid = $row['pid']; ?>
                        
                       
                   <?php
                }
            ?>
            </tbody>
            </table>

              </center>
              
</body>
<style>
      *{
        margin:0;
        padding:0;
    }
    body{
      background: #eefdff;
      overflow-x:hidden;
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
.content-member{
  margin-top:40px;
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
.uplis{
  display:flex;
  position:relative;
  left:35.4%;
}

h3{
  text-align:center;
}
.a{
  text-decoration:none;
  padding:10px;
}

.headtop{
    text-align: center;
font-size: 35px;
background-color: rgb(19, 80, 172);
padding: 20px;
color: white;
font-family: Verdana, Geneva, Tahoma, sans-serif;

}

</style>