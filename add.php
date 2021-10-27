<?php
    if(isset($_POST["submit"])){

        $connect= mysqli_connect('localhost','root','','php_crud');
        

        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $lastname = $_POST["lastname"];
        $phonenumber = $_POST["phonenumber"];
    
        $sql = "INSERT INTO crudtable(id, name, lastname, email, phonenumber) VALUES ('$id','$name','$lastname','$email','$phonenumber')";
        $result = $connect->query($sql);
        if($result){
            header("location:index.php");
        }else{
            echo "error";

        }

    }

?>