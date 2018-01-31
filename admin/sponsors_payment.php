<?php


$title = " Sponsor";
include('header.php');

$title = "Sponsors";

include('nav.php');

$p_no = rand(10000, 99999);
?>

<!-- bootstrap datepicker -->
<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Payment #<?= $p_no ?>
      <small></small>
    </h1>

  </section>



  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            Payment Information
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <div class="form-group">
              <label for="exampleInputEmail1">Payment Number</label>
              <input type="text" class="form-control" value="<?= $p_no ?>" disabled>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Date</label>
              <input type="text" class="form-control" id="datepicker1" value="<?= date('d-m-Y') ?>" disabled>
            </div>

            <table id="" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Customer</th>
                <th>Description</th>
                <th>Sales Amount(RM)</th>
                <th>Rate</th>
                <th>Commission Amount(RM)</th>

              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>30 Apr 2018</td>
                  <td>Lemon Media</td>
                  <td>Sales Amount collected in Feb 2018</td>
                  <td>273</td>
                  <td>1</td>
                  <td><span class="comm">2.73</span></td>

                </tr>
                <tr>
                  <td>2</td>
                  <td>28 Apr 2018</td>
                  <td>Liger Enterprises</td>
                  <td>Sales Amount collected in Feb 2018</td>
                  <td>683</td>
                  <td>2</td>
                  <td><span class="comm">13.66</span></td>

                </tr>
                <tr>
                  <td colspan="6" style="text-align:right;font-weight:bold;">Total</td>
                  <td><b>RM 16.39</b></td>
                  <td></td>
                </tr>
              </tbody>
            </table>

            <form role="form">
              <div class="box-body">



                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" value="MBB on Line, ref no <?= rand(10000000, 99999999) ?>" disabled>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Amount</label>
                  <input type="text" class="form-control" value="RM 16.39" disabled>
                </div>

              </div>
              <!-- /.box-body -->

              
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
  $(function () {

    $('#datepicker1').datepicker({
      format: 'dd-mm-yyyy'
    });

  });
</script>
<!-- end js -->


<?php include('end.php'); ?>
