<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Registration.css">
    <title>Registration Form</title>
</head>
<body>
<div class="form-container">
    <h2>Registration Form</h2>
    <form id="registrationForm" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" placeholder="Enter your age" required>
      </div>
      <div class="form-group">
        <label for="program">Program</label>
        <input type="text" id="program" name="program" placeholder="Enter your program (e.g., BSIT)" required>
      </div>
      <div class="form-group">
        <label for="yearSection">Year & Section</label>
        <input type="text" id="yearSection" name="yearSection" placeholder="Enter your year & section (e.g., 3A)" required>
      </div>
      <button type="submit" class="submit-btn">Register</button>
    </form>
  </div>
</body>
</html>