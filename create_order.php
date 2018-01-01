<?php
$title = "Create Order";
$page = "create_order";
include("header.php");
?>

<?php include("nav.php"); ?>

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
      <input class="textfield" id="textfield-1" placeholder="Date" />
      <select class="select select--radius" id="select_box-2">
        <option value="">Select Time Range</option>

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
      <input class="textfield" id="textfield-1" placeholder="Location" />

      <h4>Textfield</h4>
      <div class="content__wrapper">
        <input class="textfield" id="textfield-1" placeholder="textfield" />
        <input class="textfield textfield--shadow" id="textfield-2" placeholder="textfield textfield--shadow" />
        <input class="textfield textfield--radius" id="textfield-3" placeholder="textfield textfield--radius"/>
        <input class="textfield textfield--error" id="textfield-4" placeholder="textfield textfield--error"/>
        <input class="textfield textfield--large" id="textfield-5" placeholder="textfield textfield--large" />
        <span class="textfield__helper">This is helper text<span>
        <span class="textfield__error">This is helper error message<span>
      </div>

      <h4>Text Area</h4>
      <div class="content__wrapper">
        <textarea class="textfield" id="textarea-1" rows="3" placeholder="textfield" ></textarea>
        <textarea class="textfield textfield--radius" rows="3" id="textarea-3" placeholder="textfield textfield--radius"></textarea>
      </div>

      <h4>Input Select Box</h4>
      <div class="content__wrapper">
        <select class="select" id="select_box-1">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <select class="select select--radius" id="select_box-2">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <select multiple class="select" id="select_box-3">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
        <select multiple class="select select--radius" id="select_box-4">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>

      <h4>Checkboxes</h4>
      <div class="content__wrapper">
        <input class="checkbox" type="checkbox" id="checkbox-1" name"checkbox"/>
        <label for="checkbox-1">Check 1</label>
        <input class="checkbox" type="checkbox" id="checkbox-2" name"checkbox"/>
        <label for="checkbox-2">Check 2</label>
        <input class="checkbox" type="checkbox" id="checkbox-3" name"checkbox"/>
        <label for="checkbox-3">Check 3</label>
      </div>

      <h4>Radio</h4>
      <div class="content__wrapper">
        <input class="radio" type="radio" id="radio-1" name="radio"/>
        <label for="radio-1">Yes</label>
        <input class="radio" type="radio" id="radio-2" name="radio"/>
        <label for="radio-2">No</label>
      </div>
      <div class="content__wrapper">
        <input class="radio radio--blue" type="radio" id="radio-3" name="radio-blue"/>
        <label for="radio-3">Yes</label>
        <input class="radio radio--blue" type="radio" id="radio-4" name="radio-blue"/>
        <label for="radio-4">No</label>
      </div>

      <h4>Form Group</h4>
      <div class="content__wrapper form">
        <div class="form__group">
          <div class="form__label">
            I am label :
          </div>
          <input class="textfield" placeholder="I am placeholder" />
        </div>
        <div class="form__group">
          <div class="form__label form__label--required">
            I am required label :
          </div>
          <input class="textfield" placeholder="I am placeholder" />
        </div>
        <div class="form__group">
          <div class="form__label">
            I am label :
          </div>
          <div class="form__wrapper">
            <input class="checkbox" type="checkbox" id="checkbox-form-1" name"checkbox-form"/>
            <label for="checkbox-form-1">Check 1</label>
            <input class="checkbox" type="checkbox" id="checkbox-form-2" name"checkbox-form"/>
            <label for="checkbox-form-2">Check 2</label>
          </div>
        </div>
        <div class="form__group">
          <div class="form__label">
            I am label :
          </div>
          <div class="form__wrapper">
            <input class="radio" type="radio" id="radio-form-1" name="radio-form"/>
            <label for="radio-form-1">Yes</label>
            <input class="radio" type="radio" id="radio-form-2" name="radio-form"/>
            <label for="radio-form-2">No</label>
          </div>
        </div>
        <div class="form__group">
          <div class="form__icon form__icon--radius-left">
            Rp.
          </div>
          <input class="textfield" placeholder="I am placeholder" />
        </div>
        <div class="form__group">
          <input class="textfield" placeholder="I am placeholder" />
          <div class="form__icon form__icon--radius-right">
            @gmail.com
          </div>
        </div>
      </div>

    </article>
  <?php include("footer.php"); ?>

<!-- js here -->


<!-- end js -->

<?php include("end.php"); ?>
