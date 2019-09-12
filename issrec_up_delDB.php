<?php

         $issNo = $_POST['issNo'];
         $issDate = $_POST['issDate'];
         $bookNo = $_POST['bookNo'];
         $memNo = $_POST['memNo'];
         $preissNo = $_POST['hidissNo'];
         $prebookNo = $_POST['hidbookNo'];
         $prememNo = $_POST['hidmemNo'];
$conn= mysqli_connect("localhost","root","","rental_library_project");

if($conn->connect_error)
{
    die('Connecction Failed: '.$conn->connect_error);
}


if(isset($_POST['up'])) {
   $upissQuery = "UPDATE iss_rec SET iss_no = '$issNo', iss_date = '$issDate' WHERE iss_no = '$preissNo'";
   $runUpissQuery = mysqli_query($conn, $upissQuery);

   $upMemQuery = "UPDATE membership SET Mem_no = '$memNo' WHERE Mem_no = '$prememNo'";
   $runUpMemQuery = mysqli_query($conn, $upMemQuery);

      $upBookQuery = "UPDATE book SET Book_no = '$bookNo' WHERE Book_no = '$prebookNo'";
      $runUpBookQuery = mysqli_query($conn, $upBookQuery);


   if ($runUpissQuery AND $runUpMemQuery AND $runUpBookQuery) {
     echo "<script>alert('Update Successful!');</script>";
        header("Location: ../Library%20Managment%20System/issrecUpDel.php?Update_Successful!");
   } else {
     echo "<script>alert('Update Failed!');</script>";
       header("Location: ../Library%20Managment%20System/issrecUpDel.php?Update_Failed!");
   }

   exit();

}


     else if(isset($_POST['del'])) {
      $delStuQuery = "DELETE FROM iss_rec WHERE iss_no = '$issNo'";
      $runDelStuQuery = mysqli_query($conn, $delStuQuery);
      if($runDelStuQuery)
      {
      echo "<script>alert('Record deleted!') </script>";
             header("Location: ../Library%20Managment%20System/issrecUpDel.php?Record_Deleted!");
           }
      else {
        echo "<script>alert('mysqli_errno()');</script>";
         header("Location: ../Library%20Managment%20System/issrecUpDel.php?mysqli_error()");
      }
    }


?>
