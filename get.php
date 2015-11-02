<?php
//get information to url and print what inside array GET
print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>get.php</title>
  </head>
  <body>

    <?php
      $id= 10;
      $button= "CLICK HERE NOW";
    ?>
    <a href="get.php?id=<?php echo $id; ?>"><?php echo $button; ?></a>

  </body>
</html>
