<?php
$title = "Commission";

include("header.php"); ?>

<?php include("nav.php"); ?>

<link rel="stylesheet" href="css/timeline.css">
<link rel="stylesheet" href="css/modal.css">

<article class="main__content content">

  <div class="content__wrapper">

    
    <h4>Commissions</h4>
    <table class="table">
      <thead class="table__head">
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Customer</th>
        <th>Description</th>
        <th>Commission Amount</th>
        <th>Payment ID</th>
      </tr>
      </thead>
      <tbody class="table__body">
        <?php
        include("../admin/_companies.php");
        for($i=1; $i<8;$i++){
          $sales = rand(1,999);
          $rate = rand(1, 5);
          $comm = $sales * ($rate/100);
          $paid = rand(0,1);
          ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= date('d M Y', strtotime(' - '.($i*2).' days')); ?></td>
          <td><?= $companies[rand(0,8)][0] ?></td>
          <td>Sales Amount collected in Feb 2018</td>
          <td><span class="comm"><?= $comm ?></span></td>
          <td>
            <?php if( $paid == 1 ){ ?>
              <a href="payment.php"><?= rand(10000, 99999) ?></a>
            <?php } ?>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>


  </div>


  <!-- The Modal -->
  <div id="myModal" class="modal" style="z-index:100;">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h1>Payment reminder</h1>
      <p>Dear customer,</p>
      <p>your account is overdue.</p>
      <p>Please kindly settle the payment to avoid service interruptions.</p>
      <p>For more information, please contact 213-32-123.</p>
    </div>
  </div>



</article>

<?php include("footer.php"); ?>

<!-- js here -->

<script>
  $(document).ready(function(){

    // Get the modal
    var modal = document.getElementById('myModal');

    <?php if( isset($_GET['warning']) ){ ?>
    modal.style.display = "block";
    <?php } ?>

    $(".close").click(function() {
        modal.style.display = "none";
    });

    $(this).click(function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });

  });
</script>

<!-- end js -->

<?php include("end.php"); ?>
