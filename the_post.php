<?php
// the_post $_POST
echo $_POST['name'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>the_post.php</title>
  </head>
  <body>

    <form action="the_post.php" method="post">

      <input type="text" name="name">
      <input type="submit" name="submit" value="submit">

    </form>

  </body>
</html>
