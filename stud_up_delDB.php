<?php

         $stuNo = $_POST['stuNo'];
         $stuName = $_POST['stuName'];
          $memNo = $_POST['memNo'];
         $preStuNo = $_POST['hidStuNo'];

$conn= mysqli_connect("localhost","root","","rental_library_project");

if($conn->connect_error)
{
    die('Connecction Failed: '.$conn->connect_error);
}


if(isset($_POST['up'])) {
   $upStuQuery = "UPDATE student SET Stud_no = '$stuNo', Stud_name = '$stuName' WHERE Stud_no = '$preStuNo'";
   $runUpStuQuery = mysqli_query($conn, $upStuQuery);
   $upMemQuery = "UPDATE membership SET Mem_no = '$memNo' WHERE Stud_no = '$preStuNo'";
   $runUpMemQuery = mysqli_query($conn, $upMemQuery);

   if ($runUpStuQuery and $runUpMemQuery) {
     echo "<script>alert('Update Successful!');</script>";
   header("Location: ../Library%20Managment%20System/StudUpDel.php?Update Successful!");
   } else {
     echo "<script>alert('Update Failed!');</script>";
   header("Location: ../Library%20Managment%20System/StudUpDel.php?Update Failed!!");
   }



}


     else if(isset($_POST['del'])) {
      $delStuQuery = "DELETE FROM student WHERE Stud_no = '$stuNo'";
      $runDelStuQuery = mysqli_query($conn, $delStuQuery);
      if($runDelStuQuery)
      {
      echo "<script>alert('Record deleted!') </script>";
             header("Location: ../Library%20Managment%20System/StudUpDel.php?Record_deleted!");
           }
      else {
        echo "<script>alert('mysqli_errno()');</script>";
         header("Location: ../Library%20Managment%20System/StudUpDel.php?mysqli_errno()");
      }
    }


?>
