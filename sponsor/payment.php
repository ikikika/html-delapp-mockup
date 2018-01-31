<?php
$title = "Payment";

include("header.php");

include("nav.php");

$p_no = rand(10000, 99999);
?>

<link rel="stylesheet" href="css/timeline.css">
<link rel="stylesheet" href="css/modal.css">

<article class="main__content content">

  <div class="content__wrapper">

    <a href="index.php" class="button button--blue">Back</a>

    <h3>Payment #<?= $p_no ?></h3>

    <h3>Payment Date: <?= date('d M Y') ?></h3>

    <table class="table">
      <thead class="table__head">
      <tr>
        <th>ID</th>
        <th>Date</th>
        <th>Customer</th>
        <th>Description</th>
        <th>Commission Amount(RM)</th>

      </tr>
      </thead>
      <tbody class="table__body">
        <tr>
          <td>1</td>
          <td>30 Apr 2018</td>
          <td>Lemon Media</td>
          <td>Sales Amount collected in Feb 2018</td>
          <td><span class="comm">2.73</span></td>

        </tr>
        <tr>
          <td>2</td>
          <td>28 Apr 2018</td>
          <td>Liger Enterprises</td>
          <td>Sales Amount collected in Feb 2018</td>
          <td><span class="comm">13.66</span></td>

        </tr>
        <tr>
          <td colspan="4" style="text-align:right;font-weight:bold;">Total</td>
          <td><b>RM 16.39</b></td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <h3>Description</h3>
      <p>MBB on Line, ref no <?= rand(10000000, 99999999) ?><p>


    <h3>Amount</h3>
      <p>RM 16.39<p>
    </div>


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
