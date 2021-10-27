<html>
<head>
<title>Php Crud</title>
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        
        <h2 style="text-align:center; margin-top:20px">Information Table</h2>
        
        
        <div class="row justify-content-centere">
        <table class="table">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>action</th>
                    <td><a href="form.php" class="btn btn-success">+</a></td>
                </tr>
            </thead>
          
    <?php            
        $connect= mysqli_connect('localhost','root','','php_crud');
        $result = $connect->query("select * from crudtable");   
        
        $num = 1;
        while($row = mysqli_fetch_assoc($result)):
    ?>
    <tr>
        <td><?php echo $num;?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['lastname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phonenumber'];?></td>
        <td>
            <a href="form.php?edit=<?php echo $row['id'];?>"
            class="btn btn-info">Edit</a>
            <a href="delete.php?delete=<?php echo $row['id'];?>"
            class="btn btn-danger" >X</a>
        </td>
    </tr>
    
        <?php 
            $num+=1;
            endwhile;
        ?>
        </table>
    </div>

</div>
    
    </div>

  
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.3.1/dist/js/bootstrap.bundle.js"></script>
</body>
</html>


