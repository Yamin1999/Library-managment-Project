<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="text-center">
  <?php
   include "header.html";
   ?>
  <div class="text-center">
   <div class="login-page">
           <div class="form">

            <form class="form-signin" action="addStudDB.php" method="POST">
               <img class="mb-4" src="n.png" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Add Student</h1>
                <br>


            <input type="text" class="form-control" placeholder="Student No"  name="Stud_no"required/>


            <input type="text" class="form-control" placeholder="Student Name"  name="Stud_name"required/>



        <input type="text" class="form-control" placeholder="Membership No"  name="Mem_no"required/>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>


           </form>

   </div>
   </div>
 </div>
 <?php
include "footer.php";
  ?>
  </body>
</html>
