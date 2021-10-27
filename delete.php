<?php 
    $user = 'root';
    $password = '';
    $db = 'php_crud';
    $host = 'localhost';
    $connection=mysqli_connect($host,$user,$password,$db);

    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        // echo $id;
        $mysql="DELETE FROM `crudtable` WHERE id=$id";
        if (mysqli_query($connection, $mysql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error: <br>" . mysqli_error($connection);
        }
        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";

        header("location:index.php");
       
    }
?>