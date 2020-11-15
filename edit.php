<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'phufarpsw.mysql.database.azure.com', 'phufarpsw@phufarpsw', 'EMLbmk28', 'itflab', 3306);
$res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID='$id'");
$row = mysqli_fetch_array($res)
?>
<form action = "update.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm">
    <label for="Username">Username :</label>
      <input type="text" name = "Name" id="idName" value="<?php echo "$row[Name]"; ?>" <br>
      <label for="Username">Comment :</label>
      <input type="text" name = "Comment" id="idComment" value="<?php echo "$row[Comment]"; ?>" <br>
    <label for="Username">Link :</label>
      <input type="text" name = "Link" id="idLink" value="<?php echo "$row[Link]"; ?>"> <br><br>
      <input type="submit" id="commentBtn"class="btn btn-outline-warning">
  </form>
