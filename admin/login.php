<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Admin</title>
    <style>
        .container{
            margin-top:9%;
            width:30%;
        }
    </style>
</head>
<body>

    <div class="container">
        <h4 class="text-center"><a href="../masyarakat/login.php" style="color:black;">LOGIN</a></h4>
        <hr style="width:70%;">
        <form action="proses-login.php" method="POST">
            <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username!!">
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan Password!!">
            </div>
            <button class="btn btn-primary" type="submit">LOGIN</button>
            <button class="btn btn-danger" type="reset">RESET</button>
        </form>
    </div>

</body>
</html>
