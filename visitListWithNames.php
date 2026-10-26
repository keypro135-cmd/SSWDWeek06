
<?php

include 'dbcon.php';

// Get visits with patient names
$sql = "SELECT visit_date, visit_time, patient.Firstname, patient.Surname
        FROM visit
        INNER JOIN patient ON patient.id = visit.patient_id";

$result = mysqli_query($conn, $sql);

// Display visits in a table
while ($row = mysqli_fetch_assoc($result)) {
    $visitDate = $row['visit_date'];
    $visitTime = $row['visit_time'];
    $firstName = $row['Firstname'];
    $surname = $row['Surname'];

    echo "<tr>";
    echo "<td>$visitDate</td>";
    echo "<td>$visitTime</td>";
    echo "<td>$firstName</td>";
    echo "<td>$surname</td>";
    echo "</tr>";
}

?>
