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

      <h4>Corporate Details</h4>
      <div class="content__wrapper">
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Company Name" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Company No" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="GST Registration No" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Address" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Telephone No" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Fax No" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Contact Person" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Email Address" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Factory Address" />
        <input class="radio" type="radio" id="radio-1" name="radio"/>
        <label for="radio-1">Set Factory Address as default pick up address</label>
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="Billing Address" />
        <input class="radio" type="radio" id="radio-2" name="radio"/>
        <label for="radio-2">Set Billing Address as default pick up address</label>
        <button class="button button--blue">Submit</button>
      </div>

      
    </article>
  <?php include("footer.php"); ?>

  <!-- js here -->


  <!-- end js -->

  <?php include("end.php"); ?>
