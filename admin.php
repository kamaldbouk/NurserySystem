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

if(!isset($_SESSION['id'])) {
        header("Location: login.php");
        exit();
    }

    $id = $_SESSION['id'];
    $sql = "SELECT fname FROM employee WHERE employeeID = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fname = $row['fname'];
    }

    $sql_students = "SELECT * FROM student";
    $result_students = $conn->query($sql_students);
    
    $sql_employees = "SELECT * FROM employee"; 
    $result_employees = $conn->query($sql_employees);

    $sql_parents = "SELECT * FROM parent";
    $result_parents = $conn->query($sql_parents);

    if (isset($_GET['id']) && isset($_GET['type'])) {
        $id = $_GET['id'];
        $type = $_GET['type'];
        
        if ($type === 'student') {
            $delete = mysqli_query($conn, "DELETE FROM student WHERE studentID = '$id'");
        } elseif ($type === 'employee') {
            $delete = mysqli_query($conn, "DELETE FROM employee WHERE employeeID = '$id'");
        }
        
        if ($delete) {
            echo "<script>alert('User deleted successfully'); window.location.href = 'admin.php';</script>";
        } else {
            echo "<script>alert('User could not be deleted.'); window.location.href = 'admin.php';</script>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        
       $userType = $_POST['role'];
    
        if ($userType === 'parent') {

            $studentID = $_POST['studentID'];
            $pID = $_POST['pID'];
            $fname1 = $_POST['fname1'];
            $lname1 = $_POST['lname1'];
            $dob1 = $_POST['dob1'];
            $gender = $_POST['gender'];
            $enrollmentStatus = $_POST['enrollmentStatus'];
            $classNum = $_POST['classNum'];
            $emergencyContact1 = $_POST['emergencyContact1'];
            $transportation = $_POST['transportation'];

            $sql = "INSERT INTO student (studentID, pID, fname, lname, photo, dob, gender, enrollmentStatus, classNum, emergencyContact, transportation) 
            VALUES ('$studentID', '$pID', '$fname1', '$lname1', NULL, '$dob1', '$gender', '$enrollmentStatus', '$classNum', '$emergencyContact1', '$transportation')";
                if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Student user added successfully'); window.location.href = 'admin.php';</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href = 'admin.php';</script>";
            }
        } 
        elseif ($userType === 'employee') {

            $employeeID = $_POST['employeeID'];
            $fname2 = $_POST['fname2'];
            $lname2 = $_POST['lname2'];
            $dob2 = $_POST['dob2'];
            $address = $_POST['address'];
            $phoneNum = $_POST['phoneNum'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $position = $_POST['position'];
            $emergencyContact2 = $_POST['emergencyContact2'];
            $salary = $_POST['salary'];
            $holdingDegree = $_POST['holdingDegree'];
    

            echo "$employeeID,$fname2,  $lname2,$dob2 ,$address, $phoneNum,$email,$password, $position,  $emergencyContact2,$salary, $holdingDegree";
            $sql = "INSERT INTO employee (employeeID, fname, lname, photo, dob, address, phoneNum, email, password, position, emergencyContact, salary, holdingDegree) 
                    VALUES ('$employeeID', '$fname2', '$lname2', NULL, '$dob2', '$address', '$phoneNum', '$email', '$password', '$position', '$emergencyContact2', '$salary', '$holdingDegree')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Employee user added successfully'); window.location.href = 'admin.php';</script>";
            } else {
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "'); window.location.href = 'admin.php';</script>";
            }
        }
    }


    $conn->close();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <div class="sidebar">
        <img src='img/logo.png'>
        <h3>Welcome, <?php echo "$fname"; ?>!</h3>
        <a class="active" href="#" onclick="changeClass(this, '.studentemployeeBox')">View Users</a>
        <a class="" href="#" onclick="changeClass(this, '.addBox')">Add User</a>
        <a class="leave" href="login.php">Log Out</a>
    </div>


    <div class="content">

        <div class="studentemployeeBox">
            <div class="studentsBox">
                <h2>Student List:</h2>
                <?php
              if ($result_students->num_rows > 0) {
                while ($row_student = $result_students->fetch_assoc()) {
                    echo "<p> {$row_student['fname']} {$row_student['lname']}: (Student ID: {$row_student['studentID']}) 
                        <br><cite>{$row_student['gender']}, {$row_student['dob']}</cite> 
                        <br>Enrollment Status: {$row_student['enrollmentStatus']} 
                        <br>Class Number: {$row_student['classNum']} 
                        <br>Emergency Contact: {$row_student['emergencyContact']}
                        <br>Mode of Transportation: {$row_student['transportation']}  
                        <br><a href='admin.php?id={$row_student['studentID']}&type=student' class='delButton'>Delete Account</a>
                        </p><hr>";
                }
            }
            
            ?>

            </div>

            <div class="employeeBox">
                <h2>Employee List:</h2>
                <?php
                    if ($result_employees->num_rows > 0) {
                        while ($row_employee = $result_employees->fetch_assoc()) {
                            echo "<p> {$row_employee['fname']} {$row_employee['lname']} (Employee ID: {$row_employee['employeeID']}) 
                            <br><cite>{$row_employee['position']}, {$row_employee['dob']}</cite>
                            <br>Email: {$row_employee['email']}
                            <br>Phone: {$row_employee['phoneNum']}
                            <br>Email Address: {$row_employee['email']}
                            <br>Emergency Contact: {$row_employee['emergencyContact']}
                            <br>Salary: {$row_employee['salary']}
                            <br>Holding Degree: {$row_employee['holdingDegree']}
                            <br><a href='admin.php?id={$row_employee['employeeID']}&type=employee' class='delButton'>Delete Account</a>
                            <button onclick='resetPassword(\"{$row_employee['employeeID']}\")' class='resetButton'>Reset Password</button>
                            </p><hr>";
                        }
                    }    
                ?>
            </div>
        
        </div>


        <div class="addanalyticsBox">

            <div class="addBox">
                <h2>Add User:</h2>
                <form id="addUserForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="alert('Form submitted!'); return validateForm()">
                    <label for="userType">User Type:</label>
                    <select id="userType" name='role' onchange="showFields()">
                        <option></option>
                        <option value="parent">Student</option> 
                        <option value="employee">Employee</option>
                    </select>
                    <div id="parentFields" style="display: none;">
                        <input type="text" name="studentID" placeholder="Student ID">
                        <input type="text" name="pID" placeholder="Parent ID">
                        <input type="text" name="fname1" placeholder="First Name">
                        <input type="text" name="lname1" placeholder="Last Name" >
                        <input type="date" name="dob1" placeholder="Date of Birth">
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <input type="text" name="enrollmentStatus" placeholder="Enrollment Status">
                        <input type="text" name="classNum" placeholder="Class Number">
                        <input type="text" name="emergencyContact1" placeholder="Emergency Contact">
                        <input type="text" name="transportation" placeholder="Mode of Transportation">
                    </div>
                    <div id="employeeFields" style="display: none;">
                        <input type="text" name="employeeID" placeholder="Employee ID">
                        <input type="text" name="fname2" placeholder="First Name">
                        <input type="text" name="lname2" placeholder="Last Name">
                        <input type="date" name="dob2" placeholder="Date of Birth">
                        <input type="text" name="address" placeholder="Address">
                        <input type="text" name="phoneNum" placeholder="Phone Number">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <input type="text" name="position" placeholder="Position">
                        <input type="text" name="emergencyContact2" placeholder="Emergency Contact">
                        <input type="text" name="salary" placeholder="Salary">
                        <input type="text" name="holdingDegree" placeholder="Holding Degree">
                    </div>
                    <button id="submitButton" type="submit" style="display: none;">Submit</button>
                </form>
                </div>

        </div>

    </div>


    <script>

        function resetPassword(userId) {
            if (confirm("Are you sure you want to reset this user's password?")) {

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "reset_password.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {

                        alert(xhr.responseText);
                        
                    }
                };
                xhr.send("userId=" + userId);
            }
        }

        function showFields() {
            var userType = document.getElementById("userType").value;
            var parentFields = document.getElementById("parentFields");
            var employeeFields = document.getElementById("employeeFields");
            var submitButton = document.getElementById("submitButton");

            if (userType === "parent") {
                parentFields.style.display = "block";
                employeeFields.style.display = "none";
                submitButton.style.display = "block"; 
            } else if (userType === "employee") {
                parentFields.style.display = "none";
                employeeFields.style.display = "block";
                submitButton.style.display = "block";
            } else {
                parentFields.style.display = "none";
                employeeFields.style.display = "none";
                submitButton.style.display = "none"; 
            }
        }

        function validateForm() {
            // form validation here
            return true;
        }

        function delAcc(id, type) {
            if (confirm("Are you sure you want to delete this user?")) {
                window.location.href = "admin.php?id=" + id + "&type=" + type;
            }
        }


        function changeClass(clickedElement, sectionClass) {
            var links = document.querySelectorAll('.sidebar a');
            links.forEach(function(link) {
                link.classList.remove('active');
            });
            clickedElement.classList.add('active');

            var targetSection = document.querySelector(sectionClass);
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }    


    </script>   

    </body>



</html>

