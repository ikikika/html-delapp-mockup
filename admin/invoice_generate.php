<?php
$title = "Invoices";
include('header.php'); ?>

<?php include('nav.php'); ?>

<!-- bootstrap datepicker -->
<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
<style>
.plr15mg15{
  padding:0px 15px;
  margin-bottom: 15px;
}

#paymentterms{
  font-weight:bold;
}
input[type=number] {
  width: 50px;
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Generate Invoice
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

                <div class="row plr15mg15">

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Invoice No</label>
                        <input type="text" class="form-control" value="100121">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Invoice Date</label>
                        <input type="text" class="form-control" id="datepicker1" value="<?= date('d-m-Y') ?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Invoice Due Date</label>
                        <input type="text" class="form-control" id="datepicker2" value="<?= date('d-m-Y') ?>">
                      </div>
                    </div>
                  </div>
                </div>

                <table id="example1" class="table table-bordered table-hover table-striped">
                  <thead>
                  <tr>
                    <th>Order No</th>
                    <th>Order Date</th>
                    <th>
                      <center>Description</center>
                      <table class="table table-bordered" style="margin-bottom:0px;">
                        <tr>
                          <td width="50%">Tasks</td>
                          <td width="50%">Date</td>
                        </tr>
                      </table>
                    </th>
                    <th>Qty</th>
                    <th>Unit Cost</th>
                    <th>Sub-total</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>

                    <tr id="row1">
                      <td >XXXXMMDD003</td>
                      <td >3 Apr 2018</td>
                      <td>
                        <table class="table table-bordered" style="margin-bottom:0px;">
                          <tr>
                            <td width="50%">Pick Up</td>
                            <td width="50%">5 Apr 2018</td>
                          </tr>
                          <tr>
                            <td>Delivery</td>
                            <td>5 Apr 2018</td>
                          </tr>
                        </table>
                      </td>
                      <td><input type="number" class="qty" id="qty1" value="2"></td>
                      <td>$<input type="number" class="unit" id="unit1" value="10"></td>
                      <td>$<span class="subtotal" id="subtotal1">20</span></td>
                      <td>
                        <button class="btn btn-danger removeline"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr id="row2">
                      <td >XXXXMMDD002</td>
                      <td >1 Apr 2018</td>
                      <td>
                        <table class="table table-bordered" style="margin-bottom:0px;">
                          <tr>
                            <td width="50%">Pick Up</td>
                            <td width="50%">2 Apr 2018</td>
                          </tr>
                          <tr>
                            <td>Delivery</td>
                            <td>3 Apr 2018</td>
                          </tr>
                        </table>
                      </td>
                      <td><input type="number" class="qty" id="qty2" value="3"></td>
                      <td>$<input type="number" class="unit" id="unit2" value="5"></td>
                      <td>$<span class="subtotal" id="subtotal2">15</span></td>
                      <td>
                        <button class="btn btn-danger removeline"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>

                    <tr class="addbtnline">
                      <td colspan="8">
                        <button class="btn btn-info addline">Add item to invoice</button>
                        <input type="hidden" class="count" value="2">
                      </td>
                    </tr>

                    <tr>
                      <td colspan="5" style="font-weight:bold;text-align:right;">Total:</td>
                      <td>$<span id="total">35</span></td>
                      <td></td>
                    </tr>

                    <tr>
                      <td colspan="5" style="font-weight:bold;text-align:right;">Amount Paid:</td>
                      <td>$<input type="number" id="amtpaid"></td>
                      <td></td>
                    </tr>

                    <tr id="balancerow">
                      <td colspan="5" style="font-weight:bold;text-align:right;">Balance:</td>
                      <td>$<span id="balance">35</span></td>
                      <td></td>
                    </tr>


                  </tbody>

                </table>

                <div class="form-group">
                  <label>Comments</label>
                  <textarea class="form-control" rows="3" placeholder="Enter comments"></textarea>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary submitbtn">Submit</button>
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
$('#datepicker1, #datepicker2').datepicker({
  format: 'dd-mm-yyyy'
});

$('body').on('keyup', '.qty', function(){
  var id = $(this).attr('id').replace('qty', '');
  changeqty(id);
  calculatetotal();
});
$('body').on('change', '.qty', function(){
  var id = $(this).attr('id').replace('qty', '');
  changeqty(id);
  calculatetotal();
});
$('body').on('keyup', '.unit', function(){
  var id = $(this).attr('id').replace('unit', '');
  changeqty(id);
  calculatetotal();
});
$('body').on('change', '.unit', function(){
  var id = $(this).attr('id').replace('unit', '');
  changeqty(id);
  calculatetotal();
});

function changeqty(id){
  var qty = $('#qty'+id).val() == "" ? 0 : parseFloat($('#qty'+id).val());
  var unit = $('#unit'+id).val() == "" ? 0 : parseFloat($('#unit'+id).val());
  var subtotal = qty * unit;
  //console.log(qty, unit, subtotal);
  $('#subtotal'+id).html(subtotal);
}

$('body').on('click', '.removeline', function(){
  if( window.confirm("Remove line?") ){
    $(this).parent().parent().remove();
    calculatetotal();
  }

});

var i;
$(".addline").click(function(e){
  e.preventDefault();
  i = parseInt($(".count").val()) +1;
  $(".addbtnline").before('\
            <tr id="row'+i+'">\
              <td ><input type="text"></td>\
              <td ><input type="text"></td>\
              <td><input type="text"></td>\
              <td><input type="number" class="qty" id="qty'+i+'"></td>\
              <td>$<input type="number" class="unit" id="unit'+i+'"></td>\
              <td>$<span class="subtotal" id="subtotal'+i+'"></span></td>\
              <td>\
                <button class="btn btn-danger removeline"><i class="fa fa-trash"></i></button>\
              </td>\
            </tr>\
  ');
});

calculatetotal();

function calculatetotal(){
  var total = 0;
  $(".subtotal").each(function(){
    var amt = parseFloat( $(this).html() );
    total = total + amt;
  });
  $("#total").html(total);
  calcbalance();
}

$('body').on('keyup', '#amtpaid', function(){
  calcbalance();
});

$('body').on('change', '#amtpaid', function(){
  calcbalance();
});

function calcbalance(){
  var amtpaid = $("#amtpaid").val() == "" ? 0 : parseFloat($("#amtpaid").val());
  var total = $('#total').html() == "" ? 0 : parseFloat($('#total').html());
  var balance = total - amtpaid;
  console.log(total,amtpaid, balance);

  if( balance <= 0 ){
    $("#balancerow").hide();
  } else {
    $("#balancerow").show();
    $("#balance").html(balance);
  }
}

$(".submitbtn").click(function(e){
  e.preventDefault();
  window.location.href = "../user/invoice-file.php";
});

</script>
<!-- end js -->


<?php include('end.php'); ?>
