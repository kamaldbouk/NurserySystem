<?php

    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $database = "project"; 
    $conn = new mysqli($servername, $username, $password, $database, "3308");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }



if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    // LadyBugs class

    if (isset($_POST['LadyBugs-submit'])) {

    
    $ladyBugsDate = $_POST['LadyBugs-date'];
    
    $ladyBugsClassType1 = $_POST['LadyBugs-class-type-1'];
    $ladyBugsLocation1 = $_POST['LadyBugs-location-1'];
    $ladyBugsDescription1 = $_POST['LadyBugs-description-1'];



    $ladyBugsClassType2 = $_POST['LadyBugs-class-type-2'];
    $ladyBugsLocation2 = $_POST['LadyBugs-location-2'];
    $ladyBugsDescription2 = $_POST['LadyBugs-description-2'];



    $ladyBugsClassType3 = $_POST['LadyBugs-class-type-3'];
    $ladyBugsLocation3 = $_POST['LadyBugs-location-3'];
    $ladyBugsDescription3 = $_POST['LadyBugs-description-3'];



    $ladyBugsClassType4 = $_POST['LadyBugs-class-type-4'];
    $ladyBugsLocation4 = $_POST['LadyBugs-location-4'];
    $ladyBugsDescription4 = $_POST['LadyBugs-description-4'];



    $ladyBugsClassType5 = $_POST['LadyBugs-class-type-5'];
    $ladyBugsLocation5 = $_POST['LadyBugs-location-5'];
    $ladyBugsDescription5 = $_POST['LadyBugs-description-5'];



    $ladyBugsClassType6 = $_POST['LadyBugs-class-type-6'];
    $ladyBugsLocation6 = $_POST['LadyBugs-location-6'];
    $ladyBugsDescription6 = $_POST['LadyBugs-description-6'];


        $checkSql = "SELECT COUNT(*) as count FROM classschedule WHERE level = 'LadyBugs'";
        $result = $conn->query($checkSql);
        $row = $result->fetch_assoc();
        $count = $row['count'];

        if ($count > 0) {
            // Update statements
            $updateSql1 = "UPDATE classschedule SET type = '$ladyBugsClassType1', location = '$ladyBugsLocation1', description = '$ladyBugsDescription1' WHERE Date = '$ladyBugsDate' AND time = '8' AND level = 'LadyBugs'";
            $updateSql2 = "UPDATE classschedule SET type = '$ladyBugsClassType2', location = '$ladyBugsLocation2', description = '$ladyBugsDescription2' WHERE Date = '$ladyBugsDate' AND time = '9' AND level = 'LadyBugs'";
            $updateSql3 = "UPDATE classschedule SET type = '$ladyBugsClassType3', location = '$ladyBugsLocation3', description = '$ladyBugsDescription3' WHERE Date = '$ladyBugsDate' AND time = '10' AND level = 'LadyBugs'";
            $updateSql4 = "UPDATE classschedule SET type = '$ladyBugsClassType4', location = '$ladyBugsLocation4', description = '$ladyBugsDescription4' WHERE Date = '$ladyBugsDate' AND time = '11' AND level = 'LadyBugs'";
            $updateSql5 = "UPDATE classschedule SET type = '$ladyBugsClassType5', location = '$ladyBugsLocation5', description = '$ladyBugsDescription5' WHERE Date = '$ladyBugsDate' AND time = '12' AND level = 'LadyBugs'";
            $updateSql6 = "UPDATE classschedule SET type = '$ladyBugsClassType6', location = '$ladyBugsLocation6', description = '$ladyBugsDescription6' WHERE Date = '$ladyBugsDate' AND time = '13' AND level = 'LadyBugs'";

            $conn->query($updateSql1);
            $conn->query($updateSql2);
            $conn->query($updateSql3);
            $conn->query($updateSql4);
            $conn->query($updateSql5);
            $conn->query($updateSql6);
        } else {
            // Insert statements
            $insertSql1 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$ladyBugsDate', '8', '$ladyBugsClassType1', '$ladyBugsLocation1', '$ladyBugsDescription1', 'LadyBugs')";
            $insertSql2 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$ladyBugsDate', '9', '$ladyBugsClassType2', '$ladyBugsLocation2', '$ladyBugsDescription2', 'LadyBugs')";
            $insertSql3 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$ladyBugsDate', '10', '$ladyBugsClassType3', '$ladyBugsLocation3', '$ladyBugsDescription3', 'LadyBugs')";
            $insertSql4 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$ladyBugsDate', '11', '$ladyBugsClassType4', '$ladyBugsLocation4', '$ladyBugsDescription4', 'LadyBugs')";
            $insertSql5 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$ladyBugsDate', '12', '$ladyBugsClassType5', '$ladyBugsLocation5', '$ladyBugsDescription5', 'LadyBugs')";
            $insertSql6 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$ladyBugsDate', '13', '$ladyBugsClassType6', '$ladyBugsLocation6', '$ladyBugsDescription6', 'LadyBugs')";

            $conn->query($insertSql1);
            $conn->query($insertSql2);
            $conn->query($insertSql3);
            $conn->query($insertSql4);
            $conn->query($insertSql5);
            $conn->query($insertSql6);
        }

    

    }else if (isset($_POST['BumbleBees-submit'])){

    //bumblebee
    $bumbleBeesDate = $_POST['BumbleBees-date'];

    $bumbleBeesClassType1 = $_POST['BumbleBees-class-type-1'];
    $bumbleBeesLocation1 = $_POST['BumbleBees-location-1'];
    $bumbleBeesDescription1 = $_POST['BumbleBees-description-1'];


    $bumbleBeesClassType2 = $_POST['BumbleBees-class-type-2'];
    $bumbleBeesLocation2 = $_POST['BumbleBees-location-2'];
    $bumbleBeesDescription2 = $_POST['BumbleBees-description-2'];


    $bumbleBeesClassType3 = $_POST['BumbleBees-class-type-3'];
    $bumbleBeesLocation3 = $_POST['BumbleBees-location-3'];
    $bumbleBeesDescription3 = $_POST['BumbleBees-description-3'];


    $bumbleBeesClassType4 = $_POST['BumbleBees-class-type-4'];
    $bumbleBeesLocation4 = $_POST['BumbleBees-location-4'];
    $bumbleBeesDescription4 = $_POST['BumbleBees-description-4'];


    $bumbleBeesClassType5 = $_POST['BumbleBees-class-type-5'];
    $bumbleBeesLocation5 = $_POST['BumbleBees-location-5'];
    $bumbleBeesDescription5 = $_POST['BumbleBees-description-5'];


    $bumbleBeesClassType6 = $_POST['BumbleBees-class-type-6'];
    $bumbleBeesLocation6 = $_POST['BumbleBees-location-6'];
    $bumbleBeesDescription6 = $_POST['BumbleBees-description-6'];


    $checkSql = "SELECT COUNT(*) as count FROM classschedule WHERE Date = '$bumbleBeesDate' AND level = 'Bumblebee'";
    $result = $conn->query($checkSql);
    $row = $result->fetch_assoc();
    $count = $row['count'];

    if ($count > 0) {
        // Update statements
        $updateSql1 = "UPDATE classschedule SET type = '$bumbleBeesClassType1', location = '$bumbleBeesLocation1', description = '$bumbleBeesDescription1' WHERE Date = '$bumbleBeesDate' AND time = '8' AND level = 'Bumblebee'";
        $updateSql2 = "UPDATE classschedule SET type = '$bumbleBeesClassType2', location = '$bumbleBeesLocation2', description = '$bumbleBeesDescription2' WHERE Date = '$bumbleBeesDate' AND time = '9' AND level = 'Bumblebee'";
        $updateSql3 = "UPDATE classschedule SET type = '$bumbleBeesClassType3', location = '$bumbleBeesLocation3', description = '$bumbleBeesDescription3' WHERE Date = '$bumbleBeesDate' AND time = '10' AND level = 'Bumblebee'";
        $updateSql4 = "UPDATE classschedule SET type = '$bumbleBeesClassType4', location = '$bumbleBeesLocation4', description = '$bumbleBeesDescription4' WHERE Date = '$bumbleBeesDate' AND time = '11' AND level = 'Bumblebee'";
        $updateSql5 = "UPDATE classschedule SET type = '$bumbleBeesClassType5', location = '$bumbleBeesLocation5', description = '$bumbleBeesDescription5' WHERE Date = '$bumbleBeesDate' AND time = '12' AND level = 'Bumblebee'";
        $updateSql6 = "UPDATE classschedule SET type = '$bumbleBeesClassType6', location = '$bumbleBeesLocation6', description = '$bumbleBeesDescription6' WHERE Date = '$bumbleBeesDate' AND time = '13' AND level = 'Bumblebee'";

        $conn->query($updateSql1);
        $conn->query($updateSql2);
        $conn->query($updateSql3);
        $conn->query($updateSql4);
        $conn->query($updateSql5);
        $conn->query($updateSql6);
    } else {
        // Insert statements
        $insertSql1 = "INSERT INTO classschedule (date , time, type, location, description, level) VALUES ('$bumbleBeesDate', '8', '$bumbleBeesClassType1', '$bumbleBeesLocation1', '$bumbleBeesDescription1', 'Bumblebee')";
        $insertSql2 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$bumbleBeesDate', '9', '$bumbleBeesClassType2', '$bumbleBeesLocation2', '$bumbleBeesDescription2', 'Bumblebee')";
        $insertSql3 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$bumbleBeesDate', '10', '$bumbleBeesClassType3', '$bumbleBeesLocation3', '$bumbleBeesDescription3', 'Bumblebee')";
        $insertSql4 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$bumbleBeesDate', '11', '$bumbleBeesClassType4', '$bumbleBeesLocation4', '$bumbleBeesDescription4', 'Bumblebee')";
        $insertSql5 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$bumbleBeesDate', '12', '$bumbleBeesClassType5', '$bumbleBeesLocation5', '$bumbleBeesDescription5', 'Bumblebee')";
        $insertSql6 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$bumbleBeesDate', '13', '$bumbleBeesClassType6', '$bumbleBeesLocation6', '$bumbleBeesDescription6', 'Bumblebee')";

        $conn->query($insertSql1);
        $conn->query($insertSql2);
        $conn->query($insertSql3);
        $conn->query($insertSql4);
        $conn->query($insertSql5);
        $conn->query($insertSql6);
    }
   


    }else if (isset($_POST['Caterpillers-submit'])){

    //caterpiller
        $caterpillersDate = $_POST['Caterpillers-date'];

        $caterpillersClassType1 = $_POST['Caterpillers-class-type-1'];
        $caterpillersLocation1 = $_POST['Caterpillers-location-1'];
        $caterpillersDescription1 = $_POST['Caterpillers-description-1'];


        $caterpillersClassType2 = $_POST['Caterpillers-class-type-2'];
        $caterpillersLocation2 = $_POST['Caterpillers-location-2'];
        $caterpillersDescription2 = $_POST['Caterpillers-description-2'];


        $caterpillersClassType3 = $_POST['Caterpillers-class-type-3'];
        $caterpillersLocation3 = $_POST['Caterpillers-location-3'];
        $caterpillersDescription3 = $_POST['Caterpillers-description-3'];

        $caterpillersClassType4 = $_POST['Caterpillers-class-type-4'];
        $caterpillersLocation4 = $_POST['Caterpillers-location-4'];
        $caterpillersDescription4 = $_POST['Caterpillers-description-4'];

        $caterpillersClassType5 = $_POST['Caterpillers-class-type-5'];
        $caterpillersLocation5 = $_POST['Caterpillers-location-5'];
        $caterpillersDescription5 = $_POST['Caterpillers-description-5'];

        $caterpillersClassType6 = $_POST['Caterpillers-class-type-6'];
        $caterpillersLocation6 = $_POST['Caterpillers-location-6'];
        $caterpillersDescription6 = $_POST['Caterpillers-description-6'];

        $checkSql = "SELECT COUNT(*) as count FROM classschedule WHERE Date = '$caterpillersDate' AND level = 'Caterpillar'";
        $result = $conn->query($checkSql);
        $row = $result->fetch_assoc();
        $count = $row['count'];
    
        if ($count > 0) {
            // Update statements
            $updateSql1 = "UPDATE classschedule SET type = '$caterpillersClassType1', location = '$caterpillersLocation1', description = '$caterpillersDescription1' WHERE Date = '$caterpillersDate' AND time = '8' AND level = 'Caterpillar'";
            $updateSql2 = "UPDATE classschedule SET type = '$caterpillersClassType2', location = '$caterpillersLocation2', description = '$caterpillersDescription2' WHERE Date = '$caterpillersDate' AND time = '9' AND level = 'Caterpillar'";
            $updateSql3 = "UPDATE classschedule SET type = '$caterpillersClassType3', location = '$caterpillersLocation3', description = '$caterpillersDescription3' WHERE Date = '$caterpillersDate' AND time = '10' AND level = 'Caterpillar'";
            $updateSql4 = "UPDATE classschedule SET type = '$caterpillersClassType4', location = '$caterpillersLocation4', description = '$caterpillersDescription4' WHERE Date = '$caterpillersDate' AND time = '11' AND level = 'Caterpillar'";
            $updateSql5 = "UPDATE classschedule SET type = '$caterpillersClassType5', location = '$caterpillersLocation5', description = '$caterpillersDescription5' WHERE Date = '$caterpillersDate' AND time = '12' AND level = 'Caterpillar'";
            $updateSql6 = "UPDATE classschedule SET type = '$caterpillersClassType6', location = '$caterpillersLocation6', description = '$caterpillersDescription6' WHERE Date = '$caterpillersDate' AND time = '13' AND level = 'Caterpillar'";
    
            $conn->query($updateSql1);
            $conn->query($updateSql2);
            $conn->query($updateSql3);
            $conn->query($updateSql4);
            $conn->query($updateSql5);
            $conn->query($updateSql6);
        } else {
            // Insert statements
            $insertSql1 = "INSERT INTO classschedule (date,time, type, location, description, level) VALUES ('$caterpillersDate', '8', '$caterpillersClassType1', '$caterpillersLocation1', '$caterpillersDescription1', 'Caterpillar')";
            $insertSql2 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$caterpillersDate', '9', '$caterpillersClassType2', '$caterpillersLocation2', '$caterpillersDescription2', 'Caterpillar')";
            $insertSql3 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$caterpillersDate', '10', '$caterpillersClassType3', '$caterpillersLocation3', '$caterpillersDescription3', 'Caterpillar')";
            $insertSql4 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$caterpillersDate', '11', '$caterpillersClassType4', '$caterpillersLocation4', '$caterpillersDescription4', 'Caterpillar')";
            $insertSql5 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$caterpillersDate', '12', '$caterpillersClassType5', '$caterpillersLocation5', '$caterpillersDescription5', 'Caterpillar')";
            $insertSql6 = "INSERT INTO classschedule (date, time, type, location, description, level) VALUES ('$caterpillersDate', '13', '$caterpillersClassType6', '$caterpillersLocation6', '$caterpillersDescription6', 'Caterpillar')";
        
    
            $conn->query($insertSql1);
            $conn->query($insertSql2);
            $conn->query($insertSql3);
            $conn->query($insertSql4);
            $conn->query($insertSql5);
            $conn->query($insertSql6);
        }

 }

            $sql = "SELECT date, time, type, location, description FROM classschedule WHERE level = 'LadyBugs'";
            $result = $conn->query($sql);
            $ladyBugsData = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $ladyBugsData[] = $row;
                }
            }

            $sql = "SELECT date, time, type, location, description FROM classschedule WHERE level = 'Bumblebee'";
            $result = $conn->query($sql);
            $bumbleBeesData = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $bumbleBeesData[] = $row;
                }
            }

            $sql = "SELECT date, time, type, location, description FROM classschedule WHERE level = 'Caterpillar'";
            $result = $conn->query($sql);
            $caterpillersData = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $caterpillersData[] = $row;
                }
            }
  

}








if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Reservation-submit'])){
        $className = $_POST['className'];
        $reservationDate = $_POST['reservationDate'];
        $reservationTime = $_POST['reservationTime'];
        $eID = $_POST['eID'];

        $sql = "SELECT * FROM reservation WHERE className = '$className' AND reservationDate = '$reservationDate' AND reservationTime = '$reservationTime' AND status='reserved'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<script>alert('Class already reserved.');</script>";
        } else {
            $sql = "UPDATE reservation SET status = 'reserved', eID = '$eID' WHERE className = '$className' AND reservationDate = '$reservationDate' AND reservationTime = '$reservationTime'";
            
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Class reserved successfully!');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

    }
}







$sql = "SELECT studentID, fname, lname, classNum FROM student ORDER BY classNum";
$result = $conn->query($sql);

$students = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Attendance-submit'])){
    $attendanceDate = $_POST["attendanceDate"];

    foreach ($students as $student) {
        $studentID = $student['studentID'];
        $attendanceStatus = $_POST[$studentID];

        // Insert attendance data into the database
        $sql = "INSERT INTO attendance (date, sID, binaryDigit) VALUES ('$attendanceDate','$studentID', '$attendanceStatus')";
        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
}








$progressReport = "";


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data

    if(isset($_POST["submitFeedback"])) {

    $studentName = $_POST["studentName"];
    $sID = $_POST["studentID"];
    $behaviour = $_POST["behavior"];
    $cooperation = $_POST["cooperation"];
    $reading = $_POST["readingSkills"];
    $tidiness = $_POST["tidiness"];
    $criteria = $_POST["evaluation"];

    $checkSql = "SELECT * FROM progressreport WHERE sID = $sID";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {

        $updateSql = "UPDATE progressreport SET studentName = '$studentName', behaviour = '$behaviour', cooperation = '$cooperation', reading = '$reading', tidiness = '$tidiness', criteria = '$criteria' WHERE sID = $sID";

        if ($conn->query($updateSql) === TRUE) {
            echo "<script>alert('Record updated successfully');</script>";
        } else {
            echo "<script>alert('Error updating record: " . $conn->error . "');</script>";
        }
    } else {

        $insertSql = "INSERT INTO progressreport (studentName, sID, behaviour, cooperation, reading, tidiness, criteria) VALUES ('$studentName', $sID, '$behaviour', '$cooperation', '$reading', '$tidiness', '$criteria')";

        if ($conn->query($insertSql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    }

    }
if(isset($_POST["viewReport"])) {
        $sID = $_POST["studentID"];

        $checkSql = "SELECT * FROM progressreport WHERE sID = $sID";
        $result = $conn->query($checkSql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $progressReport = "Student Name: " . $row["studentName"] . "<br>"
                            . "Behavior in Class: " . $row["behaviour"] . "<br>"
                            . "Cooperation: " . $row["cooperation"] . "<br>"
                            . "Reading Skills: " . $row["reading"] . "<br>"
                            . "Tidiness: " . $row["tidiness"] . "<br>"
                            . "Final Evaluation Criteria: " . $row["criteria"];
        } else {
            $progressReport = "No progress report found for the entered Student ID.";
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
  <title>Teacher</title>
  <style>



/*  Forms Css */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: rgb(244, 244, 244);
      background: url(img/cloudbg.webp);
    }

    .Schedule-container{
      background-color: rgba(195, 177, 225, 0.8);
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .Schedule-date {
      font-weight: bold;
      margin-bottom: 40px;
 
    }

    .Schedule-date input[type="text"]{
        border-radius: 5px;
        border: 2px solid rgb(204, 204, 204);
    }

    .Schedule-time-label {
      font-weight: bold;
      margin-bottom: 10px;
      border-bottom: 2px solid rgb(238, 237, 237);
      padding-bottom: 10px;
    }

    .Schedule-class-details {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .Schedule-class-details .location-type,
    .Schedule-class-details .description {
      flex: 1;
      margin-right: 20px;
    }

    .Schedule-class-details label {
      display: block;
      margin-bottom: 5px;
    }

    .Schedule-class-details input[type="text"],
    .Schedule-class-details textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid rgb(204, 204, 204);
      border-radius: 5px;
      background-color: rgb(240, 238, 238);
    }

    .Schedule-class-details textarea {
      height: 80px;
    }

    .Schedule-custom-hr {
      border: none;
      border-top: 1px dashed rgb(238, 237, 237);
      margin: 20px 0;
    }

    .Schedule-navigation{
        display: flex;
        justify-content: center;
        padding: 10px;    
    }

    .Schedule-class-nav{
        margin: 5px;
        margin-bottom: 0;
        border-radius: 5px;
    }

    #BumbleBees-container , #Caterpillers-container{
        display: none;
    }


    #BumbleBees-container{
        background-color: rgba(255, 241, 41, 0.9);
    }

    #LadyBugs-container{
        background-color: rgba(255, 128, 128, 0.9);
    }

    #Caterpillers-container{
        background-color: rgba(144, 255, 41, 0.9);
    }

    #LadyBugs-Display-Container, #BumbleBees-Display-Container,#Caterpillers-Display-Container{
        display:none;
    }

    #BumbleBees-Display-Container{
        background-color: rgba(255, 241, 41, 0.9);
    }

    #Caterpillers-Display-Container{
        background-color: rgba(144, 255, 41, 0.9);
    }

    #LadyBugs-Display-Container{
        background-color: rgba(255, 128, 128, 0.9);
    }

    .edit-display{
        display:flex;
        justify-content:center;
        gap:5px;
        border-radius:10px;
    }










    .Reservation-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .Reservation-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .Reservation-form-group {
            margin-bottom: 15px;
        }

        .Reservation-container label {
            display: block;
            margin-bottom: 5px;
        }

        .Reservation-container input[type="text"],
        .Reservation-container input[type="date"],
        .Reservation-container input[type="time"] {
            width: 95%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .Reservation-container button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .Reservation-container button:hover {
            background-color: #0056b3;
        }











        .Attendance-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgb(255, 255, 255);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .Attendance-container h1 {
            text-align: center;
        }
        .date-container {
            margin-bottom: 20px;
        }
        .class-container {
            margin-bottom: 20px;
        }
        .student-details {
            margin-bottom: 10px;
        }
        .Attendance-status input[type="radio"] {
            margin-right: 10px;
        }
        .Attendance-custom-hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #ccc;
        }





        .Progress-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .Progress-container .form-group {
            margin-bottom: 15px;
        }

        .Progress-container .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .Progress-container .form-group input[type="text"],
        .Progress-container .form-group input[type="number"] {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
        }

        .Progress-container .form-group textarea {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
            height: 60px;
        }

        .Progress-container .form-group .radio-group {
            margin-top: 10px;
        }

        .Progress-container .form-group .radio-group label {
            margin-right: 20px;
        }

        .Progress-container .form-group button {
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
        }

        .Progress-container .form-group button:hover {
            background-color: #0056b3;
        }


        #feedbackSubmit{
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;

        }

        .submit-button{
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
        }

        #Caterpillers, #LadyBugs, #BumbleBees {
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
        }

        .LogOut{
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
            width:50px;
            text-decoration: none;
        }

        .LogOut a{
         
            text-decoration: none;
            color:white;
        }

    

  </style>
</head>
<body>

    <div class="Schedule-navigation">
        <button  class="Schedule-class-nav" id="LadyBugs" onclick="displayForm('LadyBugs')">LadyBugs</button>
        <button  class="Schedule-class-nav" id="BumbleBees" onclick="displayForm('BumbleBees')">BumbleBees</button>
        <button  class="Schedule-class-nav" id="Caterpillers" onclick="displayForm('Caterpillers')">Caterpillers</button>
    </div>
    

    <form class="Schedule-container" id="LadyBugs-container" method="post">
    <div class="Schedule-date">
        <label for="LadyBugs-date">Date:</label>
        <input type="text" id="LadyBugs-date" name="LadyBugs-date">
    </div>

    <div class="Schedule-time-label">08:00 - 08:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="LadyBugs-class-type-1">Class Type:</label>
            <input type="text" id="LadyBugs-class-type-1" name="LadyBugs-class-type-1">
            <label for="LadyBugs-location-1">Location:</label>
            <input type="text" id="LadyBugs-location-1" name="LadyBugs-location-1">
        </div>
        <div class="Schedule-description">
            <label for="LadyBugs-description-1">Description:</label>
            <textarea id="LadyBugs-description-1" name="LadyBugs-description-1"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">09:00 - 09:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="LadyBugs-class-type-2">Class Type:</label>
            <input type="text" id="LadyBugs-class-type-2" name="LadyBugs-class-type-2">
            <label for="LadyBugs-location-2">Location:</label>
            <input type="text" id="LadyBugs-location-2" name="LadyBugs-location-2">
        </div>
        <div class="Schedule-description">
            <label for="LadyBugs-description-2">Description:</label>
            <textarea id="LadyBugs-description-2" name="LadyBugs-description-2"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">10:00 - 10:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="LadyBugs-class-type-3">Class Type:</label>
            <input type="text" id="LadyBugs-class-type-3" name="LadyBugs-class-type-3">
            <label for="LadyBugs-location-3">Location:</label>
            <input type="text" id="LadyBugs-location-3" name="LadyBugs-location-3">
        </div>
        <div class="Schedule-description">
            <label for="LadyBugs-description-3">Description:</label>
            <textarea id="LadyBugs-description-3" name="LadyBugs-description-3"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">11:00 - 11:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="LadyBugs-class-type-4">Class Type:</label>
            <input type="text" id="LadyBugs-class-type-4" name="LadyBugs-class-type-4">
            <label for="LadyBugs-location-4">Location:</label>
            <input type="text" id="LadyBugs-location-4" name="LadyBugs-location-4">
        </div>
        <div class="Schedule-description">
            <label for="LadyBugs-description-4">Description:</label>
            <textarea id="LadyBugs-description-4" name="LadyBugs-description-4"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">12:00 - 12:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="LadyBugs-class-type-5">Class Type:</label>
            <input type="text" id="LadyBugs-class-type-5" name="LadyBugs-class-type-5">
            <label for="LadyBugs-location-5">Location:</label>
            <input type="text" id="LadyBugs-location-5" name="LadyBugs-location-5">
        </div>
        <div class="Schedule-description">
            <label for="LadyBugs-description-5">Description:</label>
            <textarea id="LadyBugs-description-5" name="LadyBugs-description-5"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">01:00 - 01:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="LadyBugs-class-type-6">Class Type:</label>
            <input type="text" id="LadyBugs-class-type-6" name="LadyBugs-class-type-6">
            <label for="LadyBugs-location-6">Location:</label>
            <input type="text" id="LadyBugs-location-6" name="LadyBugs-location-6">
        </div>
        <div class="Schedule-description">
            <label for="LadyBugs-description-6">Description:</label>
            <textarea id="LadyBugs-description-6" name="LadyBugs-description-6"></textarea>
        </div>
    </div>
    <button type="submit" name="LadyBugs-submit">Submit</button>
  


</form>





<form class="Schedule-container" id="BumbleBees-container" method="post">
    <div class="Schedule-date">
        <label for="BumbleBees-date">Date:</label>
        <input type="text" id="BumbleBees-date" name="BumbleBees-date">
    </div>

    <div class="Schedule-time-label">08:00 - 08:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="BumbleBees-class-type-1">Class Type:</label>
            <input type="text" id="BumbleBees-class-type-1" name="BumbleBees-class-type-1">
            <label for="BumbleBees-location-1">Location:</label>
            <input type="text" id="BumbleBees-location-1" name="BumbleBees-location-1">
        </div>
        <div class="Schedule-description">
            <label for="BumbleBees-description-1">Description:</label>
            <textarea id="BumbleBees-description-1" name="BumbleBees-description-1"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">09:00 - 09:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="BumbleBees-class-type-2">Class Type:</label>
            <input type="text" id="BumbleBees-class-type-2" name="BumbleBees-class-type-2">
            <label for="BumbleBees-location-2">Location:</label>
            <input type="text" id="BumbleBees-location-2" name="BumbleBees-location-2">
        </div>
        <div class="Schedule-description">
            <label for="BumbleBees-description-2">Description:</label>
            <textarea id="BumbleBees-description-2" name="BumbleBees-description-2"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">10:00 - 10:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="BumbleBees-class-type-3">Class Type:</label>
            <input type="text" id="BumbleBees-class-type-3" name="BumbleBees-class-type-3">
            <label for="BumbleBees-location-3">Location:</label>
            <input type="text" id="BumbleBees-location-3" name="BumbleBees-location-3">
        </div>
        <div class="Schedule-description">
            <label for="BumbleBees-description-3">Description:</label>
            <textarea id="BumbleBees-description-3" name="BumbleBees-description-3"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">11:00 - 11:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="BumbleBees-class-type-4">Class Type:</label>
            <input type="text" id="BumbleBees-class-type-4" name="BumbleBees-class-type-4">
            <label for="BumbleBees-location-4">Location:</label>
            <input type="text" id="BumbleBees-location-4" name="BumbleBees-location-4">
        </div>
        <div class="Schedule-description">
            <label for="BumbleBees-description-4">Description:</label>
            <textarea id="BumbleBees-description-4" name="BumbleBees-description-4"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">12:00 - 12:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="BumbleBees-class-type-5">Class Type:</label>
            <input type="text" id="BumbleBees-class-type-5" name="BumbleBees-class-type-5">
            <label for="BumbleBees-location-5">Location:</label>
            <input type="text" id="BumbleBees-location-5" name="BumbleBees-location-5">
        </div>
        <div class="Schedule-description">
            <label for="BumbleBees-description-5">Description:</label>
            <textarea id="BumbleBees-description-5" name="BumbleBees-description-5"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">01:00 - 01:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="BumbleBees-class-type-6">Class Type:</label>
            <input type="text" id="BumbleBees-class-type-6" name="BumbleBees-class-type-6">
            <label for="BumbleBees-location-6">Location:</label>
            <input type="text" id="BumbleBees-location-6" name="BumbleBees-location-6">
        </div>
        <div class="Schedule-description">
            <label for="BumbleBees-description-6">Description:</label>
            <textarea id="BumbleBees-description-6" name="BumbleBees-description-6"></textarea>
        </div>
    </div>
    <button type="submit" name="BumbleBees-submit">Submit</button>

</form>


<form class="Schedule-container" id="Caterpillers-container" method="post">
    <div class="Schedule-date">
        <label for="Caterpillers-date">Date:</label>
        <input type="text" id="Caterpillers-date" name="Caterpillers-date">
    </div>

    <div class="Schedule-time-label">08:00 - 08:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="Caterpillers-class-type-1">Class Type:</label>
            <input type="text" id="Caterpillers-class-type-1" name="Caterpillers-class-type-1">
            <label for="Caterpillers-location-1">Location:</label>
            <input type="text" id="Caterpillers-location-1" name="Caterpillers-location-1">
        </div>
        <div class="Schedule-description">
            <label for="Caterpillers-description-1">Description:</label>
            <textarea id="Caterpillers-description-1" name="Caterpillers-description-1"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">09:00 - 09:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="Caterpillers-class-type-2">Class Type:</label>
            <input type="text" id="Caterpillers-class-type-2" name="Caterpillers-class-type-2">
            <label for="Caterpillers-location-2">Location:</label>
            <input type="text" id="Caterpillers-location-2" name="Caterpillers-location-2">
        </div>
        <div class="Schedule-description">
            <label for="Caterpillers-description-2">Description:</label>
            <textarea id="Caterpillers-description-2" name="Caterpillers-description-2"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">10:00 - 10:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="Caterpillers-class-type-3">Class Type:</label>
            <input type="text" id="Caterpillers-class-type-3" name="Caterpillers-class-type-3">
            <label for="Caterpillers-location-3">Location:</label>
            <input type="text" id="Caterpillers-location-3" name="Caterpillers-location-3">
        </div>
        <div class="Schedule-description">
            <label for="Caterpillers-description-3">Description:</label>
            <textarea id="Caterpillers-description-3" name="Caterpillers-description-3"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">11:00 - 11:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="Caterpillers-class-type-4">Class Type:</label>
            <input type="text" id="Caterpillers-class-type-4" name="Caterpillers-class-type-4">
            <label for="Caterpillers-location-4">Location:</label>
            <input type="text" id="Caterpillers-location-4" name="Caterpillers-location-4">
        </div>
        <div class="Schedule-description">
            <label for="Caterpillers-description-4">Description:</label>
            <textarea id="Caterpillers-description-4" name="Caterpillers-description-4"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">12:00 - 12:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="Caterpillers-class-type-5">Class Type:</label>
            <input type="text" id="Caterpillers-class-type-5" name="Caterpillers-class-type-5">
            <label for="Caterpillers-location-5">Location:</label>
            <input type="text" id="Caterpillers-location-5" name="Caterpillers-location-5">
        </div>
        <div class="Schedule-description">
            <label for="Caterpillers-description-5">Description:</label>
            <textarea id="Caterpillers-description-5" name="Caterpillers-description-5"></textarea>
        </div>
    </div>
    <hr class="Schedule-custom-hr">

    <div class="Schedule-time-label">01:00 - 01:50</div>
    <div class="Schedule-class-details">
        <div class="location-type">
            <label for="Caterpillers-class-type-6">Class Type:</label>
            <input type="text" id="Caterpillers-class-type-6" name="Caterpillers-class-type-6">
            <label for="Caterpillers-location-6">Location:</label>
            <input type="text" id="Caterpillers-location-6" name="Caterpillers-location-6">
        </div>
        <div class="Schedule-description">
            <label for="Caterpillers-description-6">Description:</label>
            <textarea id="Caterpillers-description-6" name="Caterpillers-description-6"></textarea>
        </div>
    </div>
    <button type="submit" name="Caterpillers-submit">Submit</button>

</form>

        


<!-- Display LadyBugs-->

<div class="Schedule-container" id="LadyBugs-Display-Container">

    <?php foreach ($ladyBugsData as $data): ?>
        <div class="date">
            <label>Date: </label>
            <span><?php echo $data['date']; ?></span>
        </div>

        <div class="Schedule-time-label"><?php echo $data['time']; ?>:00 - <?php echo $data['time']; ?>:50</div>
        <div class="Schedule-class-details">
            <div class="location-type">
                <label>Class Type: </label>
                <span><?php echo $data['type']; ?></span>
                <label>Location: </label>
                <span><?php echo $data['location']; ?></span>
            </div>
            <div class="Schedule-description">
                <label>Description: </label>
                <span><?php echo $data['description']; ?></span>
            </div>
        </div>
        <hr class="custom-hr">
    <?php endforeach; ?>

</div>


<!--Display BumbleBee-->

<div class="Schedule-container" id="BumbleBees-Display-Container">

    <?php foreach ($bumbleBeesData as $data): ?>
        <div class="Schedule-date">
            <label>Date: </label>
            <span><?php echo $data['date']; ?></span>
        </div>

        <div class="Schedule-time-label"><?php echo $data['time']; ?>:00 - <?php echo $data['time'] ; ?>:50</div>
        <div class="Schedule-class-details">
            <div class="location-type">
                <label>Class Type: </label>
                <span><?php echo $data['type']; ?></span>
                <label>Location: </label>
                <span><?php echo $data['location']; ?></span>
            </div>
            <div class="Schedule-description">
                <label>Description: </label>
                <span><?php echo $data['description']; ?></span>
            </div>
        </div>
        <hr class="Schedule-custom-hr">
    <?php endforeach; ?>

</div>

<div class="Schedule-container" id="Caterpillers-Display-Container">

    <?php foreach ($caterpillersData as $data): ?>
        <div class="Schedule-date">
            <label>Date: </label>
            <span><?php echo $data['date']; ?></span>
        </div>

        <div class="Schedule-time-label"><?php echo $data['time']; ?>:00 - <?php echo $data['time']; ?>:50</div>
        <div class="Schedule-class-details">
            <div class="location-type">
                <label>Class Type: </label>
                <span><?php echo $data['type']; ?></span>
                <label>Location: </label>
                <span><?php echo $data['location']; ?></span>
            </div>
            <div class="Schedule-description">
                <label>Description: </label>
                <span><?php echo $data['description']; ?></span>
            </div>
        </div>
        <hr class="Schedule-custom-hr">
    <?php endforeach; ?>

</div>

        <div class="edit-display">
            <button id="edit" onclick="displayForm('LadyBugs')">Edit Schedule</button>
            <button id="display" onclick="displaySchedule('LadyBugs')">Display Schedule</button>
        </div>



        <div class="Reservation-container">
        <h2>Class Reservation</h2>
        <form method="post">
            <div class="Reservation-form-group">
                <label for="className">Class Name:</label>
                <input type="text" id="className" name="className" required>
            </div>
            <div class="Reservation-form-group">
                <label for="reservationDate">Reservation Date:</label>
                <input type="text" id="reservationDate" name="reservationDate" required>
            </div>
            <div class="Reservation-form-group">
                <label for="reservationTime">Reservation Time:</label>
                <input type="text" id="reservationTime" name="reservationTime" required>
            </div>
            <div class="Reservation-form-group">
                <label for="eID">Teacher's ID:</label>
                <input type="text" id="eID" name="eID" required>
            </div>
            <button type="submit" name="Reservation-submit">Reserve</button>
        </form>
    </div>







    <div class="Attendance-container" id="Attendance-Display-Container">
    <h1>Attendance Marking Tool</h1>
    

    <form method="post" >

    <div class="date-container">
        <label for="attendanceDate">Date:</label>
        <input type="date" id="attendanceDate" name="attendanceDate">
    </div>

    <?php 
    $currentClass = null; 
    foreach ($students as $student): 
        if ($currentClass !== $student['classNum']) {
            if ($currentClass !== null) {
                echo '</div>'; 
            }
            $currentClass = $student['classNum'];
            echo '<div class="class-container">';
            echo '<h2>Class Number: ' . $currentClass . '</h2>';
        }
    ?>
    
    <div class="student-details">
        <label>Student ID: </label>
        <span><?php echo $student['studentID']; ?></span>
    </div>
    <div class="student-details">
        <label>Student Name: </label>
        <span><?php echo $student['fname'] . ' ' . $student['lname']; ?></span>
    </div>
    <div class="Attendance-status">
            <label>Attendance Status: </label>
            <span>
                <input type="radio" name="<?php echo $student['studentID']; ?>" value="1" >
                <label>Present</label>
                <input type="radio" name="<?php echo $student['studentID']; ?>" value="0">
                <label>Absent</label>
            </span>
        </div>
    <hr class="Attendance-custom-hr">

    <?php 
    endforeach; 
    if ($currentClass !== null) {
        echo '</div>'; // Close the last class container
    }
    ?>



    <div class="Attendance-submit-container">
        <input type="submit" value="Submit Attendance" class="submit-button" name="Attendance-submit">
    </div>
 </form>


</div>












<div class="Progress-container">
    <h2>Teacher Feedback Form</h2>
    <form method="post">
        <div class="form-group">
            <label for="studentName">Student Name:</label>
            <input type="text" id="studentName" name="studentName" required>
        </div>

        <div class="form-group">
            <label for="studentID">Student ID:</label>
            <input type="number" id="studentID" name="studentID" required>
        </div>

        <div class="form-group">
            <label for="behavior">Behavior in Class:</label>
            <textarea id="behavior" name="behavior" required></textarea>
        </div>

        <div class="form-group">
            <label for="cooperation">Cooperation:</label>
            <textarea id="cooperation" name="cooperation" required></textarea>
        </div>

        <div class="form-group">
            <label for="readingSkills">Reading Skills:</label>
            <textarea id="readingSkills" name="readingSkills" required></textarea>
        </div>

        <div class="form-group">
            <label for="tidiness">Tidiness:</label>
            <textarea id="tidiness" name="tidiness" required></textarea>
        </div>

        <div class="form-group">
            <label>Final Evaluation Criteria:</label>
            <div class="radio-group">
                <label><input type="radio" name="evaluation" value="Excellent"> Excellent</label>
                <label><input type="radio" name="evaluation" value="Very Good"> Very Good</label>
                <label><input type="radio" name="evaluation" value="Good"> Good</label>
                <label><input type="radio" name="evaluation" value="Needs Improvement"> Needs Improvement</label>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" name="submitFeedback" id="feedbackSubmit">Submit</button>
        </div>
    </form>
</div>


<div class="Progress-container">
    <h2>Progress Report</h2>
    <form method="post">
        <div class="form-group">
            <label for="studentID">Enter Student ID:</label>
            <input type="number" id="studentID" name="studentID" required>
        </div>

        <div class="form-group">
            <button type="submit" name="viewReport">View Report</button>
        </div>
    </form>

    <div class="progress-report">
        <?php echo $progressReport; ?>
    </div>
</div>



    <div class="LogOut">
        <a href="login.php"   id="logout">Logout</a>
    </div>




 

</body>
</html>


<script>
    function displayForm(className) {
      // Hide all class containers
      document.getElementById('LadyBugs-container').style.display = 'none';
      document.getElementById('BumbleBees-container').style.display = 'none';
      document.getElementById('Caterpillers-container').style.display = 'none';

        document.getElementById('LadyBugs-Display-Container').style.display = 'none';
        document.getElementById('BumbleBees-Display-Container').style.display = 'none';
        document.getElementById('Caterpillers-Display-Container').style.display = 'none';
  
      // Show the selected class container
      document.getElementById(className + '-container').style.display = 'block';

      document.getElementById('display').onclick = function() {
            displaySchedule(className);
        };

        document.getElementById('edit').onclick = function() {
            displayForm(className);
        };


     

    }


    function displaySchedule(className){

      

        document.getElementById('LadyBugs-Display-Container').style.display = 'none';
        document.getElementById('BumbleBees-Display-Container').style.display = 'none';
        document.getElementById('Caterpillers-Display-Container').style.display = 'none';

        document.getElementById('LadyBugs-container').style.display = 'none';
        document.getElementById('BumbleBees-container').style.display = 'none';
        document.getElementById('Caterpillers-container').style.display = 'none';

        document.getElementById(className + '-Display-Container').style.display = 'block';


    }


   

    
  </script>



