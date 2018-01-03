<?php
$title = "Alerts";
$page = "alerts";
include("header.php");
?>

<?php include("nav.php"); ?>

<link rel="stylesheet" href="css/timeline.css">
<link rel="stylesheet" href="css/modal.css">

    <article class="main__content content">
      <h4>Timeline for Order No. XXXXMMDD01 </h4>
      <div class="content__wrapper">
        <!-- The time line -->
        <ul class="timeline">


          <!-- timeline time label -->
          <li class="time-label">
                <span class="bg-purple">
                  7 Apr 2018
                </span>
          </li>
          <!-- /.timeline-label -->
          <!-- timeline item -->
          <li>
            <i class="fa fa-flag bg-red"></i>

            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

              <h3 class="timeline-header">Completed</h3>

              <div class="timeline-body">

              </div>
            </div>
          </li>
          <!-- END timeline item -->


          <!-- timeline time label -->
          <li class="time-label">
                <span class="bg-purple">
                  6 Apr 2018
                </span>
          </li>
          <!-- /.timeline-label -->
          <!-- timeline item -->
          <li>
            <i class="fa fa-code-fork bg-green"></i>
            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
              <h3 class="timeline-header">Delivered to receiver</h3>
              <div class="timeline-body">
                <div class="timeline-img" style="background-image:url(images/package.jpg)"></div>
                <div class="timeline-img" style="background-image:url(images/deliveryorder.jpg)"></div>
              </div>
              <div class="timeline-footer">
              </div>
            </div>
          </li>
          <li>
            <i class="fa fa-truck bg-yellow"></i>
            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
              <h3 class="timeline-header">Delivery driver on the way to delivery location</h3>
              <div class="timeline-body">
              </div>
              <div class="timeline-footer">
              </div>
            </div>
          </li>
          <!-- END timeline item -->


          <!-- timeline time label -->
          <li class="time-label">
                <span class="bg-purple">
                  5 Apr 2018
                </span>
          </li>
          <!-- /.timeline-label -->
          <!-- timeline item -->
          <li>
            <i class="fa fa-home bg-yellow"></i>
            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
              <h3 class="timeline-header">Dropped off at XYZ</h3>
              <div class="timeline-body">
              </div>
              <div class="timeline-footer">
              </div>
            </div>
          </li>
          <li>
            <i class="fa fa-cube bg-green"></i>
            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
              <h3 class="timeline-header">Package picked up</h3>
              <div class="timeline-body">
                <div class="timeline-img" style="background-image:url(images/package.jpg)"></div>
              </div>
              <div class="timeline-footer">
              </div>
            </div>
          </li>
          <li>
            <i class="fa fa-truck bg-yellow"></i>
            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
              <h3 class="timeline-header">Pick up driver on the way to pick up location</h3>
              <div class="timeline-body">
              </div>
              <div class="timeline-footer">
              </div>
            </div>
          </li>
          <!-- END timeline item -->



          <!-- timeline time label -->
          <li class="time-label">
                <span class="bg-purple">
                  4 Apr 2018
                </span>
          </li>
          <!-- /.timeline-label -->
          <!-- timeline item -->
          <li>
            <i class="fa fa-user bg-blue"></i>
            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
              <h3 class="timeline-header">Delivery driver assigned</h3>
              <div class="timeline-body">
                Driver Name: Peter Brown <br>
                Vehicle Number: DEF523 <br>
                Phone: 987-654-321
              </div>
              <div class="timeline-footer">
              </div>
            </div>
          </li>
          <li>
            <i class="fa fa-user bg-blue"></i>
            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> 1:30 PM</span>
              <h3 class="timeline-header">Pick Up driver assigned</h3>
              <div class="timeline-body">
                Driver Name: John Doe <br>
                Vehicle Number: ABC1234 <br>
                Phone: 123-456-789
              </div>
              <div class="timeline-footer">
              </div>
            </div>
          </li>
          <!-- END timeline item -->

          <!-- timeline time label -->
          <li class="time-label">
                <span class="bg-purple">
                  3 Apr 2018
                </span>
          </li>
          <!-- /.timeline-label -->
          <!-- timeline item -->
          <li>
            <i class="fa fa-certificate bg-green"></i>
            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> 12:00 PM</span>
              <h3 class="timeline-header">Order Created</h3>
              <div class="timeline-body">
                Order No. XXXXMMDD01
              </div>
              <div class="timeline-footer">
              </div>
            </div>
          </li>
          <!-- END timeline item -->
        </ul>
      </div>
    </article>

    <!-- The Modal -->
    <div id="myModal" class="modal" style="z-index:100;">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <img src="" alt="" class="modal-img">
      </div>
    </div>

<?php include("footer.php"); ?>

<!-- js here -->

<script>
  $(document).ready(function(){
    var baseurl = "http://localhost/delapp/images/";
    // Get the modal
    var modal = document.getElementById('myModal');

    $(".timeline-img").click(function() {
      var img = $(this).css('background-image').replace('url("', '').replace(baseurl, '').replace('")', '');
      $(".modal-img").attr('src', 'images/'+img);
          console.log( img );
          modal.style.display = "block";
    });

    $(".close").click(function() {
        modal.style.display = "none";
    });

    $(this).click(function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });

  });
</script>
<!-- end js -->

<?php include("end.php"); ?>
