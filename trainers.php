<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
     <style type="text/css">* {cursor: url(http://cur.cursors-4u.net/cursors/cur-2/cur117.cur), auto !important;}</style>
        
      
<link rel="icon" href="http://www.i2clipart.com/cliparts/1/d/d/5/clipart-icon_cube_red-512x512-1dd5.png" type="image/x-icon"/>
<script type="text/javascript">
var rev = "fwd";
function titlebar(val)
{
var msg = "ADMIN";
var res = "F ";
var speed = 100;
var pos = val;
msg = "ADMIN";
var le = msg.length;
if(rev == "fwd"){
if(pos < le){
pos = pos+1;
scroll = msg.substr(0,pos);
document.title = scroll;
timer = window.setTimeout("titlebar("+pos+")",speed);
}

else{
rev = "bwd";
timer = window.setTimeout("titlebar("+pos+")",speed);
}
}

else{
if(pos > 0){
pos = pos-1;
var ale = le-pos;
scrol = msg.substr(ale,le);
document.title = scrol;
timer = window.setTimeout("titlebar("+pos+")",speed);
}
else{
rev = "fwd";
timer = window.setTimeout("titlebar("+pos+")",speed);
}
}
}

titlebar(0);
</script>
	<title> Trainers </title>
  <style>
               
                body
                {text-align:center;
                background-image: url("https://wallpapercave.com/wp/wp2757874.gif");
                    }
                    P {
                      color:#F23634;
                font-size:25px;
                    }


             </style>
</head>
<body>
<div class="container">
<div class="row">

<table border="2" style='border-style: solid; background-color:#0017191e; margin-left:25%;margin-top:3%; margin-right:30%; width:50%;height:50%; border-color:#17191e; font-weight: bold; color:white;'>
<p> TRAINERS </p>
<thead>
    <tr>
      <th scope="col">Trainer Name</th>
      <th scope="col">Trainer Surname</th>
      <th scope="col">Trainer Year</th>
      <th scope="col">Trainer IQ</th>
      <th scope="col">Trainer E-mail</th>
     
    </tr>
  </thead>
  <tbody>

<?php
    include ("config.php");

    $sql = "SELECT * FROM trainers";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0 ) {

    while($row = mysqli_fetch_assoc($result)){

  
  
      echo "<tr>";
    
      echo "<td>" .$row["tr_name"]."</td>";
      
      echo "<td>" .$row["tr_lastname"]."</td>";
      
      echo "<td>" .$row["tr_year"]."</td>";
      
      echo "<td>" .$row["tr_iq"]."</td>";   

      echo "<td>" .$row["tr_email"]."</td>";  
      echo "</tr>";
      
      }
}


?>
</tbody>
</table>
</body>
</html>