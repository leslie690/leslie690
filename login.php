<?php

include('connect.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM register WHERE  username = '$username' AND password = '$password' ";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);


    if($count==1){
        header('location:come.html');
    }
    else{
        echo "<script>
            alert('Login failed. Invalid username or password')
        
        </script>";
    }
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Login</title>
        <style>
            body {
                background: grey;
                padding: 0;
                margin: 0;
                background-image: url(./pic/img3.jpg);
            }
            
            .header {
                justify-content: space-between;
                display: flex;
                align-items: center;
                background: black;
                border-bottom: 2px solid white;
            }
            
            .main {
                background: black;
                border-bottom: 2px solid white;
            }
            
            .sign {
                background: black;
                margin-right: 10px;
                text-align: center;
                justify-content: center;
                align-items: center;
            }
            
            .sign ul {
                background: RED;
                border-top-right-radius: 20px;
                border-bottom-left-radius: 20px;
                border-top-left-radius: 20px;
                border-bottom-right-radius: 20px;
                align-items: center;
            }
            
            .sign ul li {
                list-style-type: none;
            }
            
            .sign ul li a {
                text-decoration: none;
                align-items: center;
                text-align: center;
                justify-content: center;
            }
            
            form {
                margin-top: 5px;
                padding: 10px;
                padding-left: 20px;
                border: 2px solid black;
                width: 30%;
                margin-left: auto;
                margin-right: auto;
                background: silver;
                border-top-right-radius: 20px;
                border-bottom-left-radius: 20px;
                border-top-left-radius: 20px;
                border-bottom-right-radius: 20px;
            }
            
            form input {
                margin-bottom: 20px;
                font-size: 15px;
                padding: 6px;
                width: 70%;
            }
            
            form label {
                margin-top: 20px;
                font-size: 15px;
                font-weight: bold;
            }
        </style>

    </head>

    <body>
        

            <div class="main">
                <h1 style="color: wheat;">
                    <center>LOGIN</center>
                </h1>
            </div>

            
        




        <form action="login.php" method="POST">
            <label for="">Username</label><br>
            <input type="text" name="username" placeholder="Enter Username" required><br>
            <label for="">Password</label><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="submit">
        </form>
    </body>

    </html>