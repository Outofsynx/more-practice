<!DOCTYPE html>
<html>
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
		<style>
						
						body
						{text-align:center;
						background-image: url("https://wallpapercave.com/wp/wp2757874.gif");
							}
		
		



				</style>
<head>
	<title> Search Students</title>
	<link href="style.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<header>
	<table border="2" style='border-style: solid; background-color:#0017191e; margin-left:25%;margin-top:3%; margin-right:30%; width:50%;height:50%; border-color:#0017191e; font-weight: bold; color:white;'>
	<div class="container">
	<div class="row">
		<form method="POST" action="searchstudents.php"> 
		<div class="form-group">
		<input style='margin-left:25%;margin-top:10%; width:170%;height:80%; margin-right:30%;' type="text" placeholder="Student Lastname" name="ysearch">
		</div>
			<input style='margin-left:20%;margin-top:1%;' class='btn btn-danger' value="🔍" type="submit" name="submit" value="search"/>
		</form>
		</div>
		<div class="row">
		<?php 
			if (isset($_POST["submit"])) {
				
				include("config.php");
			
				

				$searchvalue=$_POST["ysearch"];
				
				$sql ="SELECT * FROM students WHERE student_lastname ='$searchvalue'  ";
				
				$result = mysqli_query($conn,$sql);
				
				
				
				while($row = mysqli_fetch_array($result)) {

					echo "<tr>";
					echo "<th>Student Name</th>";
					echo "<th>Student Surname</th>";
					echo "<th>Student GPA </th>";
					echo "<th>Student Country</th>";
					echo "<th>Student Birthday</th>";
					echo "<th>Student E-mail</th>";
					
					echo "</tr>";
				
					echo "<tr><form action=updatestudents.php method=post>";
    
					echo "<td><input type='text' pattern='[A-Za-z]{3,15}' required name=sname value='" .$row['student_name']."'></td>";
				
					echo "<td><input type='text' pattern='[A-Za-z]{3,15}' required name=slname value='" .$row['student_lastname']."'></td>";
					
					echo "<td><input type='number' pattern='\d' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);'
                    maxlength = '3'  min='1' max='100' required name=sgpa value='" .$row['student_gpa']."'></td>";
				
					echo "<td> <input type='text' pattern='[A-Za-z\s]{3,15}' required name=scou value='" .$row['student_country']."'></td>";

					echo "<td> <input type='date' min='1995-01-01' max='2002-01-01' required name=sbirth value='" .$row['student_birthday']."'></td>";

					echo "<td><input type='email' pattern='[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$' required name=sinfo value='" .$row['student_info']."'></td>";

					echo "<input type=hidden name=ids value='" .$row['id_student']."'></td>";

			
				echo "<td><input type=submit class='btn btn-danger' value='Update'>";
				
				echo "<td><a class='btn btn-danger' href=deletestudents.php?id=".$row['id_student'].">Delete</a></td>";
				echo "</form></tr>";
				echo "</div>";
				
				}
				
				
			}
		
		?>
	</div>
	</div>	
	</table>
	</header>


</body>
</html>
