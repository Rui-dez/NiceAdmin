<!-- form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2>Enter Your Information</h2>

  <form action="display.php" method="POST">
    <div class="row mb-3">
      <label for="inputText" class="col-sm-2 col-form-label">Text</label>
      <div class="col-sm-10">
        <input type="text" id="inputText" name="text" class="form-control" required>
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" id="inputEmail" name="email" class="form-control" required>
      </div>
    </div>

   <div class="row mb-3">
      <label for="inputMessage" class="col-sm-2 col-form-label">Message</label>
      <div class="col-sm-10">
        <textarea id="inputMessage" name="message" class="form-control" rows="3" required></textarea>
      </div>
    </div>

    
   <div class="row mb-3">
      <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
      <div class="col-sm-10">
        <input type="date" id="inputDate" name="date" class="form-control" required>
      </div>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

</body>
</html>
