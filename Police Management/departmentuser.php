<body>

<div class="headtop">
<h3 >Departments Database</h3>

<ul class="uplis">

  <li class="lis"><a href="userhomepage.html" class="a">Home</a></li>
 

</ul>

</div>
<center>

        <table class="content-member">
          <thead>
            <tr class="name-row">
              <th>Department ID</th>
              <th>Department Name</th>
              <th>Station ID</th>
              

            


            </tr>
          </thead>
          <tbody>
          <?php 
                require 'connection\connection.php';
                $query = $conn->query("SELECT * FROM `department`");
                while($row = $query->fetch_array()) 
                {
                    ?>
                    <tr>
                        <td classs="edit"><?php echo $row['dept_id'];?></td>
                        <td classs="edit"> <?php echo $row['dept_name'];?> </td>
                        <td classs="edit"> <?php echo $row['sid'];?> </td>
                        
                       <?php $sid = $row['dept_id']; ?>
                        
                        <!-- <button type="button" name='edit' class='edit-member'><a href="delete1.php?">Delete</a></button>
                        </td> - -->
                        <!-- <td class="edit-save">
                          <button type="button" name='edit' class='edit-member'><a href="update.php">Edit</a></button>
                        </td>
                        </tr> -->
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
  left:44.4%;
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