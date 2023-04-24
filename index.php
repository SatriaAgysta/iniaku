<?php
    if(isset($_POST["submit"])) {
        if($_POST["username"] == "anonim" && $_POST["password"] == "??" ){
            header("Location: tampilan.php");
        }else{
            $eror = true;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="p-3 mb-2 bg-dark">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card " style="width: 18rem;">
            <div class="card-body ">
            <h2 class="card-title d-flex justify-content-center">Login</h2><br>
                <form action="" method="post">
                    <label for="">Username</label>
                    <input type="text" name="username" id="" autocomplete="off" class="form-control" placeholder="Input username" aria-label="Username" aria-describedby="basic-addon1">

                    <label for="">Password</label>
                    <input type="password" name="password" id="" autocomplete="off" class="form-control" placeholder="Input passsword" aria-label="Username" aria-describedby="basic-addon1">
                <br>
            
            <div class="d-grid gap-2">
                <button class="btn btn-dark" type="submit" name="submit">Confirm</button>
            
        </form>
            <?php if(isset($eror)) { ?>
            <p>harap isi sesuai yang diperintahkan!</p>
            <?php } ?>
    </div>
</div>
</div>
</body>
</html>