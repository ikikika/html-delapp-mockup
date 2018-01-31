<?php
$title = "Allowances & Incentives";
include("header.php"); ?>

<?php include("nav.php"); ?>

    <article class="main__content content">
      <h4><?= $title ?></h4>
      Month:
      <select>
        <?php for($i=0;$i<3;$i++){ ?>
        <option><?= date('M Y', strtotime(' - '.($i).' months')); ?></option>
        <?php } ?>
      </select>
      <table class="table">
        <thead class="table__head">
          <tr>
            <th>Date</th>
            <th>Type</th>
            <th>Description</th>
            <th>Amount (RM)</th>
          </tr>
        </thead>
        <tbody class="table__body">
          <?php
              $type = ['Allowance', 'Attendace Incentive', 'Special'];
              $states = [
                       'Johor',
                         'Kedah',
                         'Kelantan',
                       'Melaka',
                          'Negeri Sembilan',
                         'Pahang',
                         'Perak',
                         'Perlis',
                         'Pulau Pinang',
                         'Sabah',
                         'Sarawak',
                         'Selangor',
                         'Terengganu',
                       'W.P. Kuala Lumpur',
                         'W.P. Labuan',
                         'W.P. Putrajaya',
                        ];

            for($i=1; $i<15;$i++){
              $j = rand(0,2);
          ?>
          <tr>
            <td><?= date('d M Y', strtotime(' - '.($i*2).' days')); ?></td>
            <td><?= $type[$j] ?></td>
            <td><?= $j == 1? $states[rand(0,15)] : "Lorem ipsum dolor sit amet" ?></td>
            <td class="amount"><?= rand(0,130) ?></td>
          </tr>
            <?php } ?>
          <tr>
            <td colspan="3">
              <p style="text-align:right;font-weight:bold;">Total</p>
            </td>
            <td><span class="total"></span></td>
          </tr>

        </tbody>
      </table>



    </article>

<?php include("footer.php"); ?>

<!-- js here -->
<script>
  $(document).ready(function(){
    var total = 0;
    $(".amount").each(function(){
      var amount = parseFloat( $(this).html() );
      total = total + amount;
    });
    $(".total").html(total);
  });
</script>

<!-- end js -->

<?php include("end.php"); ?>
