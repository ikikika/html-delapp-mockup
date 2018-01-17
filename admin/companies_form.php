<?php
$a = $_GET['a'];

$title = $a." Company";
include('header.php');

$title = "Customer";

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
                  <label for="exampleInputEmail1">Customer Name</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? $companies[$c][0] : '' ?>">
                </div>
                <?php
                function generateRandomString($length = 5) {
                      $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                      $charactersLength = strlen($characters);
                      $randomString = '';
                      for ($i = 0; $i < $length; $i++) {
                          $randomString .= $characters[rand(0, $charactersLength - 1)];
                      }
                      return $randomString;
                  }

                ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Customer Code</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? $companies[$c][5] : generateRandomString() ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">GST Registration</label>
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control gstregno" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Customer Registered Address</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Postal Code</label>
                      <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">State</label>
                      <select class="form-control">
                        <option>Select State</option>
                        <option>Penang</option>
                        <option>Federal Territories</option>
                        <option>Perak</option>
                        <option>Sarawak</option>
                        <option>Johor</option>
                        <option>Sabah</option>
                        <option>Selangor</option>
                        <option>Melaka</option>
                        <option>Kedah</option>
                        <option>Sarawak</option>
                        <option>Selangor</option>
                        <option>Terengganu</option>
                        <option>Johor</option>
                        <option>Negeri Sembilan</option>
                      </select>
                    </div>
                  </div>
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
    $('#example1').DataTable();

    $('input[type=checkbox]').click(function(){
      if($('input[type=checkbox]').is(':checked')) {
          $(this).prop('checked',true);
          $(".gstregno").prop('disabled',false);
      } else {
          $(this).prop('checked',false);
          $(".gstregno").prop('disabled',true);
      }
    });

  });
</script>
<!-- end js -->


<?php include('end.php'); ?>
