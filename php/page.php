<!-- Post -->
<div class="content">
  <div class="card">
    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <!-- Cover image -->
    <?php if ($page->coverImage()) : ?>
      <div class="card-image">
        <img alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
      </div>
    <?php endif ?>

    <div class="card-content">
        <!-- Title -->
        <a href="<?php echo $page->permalink(); ?>">
          <h1 class="card-title grey-text text-darken-4"><?php echo $page->title(); ?></h1>
        </a>

        <?php if (!$page->isStatic() && !$Url->notFound()) : ?>
          <!-- Creation date -->
          <h6>Posted on: <?php echo $page->date(); ?></h6>
        <?php endif ?>

        <hr>

        <!-- Full content -->
        <?php echo $page->content(); ?>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <!-- Load Bludit Plugins: Page End -->
      <?php Theme::plugins('pageEnd'); ?>
    </div>
  </div>
</div>
