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

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<div class="commentform" >
<p>Give Your Valuable Feedback </p>
<form class="CommentForm" action=" " method="post">
<input type="text" name="cname" placeholder="Enter Your Name" style="width:45%">
<input type="email" name="cemail" placeholder="Enter Your Email ID" style="width:45%">
<br/><br/>
<textarea name="cmsg" rows="4" cols="40" style="width:90.5%" placeholder="Enter Your Views"></textarea>
<br/>
<input type="submit" name="csubmit" value="comment">
<input type="reset" name="creset" value="reset">
</form>
</diV>


<div class="commentarea">
  <?php
    $host="localhost";
    $user="root";
    $pwd="";
    $dbname="spero.life";
    $conn=mysqli_connect($host,$user,$pwd,$dbname);
      if ($conn) {
      $query="SELECT * FROM comments";
      $result=mysqli_query($conn,$query);
      }
  ?>

  <table>
    <tr>
      <th>Sno.</th>
      <th>Student Name</th>
      <th>Student Email</th>
      <th>Action</th>
    <tr>
    <?php $i = 1;
    while($data = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $i++;?></td>
      <td><?php echo $data['name'];?></td>
      <td><?php echo $data['emailId'];?></td>

    </tr>
    <tr>
      <td colspan="3"><?php echo $data['comment'];?></td>
    </tr>
    <?php
    }
    ?>
  </table>
</div>
  </body>
</html>
