
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400);

/* fontawesome */
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

/* Simple Reset */
* { margin: 0; padding: 0; box-sizing: border-box; }

/* body */
body {
  background: #e4fbff;
  color: #5e5e5e;
  font: 400 87.5%/1.5em 'Open Sans', sans-serif;
}

/* Form Layout */
.form-wrapper {
  background: #fafafa;
  margin: 3em auto;
  padding: 0 1em;
  max-width: 370px;
  box-shadow: 10px 10px 5px grey;
}

h1 {
  text-align: center;
  padding: 1em 0;
}

form {
  padding: 0 1.5em;
}

.form-item {
  margin-bottom: 0.75em;
  width: 100%;
}

.form-item input {
  background: #fafafa;
  border: none;
  border-bottom: 2px solid #e9e9e9;
  color: #666;
  font-family: 'Open Sans', sans-serif;
  font-size: 1em;
  height: 50px;
  transition: border-color 0.3s;
  width: 100%;
}

.form-item input:focus {
  border-bottom: 2px solid #c0c0c0;
  outline: none;
}

.button-panel {
  margin: 2em 0 0;
  width: 100%;
}

.button-panel .button {
  background: #7eca9c;
  border: none;
  color: #fff;
  cursor: pointer;
  height: 50px;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.2em;
  letter-spacing: 0.05em;
  text-align: center;
  text-transform: uppercase;
  transition: background 0.3s ease-in-out;
  width: 100%;
}

.button:hover {
  background: #ee3e52;
}

.form-footer {
  font-size: 1em;
  padding: 2em 0;
  text-align: center;
}

.form-footer a {
  color: #8c8c8c;
  text-decoration: none;
  transition: border-color 0.3s;
}

.form-footer a:hover {
  border-bottom: 1px dotted #8c8c8c;
}
    </style>
</head>
<body>
<!-- <div class="form_container">
    <form>
    <label>User Name:</label><br><br>
    <input type="text" placeholder="Enter your Name" name="username"><br><br>
    <label>Email:</label><br><br>
    <input type="email" placeholder="abc@xyz.com" name="email"><br><br>
    <input style="background-color:#90EE90; border-color:#A52A2A; border-radius:10px;" type="submit" name="submit"> 
    </form>
</div> -->
<div class="form-wrapper">
  <h1>Sign In</h1>
  <form method="POST">
    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="Email Address"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="password" required="required" placeholder="Password"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="Sign In" name="submit"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="signup.php">Create an account</a></p>
  </div>
</div>
</body>
<?php
if(isset($_POST['submit'])) {

	$email_user = array("nns15899@gmail.com", "amartyadixit02@gmail.com", "saxenadivyanshi004@gmail.com");
  $password_user = array('nns15889@gmail.com'=>1234, 'amartyadixit02@gmail.com'=>1234,'saxenadivyanshi004@gmail.com'=>1234);

	$email = $_POST['email'];
  $password = $_POST['password'];
  if(in_array($email, $email_user)){
    if(in_array($password, $password_user)){
     
      header("Location:home.php");

    }
	}

	if(!in_array($email, $email_user) || (!in_array($password, $password_user))){

		echo '<script>alert("You are not allowed")</script>';

	}
}

?>
</html>