<?php
 $iss_no=$_POST['iss_no'];
 $iss_date=$_POST['iss_date'];
 $Mem_no=$_POST['Mem_no'];
 $Book_no=$_POST['Book_no'];




 $conn = new mysqli('localhost','root','','rental_library_project') ;

 if($conn->connect_error)
 {
   die('Connection Failed : '.$conn->connect_error);
 }
else {
  $stmt = $conn->prepare("INSERT INTO iss_rec (iss_no,iss_date,Mem_no,Book_no) values (?,?,?,?)");
  $stmt->bind_param("ssss",$iss_no,$iss_date,$Mem_no,$Book_no);
  $stmt->execute();
   header("Location: ../Library%20Managment%20System/addrecord.php?Inserted");
  $stmt->close();
  $conn->close();
}

 ?>
