<?php



$user = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username='$user'";

$result = mysqli_query($db, $sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$userid = $row['userid'];



$error = ""; //Variable for storing our errors.

if (isset($_POST["submit"])) {



    if (empty($_POST["distance"]) || empty($_POST["income"]) || empty($_POST["proof"])) {

        $error = "All fields are required.";

    } else {



        $servername = "localhost";

        $username = "root";

        $password = "";

        $dbname = "vtm";



        $start = $_POST['start'];

        $destination = $_POST['destination'];

        $distance = $_POST['distance'];

        $income = $_POST['income'];

        $proof = $_POST['proof'];

        $notes = $_POST['notes'];



// Create connection

        $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);

        }



        $sql = "INSERT INTO deliveries (deliveryid, userid, username, start, destination, distance, income, proof, info, approved)

VALUES ('', '$userid', '$user', '$start', '$destination', '$distance', '$income', '$proof', '$notes', '0');";



        if ($conn->multi_query($sql) === TRUE) {

            $error = "New records created successfully";

        } else {

            $error = "Error: " . $sql . "<br>" . $conn->error;

        }



        $conn->close();

    }

}