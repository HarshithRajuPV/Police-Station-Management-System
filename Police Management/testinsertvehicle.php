<!DOCTYPE html>
<head>
</head>
<style>
     *{
        margin: 0;
        padding: 0;
        font-family:verdana;
    }
    body{
      background: #eefdff;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      overflow-x:hidden;
    }
 
    input[type=text],input[type=date], select {
  width: 120%;
  padding: 6px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #479;
  border-radius: 6px;
  box-sizing: border-box;
  
}
span{
    font-size:20px;
    

}
.insertlist{
    width:400px;
}

    .leftside{
        position:absolute;
        border-radius:20px;
        left:32%;
        padding:50px;
        
    }
    .btn{
        border-radius:10px;
        padding:10px;
        font-size:18px;
        padding-left:15px;
        padding-right:15px;
        background-color: rgb(19, 80, 172);
        color:white;
    }
   
    .headtop{
    text-align: center;
font-size: 35px;
background-color: rgb(19, 80, 172);
padding: 30px;
color: white;
font-family: Verdana, Geneva, Tahoma, sans-serif;

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
.insertlist{
    width:400px;
  
}
</style>
<body>

<div class="headtop">
<h3 >Vehicle Database Insertion</h3>

<ul class="uplis">

  <li class="lis"><a href="adminhomepage.html" class="a">Home</a></li>
  <li class="lis"><a href="vehicle.php" class="a">Vehicle Database</a></li>
  

</ul>

</div>
<div class="leftside">
        <form action="testv.php" method="post">
            <Label>
                <span>Vehicle ID:</span><input type="text" name="vid"><br><br>
                <span>Model:</span><input type="text" name="model"><br><br>
                <span>Patrol Route:</span><input type="text" name="patrol_route"><br><br>
                <span>Station ID:</span><input type="text" name="sid"><br><br>
<center>
                <button name="Enter" class="btn" onclick='alert("Inserted Successfully")'>Submit</button>
                </center>
            </Label>
        </form>
        
    </div>
    
</body>