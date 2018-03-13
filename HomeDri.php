<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
  </head>
  <body>
    <div class="header">
        <img src="car1.jpg" height="300px" width="650px">
    </div>
    <br>
    <br>
    <div>
      <p class="test123"><a href="HomePass.php">HOME</a></p>
      <p class="test123"><a href="Availableoffers.php">AVAILABLE OFFERS</a></p>
      <p class="test123"><a href="Requestedroutes">REQUESTED ROUTES</a></p>
    </div>
    <table align="center">
      <form name="myform" action="comparedata.php" onsubmit="return validateaccount()" method="post">
        <tr>
          <td>Username</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <th COLSPAN="2"><input type="submit" value="submit"> </input><br></th>
        </tr>
      </form>
    </table>
  </body>
</html>
