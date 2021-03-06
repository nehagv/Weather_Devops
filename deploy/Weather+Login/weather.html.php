<?php
    opcache_reset();
    session_start();
	include("dbconnect.php");
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Get Weather</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class='wrapper'>
    <div class="user-name">
      <p><?php echo $_SESSION['first_name']; ?>  (logged in)</p>
    </div>
  <search>
    <form>
      <input class='searchbar transparent' id='search' type='text' placeholder='enter city, country' />
      <input class='button transparent' id='button' type="submit" value='GO' />
    </form>
  </search>

  <div class='panel'>
    <h2 class='city' id='city'></h2>
    <div class='weather' id='weather'>
      <div class='group secondary'>
        <h3 id='dt'></h3>
        <h3 id='description'></h3>
      </div>
      <div class='group secondary'>
        <h3 id='wind'></h3>
        <h3 id='humidity'></h3>
      </div>
      <div class='temperature' id='temperature'>
        <h1 class='temp' id='temp'><i id='condition'></i> <span id='num'></span><a class='fahrenheit active' id='fahrenheit' href="#">&deg;F</a><span class='divider secondary'>|</span><a class='celsius' id='celsius' href="#">&deg;C</a></h1>
      </div>
      <div class='forecast' id='forecast'></div>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
