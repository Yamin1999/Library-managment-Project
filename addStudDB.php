<?php
 $Stud_no=$_POST['Stud_no'];
 $Stud_name=$_POST['Stud_name'];
 $Mem_no=$_POST['Mem_no'];

$conn= new mysqli("localhost","root","","rental_library_project");

 if($conn->connect_error)
 {
   die('Connection Failed : '.$conn->connect_error);
 }
 else
 {

  $stmt = $conn->prepare("INSERT INTO student (Stud_no,Stud_name) values (?,?)");
  $stmt->bind_param("ss",$Stud_no,$Stud_name);
  $stmtc = $stmt->execute();
  $stnt = $conn->prepare("INSERT INTO membership (Mem_no,Stud_no) values (?,?)");
  $stnt->bind_param("ss",$Mem_no,$Stud_no);
  $stntc = $stnt->execute();
   header("Location: ../Library%20Managment%20System/addStud.php?Inserted");
  $stmt->close();
  $stnt->close();
  $conn->close();
  echo "inserted";
}


 ?>
