<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carrental";
    $usernameloc = $_POST['username'];
    $passwordloc = $_POST['password'];
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
      $query = "SELECT * FROM carsharing WHERE Username ='$usernameloc' AND Password = '$passwordloc' ";

      $result = mysqli_query($conn, $query);
      if(mysqli_num_rows($result)>0)
      {
        echo "Connected successfully";
        $row = mysqli_fetch_assoc($result);
        $type = $row["Type"];
        if($type == "passanger")
        {
          header("Location: HomePass.php");
        }
        else if($type == "driver")
        {
          header("Location: HomeDri.php");
        }
      }
      if(mysqli_num_rows($result)==0)
      {
        echo "No Data";
        header("Location: index.php");
      }
    }
 ?>
