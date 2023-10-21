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
        if(!preg_match())
      }
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
    Gender: 
    <input type="ratio" name="gender" <?php if(isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
    <input type="ratio" name="gender" <?php if(isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
    <input type="radio" name="gender" <?php if(isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
    <span class="error"><?php echo $genderError ?></span>
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

