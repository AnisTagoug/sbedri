<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <!-- nav -->
  <a class="navbar-brand" href="#">
    <img src="img/navlogo.png" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if (isset($home_active)) echo $home_active; ?>">
        <a class="nav-link" href="<?php if (!isset($home_active)) echo 'index.php'; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if (isset($contact_active)) echo $contact_active; ?>">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item <?php if (isset($about_active)) echo $about_active; ?>">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
  </div>
</nav>