<?php
$to = "spero.life@gmail.com";
$subject = $_POST['storyname']
$from=$_POST["semail"];
$msg=$_POST["area2"];
$headers = "From: $from";
mail($to,$subject,$msg,$headers);
?>
