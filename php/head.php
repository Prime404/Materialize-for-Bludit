<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bludit CMS">

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Dynamic title tag -->
<?php echo Theme::headTitle(); ?>

<!-- Dynamic description tag -->
<?php echo Theme::headDescription(); ?>

<!-- Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- CSS: Bulma -->
<?php echo Theme::css('css/materialize.min.css'); ?>

<!-- CSS: Styles for this theme -->
<?php echo Theme::css('css/style.css'); ?>

<!-- JS: Scripts for this theme -->
<?php echo Theme::js('js/materialize.min.js'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
