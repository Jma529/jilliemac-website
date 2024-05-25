<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["email"];

    // Display the submitted data
    echo "Thanks $firstName for signing up.<br>";
  }

// If submitted, validate form
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form id ="lForm" class="landing-form" action="#" method="post">
  <div>
    <div class="form-heading">
    <h2> Sign up here</h2>
    <p>*number* remaining tickets</p>
</div>
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" required="required" placeholder="Enter your first name" />
  </div>
  <div>
    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" required="required" placeholder="Enter your last name" />
  </div>

  <div>
    <label for="name">Email:</label>
    <input type="email" name="email" required="required" placeholder="Enter your email" />
  </div>

  <input id="submit" name="submitTrue" value="submit" type="submit">Sign up!</button>
</form>
