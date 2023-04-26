<?php

include('connect.php');



if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $pnumber = $_POST['pnumber'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

$sql = "SELECT * FROM doctorReg WHERE  username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if($result){
    $num = mysqli_num_rows($result);

    if($num > 0){
        echo "ready to add customer";
    }else{
      
        if($password === $cpassword){
            $sql = "INSERT INTO doctorReg(id, fname, mname, lname, username, pnumber, gender, password, cpassword) VALUES('$id', '$fname', '$mname', '$lname', '$username', '$pnumber', '$gender', '$password', '$cpassword')";
    
            $result = mysqli_query($conn, $sql);


            if($result){
                ;
                header('location:login.php');
            }

        }

        else{
            echo "password do not match";
        }
    
        
    
    }
}

   


}



?>


    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Register Form</title>
        <style>
            body {
                background: grey;
                padding: 0;
                margin: 0;
                background-image: url(./pic/img3.jpg);
            }
            
            .main {
                background: black;
                border-bottom: 2px solid white;
            }
            
            form {
                margin-top: 10px;
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
                margin-top: 5px;
                font-size: 15px;
                padding: 6px;
                width: 70%;
            }
            
            form label {
                margin-top: 10px;
                font-size: 15px;
                font-weight: bold;
            }
        </style>

    </head>

    <body>

        <div class="main">
            <h1 style="color: wheat;">
                <center>REGISTRATION</center>
            </h1>
        </div>



        <form action="dregister.php" method="POST">
            <label for="">Id Number</label><br>
            <input type="number" name="id" placeholder="Identification Number" required><br>
            <label for="">First Name</label><br>
            <input type="text" name="fname" placeholder="Leise" required><br>
            <label for="">Middle Name</label><br>
            <input type="text" name="mname" placeholder="Leslie" required><br>
            <label for="">Last Name</label><br>
            <input type="text" name="lname" placeholder="Isaac" required><br>
            <label for="create Username"></label><br>
            <input type="text" name="username" placeholder="Create Username" required><br>
            <label for="">Phone Number</label><br>
            <input type="number" name="pnumber" placeholder="0743496140" required><br> Male:
            <input type="radio" name="gender" value="male"><br> Female: <input type="radio" name="gender" value="female" required><br>
            <label for="">Password</label><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <label for="">Confirm Password</label><br>
            <input type="password" name="cpassword" placeholder="Confirm Password" required><br>
            <input type="submit" name="submit">

        </form>
    </body>

    </html>