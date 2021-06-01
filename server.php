
<?php
  $cookie_name = 'new_user';
  if (isset($_COOKIE[$cookie_name])) {
    unset($_COOKIE[$cookie_name]);
    setcookie($cookie_name, '', time() - 3600, '/');

  }
  $error = array();
  $con = mysqli_connect('localhost:3306','root','','maharashtra');
  if (isset($_POST["submit_reg"]))
  {
    $user = mysqli_real_escape_string($con,$_POST['name']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);
    $cpass = mysqli_real_escape_string($con,$_POST['cpass']);
    $email = mysqli_real_escape_string($con,$_POST['email']);

    if(empty($user)) {array_push($error, "Customer Name is required");}
    if(empty($email)) {array_push($error, "Email is required");}
    if(empty($pass)) {array_push($error, "Password is required");}
    if($pass!= $cpass){
      array_push($error, "Passwords do not match");
    }
    $user_check = "SELECT * FROM customer WHERE email = '$email' LIMIT 1";
    $check = mysqli_query($con,$user_check);
    $u = mysqli_fetch_assoc($check);

    if($u){
      if($u['email'] === $email)
        array_push($error,"An account already exists with this Email Id");
    }
    if(count($error) == 0) {
      $q1 = "INSERT INTO customer (custname, password, email) VALUES('$user','$pass','$email')";
      mysqli_query($con,$q1);
      $cookie_name = "new_user";
      $cookie_value = $user;
      setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");
      header("location: index.php");
    }
    echo "<center> <b> <p style='text-align:left;background-color:white; padding:10px; margin:0;width:350px;'>
      ERROR: Please try again </p> </b> </center>";
    foreach ($error as $key => $value) {
        echo "<center>
        <div style='text-align:left;background-color:'#ffcccb'; padding:10px; width:350px;'>". $value."<br/>"."</div>
        </center>";
    }
  }
//LOGIN USER
  if (isset($_POST["submit_login"])) {
    $error= array();
    $pass = mysqli_real_escape_string($con ,$_POST['pass']);
    $email = mysqli_real_escape_string($con,$_POST['email']);

    if(empty($email)) {array_push($error, "Email is required");}
    if(empty($pass)) {array_push($error, "Password is required");}
    $user_check = "SELECT * FROM customer WHERE email = '$email' LIMIT 1";
    $check = mysqli_query($con,$user_check);
    $u = mysqli_fetch_assoc($check);
    if(count($error)==0 and $u){
      if($u['email'] === $email and $u['password']=== $pass){
        $cookie_name = "new_user";
        $cookie_value = $u['custname'];
        setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");
        header("location: index.php");
      }
    }
    echo "<center> <b> <p style='text-align:left;background-color:white; padding:10px; margin:0;width:300px;'>
      ERROR: Please try again </p> </b> </center>";
    foreach ($error as $key => $value) {
      echo "<center>
        <div style='text-align:left;background-color:white; padding:10px; width:300px;'>". $value."<br/>"."</div>
        </center>";
    }
  }

  if (isset($_POST["submit_feedback"]))
  {
    $user = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['mail']);
    $comment = mysqli_real_escape_string($con,$_POST['comment']);

    if(empty($comment)) {array_push($error, "Feedback is required");}

    if(count($error) == 0) {
      $q1 = "INSERT INTO feedback (name, email,feedback) VALUES('$user','$email','$comment')";
      mysqli_query($con,$q1);
      $cookie_name = "new_user";
      $cookie_value = $u['name'];
      setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");
      header("location: index.php");
    }
    echo "<center> <b> <p style='text-align:left;background-color:white; padding:10px; margin:0;width:350px;'>
      ERROR: Please try again </p> </b> </center>";
    foreach ($error as $key => $value) {
        echo "<center>
        <div style='text-align:centre;background-color:'#ffcccb'; padding:10px; width:350px;'>". $value."<br/>"."</div>
        </center>";
    }
  }
  ?>
