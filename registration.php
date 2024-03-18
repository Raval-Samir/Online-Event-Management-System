<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Event Management System - Registration</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="registration-container">
    <h2>Register for Online Event Management System</h2>
    <form action="event-add.php" method="post">
      <div class="input-group">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="event">Event:</label>
        <textarea id="event" name="event" cols="80" rows="10"></textarea>
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>
