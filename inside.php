<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        &nbsp;
      </li>
      <li class="nav-item">
        &nbsp;
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='Home'){echo("collapsed");} ?> " href="index.php">
          <i class="bi bi-person"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='login'){echo("collapsed");} ?>" href="login.php">
          <i class="bi bi-question-circle"></i>
          <span>Login</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if ($page!='Userreg'){echo("collapsed");} ?>" href="register.php">
          <i class="bi bi-envelope"></i>
          <span>User Register</span>
        </a>
      </li><!-- End Contact Page Nav -->
      <li class="nav-item">
        <a class="nav-link <?php if ($page!='bankreg'){echo("collapsed");} ?>" href="bankregister.php">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Blood Bank Register</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  