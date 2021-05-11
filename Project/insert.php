<!DOCTYPE html>
<html>

<head>
  <title>Insert Page</title>
  <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  padding: 11px; 
  text-align: center;
  text-decoration: none !important;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  margin-left:46%;
}
a:link {
  color: white;
  text-decoration: none;
}
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:active {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

.button1 {font-size: 15px;}</style>
</head>

<body>
  <center>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    $conn = mysqli_connect('localhost', 'root', '', "mydb");

    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. "
        . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO users VALUES ('$first_name',
      '$last_name','$gender','$address','$email')";

    if(mysqli_query($conn, $sql)){
      echo "<h3>Data stored in a database successfully.</h3>";

      echo "<b>Entered Details are: </b>"."<br>";

      echo nl2br("\n FIRST NAME: $first_name\n LAST NAME: $last_name\n "
        . " GENDER: $gender\n ADDRESS: $address\n EMAIL: $email");
    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
  </center><br>
  <button class="button button1" ><a href="home.php">Go To Home</button>
</body>

</html>