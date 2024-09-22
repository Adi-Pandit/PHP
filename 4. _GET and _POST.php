<?php
  /* 
  $_GET, $_POST = special variables used to collect data from an HTML form. Data is sent to the file in the action attribute of <form>. <form action="some_file.php" method="get">

  $_GET = Data is appended to the URL  
          NOT SECURE
          char limit
          Bookmark is possible w/ values
          GET requests can be cached
          Better for a search page

  $_POST = Data is packaged inside the body of the HTTP request
          MORE SECURE
          No data limit
          Cannot bookmark
          GET requests are not cached
          Better for submitting credentials
  */
?>

<!-- GET example -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label>username:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">
  </form>
</body>
</html> -->

<?php
  // echo $_GET["username"] . "<br>";
  // echo $_GET["password"] . "<br>";
?>

<!-- POST example -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>username:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">
  </form>
</body>
</html> -->

<?php
  // echo "{$_POST["username"]} <br>";
  // echo "{$_POST["password"]} <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>quantity:</label><br>
    <input type="number" name="quantity"  min="1" step="1" oninput="validity.valid||(value='');">
    <input type="submit" value="total">
  </form>
</body>
</html>

<?php 
  $item = "pizza";
  $price = 5.99;
  $quantity = $_POST["quantity"];
  $total = null;

  $total = $quantity * $price;
  echo "You have ordered {$quantity} x {$item}/s <br>";
  echo "Your total is: \${$total}";
?>