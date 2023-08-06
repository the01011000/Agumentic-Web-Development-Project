<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Perform admin authentication here
    $admin_id = $_POST["admin_id"];
    $password = $_POST["password"];

    // Replace this with your actual admin authentication logic
    // For example, you can check the admin credentials against a database of admin users
    $valid_admin_id = "admin"; // Replace with actual admin ID
    $valid_password = "password"; // Replace with actual admin password

    if ($admin_id === $valid_admin_id && $password === $valid_password) {
        // Authentication successful, redirect to the admin dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Authentication failed, redirect back to the admin login page
        header("Location: admin_login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="admin-dashboard">
    <h2>Welcome, Admin!</h2>
    <div class="hero-content-update">
      <!-- Admin can update the hero banner content here -->
      <form id="update-hero-form">
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit">Update Hero Banner</button>
      </form>
    </div>
    <div class="contact-details-update">
      <!-- Admin can update the contact details here -->
      <form id="update-contact-form">
        <input type="text" name="address" placeholder="Address" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Update Contact Details</button>
      </form>
    </div>
  </div>

  <script src="jquery.min.js"></script>
  <script src="scripts.js"></script>
</body>
</html>
