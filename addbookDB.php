<?php
 $Book_no=$_POST['Book_no'];
 $Book_name=$_POST['Book_name'];
 $Author=$_POST['Author'];




 $conn = new mysqli('localhost','root','','rental_library_project') ;

 if($conn->connect_error)
 {
   die('Connection Failed : '.$conn->connect_error);
 }
else {
  $stmt = $conn->prepare("INSERT INTO book (Book_no,Book_name,Author) values (?,?,?)");
  $stmt->bind_param("sss",$Book_no,$Book_name,$Author);
  $stmt->execute();
   header("Location: ../Library%20Managment%20System/addbook.php?Inserted");
  $stmt->close();
  $conn->close();
}

 ?>
