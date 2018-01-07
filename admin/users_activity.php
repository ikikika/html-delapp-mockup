<?php
$title = "Users";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- DataTables -->
<link rel="stylesheet" href="plugins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Users Activity
      <small></small>
    </h1>
    <br>
    <a href="users_form.php?a=Create" class="btn btn-info">Create New User</a>
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
                <th>Activity</th>
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

                    function generateRandomNo($length = 10) {
                          $characters = '0123456789';
                          $charactersLength = strlen($characters);
                          $randomString = '';
                          for ($i = 0; $i < $length; $i++) {
                              $randomString .= $characters[rand(0, $charactersLength - 1)];
                          }
                          return $randomString;
                      }

                      function generate123($length = 1) {
                            $characters = '123';
                            $charactersLength = strlen($characters);
                            $randomString = '';
                            for ($i = 0; $i < $length; $i++) {
                                $randomString .= $characters[rand(0, $charactersLength - 1)];
                            }
                            return $randomString;
                        }

                  for($i=1; $i<25;$i++){
                ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= date('d M Y h:i:s a', strtotime('-'.($i*2).' days')) ?></td>
                  <td>
                    <?php
                      $r = generate123();
                      if( $r == 1 ){
                        echo "Login";
                      } else if( $r == 2 ){
                        echo "Create Order";
                      } else if( $r == 3){
                        echo "Logout";
                      }
                     ?>
                  </td>
                </tr>

              <?php } ?>
              <tr>
                <td><?= 25 ?></td>
                <td><?= date('d M Y h:i:s a', strtotime('-50 days')) ?></td>
                <td>
                  Joined
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
