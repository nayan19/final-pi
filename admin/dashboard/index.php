<?php
include_once '../dbconfig.php';
if(!$user->is_loggedin())
{
 $user->redirect('../index.php');
}
$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="../style.css" type="text/css"  />
<title>welcome - <?php print($userRow['user_email']); ?></title>
</head>

<body>

<div class="header">
 <div class="left">
     <label><a href="../../index.php">UDIN.us</a></label>
    </div>
    <div class="right">
     <label><a href="../logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>
</div>
<div class="content">
welcome : <?php print($userRow['user_name']); ?>
</div>

<div class="container">
<a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambah Data</a>
</div>
<div class="container">
  <div class="row">
  <div class="col-xs-12 col-md-12 col-md-offset-0">
     <table class="table table-striped">
     <tr>
     <th>Judul</th>
     <th>Deskripsi</th>
     <th>Tempat</th>
     <th>Tanggal</th>
     <th>CP</th>
     <th>HTM</th>
     <th>image</th>
     <th colspan="2" align="center">Actions</th>
     </tr>
     <?php
     if ($user->is_admin()) {
        
        $query = "SELECT * FROM posting";       
        $records_per_page=5;
        $newquery = $crud->paging($query,$records_per_page);
        $crud->dataview($newquery);

        }
       else {
        $id = $_SESSION['user_session'];
        $query = "SELECT * FROM posting WHERE post_by = '".$id."' ";


        $records_per_page=5;
        $newquery = $crud->paging($query,$records_per_page);
        $crud->userdataview($newquery);
        }
     ?>
    <tr>
        <td colspan="7" align="center">
            <div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
            </div>
        </td>
    </tr>
</table>
</div>
    
    <div class="col-xs-12 col-md-8  col-md-offset-2">

    <?php if ($user->is_admin()) { ?>
    <h3>LIST SEMUA USER</h3>
     <table class="table table-striped">
        <tr>
            <th>Nama User</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
            <?php
              $userquery = "SELECT * FROM users";       
              $records_per_page=5;
              $newquery = $crud->paging($userquery,$records_per_page);
              $crud->usertable($newquery);
              ?>
              <tr>
              <td colspan="7" align="center">
              <div class="pagination-wrap">
              <?php $crud->paginglink($query,$records_per_page); ?>
              </div>
              </td>
              </tr>
    </table>
    <?php } ?>
    </div>
    </div>
</div>
</body>
</html>