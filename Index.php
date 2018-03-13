<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <script>
        function validateaccount() {
          var x = document.forms["myform"]["username"].value;
          var y = document.forms["myform"]["password"].value;
          if (x == "") {
              alert("Userame must be filled out");
              return false;
          }
          if (y == "") {
              alert("Password must be filled out");
              return false;
          }
        }
    </script>
  </head>
  <body>
    <div class="header">
        <img src="car1.jpg" height="300px" width="650px">
    </div>
    <br>
    <br>
    <div>
      <p class="test123">LOGIN</p>
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
