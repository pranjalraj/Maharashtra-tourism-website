 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body style = "margin:0;">
     <?php
      $con = mysqli_connect('localhost:3306','root','','maharashtra');
      if (!$con)
        die('Could not connect: ' . mysqli_error());

        $key = mysqli_real_escape_string($con,$_POST['keyword']);
        //SELECT * FROM mytable WHERE column1 LIKE '%word1%'   OR column1 LIKE '%word2%'   OR column1 LIKE '%word3%'
        $user_check = "SELECT * FROM search WHERE name LIKE '%$key%' LIMIT 1";
        $check = mysqli_query($con,$user_check);
        $u = mysqli_fetch_assoc($check);
        if($u)
        {
          $direct = "".$u['keyword'].".php";
          header("location: $direct");
        }
        else
          header("location: index.php");
      ?>
   </body>
 </html>
