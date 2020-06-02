<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    // showing text in a browser
    //excecise 4................
  $data = array("taukir", 88.9, true, 8, null, new stdclass);

  foreach($data as $value) {
      echo gettype($value) ."<br>";
  }
    ?>



</body>
</html>