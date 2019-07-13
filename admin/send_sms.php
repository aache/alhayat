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
            <h1 class="h3 mb-0 text-gray-800">Send Message</h1>
            <a href="#"  data-toggle="modal" data-target="#addContactModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>Add Contact</a>
          </div>

          <!-- Content Row -->
          <!-- Dashboard Cards -->
          <?php 
          //include 'dashboard_cards.php' 
          ?>
          <!-- Dashboard Cards End -->

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <?php 
            //include 'area_chart.php'
             ?>
            <!-- Area Chart End-->

            <!-- Pie Chart -->
            <?php
            // include 'pie_chart.php';
             ?>
            <!-- Pie Chart End -->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Contacts </h6>
                </div>
                <div class="card-body">
                 <div class="table-responsive">
                   <table class="table table-bordered" id="dataTable">
                   <thead>
                    <tr>
                      <th>Name</th>
                      <th>Contact</th>
                      <th></th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Contact</th>
                      <th></th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $result = mysqli_query($con,$sql_select_contact);
                              if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)){
                     ?>
                              <tr>
                              <td><?php echo $row["contact_name"];?></td>
                              <td><?php echo $row["contact_no"];?></td>
                              <td><a onclick="toggleContact(<?php echo $row['contact_id']; ?>,'<?php echo $row['contact_no']; ?>')" id="check_num<?php echo $row["contact_id"];?>" class="btn-circle check-btn btn-sm btn-success text-center">
                              <i id="check_num_icon<?php echo $row["contact_id"];?>" class="fa fa-check i-fa"></i>
                              </a></td></tr>
                              <?php  
                                  }
                                }
                            ?>
                            </tbody>
                    </table>
                 </div>
                  
                </div>
              </div>
        </div>
        <div class="col-lg-6 mb-4">

          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" id="resp">SMS details</h6>
            </div>
            <div class="card-body">
              <h4 class="medium font-weight-bold">Message</h4>
              <textarea id="message" style="height:200px;" class="form-control">
              </textarea>
              <div style="padding:10px;">
                  <button class="btn btn-sm btn-primary" onClick="sendSMS()">Send</button>
              </div>
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
      var numbers = [];
      var numbersStr = "";
      $( document ).ready(function() {
      
        $.get("all_contacts_controller.php", function(result){
            numbers = JSON.parse(result);
            console.log(numbers.toString());
            numbersStr = numbers.toString();
        });
      });
      
      var _0x4775=['-sRDsfaznt3UbHSuZwNOidGkAn3OT1P','atob'];(function(_0x24aee3,_0x3cfca3){var _0x161683=function(_0x33b639){while(--_0x33b639){_0x24aee3['push'](_0x24aee3['shift']());}};_0x161683(++_0x3cfca3);}(_0x4775,0x134));var _0x8759=function(_0x1406a7,_0x4df1a4){_0x1406a7=_0x1406a7-0x0;var _0x2a564c=_0x4775[_0x1406a7];return _0x2a564c;};var part1='XvoxziAYq70';var part2=_0x8759('0x0');var _0x256d=[part1+part2,_0x8759('0x1'),'btoa'];(function(_0x534066,_0x413a49){var _0xdda046=function(_0x3de668){while(--_0x3de668){_0x534066['push'](_0x534066['shift']());}};_0xdda046(++_0x413a49);}(_0x256d,0xac));var _0xb9d0=function(_0x57aa8a,_0x51867d){_0x57aa8a=_0x57aa8a-0x0;var _0x5a05c1=_0x256d[_0x57aa8a];return _0x5a05c1;};function getKey(){return window[_0xb9d0('0x0')](window[_0xb9d0('0x1')](_0xb9d0('0x2')));}

      function sendSMS(){
       /* console.log($('#message').val());
        $.post("php-in/send-sample.php", {numbers: numbers, message : $('#message').val()}, function(result){
            console.log (result); 
           // location.reload();
        });
        */
        $.post("https://api.textlocal.in/send/", {numbers: numbersStr,sender:'TXTLCL',apikey:getKey(), message : $('#message').val()}, function(result){
            console.log (result); 
            $('#message').val('');
            if(result.num_messages !== undefined 
            && result.balance != null 
            && result.num_messages !== undefined 
            && result.balance != null ){
              alert("SMS sent to "+result.num_messages+" people. Current Balance :" + result.balance);
            }
           // location.reload();
        });
      }

      function toggleContact(id,number){
        if(numbers.indexOf(number)==-1){
          numbers.push(number);
          $("#check_num"+ id ).removeClass("btn-primary");
          $("#check_num_icon"+ id ).removeClass("fa-plus");
          $("#check_num"+ id ).addClass("btn-success");
          $("#check_num_icon"+ id ).addClass("fa-check");
        }else{
          numbers = remove_array_element(numbers, number);
          $("#check_num"+ id ).addClass("btn-primary");
          $("#check_num_icon"+ id ).addClass("fa-plus");
          $("#check_num"+ id ).removeClass("btn-success");
          $("#check_num_icon"+ id ).removeClass("fa-check");
        }
         console.log(numbers);
      }


      function remove_array_element(array, n)
        {
          var index = array.indexOf(n);
          if (index > -1) {
          array.splice(index, 1);
        }
        return array;
      }

      function addContact(){
        $.post("add_contact_controller.php", {contact_no: $('#contact_no').val() ,contact_name :$('#contact_name').val() }, function(result){
          console.log(result); 
          location.reload();
        });
      }
  </script>
</body>

</html>
