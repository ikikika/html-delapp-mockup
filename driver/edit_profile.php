<?php
$title = "Edit Profile";
include("header.php"); ?>

<?php include("nav.php"); ?>

    <article class="main__content content">
      <h4>Login Information</h4>
      <div class="content__wrapper">
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Username" disabled/>
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Password" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Confirm Password" />
        <button class="button button--blue">Submit</button>
      </div>

      <h4>Driver Details</h4>
      <div class="content__wrapper">
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Full Name" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Vehicle No." />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Telephone No" />
        <button class="button button--blue">Submit</button>
      </div>


    </article>
  <?php include("footer.php"); ?>

  <!-- js here -->


  <!-- end js -->

  <?php include("end.php"); ?>
