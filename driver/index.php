<?php
$title = "Tasks";

include("header.php"); ?>

<?php include("nav.php"); ?>

<article class="main__content content">

  <div class="content__wrapper">

      <h4>Tasks for <?= date('d M Y') ?></h4>

      <div class="grid__col-4 card__wrapper">
        <div class="card card--blue">
          <div class="card__header">
            <div class="card__title">Pick Up @ 8AM-9AM</div>
            <div class="card__tools">
            </div>
          </div>
          <div class="card__content">
<p>Scheduled time: 6AM-7AM</p>
<p>Order: XXXXMMDD001 </p>
            <p>Address: <input type="text" value="93 Jln Segamat Batu 5 85010 Buloh Kasap 85010 Malaysia Segamat Johor 85010 Malaysia" id="myInput">  <button id="copybutton" onclick="myFunction()">Copy text</button>
            <p>Contact: John Doe</p>
            <p>Tel: 123-456-789</p>
            <p>Package: 2 boxes</p>
            <a href="tasking.php?t=pickup" class="button button--radius button--green">Start Task</a>
          </div>
        </div>
      </div>

      <div class="grid__col-4 card__wrapper">
        <div class="card card--darkred">
          <div class="card__header">
            <div class="card__title">Drop Off</div>
            <div class="card__tools">
            </div>
          </div>
          <div class="card__content">
            <p>Scheduled time: 6AM-7AM</p>
<p>Order: XXXXMMDD001 </p>
            <p>Address: <input type="text" value="93 Jln Segamat Batu 5 85010 Buloh Kasap 85010 Malaysia Segamat Johor 85010 Malaysia" id="myInput">  <button id="copybutton" onclick="myFunction()">Copy text</button>
            <p>Contact: John Doe</p>
            <p>Tel: 123-456-789</p>
            <p>Package: 2 boxes</p>
            <a href="tasking.php?t=dropoff" class="button button--radius button--green">Start Task</a>
          </div>
        </div>
      </div>

      <div class="grid__col-4 card__wrapper">
        <div class="card card--blue">
          <div class="card__header">
            <div class="card__title">Pick Up @ 12PM - 1PM</div>
            <div class="card__tools">
            </div>
          </div>
          <div class="card__content">
            <p>Scheduled time: 6AM-7AM</p>
<p>Order: XXXXMMDD001 </p>
            <p>Address: <input type="text" value="93 Jln Segamat Batu 5 85010 Buloh Kasap 85010 Malaysia Segamat Johor 85010 Malaysia" id="myInput">  <button id="copybutton" onclick="myFunction()">Copy text</button>
            <p>Contact: John Doe</p>
            <p>Tel: 123-456-789</p>
            <p>Package: 2 boxes</p>
            <a href="tasking.php?t=pickup" class="button button--radius button--green">Start Task</a>
          </div>
        </div>
      </div>

      <div class="grid__col-4 card__wrapper">
        <div class="card card--purple">
          <div class="card__header">
            <div class="card__title">Delivery @ 2:30PM</div>
            <div class="card__tools">
            </div>
          </div>
          <div class="card__content">
            <p>Scheduled time: 6AM-7AM</p>
<p>Order: XXXXMMDD001 </p>
            <p>Address: <input type="text" value="93 Jln Segamat Batu 5 85010 Buloh Kasap 85010 Malaysia Segamat Johor 85010 Malaysia" id="myInput">  <button id="copybutton" onclick="myFunction()">Copy text</button>
            <p>Contact: John Doe</p>
            <p>Tel: 123-456-789</p>
            <p>Package: 2 boxes</p>
            <a href="tasking.php?t=delivery" class="button button--radius button--green">Start Task</a>
          </div>
        </div>
      </div>



      <div class="grid__col-4 card__wrapper">
        <div class="card card--blue">
          <div class="card__header">
            <div class="card__title">Pick Up @ 3PM - 4PM</div>
            <div class="card__tools">
            </div>
          </div>
          <div class="card__content">
            <p>Scheduled time: 6AM-7AM</p>
<p>Order: XXXXMMDD001 </p>
            <p>Address: <input type="text" value="93 Jln Segamat Batu 5 85010 Buloh Kasap 85010 Malaysia Segamat Johor 85010 Malaysia" id="myInput">  <button id="copybutton" onclick="myFunction()">Copy text</button>
            <p>Contact: John Doe</p>
            <p>Tel: 123-456-789</p>
            <p>Package: 2 boxes</p>
            <a href="tasking.php?t=pickup" class="button button--radius button--green">Start Task</a>
          </div>
        </div>
      </div>

      <div class="grid__col-4 card__wrapper">
        <div class="card card--darkred">
          <div class="card__header">
            <div class="card__title">Drop Off</div>
            <div class="card__tools">
            </div>
          </div>
          <div class="card__content">
            <p>Scheduled time: 6AM-7AM</p>
<p>Order: XXXXMMDD001 </p>
            <p>Address: <input type="text" value="93 Jln Segamat Batu 5 85010 Buloh Kasap 85010 Malaysia Segamat Johor 85010 Malaysia" id="myInput">  <button id="copybutton" onclick="myFunction()">Copy text</button>
            <p>Contact: John Doe</p>
            <p>Tel: 123-456-789</p>
            <p>Package: 2 boxes</p>
            <a href="tasking.php?t=dropoff" class="button button--radius button--green">Start Task</a>
          </div>
        </div>
      </div>



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
