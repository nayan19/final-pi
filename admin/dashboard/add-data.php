<?php
include_once '../dbconfig.php';
if(isset($_POST['btn-save']))
{
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal = $_POST['tanggal'];
    $tempat = $_POST['tempat'];
    $htm = $_POST['htm'];
	$cp = $_POST['cp'];
	
    $file = $_FILES['gambar']['name'];
    $file_loc = $_FILES['gambar']['tmp_name'];

	if($crud->create($judul,$deskripsi,$tanggal,$tempat,$htm,$cp, $file, $file_loc))
	{
		header("Location: add-data.php?inserted");
	}
	else
	{
		header("Location: add-data.php?failure");
	}
    
}

?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
	?>
    <div class="container">
	<div class="alert alert-info">
    <strong>Success!</strong> Data berhasil Ditambah <a href="index.php">HOME</a>!
	</div>
	</div>
    <?php
}
else if(isset($_GET['failure']))
{
	?>
    <div class="container">
	<div class="alert alert-warning">
    <strong>ERROR!</strong> tambah data gagal !
	</div>
	</div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

 	
	 <form method='post'  enctype="multipart/form-data">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Judul</td>
            <td><input type='text' name='judul' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Deskripsi</td>
            <td><input type='text' name='deskripsi' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Tanggal</td>
            <td><input type='text' name='tanggal' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>Tempat</td>
            <td><input type='text' name='tempat' class='form-control' required></td>
        </tr>

        <tr>
            <td>htm</td>
            <td><input type='text' name='htm' class='form-control' required></td>
        </tr>

        <tr>
            <td>Contact Person</td>
            <td><input type='text' name='cp' class='form-control' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <input type="file" name="gambar" /><br>
            <button type="submit" class="btn btn-primary" name="btn-save">
            <span class="glyphicon glyphicon-plus"></span> Tambah Data
			</button>  
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Kembali</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>