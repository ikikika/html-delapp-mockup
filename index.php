<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<article class="main__content content">

  <div class="content__wrapper">

    <div class="alert alert--radius alert--green bg-blue">
      <a href="javascript:void(0)" class="alert__close">x</a>
      <strong>Order XXXXMMDD01</strong> Driver assigned
    </div>

    <div class="alert alert--radius alert--green bg-green">
      <a href="javascript:void(0)" class="alert__close">x</a>
      <strong>Order XXXXMMDD01</strong> Package delivered
    </div>

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
            <div class="card__title">Order Status</div>
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






</article>

<?php include("footer.php"); ?>

<!-- js here -->


<!-- end js -->

<?php include("end.php"); ?>
