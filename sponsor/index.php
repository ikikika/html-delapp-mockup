<?php
$title = "Commission";

include("header.php"); ?>

<?php include("nav.php"); ?>

<link rel="stylesheet" href="css/timeline.css">
<link rel="stylesheet" href="css/modal.css">

<article class="main__content content">

  <div class="content__wrapper">

    <?php if( isset($_GET['assigned']) ){ ?>
    <div class="alert alert--radius alert--orange bg-yellow">
      <span class="alert__close">x</span>
      <strong>Order XXXXMMDD01</strong> Driver assigned
    </div>
    <?php } ?>

    <?php if( isset($_GET['delivered']) ){ ?>
    <div class="alert alert--radius alert--green bg-green">
      <span class="alert__close">x</span>
      <strong>Order XXXXMMDD01</strong> Package delivered
    </div>
    <?php } ?>

    <div class="grid__row">

      <div class="grid__col-6 card__wrapper">
        <div class="card card--orange">
          <div class="card__header">
            <div class="card__title">In Progress Orders</div>
            <div class="card__tools">

            </div>
          </div>
          <div class="card__content">
            <div class="card__align">
              <div class="card__big-text">
                5
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="grid__col-6 card__wrapper">
        <div class="card card--red">
          <div class="card__header">
            <div class="card__title">Completed Orders</div>
            <div class="card__tools">

            </div>
          </div>
          <div class="card__content">
            <div class="card__align">
              <div class="card__big-text">
                12
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="grid__row">

      <div class="grid__col-12 card__wrapper">
        <div class="card card--blue">
          <div class="card__header">
            <div class="card__title">View Timeline</div>
          </div>
          <div class="card__content">

            <table class="table">
              <thead class="table__head">
                <tr>
                  <th>Order No.</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody class="table__body">
                <tr>
                  <td><a href="timeline.php">XXXXMMDD02</a></td>
                  <td>Created <a href="" class="button button--red button-xs">Cancel</a></td>
                </tr>
                <tr>
                  <td><a href="timeline.php">XXXXMMDD01</a></td>
                  <td>Pending Pick Up</td>
                </tr>
                <tr>
                  <td><a href="timeline.php">XXXXMMDD04</a></td>
                  <td>Pending Delivery</td>
                </tr>
                <tr>
                  <td><a href="timeline.php">XXXXMMDD05</a></td>
                  <td>Completed</td>
                </tr>
              </tbody>
            </table>


          </div>
        </div>
      </div>

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
