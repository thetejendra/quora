<?php 
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection Failed due to ".mysqli_connect_error()):
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = INSERT INTO `quora`.`signup` (`name`, `email`, `password`, `date`) VALUES ('$name', '$email', '$password', current_timestamp()); 
if($con->query($sql) == true){
    // echo"successfully inserted";
    $insert = true;
}else{
    echo"error :$sql <br> $con->error";
}
$con->close();
}
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

<style>
.container{
 padding: 23px;
 background-color: aquamarine;  
 box-sizing: border-box; 
}
.container h1{
    justify-content: center;
    text-align: center;
}
.container input{
    display: flex;
    outline: none;
    width: 80%;
    margin: auto;
    margin: 23px;
    font-size: 16px;
    border-radius: 6px;
    box-sizing: border-box;
}
.container button{
    color: white;
    background-color: red;
    display: flex;
    outline: none;
    cursor: pointer;
    margin: auto;
    font-size: 20px;
    border-radius: 6px;
    box-sizing: border-box;
    justify-content: center;
    text-align: center;
}
</style>    
</head>
<body>
    <div class="container">
        <h1>SignUp</h1>
    <form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <input type="password" name="password" id="password" placeholder="Enter your password">
    <button type="submit">Submit</button>

    </div>
    </form>
</body>
</html>