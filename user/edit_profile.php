<?php
$title = "Edit Profile";
include("header.php");

include("nav.php");


?>



    <article class="main__content content">
<?php
      if( isset($_GET['login']) ){
      ?>
      <br>
      <div class="alert alert--radius alert--blue bg-aqua">
        <span class="alert__close">x</span>
        <strong>Please change your password</strong>
      </div>
      <?php
      }
?>
      <h4>Login Information</h4>
      <div class="content__wrapper">
        <input class="textfield textfield--shadow" placeholder="Username" disabled/>
        <input class="textfield textfield--shadow" placeholder="Password" />
        <input class="textfield textfield--shadow" placeholder="Confirm Password" />
        <button class="button button--blue">Submit</button>
      </div>

      <h4>User Details</h4>
      <div class="content__wrapper">

        <input class="textfield textfield--shadow" placeholder="Company Name" value="ABC Company" disabled/>
        <input class="textfield textfield--shadow" placeholder="Full Name" />
        <!-- <input class="textfield textfield--shadow" placeholder="Address #1" />
        <input class="textfield textfield--shadow" placeholder="Address #2" />
        <input class="textfield textfield--shadow" placeholder="Address #3" />
        <input class="textfield textfield--shadow" placeholder="Postal Code" />
        <input class="textfield textfield--shadow" placeholder="Email Address" />
        <input class="textfield textfield--shadow" placeholder="Factory Address" /> -->

        <!-- <input class="textfield textfield--shadow" placeholder="Billing Address" /> -->

        <button class="button button--blue">Submit</button>
      </div>


    </article>
  <?php include("footer.php"); ?>

  <!-- js here -->


  <!-- end js -->

  <?php include("end.php"); ?>
