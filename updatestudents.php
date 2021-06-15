<?php
    include ("config.php");

    $sql = "UPDATE students SET student_name='$_POST[sname]', student_lastname='$_POST[slname]',student_gpa='$_POST[sgpa]',student_country='$_POST[scou]',student_birthday='$_POST[sbirth]', student_info='$_POST[sinfo]' WHERE id_student=$_POST[ids]";
 

    if (mysqli_query($conn, $sql))
    header ("refresh:2; url=students.php");
    echo "<h6>Updated</h6>";


    ?>

<style>
                    h6 {
                    text-align:center;
                    margin-top:3%;
                    margin-left:20%;
                    margin-right:20%;
                    color:red;
                    font-size:25px;


                }

                body{
                text-align: center;
                background-image: url("https://wallpapercave.com/wp/wp2757874.gif");
                }
                </style>