<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="15_practice_create.php">
    <button type="button">Create a User</button>
  </a>

  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
  </table>
</body>

</html>

<?php
include '15_practice_connect.php';

$index_page = "SELECT * from `practice3`";
$result = mysqli_query($connect, $index_page);

if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $image = $row['image'];

    echo '<table>
        <tbody>
          <tr>
            <tb>' . $id . '</tb>
            <tb>' . $name . '</tb>
            <tb>' . $image . '</tb>
            <tb>
              <a href="15_practice_delete.php?id=<?= $row[id] ?>">
                <button type="button">Delate</button>
              </a>
            </tb>
          </tr>
        </tbody> 
       </table>';
  }
}
