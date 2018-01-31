<?php
$a = $_GET['a'];

$title = $a." Sponsor";
include('header.php');

$title = "Sponsors";

include('nav.php'); ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $a ?> Sponsor
      <small></small>
    </h1>

  </section>



  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            Login Information
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? 'johndoe85' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Confirm Password</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '' : '' ?>">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->


        <div class="box">
          <div class="box-header">
            User Information
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? 'John Doe' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Telephone No</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '423223124' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? 'sd@fasd.csad' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Bank Name</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '423223124' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Bank Acct No</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '423223124' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Commission Rate</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '423223124' : '' ?>">
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

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
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- end js -->


<?php include('end.php'); ?>
