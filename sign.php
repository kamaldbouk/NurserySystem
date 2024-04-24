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
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $id = $_POST["id"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phoneNum = $_POST["phoneNum"];
        $address = $_POST["address"];

        $checkQuery = "SELECT parentID FROM parent WHERE parentID= '$id'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            echo "<script>alert('You already have an account.');</script>";
            echo "<script>setTimeout(function() { window.location.href = 'sign.php'; }, 2000);</script>";
            exit();
        } else {
            $insertQuery = "INSERT INTO parent (fname, lname, parentID, password, email, phoneNum, address) 
                            VALUES ('$fname', '$lname', '$id', '$password', '$email', '$phoneNum', '$address')";
            
            if ($conn->query($insertQuery) === TRUE) {
                echo "<script>alert('Account created successfully.');</script>";
                echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 2000);</script>";
                exit();
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        }
    }

    $conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

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
            height: 10px;
            border-bottom: 2px solid $gray;
            outline: 0;
            font-size: 1.1rem;
            color: white;
            padding: 7px;
            background: transparent;
            transition: border-color 0.2s;
        }

        .container input[type=password] {
            width: 100%;
            height: 10px;
            border: solid white 1px;
            border-bottom: 2px solid $gray;
            outline: 0;
            font-size: 1.2rem;
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
        <h1>Parent Sign Up</h1>
        <form method="post" > 
            <label for="fname">First Name:</label><br>
            <input type="text" name="fname"><br><br>
            <label for="lname">Last Name:</label><br>
            <input type="text" name="lname"><br><br>
            <label for="id">ID:</label><br>
            <input type="text" name="id"><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br><br>
            <label for="email">Email Address:</label><br>
            <input type="text" name="email"><br><br>
            <label for="phoneNum">Phone Number:</label><br>
            <input type="text" name="phoneNum"><br><br>
            <label for="address">Address:</label><br>
            <input type="text" name="address"><br><br>
            <input type="submit" name="login" id="login" onclick="validatePassword()"><br>
            <input type="hidden" id="role" name="role">
        </form>
        <p>Already have an account? Log in <a href='login.php'>here</a>.</p>
        
    </div>

    <script>

        function addRole() {
            role = document.getElementByID('role');
            role.value = 'student';
        }


    </script>



</body>
</html>

