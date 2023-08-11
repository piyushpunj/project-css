<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'];
  

    $data = array( $email);

    $csvFile = 'subscribe.csv';
    $handle = fopen($csvFile, 'a'); // Open the file in append mode
    fputcsv($handle, $data); // Add data to CSV
    fclose($handle); // Close the file

    echo 'Thanku for Subscribing your Data saved successfully!';
} else {
    echo 'Invalid request';
}
?>
