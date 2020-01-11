<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php    include "header.html"; ?>

    <?php

    $Author= $_POST['Author'];

    $conn= mysqli_connect("localhost","root","","rental_library_project");

    if($conn->connect_error)
    {
        die('Connecction Failed: '.$conn->connect_error);
    }

    $sqlget = "SELECT Stud_name,COUNT(iss_rec.iss_no) as Total_num_of_books FROM student,book,iss_rec,membership WHERE student.Stud_no=membership.Stud_no AND membership.Mem_no=iss_rec.Mem_no AND iss_rec.Book_no=book.Book_no GROUP BY student.Stud_name;";
    $sqldata = mysqli_query($conn,$sqlget) or die ('error getting');

    ?>
    <br><br><br><br><br><br>
    <div class="table-responsive container mb-4 mt-4">
      <table class="table table-striped table-sm table-bordered mydatatable">
    <thead>
      <th>  Student name  </th>
      <th> Total Number of Books </th>


     </thead>

    <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>

      <tr><td>
      <?php echo $row['Stud_name']; ?>
      </td><td>
    <?php  echo $row['Total_num_of_books']; ?>

      </td></tr>

    <?php }  ?>
    </table>
  </div>




    <?php include"footer.php" ?>

  </body>
</html>
