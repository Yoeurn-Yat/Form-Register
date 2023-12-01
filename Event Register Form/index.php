<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="css/master.css">
</head>
<body>
  <div class="container">
    <h2>Event Registration Form</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="fullname">Full Name *</label>
        <input type="text" id="txtFullname" name="txtFullname" placeholder="Your First name and Last name">
        <?php
          if(isset($_POST["buttonSubmit"])){
            $fullname = $_POST["txtFullname"];
            // Check if full name is not empty
            if (empty($fullname)) {
              echo '<span style="color: red;">* Please provide your Full name!</span><br>';
            } else {
            // Validate the full name
              if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
                echo '<span style="color: red;">* Your Full name should be use string only!</span><br>';
              } else {
                echo "Full Name: " . $fullname . "<br>";
              }
            }
          }
        ?>
      </div>
      <div class="form-group">
        <label for="email">Your Email Address *</label>
        <input type="email" id="txtEmail" name="txtEmail" placeholder="example@gmail.com">
        <?php
          if(isset($_POST["buttonSubmit"])){
            $email = $_POST["txtEmail"];
            // Check if full name is not empty
            if (empty($email)) {
              echo '<span style="color: red;">* Please provide your Email address!</span><br>';
            } else {
            
              $pattern = "/^[a-zA-Z]+[0-9\&\!\#\$\%\^\*\(\)\-\_\]+@[a-zA-Z]+(\.[a-zA-Z]+)*(\.[a-zA-Z]{2,3})$/iu";

              // Use preg_match() to check if the email address matches the pattern
              if (preg_match($pattern, $email)) {                
                echo "Your Email: ".$email;
              } else {
                echo '* Please re_enter your email:<span style="color: red;"> example@gmail.com</span><br>';
              }
            }            
          }
        ?>
      </div>
      <div class="form-group">
        <label for="company">Company Name</label>
        <input type="text" id="company" name="company" placeholder="Where do you work?">
        <?php
          if(isset($_POST["buttonSubmit"])){
            $company = $_POST["company"];
            if($company=$_POST["company"]){
              echo "Your Company Name: ".$company;
            }else{
              echo "None";
            }
          }
        ?>
      </div>
      <div class="form-group">
        <label for="size">Company Size</label>
        <select id="size" name="size">
          <option disabled selected value="">Please Select</option>
          <option value="1-10">1-10 employees</option>
          <option value="11-50">11-50 employees</option>
          <option value="51-100">51-100 employees</option>
          <option value="101+">101+ employees</option>
        </select>
        <?php
          if(isset($_POST["buttonSubmit"])){
            $size = $_POST["size"];
            if($size=$_POST["size"]){
              echo "Your Company Size: ".$size;
            }else{
              echo "None Choose";
            }
          }          
        ?>
      </div>
      <div class="form-group">
        <label for="hear">How did you hear about us?</label>
        <select id="hear" name="hear">
          <option disabled selected value="">Please Select</option>
          <option value="Website">Website</option>
          <option value="Social Media">Social Media</option>
          <option value="Referral">Referral</option>
          <option value="Other">Other</option>
        </select>
        <?php
          if(isset($_POST["buttonSubmit"])){
            $hear = $_POST["hear"];
            if($hear=$_POST["hear"]){
              echo "Your Company Name: ".$hear;
            }else{
              echo "None Choose";
            }
          }
        ?>
      </div>    
        <div class="subscribe">
          <span style="float: left;"></span>
            <input type="checkbox" id="subscribe" name="subscribe">
            <label for="subscribe">I would like to receive emails about future events</label>  
            <style>
                #status{
                  margin: 5px 120px;
                  text-align: center;
                  background-color: #4CAF50;
                  border:1px solid grey;
                  color: white;
                }
            </style> 
            <p id="status">Not Active</p>   
        </div>         
      <div class="form-group">
        <button type="submit" value="Submit" name="buttonSubmit"><p id="submit">Register for Event</p></button>
      </div>
    </form>
  </div>
  <script src="js/javascript.js"></script>
</body>
</html>