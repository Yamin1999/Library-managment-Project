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

            <form class="form-signin" action="Query3DB.php" method="POST">
               <img class="mb-4" src="e.jpg" alt="" width="92" height="92">
          <h1 class="h3 mb-3 font-weight-normal">Input a Specific Date</h1>
                <br>


            <input type="date" class="form-control" placeholder="Issue Date"  name="iss_date"/required>




            <button class="btn btn-lg btn-primary btn-block" type="submit">Check</button>


           </form>

   </div>
   </div>
 </div>
 <?php
include "footer.php";
  ?>

  </body>
</html>
