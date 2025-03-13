<header>
  <nav class="blue-grey darken-1" role="navigation" aria-label="Main Navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo">
        <img src="/images/hota-dualcolor.svg" alt="HOTA Logo" width="40" height="40">
        <span class="hide-on-med-and-down">Houses on The Air</span>
        <span class="hide-on-large-only">HOTA</span>
      </a>

      <!-- Mobile menu button -->
      <a href="#" data-target="mobile-nav" class="sidenav-trigger" aria-label="Open menu"><i class="material-icons">menu</i></a>

      <!-- Desktop navigation -->
      <ul class="right hide-on-med-and-down">
        <li><a href="/" <?php echo (empty($_GET['page']) || $_GET['page'] == 'home') ? 'class="active"' : ''; ?>><i class="material-icons left">home</i>Home</a></li>
        <li><a href="?page=about" <?php echo (isset($_GET['page']) && $_GET['page'] == 'about') ? 'class="active"' : ''; ?>><i class="material-icons left">info</i>About</a></li>
        <li class="dropdown-trigger" data-target="dropdown-participate">
          <a href="#!"><i class="material-icons left">radio</i>Participate<i class="material-icons right">arrow_drop_down</i></a>
        </li>
        <li><a href="?page=awards" <?php echo (isset($_GET['page']) && $_GET['page'] == 'awards') ? 'class="active"' : ''; ?>><i class="material-icons left">emoji_events</i>Awards</a></li>
        <li><a href="?page=resources" <?php echo (isset($_GET['page']) && $_GET['page'] == 'resources') ? 'class="active"' : ''; ?>><i class="material-icons left">library_books</i>Resources</a></li>
        <li><a href="?page=faq" <?php echo (isset($_GET['page']) && $_GET['page'] == 'faq') ? 'class="active"' : ''; ?>><i class="material-icons left">help</i>FAQ</a></li>
      </ul>

      <!-- Participate dropdown -->
      <ul id="dropdown-participate" class="dropdown-content">
        <li><a href="?page=house-activations"><i class="material-icons left">home</i>House Activations</a></li>
        <li><a href="?page=log-entry"><i class="material-icons left">create</i>Log Entry</a></li>
        <li><a href="/#upload"><i class="material-icons left">cloud_upload</i>Upload ADIF</a></li>
        <li><a href="?page=contests"><i class="material-icons left">leaderboard</i>Contests</a></li>
        <li><a href="?page=nets"><i class="material-icons left">settings_input_antenna</i>Join Our Net</a></li>
      </ul>
    </div>
  </nav>

  <!-- Mobile navigation -->
  <ul id="mobile-nav" class="sidenav" role="navigation" aria-label="Mobile Navigation">
    <li>
      <div class="user-view blue-grey darken-1">
        <div class="center-align" style="padding: 20px 0;">
          <img src="/images/hota-dualcolor.svg" alt="HOTA Logo" style="width: 80px; height: 80px;">
          <h4 class="white-text">HOTA</h4>
        </div>
      </div>
    </li>
    <li><a href="/"><i class="material-icons">home</i>Home</a></li>
    <li><a href="?page=about"><i class="material-icons">info</i>About</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader"><i class="material-icons">radio</i>Participate</a></li>
    <li><a href="?page=house-activations" class="waves-effect"><i class="material-icons">home</i>House Activations</a></li>
    <li><a href="?page=log-entry" class="waves-effect"><i class="material-icons">create</i>Log Entry</a></li>
    <li><a href="#upload" class="waves-effect"><i class="material-icons">cloud_upload</i>Upload ADIF</a></li>
    <li><a href="?page=contests" class="waves-effect"><i class="material-icons">leaderboard</i>Contests</a></li>
    <li><a href="?page=nets" class="waves-effect"><i class="material-icons">settings_input_antenna</i>Join Our Net</a></li>
    <li><div class="divider"></div></li>
    <li><a href="?page=awards"><i class="material-icons">emoji_events</i>Awards</a></li>
    <li><a href="?page=resources"><i class="material-icons">library_books</i>Resources</a></li>
    <li><a href="?page=faq"><i class="material-icons">help</i>FAQ</a></li>
    <li><div class="divider"></div></li>
    <li><a href="?page=discord"><i class="material-icons">forum</i>Join our Discord</a></li>
    <li><a href="?page=support-us"><i class="material-icons">favorite</i>Support Us</a></li>
  </ul>
</header>
