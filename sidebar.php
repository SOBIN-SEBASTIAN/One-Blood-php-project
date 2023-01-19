<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        &nbsp;
      </li>
      <li class="nav-item">
        &nbsp;
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($page!='profile'){echo("collapsed");} ?> " href="userprofile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='u_dash'){echo("collapsed");} ?> " href="userdashboard.php">
          <i class="bi bi-person"></i>
          <span>Status</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='requst'){echo("collapsed");} ?>" href="your_request.php">
          <i class="bi bi-question-circle"></i>
          <span>Your Blood Requests</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='view_bb'){echo("collapsed");} ?>" href="view_bloodbank.php">
          <i class="bi bi-envelope"></i>
          <span>Blood Banks</span>
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

  