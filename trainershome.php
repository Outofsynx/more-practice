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
	<title> Trainers ADD </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div  style='margin-left:40%;margin-top:10%;  font-weight: bold; color:white;' class="container">
        <div class="row">
            <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <div class="form-group">
                <label >Trainer Name
                <input type="text" pattern="[A-Za-z]{3,15}"class="form-control" name="trname" required>
                </label>
            </div>
            <div class="form-group">
                <label>Trainer Surname
                <input type="text" pattern="[A-Za-z]{3,15}" class="form-control" name="trsur" required>
                </label>
            </div>
            <div class="form-group">
                <label>Trainer's Start Year
                <input type="date" min="1970-01-01" max="2020-01-01" class="form-control" name="try" required>
                </label>
            </div>

            <div class="form-group">
                <label>Trainer IQ
                <input type="number" pattern="\d" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    maxlength = "3" class="form-control" name="triq" min="50" max="100" required>
                </label>
            </div>
            <div class="form-group">
                <label>Trainer E-mail
                <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" class="form-control" name="trinf" required>
                </label>
            </div>
        
            <button type="submit" class="btn btn-danger" name="submit">ADD TRAINER</button>
            </form>

        <?php 

        if (isset($_POST["submit"])){

            include ("config.php");
            $trname = $_POST["trname"];
            $trsur = $_POST["trsur"];
            $triq = $_POST["triq"];
            $try = $_POST["try"];
            $trinf = $_POST["trinf"];

            $sql = "INSERT INTO trainers (`tr_name`, `tr_lastname`, `tr_iq`, `tr_year`, `tr_email`)
             VALUES  ('$trname', '$trsur', '$triq', '$try', '$trinf') ";

             $result = $conn -> query($sql);
             echo "<h6>New trainer added!</h6>";
        }

        ?>

        </div>

        <div class="row pt-4">
        
        <form method="POST" action="trainers.php">
            <button type="submit" class='btn btn-danger'> ALL TRAINERS </button>
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