<?php
include 'databaseConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Feedback Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="card shadow-lg rounded-4">
    <div class="card-body">
      <h3 class="text-center mb-4">All Submitted Feedbacks</h3>
      
      <a href="index.php" class="btn btn-success mb-3">➕ Add New Feedback</a>

      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-dark text-center">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Rating</th>
              <th>Comment</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = $conn->query("SELECT * FROM USER_FEEDBACK ORDER BY user_id DESC");
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['user_id']}</td>
                            <td>{$row['user_name']}</td>
                            <td>{$row['user_email']}</td>
                            <td>{$row['rating']}</td>
                            <td>{$row['comment']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center text-muted'>No feedbacks yet!</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>
