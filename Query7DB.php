<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php    include "header.html"; ?>

    <?php

    $Stud_no = $_POST['Stud_no'];


    $conn= mysqli_connect("localhost","root","","rental_library_project");

    if($conn->connect_error)
    {
        die('Connecction Failed: '.$conn->connect_error);
    }


    $sqlget = "SELECT student.Stud_no, student.Stud_name, book.Book_name FROM student,membership,book,iss_rec WHERE student.Stud_no=membership.Stud_no AND membership.Mem_no=iss_rec.Mem_no AND iss_rec.Book_no=book.Book_no AND student.Stud_no='$Stud_no'";
    $sqldata = mysqli_query($conn,$sqlget) or die ('error getting');

    ?>
    <br><br><br><br><br><br>
    <div class="table-responsive container mb-4 mt-4">
      <table class="table table-striped table-sm table-bordered mydatatable">
    <thead>
      <th> Student No </th>
      <th>  Student name  </th>
      <th> Book Name </th>

     </thead>

    <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>

      <tr><td>
          <?php echo $row['Stud_no']; ?>
                </td><td>
      <?php echo $row['Stud_name']; ?>
      </td><td>
    <?php  echo $row['Book_name']; ?>



      </td></tr>

    <?php }  ?>
    </table>
  </div>




    <?php include"footer.php" ?>

  </body>
</html>
