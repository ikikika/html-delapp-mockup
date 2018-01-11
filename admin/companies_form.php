<?php
$a = $_GET['a'];

$title = $a." Company";
include('header.php');

$title = "Companies";

include('nav.php');

include("_companies.php");
$c = $_GET['c'];
 ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $a ?> Company
      <small></small>
    </h1>
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

            <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? $companies[$c][0] : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">GST Registration</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? $companies[$c][1] : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Telephone No</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? $companies[$c][2] : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Fax</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '23432' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Contact Person</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? $companies[$c][3] : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? 'sd@fasd.csad' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Credit Limit</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" value="<?= $a == 'Edit'? '1000.00' : '' ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Sponsor Name</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? 'Peter ABcde' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Sponsor Code</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '132432' : '' ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Factory Address</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '43 FInally Valley' : '' ?>">
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Set Factory Address as default pickup address
                  </label>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Billing Address</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '23 Real Road' : '' ?>">
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Set Billing Address as default pickup address
                  </label>
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
