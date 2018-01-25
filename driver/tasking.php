<?php
$t = $_GET["t"];
if( $t == "pickup" ){
  $color = "#0096d9";
  $title = "Pick Up @ 8AM-9AM";
} else if( $t == "dropoff"){
  $color = "#8B0000";
  $title = "Drop Off";
} else if( $t == "delivery"){
  $color = "#8A2BE2";
  $title = "Delivery @ 2:30PM";
}


include("header.php"); ?>

<?php include("nav.php"); ?>

<article class="main__content content">

  <div class="content__wrapper">

      <h2 style="color:<?= $color ?>;"><?= $title ?></h2>
      <p>Scheduled time: 6AM-7AM</p>
      <h3>Started at <?= date('h:i:s a') ?></h3>

      <h4>Order: XXXXMMDD001 </h4>
      <h4>Address:</h4> <input type="text" value="93 Jln Segamat Batu 5 85010 Buloh Kasap 85010 Malaysia Segamat Johor 85010 Malaysia" id="myInput">  <button id="copybutton" onclick="myFunction()">Copy text</button>
      <h4>Contact: John Doe</h4>
      <h4>Tel: 123-456-789</h4>
      <h4>Package: 2 boxes</h4>

      <div class="form__group">
        <div class="form__label">
          Package :
        </div>
        <input type="file">
      </div>
      <br><br>
      <img src="images/package.jpg" style="width:80px;">
      <img src="images/package.jpg" style="width:80px;">
      <img src="images/package.jpg" style="width:80px;">
      <br><br>
      <div class="form__group">
        <div class="form__label">
          Document :
        </div>
        <input type="file">
      </div>
      <br><br>
      <img src="images/deliveryorder.jpg" style="width:80px;">
      <img src="images/deliveryorder.jpg" style="width:80px;">

      <br><br>
      <a href="" class="button button--radius button--red">Complete Task</a>
    </div>


</article>

<?php include("footer.php"); ?>

<!-- js here -->
<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("Copy");

  /* Alert the copied text */
  document.getElementById("copybutton").innerHTML = "Copied!";
}

</script>

<!-- end js -->

<?php include("end.php"); ?>
