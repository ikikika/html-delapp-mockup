<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">


    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="<?= $title == "Dashboard" ? "active" : "" ?>">
        <a href="index.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="<?= $title == "Companies" ? "active" : "" ?>">
        <a href="companies.php">
          <i class="fa fa-building"></i> <span>Companies</span>
        </a>
      </li>

      <li class="<?= $title == "Users" ? "active" : "" ?>">
        <a href="users.php">
          <i class="fa fa-users"></i> <span>Users</span>
        </a>
      </li>

      <li class="<?= $title == "Drivers" ? "active" : "" ?>">
        <a href="drivers.php">
          <i class="fa fa-truck"></i> <span>Drivers</span>
        </a>
      </li>

      <li class="<?= $title == "Orders and Tasks" ? "active" : "" ?>">
        <a href="orders_and_tasks.php">
          <i class="fa fa-calendar-check-o"></i> <span>Orders and Tasks</span>
        </a>
      </li>

      <li class="<?= $title == "Packages" ? "active" : "" ?>">
        <a href="packages.php">
          <i class="fa fa-cubes"></i> <span>Packages</span>
        </a>
      </li>

      <li class="<?= $title == "Calendar" ? "active" : "" ?>">
        <a href="calendar.php">
          <i class="fa fa-calendar"></i> <span>Calendar</span>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
