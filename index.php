<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      background: linear-gradient(to right, #e2dad1ff, #ffffff);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .feedback-card {
      width: 100%;
      max-width: 500px;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      background: #fff;
    }
    .btn-custom {
      width: 100%;
      font-weight: 600;
    }
  </style>
</head>
<body>

<div class="feedback-card">
  <h3 class="text-center mb-4">Website Feedback</h3>
  <form id="feedbackForm" action="index.php" method="POST" onsubmit="return validateForm()">
    
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
      <div class="text-danger" id="nameError"></div>
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email">
      <div class="text-danger" id="emailError"></div>
    </div>

    <div class="mb-3">
      <label class="form-label">Rating (1 to 5)</label>
      <select name="rating" id="rating" class="form-select">
        <option value="">Select rating</option>
        <option value="1">Very Bad</option>
        <option value="2">Bad</option>
        <option value="3">Average</option>
        <option value="4">Good</option>
        <option value="5">Excellent</option>
      </select>
      <div class="text-danger" id="ratingError"></div>
    </div>

    <div class="mb-3">
      <label class="form-label">Feedback Message</label>
      <textarea name="message" id="message" class="form-control" rows="3" placeholder="Write your feedback..."></textarea>
      <div class="text-danger" id="messageError"></div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary btn-custom">Submit Feedback</button>
  </form>
</div>

<!-- JavaScript Form Validation -->
<script>
function validateForm() {
  let valid = true;

  // Get field values
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let rating = document.getElementById("rating").value;
  let message = document.getElementById("message").value.trim();

  // Clear previous errors
  document.getElementById("nameError").innerHTML = "";
  document.getElementById("emailError").innerHTML = "";
  document.getElementById("ratingError").innerHTML = "";
  document.getElementById("messageError").innerHTML = "";

  // Name validation
  if (name === "" || !/^[A-Za-z ]+$/.test(name)) {
    document.getElementById("nameError").innerHTML = "Please enter a valid name (letters only).";
    valid = false;
  }

  // Email validation
  let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (email === "" || !emailPattern.test(email)) {
    document.getElementById("emailError").innerHTML = "Please enter a valid email address.";
    valid = false;
  }

  // Rating validation
  if (rating === "") {
    document.getElementById("ratingError").innerHTML = "Please select a rating.";
    valid = false;
  }

  // Message validation
  if (message === "") {
    document.getElementById("messageError").innerHTML = "Feedback message cannot be empty.";
    valid = false;
  }

  return valid;
}
</script>

</body>
</html>

<?php
include 'databaseConnection.php';

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $rating=trim($_POST['rating']);
    $message = trim($_POST['message']);

    $sql = "INSERT INTO USER_FEEDBACK (user_name, user_email, rating,comment) VALUES ('$name', '$email','$rating', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        // redirect to view_data.php after successful insert
        header("Location: view_data.php");
        exit();
    } else {
        echo "<div class='alert alert-danger text-center mt-3'>Error: " . $conn->error . "</div>";
    }
}
?>