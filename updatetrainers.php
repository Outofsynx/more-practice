<?php
    include ("config.php");

    $sql = "UPDATE trainers SET tr_name='$_POST[trname]',tr_lastname='$_POST[trlast]',tr_year='$_POST[tryear]',tr_iq='$_POST[triq]',tr_email='$_POST[trinf]' WHERE id_trainers=$_POST[ids]";
 

    if (mysqli_query($conn, $sql))
    header ("refresh:2; url=trainers.php");
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