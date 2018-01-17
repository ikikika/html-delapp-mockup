<?php
$a = $_GET['a'];

$title = $a." Company";
include('header.php');

$title = "Customer";

include('nav.php');

include("_companies.php");
$c = $_GET['c'];
 ?>
<style>
.plr15mg15{
  padding:0px 15px;
  margin-bottom: 15px;
}
.b1pxblack{
  border:1px solid #A9A9A9;
}
#paymentterms{
  font-weight:bold;
}
</style>
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
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Active
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Inactive
                    </label>
                  </div>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Payment Term (Days)</label>
                  <input type="number" class="form-control" value="" id="paymentterminput">
                </div>

                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Automatically Inactivate customer <span id="paymentterms"></span> days after payment reminder sent
                    </label>
                    <span class="help-block">If this is not checked, admin will have to manually inactivate customer.</span>
                  </div>
                </div>

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
                          <input type="checkbox" class="gstreg">
                        </span>
                    <input type="text" class="form-control gstregno" disabled>
                  </div>
                </div>


                <div class="row plr15mg15 b1pxblack">
                  <p style="font-weight:700;">Customer Registered Address</p>
                  <div class="form-group">
                    Street No, Street Name, Unit No
                    <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        Postal Code
                        <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        City
                        <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        State
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

                <?php for( $i=1;$i<6;$i++ ){ ?>
                <div class="row plr15mg15 b1pxblack" >
                  <p style="font-weight:700;">Pick up address #<?= $i ?></p>
                  <div class="form-group">
                    Street No, Street Name, Unit No
                    <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        Postal Code
                        <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        City
                        <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        State
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
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios"  value="option1" >
                      Set Address <?= $i ?> as default pickup address
                    </label>
                  </div>
                </div>
              <?php } ?>



              <div class="row plr15mg15 b1pxblack" >
                <p style="font-weight:700;">Billing Address</p>
                <div class="form-group">
                  Street No, Street Name, Unit No
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      Postal Code
                      <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      City
                      <input type="text" class="form-control" value="<?= $a == 'Edit'? '123 QEWER Street' : '' ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      State
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
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" value="option1" >
                    Set BIlling Address as default pickup address
                  </label>
                </div>
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

    $('.gstreg').click(function(){
      if($('.gstreg').is(':checked')) {
          $(this).prop('',true);
          $(".gstregno").prop('disabled',false);
      } else {
          $(this).prop('',false);
          $(".gstregno").prop('disabled',true);
      }
    });

    if( $("#paymentterminput").val() == "" ){
      $("#paymentterms").html(0);
    }

    $("#paymentterminput").keyup(function(){
      var x = $(this).val();
      if( x == "" ){
        x = 0;
      }
      $("#paymentterms").html(x);
    });

  });
</script>
<!-- end js -->


<?php include('end.php'); ?>
