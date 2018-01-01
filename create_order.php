<?php
$title = "Create Order";
$page = "create_order";
include("header.php");
?>

<?php include("nav.php"); ?>

<link rel="stylesheet" type="text/css" href="plugins/datepicker/datepicker.min.css">

    <article class="main__content content">

      <h4>Package Type</h4>
      <div class="content__wrapper">
        <select class="select select--radius" id="select_box-2">
          <option value="">Select package type</option>
          <option value="1">Box</option>
          <option value="2">Pallet</option>
          <option value="2">Tons</option>
          <option value="3">Loose Package</option>
        </select>

        <select class="select select--radius" id="select_box-2">
          <option value="">Select Quantity</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>

      <h4>Pick Up Details</h4>
      <div class="content__wrapper">
        <input type="text" class="textfield" name="date" id="datepick1" placeholder="Pick Up Date" data-toggle="datepicker"/>
        <select class="select select--radius" id="select_box-2">
          <option value="">Select Time Range for Pick Up</option>
          <option value="">12AM - 1AM</option>
          <option value="">1AM - 2AM</option>
          <option value="">2AM - 3AM</option>
          <option value="">3AM - 4AM</option>
          <option value="">4AM - 5AM</option>
          <option value="">5AM - 6AM</option>
          <option value="">6AM - 7AM</option>
          <option value="">7AM - 8AM</option>
          <option value="">8AM - 9AM</option>
          <option value="">9AM - 10AM</option>
          <option value="">10AM - 11AM</option>
          <option value="">11AM - 12PM</option>
          <option value="">12PM - 1PM</option>
          <option value="">1PM - 2PM</option>
          <option value="">2PM - 3PM</option>
          <option value="">3PM - 4PM</option>
          <option value="">4PM - 5PM</option>
          <option value="">5PM - 6PM</option>
          <option value="">6PM - 7PM</option>
          <option value="">7PM - 8PM</option>
          <option value="">8PM - 9PM</option>
          <option value="">9PM - 10PM</option>
          <option value="">10PM - 11PM</option>
          <option value="">11PM - 12PM</option>
        </select>
        <input class="textfield" id="autocomplete1" placeholder="Pick Up Location"
               onFocus="geolocate()" type="text"/>
    </div>

    <h4>Delivery Details</h4>
    <div class="content__wrapper">
    <input type="text" class="textfield" name="date" id="datepick2" placeholder="Delivery Date" data-toggle="datepicker"/>
    <select class="select select--radius" id="select_box-2">
      <option value="">Select Time Range for Delivery</option>
      <option value="">12AM - 1AM</option>
      <option value="">1AM - 2AM</option>
      <option value="">2AM - 3AM</option>
      <option value="">3AM - 4AM</option>
      <option value="">4AM - 5AM</option>
      <option value="">5AM - 6AM</option>
      <option value="">6AM - 7AM</option>
      <option value="">7AM - 8AM</option>
      <option value="">8AM - 9AM</option>
      <option value="">9AM - 10AM</option>
      <option value="">10AM - 11AM</option>
      <option value="">11AM - 12PM</option>
      <option value="">12PM - 1PM</option>
      <option value="">1PM - 2PM</option>
      <option value="">2PM - 3PM</option>
      <option value="">3PM - 4PM</option>
      <option value="">4PM - 5PM</option>
      <option value="">5PM - 6PM</option>
      <option value="">6PM - 7PM</option>
      <option value="">7PM - 8PM</option>
      <option value="">8PM - 9PM</option>
      <option value="">9PM - 10PM</option>
      <option value="">10PM - 11PM</option>
      <option value="">11PM - 12PM</option>
    </select>
    <input class="textfield" id="autocomplete2" placeholder="Delivery Location"
        onFocus="geolocate()" type="text"/>
    </div>

    <h4>Receiver Information</h4>
    <div class="content__wrapper">
      <input class="textfield" placeholder="Receiver Name" />
      <input class="textfield"  placeholder="Receiver contact no" />
    </div>

    <div class="content__wrapper">
      <button class="button button--blue">Create Order</button>
    </div>

    </article>
  <?php include("footer.php"); ?>

<!-- js here -->
<script type="text/javascript" src="plugins/datepicker/datepicker.min.js"></script>

<script>
  $('[data-toggle="datepicker"]').datepicker({
    format: 'dd-mm-YYYY'
  });
  // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete1')),
            {types: ['geocode']});

            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('autocomplete2')),
                {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.

      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOhD5D5ZLTRab-IzodJpbRvZbbY16vhG8&libraries=places&callback=initAutocomplete"
        async defer></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/place/autocomplete/json?input=Paris&types=geocode&key=AIzaSyCGFSybQS4yJIuGMNWQ25dcHDTYTn-bY3w"
        async defer></script> -->
<!-- end js -->

<?php include("end.php"); ?>
