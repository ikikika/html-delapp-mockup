<?php


$title = "Generate Commission";
include('header.php');

$title = "Sponsors";

include('nav.php'); ?>
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Generate Commission for Sponsor A
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
                  <label for="exampleInputEmail1">Customer</label>
                  <input type="text" class="form-control" value="Soul Corp" disabled>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="text" class="form-control" id="datepicker1" value="<?= date('d-m-Y') ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Sales Collected Amount</label>
                  <input type="number" class="form-control amount" value="">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Commission Rate (%)</label>
                  <input type="text" class="form-control rate" value="1" disabled>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Commission Amount</label>
                  <input type="text" class="form-control comm" value="" disabled>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" value="">
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="sponsor_list_commissions.php" class="btn btn-primary">Submit</button>
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
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {

    $('#datepicker1').datepicker({
      format: 'dd-mm-yyyy'
    });

    $(".amount").keyup(function(){
      var amount = parseFloat($(this).val());
      var comm = amount * (1/100);
      $(".comm").val(comm);
    });

    $(".amount").change(function(){
      var amount = parseFloat($(this).val());
      var comm = amount * (1/100);
      $(".comm").val(comm);
    });


  });
</script>
<!-- end js -->


<?php include('end.php'); ?>
