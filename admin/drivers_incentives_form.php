<?php
$a = $_GET['a'];

$title = $a." Driver Incentives";
include('header.php');

$title = "Drivers";

include('nav.php'); ?>

<!-- bootstrap datepicker -->
<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
<style>
.allw-details, .allw-amt, .other-details{
  display:none;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?= $a ?> Allowance or Incentives for Driver John Doe
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
                  <label>Select Type</label>
                  <select class="form-control" id="inc_type">
                    <option value="">SELECT</option>
                    <option value="allowance">Allowance</option>
                    <option value="att_inct">Attendance Incentive</option>
                    <option value="special" <?= $a == 'Edit'? 'selected' : '' ?>>Special</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="text" class="form-control" id="datepicker1" value="<?= date('d-m-Y') ?>">
                </div>
                <?php
                $states = [
                         'Johor',
                           'Kedah',
                           'Kelantan',
                         'Melaka',
                            'Negeri Sembilan',
                           'Pahang',
                           'Perak',
                           'Perlis',
                           'Pulau Pinang',
                           'Sabah',
                           'Sarawak',
                           'Selangor',
                           'Terengganu',
                         'W.P. Kuala Lumpur',
                           'W.P. Labuan',
                           'W.P. Putrajaya',
                          ];

                ?>
                <div class="form-group allw-details">
                  <label for="exampleInputEmail1">State</label>
                  <select class="form-control selectstate">
                    <option value="">SELECT</option>
                    <?php for($i=0;$i<sizeof($states); $i++ ){ ?>
                    <option><?= $states[$i] ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group allw-amt">
                  <label for="exampleInputEmail1">Amount</label>
                  <input type="text" class="form-control" value="200" disabled>
                </div>

                <div class="form-group other-details">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? 'Lorem Ipsum dolor sit amet' : '' ?>">
                </div>

                <div class="form-group other-details">
                  <label for="exampleInputEmail1">Amount</label>
                  <input type="text" class="form-control" value="<?= $a == 'Edit'? '100' : '' ?>">
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

<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
$('#datepicker1').datepicker({
  format: 'dd-mm-yyyy'
});

  $(function () {

    $("#inc_type").change(function(){
      $(".allw-details, .allw-amt, .other-details").hide();
      var type = $(this).val();
      if( type == "allowance" ){
        $(".allw-details").show();
      } else {
        $(".other-details").show();
      }
    });

    $(".selectstate").change(function(){
      $(".allw-amt").show();
    });

    <?php if( $a == 'Edit' ){ ?>
      $(".other-details").show();
    <?php } ?>

  });
</script>
<!-- end js -->


<?php include('end.php'); ?>
