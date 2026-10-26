
<?php

include 'dbcon.php';

// Get values from the HTML form
$visitDate = $_POST['visitDate'];
$visitTime = $_POST['visitTime'];
$doctorId = $_POST['docid'];
$patientId = $_POST['ptntid'];
$cost = $_POST['cost'];

// Build the SQL query
$sql = "INSERT INTO visit (visit_date, visit_time, doctor_id, patient_id, cost)
        VALUES ('$visitDate', '$visitTime', '$doctorId', '$patientId', '$cost')";

// Display the SQL query for testing
echo $sql;

?>
