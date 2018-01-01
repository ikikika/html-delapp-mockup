<?php include("header.php"); ?>

<?php include("nav.php"); ?>

    <article class="main__content content">
      <h4>Table</h4>
      <table class="table">
        <thead class="table__head">
          <tr>
            <th class="table__sort--asc" sortable="true">#</th>
            <th class="table__sort--desc" sortable="true">First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody class="table__body">
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>

      <h4>Pagination</h4>
      <ul class="pager">
        <li>
          <a href="javascript:void(0)" class="pager__page">Previous</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">1</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">2</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">3</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">4</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">5</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">Next</a>
        </li>
      </ul>

      <ul class="pager pager--radius">
        <li>
          <a href="javascript:void(0)" class="pager__page">Previous</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">1</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">2</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">3</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">4</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">5</a>
        </li>
        <li>
          <a href="javascript:void(0)" class="pager__page">Next</a>
        </li>
      </ul>

    </article>

<?php include("footer.php"); ?>

<!-- js here -->


<!-- end js -->

<?php include("end.php"); ?>
