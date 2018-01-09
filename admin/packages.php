<?php
$title = "Packages";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Users
      <small></small>
    </h1>
    <br>
    <a href="packages_form.php?a=Create" class="btn btn-info">Create New Package</a>
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
                <th>Package Name</th>
                <th>Description</th>
                <th>Unit</th>
                <th>Cost/Unit</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>

                <tr>
                  <td>1</td>
                  <td>Box</td>
                  <td>Charge by box</td>
                  <td>box</td>
                  <td>XX</td>
                  <td>
                    <a href="packages_form.php?a=Edit" class="btn btn-warning" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>
                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Pallet</td>
                  <td>Charge by pallet</td>
                  <td>pallet</td>
                  <td>YY</td>
                  <td>
                    <a href="packages_form.php?a=Edit" class="btn btn-warning" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>
                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Tons</td>
                  <td>Charge by tons</td>
                  <td>ton</td>
                  <td>ZZ</td>
                  <td>
                    <a href="packages_form.php?a=Edit" class="btn btn-warning" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>
                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>Loose Parcel</td>
                  <td>Charge by parcel</td>
                  <td>parcel</td>
                  <td>WW</td>
                  <td>
                    <a href="packages_form.php?a=Edit" class="btn btn-warning" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>
                    <button class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
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
