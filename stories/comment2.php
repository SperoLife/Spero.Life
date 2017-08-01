<?php
session_start();
if(isset($_POST['csubmit'])){
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
      $query="INSERT INTO comments(articleID,name,emailId,comment) VALUES('$storyID','$name','$email','$msg')";
        if(mysqli_query($conn,$query)){
            $_SESSION['successMsg'] = "Thank You for your valueable feedback";
            echo "successful";
        }else{
            $_SESSION['errorMsg'] = "Operation failed";
            echo "failed";
  }
}
}
?>
