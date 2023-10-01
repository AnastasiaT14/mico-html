<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputPatientName = $_POST['inputPatientName'];
    $inputDoctorName = $_POST['inputDoctorName'];
    $inputDepartmentName = $_POST['inputDepartmentName'];
    $inputPhone = $_POST['inputPhone'];
    $inputSymptoms = $_POST['inputSymptoms'];
    $inputDate = $_POST['inputDate'];
    echo "Patient Name: $inputPatientName<br>";
    echo "Doctor's Name: $inputDoctorName<br>";
    echo "Department's Name: $inputDepartmentName<br>";
    echo "Phone Number: $inputPhone<br>";
    echo "Symptoms: $inputSymptoms<br>";
    echo "Date: $inputDate<br>";
    echo "Appointment booked successfully!<br>";
}

?>
