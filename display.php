<!-- display.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Display Input</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2>Submitted Information</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = htmlspecialchars($_POST['text']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $date = htmlspecialchars($_POST['date']);

    echo "<div class='alert alert-success'><strong>Form Submitted Successfully!</strong></div>";
    echo "<p><strong>Text:</strong> $text</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>My Message:</strong> $message</p>";
    echo "<p><strong>Date:</strong> $date</p>";
  } else {
    echo "<div class='alert alert-warning'>No data received. Please go back to the form.</div>";
  }
  ?>

  <a href="forms-elements.php" class="btn btn-secondary mt-3">Go Back</a>

</body>
</html>
