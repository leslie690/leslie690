<?php

include('connect.php');


if(isset($_POST['register'])){
    $idno = $_POST['idno'];
    $name = $_POST['name'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $doctor = $_POST['doctor'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    

    $sql = "SELECT * FROM appoint WHERE  name = '$name' AND doctor = '$doctor'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        $num = mysqli_num_rows($result);
    
        if($num > 0){
            echo "ready to add customer";
        }else{
          
            
            $sql = "INSERT INTO appoint(idno, name, time, date, doctor, phone, address) VALUES('$idno', '$name', '$time', '$date', '$doctor', '$phone', '$address')";
        
            $result = mysqli_query($conn, $sql);
    
    
            if($result){
                    echo "user added successfully";
             }
    
            
    
            else{
                echo "user already exists";
            }
        
            
        
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>appointment</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            transition: 2s;
            text-transform: capitalize;
            text-decoration: none;
        }
        
        html {
            font-size: 62.5%;
            overflow: hidden;
        }
        
        .header {
            justify-content: space-between;
            display: flex;
            padding: 1.5rem 7%;
            background-color: #070707;
            justify-content: space-between;
            align-items: center;
            left: 0;
            right: 0;
            z-index: 1000;
        }
        
        .header #logo {
            width: 50px;
        }
        
        .header .navbar a {
            color: #fff;
            font-size: 1.5rem;
            margin-left: 2rem;
            position: relative;
        }
        
        .header ul {
            display: flex;
        }
        
        .navbar a:after {
            content: '';
            background: #b9b7b9;
            width: 0;
            height: 3px;
            position: absolute;
            top: 100%;
            left: 0;
            margin-top: 5px;
            transition: 3s;
        }
        
        .navbar a:hover:after {
            content: '';
            background: #b9b7b9;
            width: 100%;
            height: 3px;
            position: absolute;
            top: 100%;
            left: 0;
            margin-top: 5px;
        }
        
        .icons div {
            font-size: 2rem;
            margin-right: 1rem;
            color: #fff;
            display: none;
        }
        
        .icons a {
            color: #fff;
            background: #b9b7b9;
            padding: 1.5rem 3rem;
            font-size: 1.5rem;
            border-radius: 10px;
        }
        
        .icons a:hover {
            background: transparent;
            border: 1px solid #b9b7b9;
        }
        
        .navbar-active {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
        
        .background-image {
            background: url(./pic/images.jpg);
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 6%;
            position: relative;
        }
        
        .background-content {
            position: absolute;
            top: 50%;
            width: 50%;
            transform: translate(-80);
        }
        
        .background-content h1 {
            color: black;
            font-size: 40px;
            text-align: center;
        }
        
        .background-content p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        
        .background-content a {
            background: #b9b7b9;
            padding: 1.5rem 3rem;
            border-radius: 15px;
            color: #fff;
            font-size: 1.5rem;
            transition: 5s;
        }
        
        .background-content a:hover {
            background: transparent;
            border: 1px solid #b9b7b9;
            color: black;
        }
        
        .about {
            padding: 3rem 7%;
        }
        
        .main.about {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .inner-about {
            flex: 1 1 45rem;
        }
        
        .inner-about.inner.about-image img {
            width: 100%;
        }
        
        .about-content {
            width: 80%;
        }
        
        .about-content h1 {
            font-size: 40px;
            margin-bottom: 15px;
        }
        
        .about-content p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        
        .about.content a {
            background: #b9b7b9;
            padding: 1rem 3rem;
            font-size: 1.5rem;
            color: #fff;
            transition: 5s;
        }
        
        .about-content a:hover {
            background: transparent;
            border: 1px solid #b9b7b9;
            color: black;
        }
        
        .services {
            padding: 5rem 7%;
        }
        
        .services-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 50px;
        }
        
        .left-service-content {
            flex: 1 1 45rem;
        }
        
        .right-service-content {
            flex: 1 1 45rem;
        }
        
        .left-service-content h1 {
            font-size: 40px;
            margin-bottom: 15px;
        }
        
        .left-service-content p {
            font-size: 1.5rem;
        }
        
        .right-service-content .right-btn a {
            padding: 1.5rem 3rem;
            font-size: 2rem;
            color: #fff;
            background: #b9b7b9;
        }
        
        .right-service-content .right-btn a:hover {
            border: 1px solid #b9b7b9;
            background: transparent;
            color: black;
        }
        
        @media(max-width:767px) {
            html {
                font-size: 55%;
            }
            .header {
                padding: 2rem;
            }
            .icons div {
                display: initial;
            }
            .navbar {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                height: 100vh;
                background: #b9b7b9;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
            }
            .navbar a {
                display: block;
                font-size: 2rem;
                font-weight: bold;
                margin: 1rem;
                padding: 1rem;
                color: blue;
            }
            .background-content {
                width: 100%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding-left: 5rem;
            }
            .inner-about.inner.about-image img {
                margin-top: 20px;
            }
            .doc-icons {
                position: absolute;
                bottom: 0;
            }
            .doc-icons div {
                font-size: 2rem;
                color: #070707;
                background: #fff;
                border: 1px solid black;
                margin: left 2rem;
                width: 5rem;
                height: 5rem;
                line-height: 5rem;
                text-align: center;
            }
        }
        
        .form {
            margin-top: 10px;
            padding: 0;
            padding-left: 0px;
            border: 2px solid black;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
        }
        
        .form label {
            font-size: 20px;
            padding: 10px;
        }
        
        .class {
            background: gray;
            width: 100%;
        }
        
        .font input {
            font-size: 40px;
            padding: 10px;
            margin-left: 10px;
        }
        
        .table {
            margin-left: 10%;
            width: 80%;
            margin-top: 20px;
        }
        
        .table table {
            width: 100%;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="come.html"><img src="pic/logo.png" id="logo" alt=""></a>

        <nav class="navbar">
            <a href="./come.html">Home</a>
            <a href="about.html">About us</a>
            <a href="appoint.php">Appointment</a>
            <a href="doctor.php">Doctors</a>



        </nav>

        <div class="icons">
            <div id="menubar" class="fas fa-bars"></div>
            <a href="./contact.html">Contact</a>
        </div>
    </header>



    <h1>HomeCare System</h1>
    </div>

    <div class="form">
        <form action="appoint.php" method="POST">

            <div class="class"><label for="">Appointment Booking</label><br><br></div>



            <label for="">Id Number</label>
            <input type="number" name="idno" placeholder="Enter username" style="margin-left: 25px;"><br>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name" style="margin-left: 64px;"><br>
            <label for="">Time</label>
            <input type="time" name="time" placeholder="Time" style="margin-left: 70px;"><br>
            <label for="">Date</label>
            <input type="date" name="date" placeholder="Date" style="margin-left: 73px;"><br>
            <label for="">Doctor</label>
            <input type="text" name="doctor" placeholder="Doctor" style="margin-left: 55px;"><br>
            <label for="">Phone</label>
            <input type="number" name="phone" placeholder="Phone" style="margin-left: 60px;"><br>
            <label for="">Address</label>
            <input type="text" name="address" placeholder="Address" style="margin-left: 44px;"><br>
            <input type="submit" name="register"  style="margin-left: 30%; margin-top: 10px; margin-bottom: 10px; width: 30%;">
        </form>
    </div>


    <div class="table">
        <table style="border: 2px solid black;">

            <thead>
                <tr>
                    <th style="border: 1px solid black;">Id Number</th>
                    <th style="border: 1px solid black; ">Name</th>
                    <th style="border: 1px solid black;">Time</th>
                    <th style="border: 1px solid black;">Date</th>
                    <th style="border: 1px solid black;">Doctor</th>
                    <th style="border: 1px solid black;">Phone</th>
                    <th style="border: 1px solid black;">Address</th>

                </tr>
            </thead>
          
            <tbody>

                <?php
                
                $sql = "SELECT * FROM `appoint`";
                $result = mysqli_query($conn, $sql);

                if($result){

                    while($row = mysqli_fetch_assoc($result)){

                        $idno=$row['idno'];
                        $name=$row['name'];
                        $time=$row['time'];
                        $date=$row['date'];
                        $doctor=$row['doctor'];
                        $phone=$row['phone'];
                        $address=$row['address'];

                        echo '<tr>
                        <td style="border: 1px solid black;">'.$idno.'</td>
                        <td style="border: 1px solid black;">'.$name.'</td>
                        <td style="border: 1px solid black;">'.$time.'</td>
                        <td style="border: 1px solid black;">'.$date.'</td>
                        <td style="border: 1px solid black;">'.$doctor.'</td>
                        <td style="border: 1px solid black;">'.$phone.'</td>
                        <td style="border: 1px solid black;">'.$address.'</td>
                    </tr>';
                    }
                    
                }
                
                ?>

                


            </tbody>

            

        </table>
    </div>


</body>

</html>