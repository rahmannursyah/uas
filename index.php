<?php

$conn = mysqli_connect("172.19.0.2", "root", "root", "trucorp");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ID, Nama, Kantor FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["ID"]. " - Nama: " . $row["Nama"]. " - Kantor(Pusat / Cabang): " . $row["Kantor"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
