<!DOCTYPE html>
<html>
  <head>
    <title>Number Multiplication</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="post">
      <label for="num">Enter a number:</label>
      <input type="number" min="0" id="num" name="num">
      <button type="submit" name="multiply">Multiply</button><br><br>
    </form>

    <?php
      if (isset($_POST['multiply'])) {
        $num = intval($_POST['num']);
        if ($num >= 1 && $num <= 100) {
          echo "<table>";
          for ($i = 1; $i <= 12; $i++) {
            $result = $i * $num;
            echo "<tr><td>{$i} x {$num}</td><td>{$result}</td></tr>";
          }
          echo "</table>";
        } else {
            echo "<script>alert('Please enter a number between 1 and 100.')</script>";
        }
      }
    ?>
  </body>
</html>
