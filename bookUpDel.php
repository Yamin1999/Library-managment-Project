<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">




  </head>
  <body>
    <?php
    include "index.html";
    ?>

    <canvas id="myChart" width="200" height="130"></canvas>

     <h2 class="header">Booklist</h2>
     <?php


     $conn= mysqli_connect("localhost","root","","rental_library_project");

     if($conn->connect_error)
     {
         die('Connecction Failed: '.$conn->connect_error);
     }


     $sqlget = "SELECT * FROM book";
     $sqldata = mysqli_query($conn,$sqlget) or die ('error getting');
?>

     <div class="table-responsive container mb-4 mt-4">
       <table class="table table-striped table-sm table-bordered mydatatable">

         <thead>


           <th>Book No</th>
           <th>Book Name</th>
           <th> Author </th>
                </thead>




         <tbody>
           <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>


             <form action="book_up_delDB.php" method="post">

               <input type="text" name="hidStuNo" value="<?php echo $row['Book_no']; ?>" hidden>
                         <tr>


              <td class="form-group">
                <input class="form-control" type="text" name="bookNo" value="<?php echo $row['Book_no']; ?>" required="required">
              </td>

              <td class="form-group">


                                    <input class="form-control" type="text" name="bookName" value="<?php echo $row['Book_name']; ?>" required="required">
               </td>
               <td class="form-group">


                                     <input class="form-control" type="text" name="Author" value="<?php echo $row['Author']; ?>" required="required">
                </td>

                                   <td class="d-flex justify-content-center">
                                     <button class="btn btn-success" name="up">Update</button>&nbsp&nbsp
                                     <button class="btn btn-danger" name="del">Delete</button>
                                   </td>
                                 </tr>
                               </form>

                    <?php } ?>
         </tbody>
       </table>
     </div>


       <button class="btton" type="submit"><a href="bookT.php">Save</a></button>


     <br>
      <br>
       <br>
       <?php
     include "footer.php";
        ?>

  </body>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
</html>
