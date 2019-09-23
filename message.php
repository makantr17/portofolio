
<?php 

   $comment = isset($_POST['comment']) ? $_POST['comment']: '' ;
   $id = isset($_POST['fellowId']) ? $_POST['fellowId']: '' ;
   $date1 = date("Y-m-d H:i:s");

// compare email and password from the data base
$db = mysqli_connect("localhost", "root", "", "portofolio");
if (mysqli_connect_errno()){
    echo 'Failed to connect to MYSQLI'. mysqli_connect_errno();
}






if ($comment == '' or $id == '') {
    header("location: fellows.php");
}  else {
    $sql = "INSERT INTO `comment`(`fellow_id`, `message`, `time`) VALUES ('$id', '$comment', '$date1')"; 
    $result= mysqli_query($db, $sql); 
    header("location: fellows.php");
  
}


?>