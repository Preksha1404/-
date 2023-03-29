<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style0.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form method="POST" action="#">
        <!-- INSERT INTO `loginform` (`id`, `user`, `password`) VALUES (NULL, 'unnati', 'kavi@25'); -->
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    <?php
    if(isset($_POST['username'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
    //echo "Sucessfully connection";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql=INSERT INTO `loginform` (`id`, `user`, `password`) VALUES ('$id', '$username', '$password');
    echo $sql;

    if($con->query($sql)==true){
        echo "successfully inserted";
    }
    else{
        echo "error: $sql <br> $conn->error";
    }
    $con->close();
}
?>   


    // $db="demo";

    // mysql_select_db($db);

    // if(isset($_POST['username'])){
    //     $uname=$_POST['username'];
    //     $password=$_POST['password'];
    //     $sql="select * from loginform where user='".$uname."' AND '".$password."' limit 1";

    //     $result=mysql_query($sql);
    //     if(mysql_num_rows($result)==1){
    //         echo "You have succesfully logged in";
    //         exit();
    //     }
    //     else{
    //         echo "You have entered incorrect password";
    //         exit();
    //     }
    // }

</body>
</html>
