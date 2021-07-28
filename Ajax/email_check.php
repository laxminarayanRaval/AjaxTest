<?php

  include("conn.php");

  $sql = "SELECT * FROM `test` where email='".$_REQUEST['email']."'";

  $req = mysqli_query($conn,$sql);

  $res = mysqli_fetch_assoc($req);

  $num = mysqli_num_rows($req);

//   echo $sql;
  //echo $num;

    if ($num == 0){
        echo "<h3 style='color:green'>Email not Found, you can use it.</h3>";
    }else{
        echo "<h3 style='color:red'>Email Already Exixts</h3>";
    }

  
?>