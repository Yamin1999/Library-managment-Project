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

            <form class="form-signin" action="addrecordDB.php" method="POST">
               <img class="mb-4" src="m.png" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Add a Record</h1>
                <br>


            <input type="text" class="form-control" placeholder="Issue No"  name="iss_no" required/>


            <input type="date" class="form-control" placeholder="Issue Date"  name="iss_date"required/>



             <input type="text" class="form-control" placeholder="Membership No"  name="Mem_no"required/>

              <input type="text" class="form-control" placeholder="Book No"  name="Book_no"/>


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
