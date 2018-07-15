<?php foreach ($content as $page) : ?>
<!-- Post -->
<div class='content'>

    <!-- Load Bludit Plugins: Page Begin -->
    <? php Theme::plugins('pageBegin');  ?> 

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

<!-- Pagination -->
<?php if (Paginator::amountOfPages()>1) : ?>
<ul class="pagination">
<?php
// Previous button
if (!Paginator::showPrev()) {
    echo '<a class="pagination-previous" disabled>« ' . $Language->get('Previous') . '</a>';
} else {
    echo '<a class="pagination-previous" href="' . Paginator::prevPageUrl() .'">« ' . $Language->get('Previous') . '</a>';
}

// Next button
if (!Paginator::showNext()) {
    echo '<a class="pagination-next" disabled>' . $Language->get('Next') . ' »</a>';
} else {
    echo '<a class="pagination-next" href="' . Paginator::nextPageUrl() .'">' . $Language->get('Next') . ' »</a>';
}
?>
</ul>
<?php endif ?>
