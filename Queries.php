<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php    include "header.html"; ?>
    <main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5 )), url('w.jpg');">

    <br>
    <div class="container"style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5 )), url('q.jpg');">
      <h1 class="display-3"style="color:#fff;">Queries!</h1>
      <p style="color:#fff;">Query languages are used to make queries in a database, and Microsoft Structured Query Language (SQL) is the standard. Under the SQL query umbrella, there are several extensions of the language, including MySQL, Oracle SQL and NuoDB. </p>
    <br>
    <br>
    <br>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Query 3</h2>
        <p>List all the student and Book name, Author issued on a specific date (e.g., 01-01-2013) </p>
        <p><a class="btn btn-primary" href="Query3input.php" role="button">Run Query  &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Query 4</h2>
        <p>	List  the details of students who borrowed book of specific Author (e.g., Tenenbum) </p>
        <p><a class="btn btn-primary" href="Query4input.php" role="button">Run Query  &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Query 5</h2>
        <p>Give a count of how many books have  been borrowed by each student.</p>
        <br>
        <p><a class="btn btn-primary" href="Query5DB.php" role="button">Run Query  &raquo;</a></p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <h2>Query 6</h2>
        <p>List the students who reached the borrowed limit 3 (i.e., none can borrow more than 3 books). </p>
        <p><a class="btn btn-primary" href="Query6DB.php" role="button">Run Query  &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Query 7</h2>
        <p>	Give a list of books taken by student with specific Student No (e.g., C033002). </p>
        <br>
        <p><a class="btn btn-primary" href="Query7input.php" role="button">Run Query  &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Query 8</h2>
        <p>List the book  details which are issued as of  today..</p>
        <br>
        <p><a class="btn btn-primary" href="Query8DB.php" role="button">Run Query &raquo;</a></p>
      </div>
    </div>


    <hr>

  </div> <!-- /container -->

</main>
    <?php include "footer.php" ?>

  </body>
</html>
