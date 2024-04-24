<?php


$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "project"; 
$conn = new mysqli($servername, $username, $password, $database, "3308");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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



$progressReport = "";


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


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(img/Busbg.jpg);
        }



        .Schedule-container{
            background-color: rgba(195, 177, 225, 0.8);
            max-width: 800px;
            margin:0px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 100px;
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

    
    #BumbleBees-Display-Container,#Caterpillers-Display-Container{
        display:none;
    }

    #LadyBugs-Display-Container{
        background-color: rgba(255, 128, 128, 0.9);

    }

    #BumbleBees-Display-Container{
        background-color:rgba(255, 241, 41, 0.8);
    }

    #Caterpillers-Display-Container{
        background-color: rgba(144, 255, 41, 0.8);
    }

    .edit-display{
        display:flex;
        justify-content:center;
        gap:5px;
        border-radius:10px;
    }





        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label, input, button {
            display: block;
            margin-bottom: 15px;
        }

        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .finances {
            margin-top: 20px;
            margin-left:20%;
            margin-right:20%;
        }

        .finance-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            background-color:white;
        }

        .receipt-id, .statement, .total {
            margin-bottom: 5px;
        }


        .video-container {
            display: flex;
            justify-content: space-between;
            margin-left:5%;
            margin-right:5%;
            text-align:center;
            margin-bottom:100px;
            
        }

        .video-box {
            flex: 0 0 48%; 
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ffffff;
            

        }

        .video-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        video {
            width: 100%;
            border-radius: 5px;
        }







        

        .Progress-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 100px;
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






    <div class="video-container">
    <div class="video-box">
        <h2 class="video-title">Classroom A</h2>
        <video controls>
            <source src="/Video1" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="video-box">
        <h2 class="video-title">PlayGround</h2>
        <video controls>
            <source src="/Video2" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
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








<div class="container">
        <h1>Finances Lookup</h1>
        <form method="post">
            <label for="pID">Enter pID:</label>
            <input type="text" id="pID" name="pID" required>
            <button type="submit">Search</button>
        </form>
    </div>


<?php
if (isset($_POST['pID'])) {
    $pID = $_POST['pID'];

    $query = "SELECT * FROM finances WHERE pID = '$pID'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo '<div class="finances">';
        echo '<h2>Statement of Fees:</h2>';
        
        $totalSum = 0;
        
        while ($finance = $result->fetch_assoc()) {
            echo '<div class="finance-item">';
            echo '<div class="receipt-id">Receipt ID: ' . htmlspecialchars($finance['receiptID']) . '</div>';
            echo '<div class="statement">Statement: ' . htmlspecialchars($finance['statement']) . '</div>';
            echo '<div class="total">Total: ' . htmlspecialchars($finance['total']) . '</div>';
            echo '</div>';
            
            $totalSum += $finance['total'];
        }
        
        echo '<div class="finance-item">Total Sum: ' . $totalSum . '</div>';
        
        echo '</div>';
    } else {
        echo '<p>No finances found for pID: ' . $pID . '</p>';
    }
}
?>



<div class="LogOut">
        <a href="login.php"   id="logout">Logout</a>
    </div>


</body>
</html>




<script>
    function displayForm(className) {


        document.getElementById('LadyBugs-Display-Container').style.display = 'none';
        document.getElementById('BumbleBees-Display-Container').style.display = 'none';
        document.getElementById('Caterpillers-Display-Container').style.display = 'none';
  
      // Show the selected class container
      document.getElementById(className + '-Display-Container').style.display = 'block';

   

     

    }


    
  </script>

