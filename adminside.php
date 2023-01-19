<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        &nbsp;
      </li>
      <li class="nav-item">
        &nbsp;
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='addmin'){echo("collapsed");} ?> " href="admindash.php">
          <i class="bi bi-person"></i>
          <span>Dash Board</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='managebb'){echo("collapsed");} ?>" href="managebb.php">
          <i class="bi bi-question-circle"></i>
          <span>Manage Blood Bank</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='manageuser'){echo("collapsed");} ?>" href="displayuser.php">
          <i class="bi bi-envelope"></i>
          <span>Manage Users</span>
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

  