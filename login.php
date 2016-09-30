<html>
  <head>
  </head>
  <body>
    <?php
    $usersName = $_POST["username"];
    $password = $_POST["password"];
    
    if (username=="guest" && password == "guest"){
    echo "success";
    }else{echo "failure";}
    ?>
  </body>
</html>
