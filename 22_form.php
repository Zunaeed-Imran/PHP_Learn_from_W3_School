<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php

    $name = $email = $website = $comment = $gender = "";
    $nameError = $emailError = $genderError = $websiteError = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(empty($_POST['name'])){
        $nameError = 'Name required';
      }else{
        $name = test($_POST['name']);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
          $nameError = "Only letter and space allowed";
        }
      }
      if(empty($_POST["email"])){
        $emailError = "Email Required";
      } else {
        $email = test($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $emailError = 'Invalid email format';
        }
      }
      if(empty($_POST['website'])){
        $website = '';
      }else{
        $website = test($_POST['website']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
          $websiteError = "Invalid URL";
        }
      }
      if (empty($_POST['comment'])){
        $comment = '';
      }else{
        $comment = test($_POST['comment']);
      }
      if(empty($_POST['gender'])){
        $genderError = "Gender Required";
      } else {
        $gender = test($_POST['gender']);
      }
    }

  function test($data){
    return $data;
  }

  ?>


  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="erroe"><?php echo $nameError; ?></span>
    <br>
    Email: <input type="text" name="email" value="<?php echo $email ?>">
    <span class="error"><?php echo $emailError; ?></span>
    <br>
    Website: <input type="text" name="website" value="<?php echo $website ?>">
    <span class="error"><?php echo $websiteError ?></span>
    <br>
    Comment: <textarea name="comment" cols="30" rows="5"><?php echo $comment ?></textarea>
    <br>
    Gender:   <!-- remember to use type radio not ratio -->
    <input type="radio" name="gender" <?php if(isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
    <input type="radio" name="gender" <?php if(isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
    <input type="radio" name="gender" <?php if(isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
    <span class="error">*<?php echo $genderError ?></span>  
    <br>
    <input type="submit">
    <?php
      echo $name . "<br>";
      echo $email . "<br>";
      echo $website . "<br>";
      echo $comment . "<br>";
      echo $gender . "<br>";
    ?>
  </form>
</body>
</html>

