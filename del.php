<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'phufarpsw.mysql.database.azure.com', 'phufarpsw@phufarpsw', 'EMLbmk28', 'itflab', 3306);
$sql="DELETE FROM guestbook WHERE ID='$id'";
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
