<!DOCTYPE html>
<html lang="en">
<head>
<style>
.error {color: #FF0000;}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body style="background-image:url('image.jpg'); background-size:cover; background-repeat:no-repeat;">
<?php
// define variables and set to empty values
$nameErr=$fnameErr=$mnameErr = $emailErr = $genderErr = $phonenoerr= $addresserr= $bloodgrouperr=$departmenterr=$courseerr=$flieerr="";
$name=$fname=$mname = $email = $gender = $phoneno =$address=$bloodgroup=$department=$course=$file="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["mname"])) {
    $mnameErr = "Name is required";
  } else {
    $mname = test_input($_POST["mname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$mname)) {
      $mnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["file"])) {
    $flieerr = "choose a file";
  } else {
    $course = test_input($_POST["file"]);
  }
  if (empty($_POST["course"])) {
    $courseerr = "select a course";
  } else {
    $course = test_input($_POST["course"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["comment"])) {
    $addresserr = "Address is Required";
  } else {
    $address = test_input($_POST["comment"]);
  
  }
  if (empty($_POST["bloodgrp"])) {
    $bloodgrouperr = "Please select any one blood group";
  } else {
    $bloodgroup = test_input($_POST["bloodgrp"]);
  }
  if (empty($_POST["number"])) {
    $phonenoerr = "Phone No is Required";
  } else {
    $phoneno = test_input($_POST["number"]);
    if(preg_match('/^[0-9]{10}+$/', $phoneno)) {
      echo "Valid Phone Number";
        } 
  }

  if (empty($_POST["dept"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["dept"]);
  }
  if (empty($_POST["dept"])) {
    $departmenterr = "Department is required";
  } else {
    $department = test_input($_POST["dept"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <form class="container bg-white" style="font-family:'Times New Roman';" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <center>
    <h1 style="font-family:'Times New Roman'; font-size:large;">Student Registration Form</h1>
    </center>
    <hr style="border:1px solid black">
    <div class="form-group">
    Name:<input type="text" name="name" class="form-control">
    <span class="error">* <?php echo $nameErr;?></span>
  <br>
    </div>
    <div class="form-group">
    Father's Name:<input type="text" name="fname"  class="form-control">
    <span class="error">* <?php echo $fnameErr;?></span>
  <br>
    </div>
    <div class="form-group">
    Mother's Name:<input type="text" name="mname" class="form-control">
    <span class="error">* <?php echo $mnameErr;?></span>
  <br>
    </div>
    <div class="form-group">
   Phone Number:<input type="text" name="number" placeholder="017xxxxxxxx" class="form-control">
   <span class="error">* <?php echo $phonenoerr;?></span>
  <br>
    </div>
   Email:<input type="text" name="email" placeholder="sample@example.com" class="form-control"><br>
   <span class="error">* <?php echo $emailErr;?></span>
  <br>
    Gender:
    <input type="radio" name="gender" value="male">male
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="other">other
    <br>
   <span class="error">* <?php echo $genderErr;?></span>
  <br>
   <div class="form-group">
   Address:<textarea name="comment" rows="10" cols="10" class="form-control"></textarea>
   <span class="error">* <?php echo $addresserr?></span>
   </div>
   <div class="form-group">
   Blood group:<select class="form-control" name="bloodgrp">
    <option>A+ve</option>
    <option>A-ve</option>
    <option>A1+ve</option>
    <option>B+ve</option>
    <option>B-ve</option>
    <option>B1+ve</option>
    <option>O+ve</option>
   </select>
   <span class="error">* <?php echo $bloodgrouperr?></span>
   </div>
   <div class="form-group">
   Department:
     <input type="radio" name="dept" value="CSE">CSE
    <input type="radio" name="dept" value="EEE">EEE
    <input type="radio" name="dept" value="BBA">other
    <br>
    <span class="error">* <?php echo $departmenterr?></span>
   </div>
   <div class="form-group" name="course">
    Course:
   <input type="checkbox"> C
   <input type="checkbox"> C++
   <input type="checkbox"> java
   <input type="checkbox"> AI
   <input type="checkbox"> Machine learning
   <input type="checkbox"> Robotics 
   </div>
   <span class="error">* <?php echo $courseerr?></span>
   </div>
   <div class="form-group">
    <input type="file" name="file">
    <span class="error">* <?php echo $flieerr?></span>
   </div>
   
   </div>
   <input type="submit" value="submit" name="submit" class="btn btn-success">
   <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $fname;
echo "<br>";
echo $mname;
echo "<br>";
echo $phoneno;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $file;
echo "<br>";
?>
</form>   
</body>
</html>