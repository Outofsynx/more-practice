<?php
    include ("config.php");

    $sql = "UPDATE courses SET 	c_name='$_POST[cname]', c_disc='$_POST[cdisc]',c_cost='$_POST[ccost]' WHERE id_courses=$_POST[ids]";
 

    if (mysqli_query($conn, $sql))
    header ("refresh:2; url=courses.php");
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