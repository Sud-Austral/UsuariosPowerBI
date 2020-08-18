<?php

    include("conectar.php");

    $u = ($_POST['user']);
    $p = ($_POST['pass']);

    $sql = "Select * From usuarios Where user='$u' AND pass='$p'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    if($row)
    {
        $a = $row["level"];

        if($a=="2018")
        {
            header("location: get.php?an=$a");
        }
        else if($a=="2019")
        {
            header("location: get.php?an=$a");
        }
        else if($a=="2020")
        {
            header("location: get.php?an=$a");
        }

        
    }


?>