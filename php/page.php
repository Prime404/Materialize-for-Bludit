<!-- Post -->
<div class='content'>

    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <!-- Cover image -->
    <?php if ($page->coverImage()) : ?>
    <img alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
    <?php endif ?>

    <div>
        <!-- Title -->
        <a href="<?php echo $page->permalink(); ?>">
            <h1 class="grey-text text-darken-4"><?php echo $page->title(); ?></h1>
        </a>

        <?php if (!$page->isStatic() && !$Url->notFound()) : ?>
        <!-- Creation date -->
        <h6>Posted on: <?php echo $page->date(); ?></h6>
        <?php endif ?>

	<hr>

        <!-- Full content -->
        <?php echo $page->content(); ?>
    </div>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>

</div>
