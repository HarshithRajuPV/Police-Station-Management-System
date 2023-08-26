<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    body{
        overflow-x:hidden;
        background: #eefdff;
    }
  .headtop{
    text-align: center;
font-size: 35px;
background-color: rgb(19, 80, 172);
padding: 20px;
color: white;
font-family: Verdana, Geneva, Tahoma, sans-serif;

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
    font-size:25px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.leftside{
        position:absolute;
        border-radius:20px;
        left:38%;
        padding:50px;
        top:38%;
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
   
</style>
<body>
<div class="headtop">
<h3 >Prisoner Database Deletion</h3>

<ul class="uplis">

  <li class="lis"><a href="adminhomepage.html" class="a">Home</a></li>
  <li class="lis"><a href="prison.php" class="a">Prisoner Database</a></li>
 
</ul>
</div>
<div class="leftside" >
    <form action="delete.php" method="post">
        <span>Prisoner ID:</span> <br>
        <input type="text" name="prisoner_id"> <br>
        <center>
        <button name="enter1" class="btn">Delete</button>
        </center>
    </form>
    </div>
</body>
</html>