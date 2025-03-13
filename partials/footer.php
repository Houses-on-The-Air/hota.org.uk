<?php //include __DIR__ . '/above-footer-ad.php'; ?>
<?php //include __DIR__ . '/socials.php'; ?>
<?php include __DIR__ . '/translate.php'; ?>
<footer class="page-footer blue-grey darken-1">
  <div class="container">
    <div class="row">
      <div class="col l4 m6 s12">
        <h5 class="white-text">Houses on The Air</h5>
        <p class="grey-text text-lighten-4">An amateur radio activity that encourages operators to set up and operate from various house locations.</p>
        <div class="social-links">
          <a href="<?= ConfigManager::get('social.facebook') ?>" target="_blank" rel="nofollow" class="white-text" aria-label="Facebook">
            <i class="material-icons">facebook</i>
          </a>
          <a href="<?= ConfigManager::get('social.twitter') ?>" target="_blank" rel="nofollow" class="white-text" aria-label="X">
            <i class="material-icons">X</i>
          </a>
          <a href="<?= ConfigManager::get('social.reddit') ?>" target="_blank" rel="nofollow" class="white-text" aria-label="Reddit">
            <i class="material-icons">forum</i>
          </a>
          <a href="<?= ConfigManager::get('social.bluesky') ?>" target="_blank" rel="nofollow" class="white-text" aria-label="Bluesky">
            <i class="material-icons">cloud</i>
          </a>
        </div>
      </div>
      <div class="col l2 m3 s6">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="?page=about">About</a></li>
          <li><a class="grey-text text-lighten-3" href="?page=faq">FAQ</a></li>
          <li><a class="grey-text text-lighten-3" href="?page=resources">Resources</a></li>
          <li><a class="grey-text text-lighten-3" href="?page=glossary">Glossary</a></li>
          <li><a class="grey-text text-lighten-3" href="?page=contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="col l2 m3 s6">
        <h5 class="white-text">Activities</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="?page=house-activations">House Activations</a></li>
          <li><a class="grey-text text-lighten-3" href="?page=contests">Contests</a></li>
          <li><a class="grey-text text-lighten-3" href="?page=awards">Awards</a></li>
          <li><a class="grey-text text-lighten-3" href="?page=nets">Nets</a></li>
          <li><a class="grey-text text-lighten-3" href="/#upload">Upload ADIF</a></li>
        </ul>
      </div>
      <div class="col l4 m12 s12">
        <h5 class="white-text">Subscribe to Updates</h5>
        <p class="grey-text text-lighten-4">Join our mailing list to receive updates about upcoming events and activities.</p>
        <div class="row">
          <div class="col s12">
            <a href="?page=mailing-list" class="btn white black-text waves-effect">Subscribe</a>
            <a href="?page=discord" class="btn white black-text waves-effect">Join Discord</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          © <?= date('Y') ?> Houses on The Air - All rights reserved
        </div>
        <div class="col s12 m6 right-align">
          <a class="grey-text text-lighten-4" href="?page=privacy">Privacy Policy</a> |
          <a class="grey-text text-lighten-4" href="?page=terms">Terms of Service</a> |
          <a class="grey-text text-lighten-4" href="?page=cookies">Cookies</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php include __DIR__ . '/foot.php'; ?>
