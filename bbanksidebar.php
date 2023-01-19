<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        &nbsp;
      </li>
      <li class="nav-item">
        &nbsp;
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page!='bprofile'){echo("collapsed");} ?> " href="bbprofile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='bankdash'){echo("collapsed");} ?> " href="bankdash.php">
          <i class="bi bi-person"></i>
          <span>Dash Board</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='manageblood'){echo("collapsed");} ?>" href="manageblood.php">
          <i class="bi bi-question-circle"></i>
          <span>Manage Blood Stock</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='bbrequest'){echo("collapsed");} ?>" href="bbankrequest.php">
          <i class="bi bi-envelope"></i>
          <span>Blood Request</span>
        </a>
      </li><!-- End Contact Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  