<?php

$title = "Manage Order";
include('header.php');

$title = "Orders and Tasks";

include('nav.php'); ?>


<style>
.box-body .row{
  margin-bottom:15px;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Orders Manage
      <small></small>
    </h1>

  </section>



  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            Order Information
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <label for="inputEmail3" class="col-sm-2 col-lg-1 control-label">Order No</label>
              <div class="col-sm-4 col-lg-5">
                <input type="text" class="form-control" value="XXXXMMDD0001" disabled>
              </div>

              <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">User</label>
              <div class="col-sm-4 col-lg-5">
                <input type="text" class="form-control" value="John Doe" disabled>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <div class="box">
          <div class="box-header">
            Pick Up
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <form role="form">
              <div class="box-body">

                <div class="row" >
                  <label for="inputEmail3" class="col-sm-2 col-lg-1 control-label">Date</label>
                  <div class="col-sm-4 col-lg-5">
                    <input type="text" class="form-control" value="2 Apr 2018" disabled>
                  </div>

                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Time</label>
                  <div class="col-sm-4 col-lg-5">
                    <input type="text" class="form-control" value="12PM-1PM" disabled>
                  </div>
                </div>

                <div class="row">
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Address</label>
                  <div class="col-sm-10 col-lg-11">
                    <input type="text" class="form-control" value="123 NLKNF Street Ave" disabled>
                  </div>
                </div>

                <div class="row">
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Contact</label>
                  <div class="col-sm-4 col-lg-5">
                    <input type="text" class="form-control" value="John Doe" disabled>
                  </div>

                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Tel</label>
                  <div class="col-sm-4 col-lg-5">
                    <input type="text" class="form-control" value="23423432423" disabled>
                  </div>
                </div>

                <div class="row">
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Package</label>
                  <div class="col-sm-10 col-lg-11">
                    <input type="text" class="form-control" value="2 Boxes" disabled>
                  </div>
                </div>

                <div class="row">
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Driver</label>
                  <div class="col-sm-10 col-lg-11">
                    <div class="form-group">
                      <select class="form-control">
                        <option>Driver 1</option>
                        <option>Driver 2</option>
                        <option>Driver 3</option>
                        <option>Driver 4</option>
                        <option>Driver 5</option>
                      </select>
                    </div>
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


        <div class="appenddropoff"></div>

        <button class="btn btn-success add_drop_off">Add Drop Off</button>
        <br><br>

        <div class="box">
          <div class="box-header">
            Delivery
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form role="form">
              <div class="box-body">
                <div class="row" >
                  <label for="inputEmail3" class="col-sm-2 col-lg-1 control-label">Date</label>
                  <div class="col-sm-4 col-lg-5">
                    <input type="text" class="form-control" value="3 Apr 2018" disabled>
                  </div>
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Time</label>
                  <div class="col-sm-4 col-lg-5">
                    <input type="text" class="form-control" value="3PM" disabled>
                  </div>
                </div>
                <div class="row">
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Address</label>
                  <div class="col-sm-10 col-lg-11">
                    <input type="text" class="form-control" value="123 NLKNF Street Ave" disabled>
                  </div>
                </div>
                <div class="row">
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Contact</label>
                  <div class="col-sm-4 col-lg-5">
                    <input type="text" class="form-control" value="John Doe" disabled>
                  </div>
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Tel</label>
                  <div class="col-sm-4 col-lg-5">
                    <input type="text" class="form-control" value="23423432423" disabled>
                  </div>
                </div>
                <div class="row">
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Package</label>
                  <div class="col-sm-10 col-lg-11">
                    <input type="text" class="form-control" value="2 Boxes" disabled>
                  </div>
                </div>
                <div class="row">
                  <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Driver</label>
                  <div class="col-sm-10 col-lg-11">
                    <div class="form-group">
                      <select class="form-control">
                        <option>Driver 1</option>
                        <option>Driver 2</option>
                        <option>Driver 3</option>
                        <option>Driver 4</option>
                        <option>Driver 5</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
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

<script>
  $(function () {

    $(".add_drop_off").click(function(){

      $(".appenddropoff").prepend('<div class="box">\
                                    <div class="box-header">\
                                      Drop Off\
                                    </div>\
                                    <div class="box-body">\
                                      <form role="form">\
                                        <div class="box-body">\
                                          <div class="row" >\
                                            <label for="inputEmail3" class="col-sm-2 col-lg-1 control-label">Date</label>\
                                            <div class="col-sm-4 col-lg-5">\
                                              <input type="text" class="form-control" value="3 Apr 2018" disabled>\
                                            </div>\
                                            <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Time</label>\
                                            <div class="col-sm-4 col-lg-5">\
                                              <input type="text" class="form-control" value="3PM" disabled>\
                                            </div>\
                                          </div>\
                                          <div class="row">\
                                            <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Address</label>\
                                            <div class="col-sm-10 col-lg-11">\
                                              <input type="text" class="form-control" value="123 NLKNF Street Ave" disabled>\
                                            </div>\
                                          </div>\
                                          <div class="row">\
                                            <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Contact</label>\
                                            <div class="col-sm-4 col-lg-5">\
                                              <input type="text" class="form-control" value="John Doe" disabled>\
                                            </div>\
                                            <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Tel</label>\
                                            <div class="col-sm-4 col-lg-5">\
                                              <input type="text" class="form-control" value="23423432423" disabled>\
                                            </div>\
                                          </div>\
                                          <div class="row">\
                                            <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Package</label>\
                                            <div class="col-sm-10 col-lg-11">\
                                              <input type="text" class="form-control" value="2 Boxes" disabled>\
                                            </div>\
                                          </div>\
                                          <div class="row">\
                                            <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Driver</label>\
                                            <div class="col-sm-10 col-lg-11">\
                                              <div class="form-group">\
                                                <select class="form-control">\
                                                  <option>Driver 1</option>\
                                                  <option>Driver 2</option>\
                                                  <option>Driver 3</option>\
                                                  <option>Driver 4</option>\
                                                  <option>Driver 5</option>\
                                                </select>\
                                              </div>\
                                            </div>\
                                          </div>\
                                        </div>\
                                        <div class="box-footer">\
                                          <button type="submit" class="btn btn-primary">Submit</button>\
                                        </div>\
                                      </form>\
                                    </div>\
                                  </div>\
                                  <div class="box">\
                                                                <div class="box-header">\
                                                                Pick Up\
                                                                </div>\
                                                                <div class="box-body">\
                                                                  <form role="form">\
                                                                    <div class="box-body">\
                                                                      <div class="row" >\
                                                                        <label for="inputEmail3" class="col-sm-2 col-lg-1 control-label">Date</label>\
                                                                        <div class="col-sm-4 col-lg-5">\
                                                                          <input type="text" class="form-control" value="3 Apr 2018" disabled>\
                                                                        </div>\
                                                                        <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Time</label>\
                                                                        <div class="col-sm-4 col-lg-5">\
                                                                          <input type="text" class="form-control" value="3PM" disabled>\
                                                                        </div>\
                                                                      </div>\
                                                                      <div class="row">\
                                                                        <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Address</label>\
                                                                        <div class="col-sm-10 col-lg-11">\
                                                                          <input type="text" class="form-control" value="123 NLKNF Street Ave" disabled>\
                                                                        </div>\
                                                                      </div>\
                                                                      <div class="row">\
                                                                        <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Contact</label>\
                                                                        <div class="col-sm-4 col-lg-5">\
                                                                          <input type="text" class="form-control" value="John Doe" disabled>\
                                                                        </div>\
                                                                        <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Tel</label>\
                                                                        <div class="col-sm-4 col-lg-5">\
                                                                          <input type="text" class="form-control" value="23423432423" disabled>\
                                                                        </div>\
                                                                      </div>\
                                                                      <div class="row">\
                                                                        <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Package</label>\
                                                                        <div class="col-sm-10 col-lg-11">\
                                                                          <input type="text" class="form-control" value="2 Boxes" disabled>\
                                                                        </div>\
                                                                      </div>\
                                                                      <div class="row">\
                                                                        <label for="inputPassword3" class="col-sm-2 col-lg-1 control-label">Driver</label>\
                                                                        <div class="col-sm-10 col-lg-11">\
                                                                          <div class="form-group">\
                                                                            <select class="form-control">\
                                                                              <option>Driver 1</option>\
                                                                              <option>Driver 2</option>\
                                                                              <option>Driver 3</option>\
                                                                              <option>Driver 4</option>\
                                                                              <option>Driver 5</option>\
                                                                            </select>\
                                                                          </div>\
                                                                        </div>\
                                                                      </div>\
                                                                    </div>\
                                                                    <div class="box-footer">\
                                                                      <button type="submit" class="btn btn-primary">Submit</button>\
                                                                    </div>\
                                                                  </form>\
                                                                </div>\
                                                              </div>\
                                  ');

    });


  })
</script>
<!-- end js -->


<?php include('end.php'); ?>
