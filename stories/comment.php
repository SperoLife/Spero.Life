<?php
session_start();
if(isset($_POST['csubmit']))
{
  $host="localhost";
  $user="root";
  $pwd="";
  $dbname="spero.life";
  $conn=mysqli_connect($host,$user,$pwd,$dbname);
    if ($conn) {
      $storyID=1;
      $name=$_POST['cname'];
      $email=$_POST['cemail'];
      $msg=$_POST['cmsg'];
      $query="INSERT INTO comments() VALUES('$storyID','$cname','$cemail','$cmsg','$cdate')";
        if(mysqli_query($conn,$query)){
            $_SESSION['successMsg'] = "Thank You for your valueable feedback";
        }else{
            $_SESSION['errorMsg'] = "Operation failed";
  }
}
}
?>
