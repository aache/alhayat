<?php
  include 'session.php';
  include  'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
 include 'head.php';
?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php 
    include 'sidebar.php';
     ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php
         include 'topbar.php' ; 
       ?>
        <!-- End of Topbar -->
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
            
          </div>

          <?php
            $target_dir = "gallery/";
            $uploadOk = 1;

/*echo $imageFileType."<br/>";*/
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])||!empty($_FILES["fileToUpload"]["name"])) {
    $target_file =$target_dir.basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $check["mime"];
       /* echo "File is an image - " .  . ".";*/
        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "File already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
            } else {
     /*   echo "File is not an image.";*/
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Only JPG, JPEG & PNG files are allowed.";
            $uploadOk = 0;
        }
        $uploadOk = 0;
    }
      
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      $f_name = 'upload-';
      $directory = "gallery/";
      $filecount = 0;
      $files = glob($directory . "*.{jpg,png,gif}",GLOB_BRACE);
      if ($files){
                $filecount = count($files)+1;
                }
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "gallery/{$f_name}{$filecount}.png")) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        echo "There are total $filecount files";
    }
}
else{
    echo "Only JPG, JPEG & PNG files are allowed.";
}
?>
<div class="col-md-8 card shadow mb-4">
        <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Upload Files</h6>
        </div>
        <div class="card-body">
<form action="gallery_upload.php" method="post" enctype="multipart/form-data">
    Select image to upload : 
    <input type="file" name="fileToUpload" id="fileToUpload">
    <button class="btn btn-sm btn-primary" type="submit" name="submit">Upload Image</button>
</form>
</div>
</div>
          <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
       <?php include 'footer.php'; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include 'logout_modal.php' ;?>
  <?php include 'add_contact.php' ;?>
  <!-- Logout Modal End--> 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- Page level plugins -->
  <!--script src="vendor/chart.js/Chart.min.js"></script-->

  <!-- Page level custom scripts -->
  <!--script src="js/demo/chart-area-demo.js"></script-->
  <!--script src="js/demo/chart-pie-demo.js"></script-->
  <script type="text/javascript">

  </script>
</body>

</html>
