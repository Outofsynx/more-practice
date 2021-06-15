<?php
    include ("config.php");

    $sql = "DELETE FROM courses WHERE id_courses='$_GET[id]'";

    if (mysqli_query($conn, $sql))
    header ("refresh:2; url=courses.php");
    echo "<h6>Deleted</h6>";

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