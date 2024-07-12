<?php
    $con=new mysqli("localhost","root"," ","burnout master");

    //TO FETCH DATA

    $result=$con->query("SELECT * FROM burnout master ");

    //TO DISPLAY THE DATA
    foreach ($result as $value)
    {
        echo $value['Name'];
        echo $value['Phn'];
        echo $value['Email'];
        echo $value['Message'];
    }
?>