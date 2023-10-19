<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body></body>
  
<form action="<?php ($_SERVER['PHP_SELF']); ?>" method="post">

  Name: <input type="text" name="name"><br>
  Email: <input type="email" name="email"><br>
  Comment: <textarea name="comment" cols="30" rows="10"></textarea><br>
  Gender: <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="other">Other <br>
  <input type="submit">


</form>

</body>
</html>




<?php

// Basic example of form valiation

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $name . "<br>";
echo $email . "<br>";
echo $comment . "<br>";
echo $gender . "<br>";

?>