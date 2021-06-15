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
input {
  border: 2px solid currentColor;

}
input:invalid {
  border: 2px dashed red;
}
input:invalid:focus {
  background-image: linear-gradient(#F23634, white);
}


              
                body
                {text-align:center;
                background-image: url("https://wallpapercave.com/wp/wp2757874.gif");
                    }


             </style>


<head>
	<title> Courses ADD </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div  style='margin-left:40%;margin-top:10%;  font-weight: bold; color:white;' class="container">
        <div class="row">
            <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <div class="form-group">
                <label >Course Name
                <input type="text" pattern="[A-Za-z\s]{9,20}"class="form-control" name="crname" required>
                </label>
            </div>
            <div class="form-group">
                <label>Course Discription
                <input type="text" pattern="[A-Za-z\s]{10,20}" class="form-control" name="crdis" required>
                </label>
            </div>
            <div class="form-group">
                <label>Course cost
                <input type="number" pattern="\d" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    maxlength = "4" class="form-control" name="crcost" min="500" max="1000" required>
                </label>
            </div>


            <button type="submit" class="btn btn-danger" name="submit">ADD COURSE</button>
            </form>

        <?php 

        if (isset($_POST["submit"])){

            include ("config.php");
            $crname = $_POST["crname"];
            $crdis = $_POST["crdis"];
            $crcost = $_POST["crcost"];
            
            $sql = "INSERT INTO courses (`c_name`, `c_disc`, `c_cost`)
             VALUES  ('$crname', '$crdis', '$crcost') ";

             $result = $conn -> query($sql);

             echo "<h6>New course added!</h6>";
        }

        ?>

        </div>

        <div class="row pt-4">
        
        <form method="POST" action="courses.php">
            <button type="submit" class='btn btn-danger'> ALL COURSES </button>
        </form>
        </div>


    </div>
</body>
<style>
    h6 {
                                text-align:center;
                                margin-top:3%;
                                margin-left:20%;
                                margin-right:20%;
                                color:red;
                                font-size:25px;
                                
                            }

                            </style>
</html>