<?php



 $bookNo = $_POST['bookNo'];
 $bookName=$_POST['bookName'];
 $Author=$_POST['Author'];
 $preStuNo = $_POST['hidStuNo'];



$conn= mysqli_connect("localhost","root","","rental_library_project");

if($conn->connect_error)
{
    die('Connecction Failed: '.$conn->connect_error);
}


if(isset($_POST['up'])) {
      $upMemQuery = "UPDATE book SET Book_no = '$bookNo',Book_name='$bookName',Author='$Author' WHERE Book_no = '$preStuNo'";
      $runUpMemQuery = mysqli_query($conn, $upMemQuery);


      if ($runUpMemQuery) {
        echo "<script>alert('Update Successful!');</script>";
      } else {
        echo "<script>alert('Update Failed!');</script>";
      }

   header("Location: ../Library%20Managment%20System/bookUpDel.php");
   }


     else if(isset($_POST['del'])) {
      $delStuQuery = "DELETE FROM book WHERE Book_no = '$bookNo'";
      $runDelStuQuery = mysqli_query($conn, $delStuQuery);
      if($runDelStuQuery)
      {
      echo "<script>alert('Record deleted!') </script>";
             header("Location: ../Library%20Managment%20System/bookUpDel.php");
           }
      else {
        echo "<script>alert('mysqli_errno()');</script>";
         header("Location: ../Library%20Managment%20System/bookUpDel.php");
      }
    }


?>
