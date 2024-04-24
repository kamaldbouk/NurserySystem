<?php

    session_start();

    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $database = "project"; 
    $conn = new mysqli($servername, $username, $password, $database, "3308");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if ($role=="student"){
            $sql = "SELECT * FROM parent WHERE parentID = '$id' AND password = '$password'"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $_SESSION['id'] = $id; 
                header("Location: student.php"); 
                exit();
            } else {
                echo '<script type="text/javascript">
                window.onload = function () { alert("Invalid Username or Password"); } 
         </script>';             }
        }
        elseif ($role=="teacher"){
            $sql = "SELECT * FROM employee WHERE employeeID = '$id' AND password = '$password' AND position = 'teacher'"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $_SESSION['id'] = $id;
                header("Location: teacher.php"); 
                exit();
            } else {
                echo '<script type="text/javascript">
                window.onload = function () { alert("Invalid Username or Password"); } 
         </script>';             }
        }
        elseif ($role=="admin"){
            $sql = "SELECT * FROM employee WHERE employeeID = '$id' AND password = '$password'"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $_SESSION['id'] = $id; 
                header("Location: admin.php"); 
                exit();
            } else {
                echo '<script type="text/javascript">
       window.onload = function () { alert("Invalid Username or Password"); } 
</script>'; 
            }
        }
        else {
            echo '<script type="text/javascript">
            window.onload = function() { alert("Please enter your role."); } </script>';
        }

        
    
    }

    
    

    $conn->close();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/log.jpg'); 
            background-size: cover;
            background-position: center;
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: rgba(195, 177, 225, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 500px;
            height: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;     
            color: white; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .box-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .box {
            width: calc(33.33% - 10px); 
            height: 150px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            color: purple;
        }

        .box:hover {
            cursor: pointer;
           
        }

        .box img {
            width: 90px;
        }

        .container input[type=text] {
            width: 100%;
            border: solid white 1px;
            border-bottom: 2px solid $gray;
            outline: 0;
            font-size: 1.3rem;
            color: white;
            padding: 7px;
            background: transparent;
            transition: border-color 0.2s;
        }

        .container input[type=password] {
            width: 100%;
            border: solid white 1px;
            border-bottom: 2px solid $gray;
            outline: 0;
            font-size: 1.3rem;
            color: $white;
            padding: 7px;
            background: transparent;
            transition: border-color 0.2s;
        }

        .container input[type=submit] {

            display: inline-block;
            outline: none;
            cursor: pointer;
            font-weight: 500;
            border-radius: 3px;
            padding: 0 15px;
            border-radius: 4px;
            color: #6200ee;
            background: transparent;
            line-height: 1.15;
            font-size: 14px;
            height: 36px;
            word-spacing: 0px;
            letter-spacing: .0892857143em;
            text-decoration: none;
            text-transform: uppercase;
            min-width: 64px;
            border: 1px solid #6200ee;
            text-align: center;
            transition: background 280ms cubic-bezier(0.4, 0, 0.2, 1);
                
        }

        .container input[type=submit]:hover {
            background: #f4f4f4;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>Log In</h1>
        <form method="post" > 
            <label for="id">ID:</label><br>
            <input type="text" name="id"><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br><br>
            <input type="submit" name="login"><br>
            <input type="hidden" id="role" name="role">
        </form>
        <p>Don't have an account? Sign up <a href='sign.php'>here</a>.</p>
        <p>Who are you?</p>
        <div class="box-container">
            <div class="box" onclick="openParent(this)">
                <img src="img/student.png">
                <p>Parent</p>
            </div>

            <div class="box" onclick="openTeacher(this)">
                <img src="img/pencil.png">
                <p>Teacher</p>
            </div>

            <div class="box" onclick="openAdmin(this)">
                <img src="img/admin.png">
                <p>Administrator</p>
            </div>
        </div>
    </div>

    <script>

        function openParent(box) {
            removeBorderFromAllBoxes();
            box.style.border = 'solid purple';
            document.getElementById('role').value = 'student';
        }

        function openTeacher(box) {
            removeBorderFromAllBoxes();
            box.style.border = 'solid purple';
            document.getElementById('role').value = 'teacher';
        }

        function openAdmin(box) {
            removeBorderFromAllBoxes();
            box.style.border = 'solid purple';
            document.getElementById('role').value = 'admin';
        }

        function removeBorderFromAllBoxes() {
            var boxes = document.querySelectorAll('.box');
            boxes.forEach(function(box) {
                box.style.border = 'none';
            });
        }

    </script>



</body>
</html>

