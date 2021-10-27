<html>
<head>
<title>Php Crud</title>
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="row justify-content-center">

<?php
    if(isset($_GET["edit"])){

        $id =  $_GET["edit"];
        $connect= mysqli_connect('localhost','root','','php_crud');
        $result = $connect->query("select * from crudtable where id = '$id' "); 
        $ro = $result->fetch_assoc();

?>

<div class="col-md-5 mt-5">
    <form action="edit.php" method="Post">

        <div class="form-group">
            <input type="hidden"  value="<?php echo $ro['id']; ?>" name="id" class="form-control">
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text"  name="name" class="form-control" value="<?php echo $ro['name']; ?>" placeholder="enter the name">
        </div>

        <div class="form-group">
            <label>lastname</label>
            <input type="lastname" name="lastname" class="form-control" value="<?php echo $ro['lastname'];?>"placeholder="enter the lastname">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $ro['email'];?>"placeholder="enter the email">
        </div>

        <div class="form-group">
            <label>PhoneNumber</label>
            <input type="text" name="phonenumber" class="form-control" value="<?php echo $ro['phonenumber'];;?>" placeholder="enter the phone number">
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">back</a>
        </div>
    </form>
</div>

<?php
    }else{
?>

<div class="col-md-5 mt-5">
    <form action="add.php" method="Post">
        <div class="form-group">
            <input type="hidden" name="id" class="form-control">
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control"  placeholder="enter the name">
        </div>

        <div class="form-group">
            <label>lastname</label>
            <input type="lastname" name="lastname" class="form-control" placeholder="enter the lastname">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="enter the email">
        </div>

        <div class="form-group">
            <label>PhoneNumber</label>
            <input type="text" name="phonenumber" class="form-control" placeholder="enter the phone number">
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">back</a>
        </div>
    </form>
</div>

<?php
    }
?>

</div>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.3.1/dist/js/bootstrap.bundle.js"></script>
</body>
</html>


