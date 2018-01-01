<?php
$title = "Alerts";
$page = "alerts";
include("header.php");
?>

<?php include("nav.php"); ?>

    <article class="main__content content">
      <h4>Alert</h4>
      <div class="content__wrapper">
        <div class="alert alert--radius alert--green">
          <a href="javascript:void(0)" class="alert__close">x</a>
          <strong>Info!</strong> alert alert--radius alert--green
        </div>
        <div class="alert alert--radius alert--red">
          <a href="javascript:void(0)" class="alert__close">x</a>
          <strong>Info!</strong> alert alert--radius alert--red
        </div>
        <div class="alert alert--radius alert--blue">
          <a href="javascript:void(0)" class="alert__close">x</a>
          <strong>Info!</strong> alert alert--radius alert--blue
        </div>
        <div class="alert alert--radius alert--orange">
          <a href="javascript:void(0)" class="alert__close">x</a>
          <strong>Info!</strong> alert alert--radius alert--orange
        </div>
        <div class="alert alert--radius alert--gray">
          <a href="javascript:void(0)" class="alert__close">x</a>
          <strong>Info!</strong> alert alert--radius alert--gray
        </div>
      </div>
    </article>

<?php include("footer.php"); ?>

<!-- js here -->


<!-- end js -->

<?php include("end.php"); ?>
