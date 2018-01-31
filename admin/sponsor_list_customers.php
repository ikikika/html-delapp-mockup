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
      Customers of Sponsor A
      <small></small>
    </h1>
    <br>
    <a href="companies_form.php?a=Create" class="btn btn-success">Add Customer</a>
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
                <th>ID</th>
                <th>Customer Name</th>
                <th>Customer Code</th>
                <th>Sponsor</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php

                  include("_companies.php");

                  for($i=1; $i<5;$i++){
                    $p = rand(1,6)
                ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $companies[$i][0] ?></td>

                  <td><?= $companies[$i][5] ?></td>

                  <td>sponsorA</td>

                  <td>

                    <a href="sponsors_generate_comm.php" class="btn btn-warning">
                      Generate Commission
                    </a>

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
    $('#example1').DataTable();

    $(".warningsent").click(function(){
      $(this).hide();
      var id = $(this).attr("id").replace("warningsent", "");
      $("#sendwarning"+id  ).show();
      $(this).parent().parent().find(".inactiveon").hide();
    });

    $(".sendwarning").click(function(){
      var confirm = window.confirm("Confirm send reminder?");
      if( confirm ){
        $(this).hide();
        $("#warningsent"+ $(this).attr("id").replace("sendwarning", "")).show();
        $(this).parent().parent().find(".inactiveon").show();
      }
    });

    $(".active").click(function(){
      $(this).hide();
      var id = $(this).attr("id").replace("active", "");
      $("#inactive"+id  ).show();
    });

    $(".inactive").click(function(){
      var confirm = window.confirm("Confirm inactive?");
      if( confirm ){
        $(this).hide();
        $("#active"+ $(this).attr("id").replace("inactive", "")).show();
      }
    });

  });
</script>
<!-- end js -->


<?php include('end.php'); ?>
