<?php
$title = "Sponsors";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sponsor A's Commissions
      <small></small>
    </h1>
    <br>
    <a href="sponsors_form.php?a=Create" class="btn btn-success">Make Payment</a>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            Total Commission to date: RM <span class="total"></span>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                <th></th>
                <th>ID</th>
                <th>Date</th>
                <th>Customer</th>
                <th>Description</th>
                <th>Sales Amount</th>
                <th>Rate</th>
                <th>Commission Amount</th>
                <th>Payment ID</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php
                include("_companies.php");
                for($i=1; $i<50;$i++){
                  $sales = rand(1,999);
                  $rate = rand(1, 5);
                  $comm = $sales * ($rate/100);
                  $paid = rand(0,1);
                  ?>
                <tr>
                  <td>
                    <?php if( $paid == 0 ){ ?>
                      <input type="checkbox">
                    <?php } ?>
                  </td>
                  <td><?= $i ?></td>
                  <td><?= date('d M Y', strtotime(' - '.($i*2).' days')); ?></td>
                  <td><?= $companies[rand(0,8)][0] ?></td>
                  <td>Sales Amount collected in Feb 2018</td>
                  <td><?= $sales ?></td>
                  <td><?= $rate ?></td>
                  <td><span class="comm"><?= $comm ?></span></td>
                  <td>
                    <?php if( $paid == 1 ){ ?>
                      <a href=""><?= rand(10000, 99999) ?></a>
                    <?php } ?>
                  </td>
                  <td>
                    <a href="sponsors_generate_comm.php" class="btn btn-warning" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>

                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>

                  </td>
                </tr>
              <?php } ?>
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
        "order": [[ 1, "asc" ]]
    });

    var total = 0;
    $(".comm").each(function(){
      var comm = parseFloat( $(this).html() );
      total = total + comm;
    });
    $(".total").html(parseFloat(total).toFixed(2));
  });
</script>
<!-- end js -->


<?php include('end.php'); ?>
