<?php
include 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $text = $_POST['text'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $date = $_POST['date'];

  $sql = "INSERT INTO user (text, email, message, date)
          VALUES ('$text', '$email', '$message', '$date')";

  echo "<!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <title>Display Data</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
  </head>
  <body class='container mt-5'>";

  if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>✅ Data saved successfully!</div>";

    
    echo "<div class='card p-3 mt-3'>
            <h4>Submitted Information</h4>
            <p><strong>Text:</strong> $text</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong> $message</p>
            <p><strong>Date:</strong> $date</p>
          </div>";

    
    echo "<a href='forms-elements.php' class='btn btn-secondary mt-3'>← Back to Form</a>";

  } else {
    echo "<div class='alert alert-danger'>❌ Error: " . $conn->error . "</div>";
    echo "<a href='forms-elements.php' class='btn btn-secondary mt-3'>← Back to Form</a>";
  }

  echo "</body></html>";

  $conn->close();
}
?>
