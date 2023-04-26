<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <style>
        body {
            background-image: url(./pic/img5.jpg);
            background-size: cover;
            margin: 0px;
            padding: 0px;
        }
        
        form {
            margin-top: 0px;
            padding: 0px;
            padding-left: 10px;
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
        
        .header #logo {
            width: 50px;
            padding: 5px;
            margin: 5px;
        }
        
        form input {
            margin-top: 5px;
            font-size: 20px;
            padding: 5px;
            width: 90%;
            outline: none;
        }
        
        form label {
            margin-top: 25px;
            font-size: 20px;
            font-weight: bold;
        }
        
        .main {
            height: 70vh;
        }
        
        .footer {
            border-radius: 10px;
            background: black;
            height: 30vh;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="come.html"><img src="pic/logo.png" id="logo" alt=""></a>


    </header>

    <main class="main">

        <h1>
            <center>CONTACT US</center>
        </h1>


        <form action="">
            <label for="">Username</label><br>
            <input type="text" name="username" placeholder="Enter Username"><br>
            <label for="">Phone Number</label><br>
            <input type="number" name="pnumber" placeholder="Phone Number"><br>
            <label for="">Email</label><br>
            <input type="email" name="email" placeholder="Enter Email"><br>
            <label for="">Subject</label><br>
            <select name="" style="width: 93%; font-size: 20px;">
                <option value="">select subject...</option>
                <option value="inquiry">Inquiry</option>
                <option value="emergency">Emergency</option>
                <option value="physician">Physician</option>
                </select><br>
            <label for="">Message</label><br>
            <textarea name="message" cols="50" rows="5" placeholder="Enter message" style="outline: none; "></textarea><br>

            <input type="submit" name="submit" style="width: 57%; margin-bottom: 10px; margin-left: 20%;">


        </form>

    </main>


    <!-- footer section -->

    <footer class="footer">
        <div class="social">
            <ul>
                <li><a href="#">facebook</a></li>
                <li><a href="#">twitter</a></li>
                <li><a href="#">instagram</a></li>
                <li><a href="#">linkedin</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>