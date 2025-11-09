<?php
 
       
        $conn = mysqli_connect("localhost", "root", "", "test");
         
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         $id='0';
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];

        $password = $_REQUEST['password'];
        $id='0';
        $sql = "INSERT INTO registeration  VALUES ($id,'$name',
            '$email' ,'$password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        mysqli_close($conn);


        ?>