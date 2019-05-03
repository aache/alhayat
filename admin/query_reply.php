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
		      $result_select_query_by_id=mysqli_query($con,$sql_select_query_by_id . $_GET["id"]);
		      $row_select_query_by_id = mysqli_fetch_assoc($result_select_query_by_id);
	    ?>
        <!-- End of Topbar -->
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Reply to Query</h1>
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
                  <h6 class="m-0 font-weight-bold text-primary">Query Content</h6>
                </div>
                <div class="card-body">
                    <h6 style="font-weight : bold"><?php echo $row_select_query_by_id['uname'];?></h6>
                    <div><?php echo $row_select_query_by_id['email'];?></div>
                    <h6 style="margin-top:20px; font-weight : bold;">Content</h6>
                    <div style="width:450px;word-wrap: break-word;"><?php echo $row_select_query_by_id['question'];?></div>
                    <h6 style="margin-top:20px; font-weight : bold;">Reply</h6>
                    <div><textarea class="form-control" id="replyBox" style="height:150px" ></textarea></div>
                    <button class="btn btn-primary">Back</button>
                    <button class="btn btn-primary" onclick="replyToQuery(<?php echo $row_select_query_by_id['queries_id'];?>)">Reply</button>
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
  <?php //include 'logout_modal.php' ;?>
  <?php //include 'add_popup.php' ;?>
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
     function replyToQuery(id){
       console.log(id);
      $.get("query_reply_controller.php",{ queries_id: id , content: $("#replyBox").val()},
       function(data, status){
         console.log("Data: " + data + "\nStatus: " + status);
         if(data=="SUCCESS"){
            location.reload();
         }
      });
     }
  </script>
</body>

</html>
