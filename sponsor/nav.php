<nav class="main__nav nav">

  <ul class="nav__wrapper">
    <li class="nav__item <?= $title == "Commission" ? "nav__item--active" : "" ?>">
      <a href="index.php">
        <i class="nav__icon fa fa-dashboard"></i> Commission
      </a>
    </li>

    <li class="nav__item <?= $title == "Edit Profile" ? "nav__item--active" : "" ?>">
      <a href="edit_profile.php">
        <i class="nav__icon fa fa-user"></i> Edit Profile
      </a>
    </li>



  </ul>



</nav>
