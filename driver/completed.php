<?php
$title = "Completed Tasks";
include("header.php"); ?>

<?php include("nav.php"); ?>

    <article class="main__content content">
      <h4>Completed Tasks</h4>
      <table class="table">
        <thead class="table__head">
          <tr>
            <th>Date</th>
            <th>Start</th>
            <th>Complete</th>
            <th>Task</th>
            <th>Order</th>
          </tr>
        </thead>
        <tbody class="table__body">
          <tr>
            <td><?= date('d M y') ?></td>
            <td>10:15 AM</td>
            <td>12:05 PM</td>
            <td>Delivery</td>
            <td>XXXXMMDD001</td>
          </tr>
          <tr>
            <td><?= date('d M y') ?></td>
            <td>9:32 AM</td>
            <td>10:05 AM</td>
            <td>Pick Up</td>
            <td>XXXXMMDD001</td>
          </tr>
          <tr>
            <td><?= date('d M y') ?></td>
            <td>8:32 AM</td>
            <td>9:30 AM</td>
            <td>Drop Off</td>
            <td>XXXXMMDD001</td>
          </tr>
          <tr>
            <td><?= date('d M y') ?></td>
            <td>8:00 AM</td>
            <td>8:30 AM</td>
            <td>Pick Up</td>
            <td>XXXXMMDD001</td>
          </tr>

        </tbody>
      </table>



    </article>

<?php include("footer.php"); ?>

<!-- js here -->


<!-- end js -->

<?php include("end.php"); ?>
