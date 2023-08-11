<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
  $Suggestions = $_POST['Suggestions'];

    $data = array($name, $email,$Suggestions);

    $csvFile = 'user_data.csv';
    $handle = fopen($csvFile, 'a'); // Open the file in append mode
    fputcsv($handle, $data); // Add data to CSV
    fclose($handle); // Close the file

    echo 'Data saved successfully!';
} else {
    echo 'Invalid request';
}
?>
