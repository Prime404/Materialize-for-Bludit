<?php foreach ($content as $page) : ?>
  <!-- Post -->
  <div class='content'>
    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin');  ?>

    <div class="card">
      <!-- Cover image -->
      <?php if ($page->coverImage()) : ?>
        <div class="card-image">
          <img alt="Cover Image" src="<?php echo $page->coverImage(); ?>">
        </div>
      <?php endif ?>

      <div class="card-content">
        <!-- Title -->
        <a href="<?php echo $page->permalink(); ?>">
          <span class="card-title grey-text text-darken-4"><?php echo $page->title(); ?></span>
        </a>

        <!-- Creation date -->
        <h6>Posted on: <?php echo $page->date(); ?></h6>

        <hr>

        <!-- Breaked content -->
        <?php echo $page->contentBreak(); ?>
      </div>

      <!-- "Read more" button -->
      <?php if ($page->readMore()) : ?>
        <div class="card-action">
          <a href="<?php echo $page->permalink(); ?>" class='waves-effect waves-light btn-small'><?php echo $Language->get('Read more'); ?></a>
        </div>
      <?php endif ?>

      <!-- Load Bludit Plugins: Page End -->
      <?php Theme::plugins('pageEnd'); ?>
    </div>
  </div>
<?php endforeach ?>

<?php
  if(Paginator::showPrev()) {
    echo '<a class="btn btn-secondary left" href="'.Paginator::prevPageUrl().'">&larr; '.$Language->get('Previous page').'</a>';
  }
  if(Paginator::showNext()) {
    echo '<a class="btn btn-secondary right" href="'.Paginator::nextPageUrl().'">'.$Language->get('Next page').' &rarr;</a>';
  }
?>
