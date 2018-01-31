<?php
$title = "Drivers";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Driver John Doe's Allowances and Incentives
      <small></small>
    </h1>
    <br>
    <a href="drivers_incentives_form.php?a=Add" class="btn btn-success">Add allowance and incentives</a>
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
                <th>Date</th>
                <th>Type</th>
                <th>Description</th>
                <th>Amount (RM)</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php
                  function generateRandomString($length = 5) {
                        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString;
                    }

                    $type = ['Allowance', 'Attendace Incentive', 'Special'];
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

                  for($i=1; $i<15;$i++){
                    $j = rand(0,2);
                ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= date('d M Y', strtotime(' - '.($i*2).' days')); ?></td>
                  <td><?= $type[$j] ?></td>
                  <td><?= $j == 1? $states[rand(0,15)] : "Lorem ipsum dolor sit amet" ?></td>
                  <td><?= rand(0,130) ?></td>
                  <td>
                    <a href="drivers_form.php?a=Edit" class="btn btn-warning" title="Edit">
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
    $('#example1').DataTable();
</script>
<!-- end js -->


<?php include('end.php'); ?>
