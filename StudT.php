<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">




  </head>
  <body>
    <?php
     include "header.html";
    ?>

    <canvas id="myChart" width="200" height="130"></canvas>

     <h2 class="header">Student</h2>
     <?php


     $conn= mysqli_connect("localhost","root","","rental_library_project");

     if($conn->connect_error)
     {
         die('Connecction Failed: '.$conn->connect_error);
     }


     $sqlget = "SELECT student.Stud_no,Stud_name,Mem_no FROM student,membership where student.Stud_no=membership.Stud_no";
     $sqldata = mysqli_query($conn,$sqlget) or die ('error getting');
?>

     <div class="table-responsive container mb-4 mt-4">
       <table class="table table-striped table-sm table-bordered mydatatable">

         <thead>


             <th>Student No</th>
             <th>Student Name</th>
             <th> Membership No </th>
                </thead>




         <tbody>
           <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>

             <tr>
               <td> <?php echo $row['Stud_no']; ?> </td>
                   <td> <?php echo $row['Stud_name']; ?> </td>
                      <td> <?php echo $row['Mem_no']; ?> </td>
                 </tr>

                    <?php } ?>
         </tbody>
       </table>
     </div>


       <button class="btton" type="submit"><a href="StudUpDel.php">Update or Delete</a></button>


     <br>
      <br>
       <br>

       <?php
     include "footer.php";
        ?>
  </body>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
</html>
