<?php  $cookie_name="new_user";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback</title>

    <style media="screen">
    body {
      font-family: Helvetica, sans-serif;
    }
    h2 {
      font-size: 40px;
      margin: 15px;
    }
    form {
      border: 3px solid #f1f1f1;
      width: 500px;
      margin: auto 200px auto 700px;
      padding: 30px;
    }
    input {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    input,textarea{
      font-size: 16px;
    }
      label{
        display: inline-block;
        width: 200px;
        text-align: left;
        margin:5px;
        font-size: 20px;
      }

      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 49%;
      }

      button:hover {
        opacity: 0.8;
      }
    </style>

  </head>
  <body  style="background:url(images/fbg.png) no-repeat center fixed; background-size: cover;">


    <div class="container">
      <form name="form" action="server.php" method="POST">
        <h1>Feedback Form</h1>
        <i><p>We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!</p></i>
        <hr>
         <label for="name">Name</label><br>
         <input type="text" name="name" value="<?php echo "$_COOKIE[$cookie_name]"?>" >
         <br>
         <label for="mail">User Email</label><br>
         <input type="text" name="mail">
         <br><br>
         <label for="pass">Feedback</label>
         <textarea style = "padding:10px;" name="comment" rows="7" cols="52" required></textarea>
<br><br>
         <button type="submit" name="submit_feedback" class="btn1">Submit</button>
         <button type="button" name="button" onclick = "window.location='index.php';">Back to Home</button>
     </form>
    </div>

  </body>
</html>
