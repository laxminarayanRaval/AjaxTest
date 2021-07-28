<?php

  include("conn.php");

  $sql = "SELECT * FROM `test` where uname='".$_REQUEST['uname']."' and pass='".$_REQUEST["pass"]."'";

  $req = mysqli_query($conn,$sql);

  $res = mysqli_fetch_assoc($req);

  $num = mysqli_num_rows($req);

//   echo $sql;
  //echo $num;

    if ($num == 1){
        echo "<h1>Login Success</h1><p>Your Email is ".$res["email"]."</p>";
    }else{
        echo "<h1 color='red'>Login Fail</h1>";
    }

  
?>