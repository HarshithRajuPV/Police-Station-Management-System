<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    body{
        overflow-x:hidden;
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
  left:45%;
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
.abtp{
    
    font-size:20px;
    margin-top:20px;
    
}
.foots{
    float:bottom;
    background:rgb(19, 80, 172);
    padding: 30px;
    position: relative;
    top: 100px;
    text-align: center;
    font-size: 40px;
    color: white;
}
.foot1{
    font-size: 15px;
    margin-top: 10px;
}
</style>
<body>
    
<div class="headtop">
<h3 >About Us</h3>

<ul class="uplis">

  <li class="lis"><a href="userhomepage.html" class="a">Home</a></li>
 

</ul>

</div>
<p class="abtp">
Our project is a database management system for a police station. The system is designed to aid police station management by providing a centralized location for storing and managing important information. The system includes five main tables: police, department, prisoner, station, and vehicle. Each of these tables stores specific information that is essential for the efficient and effective management of a police station.
</p>
<p class="abtp">
The police table stores information about each police officer including their police id, name, address, position, department id, date of birth and the station id they are assigned to. This table is essential for the management of the police force as it allows users to easily view and manage the details of all police officers in the system.
</p>
<p class="abtp">
The prisoner table stores information about each prisoner including their prisoner id, name, prison id, in date, out date, crime committed, arrest police id and station id they are assigned to. This table is essential for the management of the prison as it allows users to easily view and manage the details of all prisoners in the system. It also tracks the in and out date for each prisoner, it will be important for the management to know when the prisoner entered and when they are expected to leave the prison.
</p>
<p class="abtp">
The station table stores information about each police station including the station id, location and head of the station. This table is essential for the management of the police stations as it allows users to easily view and manage the details of all police stations in the system. The table will also have the station head name, which will help in identifying who is in charge of the station.
</p>
<p class="abtp">
The vehicle table stores information about each vehicle including the vehicle id, model, patrol route, and station id they are assigned to. This table is essential for the management of the vehicles as it allows users to easily view and manage the details of all vehicles in the system. This table will help in keeping track of all the vehicles used by the police station, it will also help in knowing which vehicle is assigned to which station and the patrol route of the vehicle.
</p>
<p class="abtp">
The department table stores information about each department within the station including the department id, department name, and the station id they are assigned to. This table is essential for the management of the departments as it allows users to easily view and manage the details of all departments in the system. This table will also help in identifying which department belongs to which station.
</p>
<p class="abtp">
The system also includes a login page to ensure that only authorized personnel can access the database. The login page requires a user to enter their username and password, which will be verified against the system's database before granting access to the system's functionalities. The login page will also provide the option for users to reset their password if they have forgotten it.
</p>
<p class="abtp">
The homepage of the police station management system is the first screen that users will see after logging in. It will provide an overview of the current status of the system and will provide quick access to the most important functionalities such as adding or viewing records in tables. The homepage will be designed to be user-friendly and easy to navigate, allowing users to quickly and easily access the information they need.
</p>
<p class="abtp">
The system also include a feature of adding, updating and deleting data from tables which will help in maintaining the accurate records.
</p>
</div>
<div class="foots">Contact Us:
    <div class="foot1">Mail: police@gmail.com</div>
    <div class="foot1">Number: 9807854326</div>
    <div class="foot1">Address: #66, 7th cross, Bangalore-560001</div>
</div>

</body>
</html>