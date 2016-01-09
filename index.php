<?php
include_once 'admin/dbconfig.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UDIN.us | Sistem Informasi Udinus</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="nav" class="navbar-brand" href="#">Udin.us</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <a href="admin/index.php"><div class="btn btn-primary">LOGIN</div></a>
          </form>
        </div>
      </div>
    </nav>

 
    <div id="cont" class="container">
              <?php
              $query = "SELECT * FROM posting ORDER BY created_at DESC";
              $records_per_page=10;
              $newquery = $crud->paging($query,$records_per_page);
              $crud->dataviewutama($newquery);
              ?>
              <div colspan="7" align="center">
                <div class="pagination-wrap">
                  <?php $crud->paginglink($query,$records_per_page); ?>
                </div>
              </div>
    </div>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div>
  </body>
</html>
