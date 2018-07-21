<nav>
  <div class="nav-wrapper grey darken-4">
  <div class="container">
    <a href="<?php echo $site->url() ?>" class="brand-logo"><?php echo $site->title() ?></a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <?php foreach ($staticContent as $staticPage) : ?>
        <li><a href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <?php foreach ($staticContent as $staticPage) : ?>
    <li><a href="<?php echo $site->url() ?>">Home</a></li>
    <li><a href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a></li>
  <?php endforeach ?>
</ul>
