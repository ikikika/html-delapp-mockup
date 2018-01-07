<?php
$title = "Orders and Tasks";
include('header.php');
include('nav.php');

?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Orders and Tasks
      <small></small>
    </h1>
    <br>
    <a href="companies_form.php?a=Create" class="btn btn-info">Create New Order</a>
  </section>



  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                <th>Order No</th>
                <th>User</th>
                <th>Order Date</th>
                <th>Tasks</th>
                <th>Status</th>
                <!-- <th>Actions</th> -->
              </tr>
              </thead>
              <tbody>

                <tr>
                  <td >XXXXMMDD003</td>
                  <td >johndoe85</td>
                  <td >3 Apr 2018</td>
                  <td>
                    <table class="table table-bordered" style="margin-bottom:0px;">
                      <tr>
                        <td>Pick Up</td>
                        <td>5 Apr 2018</td>
                        <td>Pending Start</td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>5 Apr 2018</td>
                        <td>No driver assigned</td>
                      </tr>
                    </table>
                  </td>
                  <td >Incomplete</td>
                </tr>

                <tr>
                  <td >XXXXMMDD002</td>
                  <td >johndoe85</td>
                  <td >1 Apr 2018</td>
                  <td>
                    <table class="table table-bordered" style="margin-bottom:0px;">
                      <tr>
                        <td>Pick Up</td>
                        <td>2 Apr 2018</td>
                        <td>Completed</td>
                      </tr>
                      <tr>
                        <td>Drop Off</td>
                        <td>2 Apr 2018</td>
                        <td>Pending completion</td>
                      </tr>
                      <tr>
                        <td>Pick Up</td>
                        <td>3 Apr 2018</td>
                        <td>Pending Start</td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>3 Apr 2018</td>
                        <td>Pending Start</td>
                      </tr>
                    </table>
                  </td>
                  <td >Incomplete</td>
                </tr>

                <tr>
                  <td >XXXXMMDD001</td>
                  <td >johndoe85</td>
                  <td >1 Apr 2018</td>
                  <td>
                    <table class="table table-bordered" style="margin-bottom:0px;">
                      <tr>
                        <td>Pick Up</td>
                        <td>2 Apr 2018</td>
                        <td>Completed</td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>3 Apr 2018</td>
                        <td>Completed</td>
                      </tr>
                    </table>
                  </td>
                  <td >Completed</td>
                </tr>



              </tbody>

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>
<!--  your js here -->
<!-- DataTables -->
<script src="plugins/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="plugins/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable({
      'ordering': false
    });

  })
</script>
<!-- end js -->


<?php include('end.php'); ?>
