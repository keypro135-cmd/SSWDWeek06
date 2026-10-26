
<?php

include 'dbcon.php';


$sql = "SELECT * FROM visit";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $visitDate = $row['visit_date'];
    $visitTime = $row['visit_time'];
    $doctorId = $row['doctor_id'];
    $patientId = $row['patient_id'];
    $cost = $row['cost'];

    echo "<tr>";
    echo "<td>$visitDate</td>";
    echo "<td>$visitTime</td>";
    echo "<td>$doctorId</td>";
    echo "<td>$patientId</td>";
    echo "<td>$cost</td>";
    echo "</tr>";
}

?>
