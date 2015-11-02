<?php

$name = "SomeName";
$value = "Value of cookie is here!";
//expire a week (seconds*hours*days*weeks)
$expiration = time() + (60*60*24*7);
//set cookie in the user computer (browser)
setcookie($name,$value,$expiration);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>cookies.php</title>
  </head>
  <body>
    <?php

    if(isset($_COOKIE["SomeName"])) {
      $someOne = $_COOKIE["SomeName"];
      echo $someOne;
    } else {
      echo "Page dosn't looking for a variable";
    }

    ?>
  </body>
</html>
