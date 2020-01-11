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

     <h2 class="header"> Issue Records</h2>
     <?php


     $conn= mysqli_connect("localhost","root","","rental_library_project");

     if($conn->connect_error)
     {
         die('Connecction Failed: '.$conn->connect_error);
     }


     $sqlget = "SELECT iss_no,iss_date,book.Book_no,membership.Mem_no FROM book,membership,iss_rec WHERE book.Book_no=iss_rec.Book_no AND membership.Mem_no=iss_rec.Mem_no ORDER BY iss_no";
     $sqldata = mysqli_query($conn,$sqlget) or die ('error getting');
?>

     <div class="table-responsive container mb-4 mt-4">
       <table class="table table-striped table-sm table-bordered mydatatable">

         <thead>


             <th>Issue No</th>
             <th>Issue Date</th>

                <th> Book No </th>
                   <th> Membership No </th>
                </thead>




         <tbody>
           <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>

             <tr>
               <td> <?php echo $row['iss_no']; ?> </td>
                   <td> <?php echo $row['iss_date']; ?> </td>

                            <td> <?php echo $row['Book_no']; ?> </td>
                                <td> <?php echo $row['Mem_no']; ?> </td>
                 </tr>

                    <?php } ?>
         </tbody>
       </table>
     </div>


       <button class="btton" type="submit"><a href="issrecUpDel.php">Update or Delete</a></button>


     <br>
      <br>
       <br>

<?php
include "footer.php";
?>
  </body>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
</html>
