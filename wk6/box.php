<!DOCTYPE html>
<html>
  <head>
    <title>JANA KOTAK</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <h3>JANA KOTAK</h3>
    <form method="POST">
      <label for="height">Height:</label>
      <input type="text" name="height" id="height" size="5">
      <br><br>
      <label for="width">Width:</label>
      <input type="text" name="width" id="width" size="5">
      <br><br>
      <input type="submit" name="submit" id="submit" value="Jana">
      <br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $height = $_POST["height"];
      $width = $_POST["width"];
      echo "<table border='1' width='50%' height='50%' cellpadding='2' cellspacing='0' style='text-align: center; margin: auto;'>";

      for ($row = 1; $row <= $height; $row++) {
        echo "<tr> \n";
        for ($col = 1; $col <= $width; $col++) {
          echo "<td></td> \n";
        }
        echo "</tr>";
      }
      echo "</table>";
    }
    ?>
  </body>
</html>

