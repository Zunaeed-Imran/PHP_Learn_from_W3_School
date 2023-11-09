<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
  </table>
</body>

</html>

<?php
include 'connect_localhost.php';

$display = "SELECT * FROM `practice`";
$result = mysqli_query($connect, $display);

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];

    echo '<table>
            <tbody>
              <tr>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
              </tr>
            </tbody>
          </table>';
  }
}

?>