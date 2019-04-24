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

      <?php include 'connection.php';
		      $result_select_popup=mysqli_query($con,$sql_select_popup);
		      $row_select_popup = mysqli_fetch_assoc($result_select_popup);
	    ?>
        <!-- End of Topbar -->
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Popup Setting</h1>
            <a href="#"  data-toggle="modal" data-target="#addContactModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>Update Popup</a>
          </div>

          <!-- Content Row -->
          <!-- Content Row -->
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-7 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Popup Content</h6>
                </div>
                <div class="card-body">
                    <h6 style="font-weight : bold">Title</h6>
                    <div><?php echo $row_select_popup['title'];?></div>
                    <h6 style="margin-top:20px; font-weight : bold;">Content</h6>
                    <div style="width:300px;word-wrap: break-word;"><?php echo $row_select_popup['content'];?></div>
                    <h6 style="margin-top:20px; font-weight : bold;">Footer</h6>
                    <div><?php echo $row_select_popup['footer'];?></div>
                </div>
              </div>
        </div>
       
</div>
              <!-- Color System -->
              <?php 
              //include 'color_dashboard.php';
              ?>
              <!-- Color System End -->

          
        
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
  <?php include 'add_popup.php' ;?>
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
     function updatePopup(){
       
      $.get("popup_controller.php",{ title: $("#popup_title").val(), content: $("#popup_content").val() , footer: $("#popup_footer").val()  }, function(data, status){
         console.log("Data: " + data + "\nStatus: " + status);
         if(data=="SUCCESS"){
            location.reload();
         }
      });
     }
  </script>
</body>

</html>
