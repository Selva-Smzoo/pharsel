<!DOCTYPE html>
<html class="<?php echo $htmlClass; ?>">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta charset="utf-8">
<title><?php echo $meta['title']; ?></title>
<meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<meta name="description" content="<?php echo $meta['description']; ?>">
<meta name="viewport" content="width=1200">
<meta name="format-detection" content="telephone=no">
<link rel="index" href="<?php echo location; ?>">

<?php if(file_exists(dirname(__FILE__).'/../favicon.ico')) : ?>
<!-- favicon -->
<link rel="shortcut icon" href="<?php echo location_file.'favicon.ico'; ?>">
<?php endif; ?>

<?php if(file_exists(dirname(__FILE__).'/../apple-touch-icon.png')) : ?>
<!-- apple-touch-icon -->
<link rel="apple-touch-icon" href="<?php echo location_file.'apple-touch-icon.png'; ?>">
<?php endif; ?>

<!-- Open graph tags -->
<meta property="og:site_name" content="<?php echo TITLE; ?>">
<meta property="og:title" content="<?php echo $meta['title']; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:description" content="<?php echo $meta['description']; ?>">
<?php if(file_exists(dirname(__FILE__).'/../ogp.jpg')) : ?>
<meta property="og:image" content="<?php echo location_file.'ogp.jpg'; ?>">
<?php endif; ?>
