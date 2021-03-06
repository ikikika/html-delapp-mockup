<?php
$title = "Orders and Tasks";
include('header.php');
include('nav.php');

?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<style>
.table-striped>tbody>tr:nth-of-type(odd){
  background-color:#ccc;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Orders and Tasks
      <small></small>
    </h1>
    <br>
    <a href="orders_manage.php?new=1" class="btn btn-success">Create New Order</a>
    <a href="invoice_generate.php" class="btn btn-info">Generate Invoice</a>
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
                <th></th>
                <th>Order No</th>
                <th>User</th>
                <th>Order Date</th>
                <th>Tasks</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>

                <tr>
                  <td>
                    <input type="checkbox">
                  </td>
                  <td >XXXXMMDD003</td>
                  <td >johndoe85</td>
                  <td >3 Apr 2018</td>
                  <td>
                    <table class="table table-bordered" style="margin-bottom:0px;">
                      <tr>
                        <td width="20%">Pick Up</td>
                        <td width="30%">5 Apr 2018</td>
                        <td width="50%">Pending Start</td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>5 Apr 2018</td>
                        <td>No driver assigned</td>
                      </tr>
                    </table>
                  </td>
                  <td >Incomplete</td>
                  <td>
                    <a href="orders_manage.php" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input type="checkbox">
                  </td>
                  <td >XXXXMMDD002</td>
                  <td >johndoe85</td>
                  <td >1 Apr 2018</td>
                  <td>
                    <table class="table table-bordered" style="margin-bottom:0px;">
                      <tr>
                        <td width="20%">Pick Up</td>
                        <td width="30%">2 Apr 2018</td>
                        <td width="50%">Completed</td>
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
                  <td>
                    <a href="orders_manage.php" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input type="checkbox">
                  </td>
                  <td >XXXXMMDD001</td>
                  <td >johndoe85</td>
                  <td >1 Apr 2018</td>
                  <td>
                    <table class="table table-bordered" style="margin-bottom:0px;">
                      <tr>
                        <tr>
                          <td width="20%">Pick Up</td>
                          <td width="30%">2 Apr 2018</td>
                          <td width="50%">Completed</td>
                        </tr>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>3 Apr 2018</td>
                        <td>
                          <select>
                            <option>Completed</option>
                            <option>Pending completion</option>
                            <option>Pending start</option>
                            <option>No Driver assigned</option>
                          </select>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td>
                    <select>
                      <option>Completed</option>
                      <option>In progress</option>
                      <option>Cancelled</option>
                      <option>Created</option>
                    </select>
                    <br>
                    <a href="../user/invoice-file.php" target="_blank">Invoice</a>
                  </td>
                  <td>
                    <a href="orders_manage.php" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                  </td>
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
