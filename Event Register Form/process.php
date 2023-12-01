<!DOCTYPE html>
<html>
<head>
  <title>Registration Result</title>
</head>
<body>
  <h2>Registration Result</h2>

  <?php
  // Retrieve form data
  $fullname =$_POST['txtFullname'];
  $email = $_POST['txtEmail'];
  $company = $_POST['company'];
  $size = $_POST['size'];
  $hear = $_POST['hear'];
  $subscribe = isset($_POST['subscribe']) ? 'Yes' : 'No';

  // Process the form data or perform any necessary operations

  // Display the result
  ?>
  <form>
    <div>
      <label for="fullname">Full Name:</label>
      <input type="text" id="txtfullname" name="txtfullname" value="<?php echo $fullname; ?>" readonly>
    </div>
    <div>
      <label for="email">Email Address:</label>
      <input type="email" id="txtEmail" name="txtEmail" value="<?php echo $email; ?>" readonly>
    </div>
    <div>
      <label for="company">Company Name:</label>
      <input type="text" id="company" name="company" value="<?php echo $company; ?>" readonly>
    </div>
    <div>
      <label for="size">Company Size:</label>
      <input type="text" id="size" name="size" value="<?php echo $size; ?>" readonly>
    </div>
    <div>
      <label for="hear">How did you hear about us?</label>
      <input type="text" id="hear" name="hear" value="<?php echo $hear; ?>" readonly>
    </div>
    <div>
      <label for="subscribe">Subscribe to future events:</label>
      <input type="text" id="subscribe" name="subscribe" value="<?php echo $subscribe; ?>" readonly>
    </div>
  </form>

</body>
</html>