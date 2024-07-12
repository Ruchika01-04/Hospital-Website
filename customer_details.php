<?php
    $con=new mysqli("localhost","root"," ","customer_details");

    //TO FETCH DATA

    $result=$con->query("SELECT * FROM customer_details ");

    //TO DISPLAY THE DATA
    foreach ($result as $value)
    {
        echo $value['Name'];
        echo $value['Phn'];
        echo $value['Email'];
        echo $value['Message'];
    }
?>