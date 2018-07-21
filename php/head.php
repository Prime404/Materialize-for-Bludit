<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bludit CMS">

<!-- Dynamic title tag -->
<?php echo Theme::headTitle(); ?>

<!-- Dynamic description tag -->
<?php echo Theme::headDescription(); ?>

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Jquery  -->
<script src="//code.jquery.com/jquery-latest.min.js"></script>

<!-- Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- CSS: Materialize -->
<?php echo Theme::css('css/materialize.min.css'); ?>

<!-- CSS: Styles for this theme -->
<?php echo Theme::css('css/style.css'); ?>

<!-- JS: Scripts for this theme -->
<?php echo Theme::js('js/materialize.min.js'); ?>

<!-- JS: Custom JS for this theme -->
<?php echo Theme::js('js/custom.js'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
