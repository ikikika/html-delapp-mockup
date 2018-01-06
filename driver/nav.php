<nav class="main__nav nav">

  <ul class="nav__wrapper">
    <li class="nav__item <?= $title == "Tasks" ? "nav__item--active" : "" ?>">
      <a href="index.php">
        <i class="nav__icon fa fa-dashboard"></i> Tasks
      </a>
    </li>

    <li class="nav__item <?= $title == "Completed Tasks" ? "nav__item--active" : "" ?>">
      <a href="completed.php">
        <i class="nav__icon fa fa-certificate"></i> Completed Tasks
      </a>
    </li>

    <!-- <li class="nav__item ">
      <a href="index.php">
        <i class="nav__icon fa fa-dashboard"></i> Order History
      </a>
    </li> -->

    <li class="nav__item <?= $title == "Edit Profile" ? "nav__item--active" : "" ?>">
      <a href="edit_profile.php">
        <i class="nav__icon fa fa-user"></i> Edit Profile
      </a>
    </li>

    

    <!-- <li class="nav__item nav__item--has-child">
      <a href="#">
        <i class="nav__icon fa fa-desktop"></i> UI Elements
        <i class="nav__arrow fa fa-angle-down"></i>
      </a>

      <ul class="nav__wrapper nav__wrapper--child">
        <li class="nav__item--child"><a href="typography.php">Typography</a></li>
        <li class="nav__item--child"><a href="cards.php">Cards</a></li>
        <li class="nav__item--child"><a href="buttons.php">Buttons</a></li>
        <li class="nav__item--child"><a href="alert.php">Alert</a></li>
      </ul>
    </li>

    <li class="nav__item"><a href="tables.php">
      <i class="nav__icon fa fa-table"></i> Tables</a>
    </li>
    <li class="nav__item"><a href="forms.php">
      <i class="nav__icon fa fa-edit"></i> Forms</a>
    </li> -->

  </ul>

  <!-- <div class="footer__wrapper">

    <div class="footer__text">
      <span>footertext</span>
    </div>

    <ul class="footer__list">
      <li class="footer__icon footer__icon--facebook">
        <a rel="nofollow" href="">
          <i class="fa fa-facebook-square"></i>
        </a>
      </li>

    </ul>
  </div> -->

</nav>
