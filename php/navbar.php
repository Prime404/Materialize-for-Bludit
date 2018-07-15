<nav class="grey darken-4">
    <div class="container">
        <a class="brand-logo left" href="<?php echo $site->url() ?>">
            <?php echo $site->title() ?>
        </a>
        
        <ul id="nav-mobile" class="right">
            <li><a href="<?php echo $site->url() ?>">Home</a></li>
            <!-- Static pages -->
            <?php foreach ($staticContent as $staticPage) : ?>
                <li><a href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>
</nav>
