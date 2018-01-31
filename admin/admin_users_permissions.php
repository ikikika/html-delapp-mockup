<?php

$title = "Admin User Permissions";
include('header.php');

$title = "Admin Users";

include('nav.php'); ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Admin User Permissions
      <small></small>
    </h1>

  </section>



  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-12">
        <div class="col-sm-4">

          <div class="box">
            <div class="box-header">
              Dashboard
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View Dashboard
                      </label></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              Drivers
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View Drivers List
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Create Drivers
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Edit Drivers
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Delete Drivers
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View Drivers Activity
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View Drivers Allowances and Incentives
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Add Drivers Allowances and Incentives
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Edit Drivers Allowances and Incentives
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Delete Drivers Allowances and Incentives
                      </label></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              Calendar
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View Calendar
                      </label></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              Admin Users <b> (For Superadmins)</b>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View Admin Users
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Create Admin Users
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Edit Admin Users
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Delete Admin Users
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View Admin Users Activity
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Set Admin Users Permissions
                      </label></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>  <!-- end col 4 -->
        <div class="col-sm-4">

            <div class="box">
              <div class="box-header">
                Customers
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          View Customers List
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Create Customers
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Edit Customers
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Delete Customers
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          View Customers Activity
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Send Reminder
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Change Customers Status
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          View Packages
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Create Packages
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Edit Packages
                        </label></div></div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box">
              <div class="box-header">
                Sponsors
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          View Sponsors List
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Create Sponsors
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Edit Sponsors
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Delete Sponsors
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          View Sponsors Activity
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          View Sponsors Commissions
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Add Sponsors Commissions
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Edit Sponsors Commissions
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Delete Sponsors Commissions
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          View Payment to Sponsors
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Make Payment to Sponsors
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Edit Payment to Sponsors
                        </label></div></div>
                    <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                          Delete Payment to Sponsors
                        </label></div></div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->



        </div>  <!-- end col 4 -->

        <div class="col-sm-4">

          <div class="box">
            <div class="box-header">
              Users
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View User List
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Create User
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Edit User
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Delete User
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View User Activity
                      </label></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              Orders and Tasks
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View Orders and Tasks
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Create Orders and Tasks
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Manage Orders and Tasks
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Add Drop Off
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Assign Drivers
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Generate Invoices
                      </label></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              Invoices
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        View Invoices
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Edit Invoices
                      </label></div></div>
                  <div class="form-group"><div class="checkbox"><label><input type="checkbox">
                        Void Invoices
                      </label></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div> <!-- end col 4 -->

      </div> <!-- end col 12-->


        <div class="col-sm-6">
          <button class="btn btn-info">Submit</button>
        </div>

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
  });
</script>
<!-- end js -->


<?php include('end.php'); ?>
