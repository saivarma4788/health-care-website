<?php
// File where settings will be saved
$file = 'settings_data.txt';

// Check if form data is received via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the hospital name and doctor name from the form
    $hospital_name = $_POST['hospital_name'];
    $doctor_name = $_POST['doctor_name'];

    // Prepare the data to be saved in the file
    $settingsData = "Hospital Name: $hospital_name\nDoctor Name: $doctor_name\n";

    // Save the data to the file
    file_put_contents($file, $settingsData);

    // Redirect back to the homepage (index.html)
    header('Location: /');
    exit;
}
?>

