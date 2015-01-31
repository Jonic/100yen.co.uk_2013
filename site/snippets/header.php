<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
<!--
     _  ___   ___                    _       _
    / |/ _ \ / _ \    __ _  ___   __| |   __| | __ _ _ __ ___  _ __    _   _  ___ _ __
    | | | | | | | |  / _` |/ _ \ / _` |  / _` |/ _` | '_ ` _ \| '_ \  | | | |/ _ \ '_ \
    | | |_| | |_| | | (_| | (_) | (_| | | (_| | (_| | | | | | | | | | | |_| |  __/ | | |
    |_|\___/ \___/   \__, |\___/ \__,_|  \__,_|\__,_|_| |_| |_|_| |_|  \__, |\___|_| |_|
                      |___/                                             |___/
-->

    <meta charset="utf-8">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">

    <script src="//use.typekit.net/tgw1nyv.js" type="application/javascript"></script>
    <script type="application/javascript">try{Typekit.load();}catch(e){}</script>

    <?php echo css('assets/css/master.css') ?>

    <link rel="apple-touch-icon-precomposed" href="<?php echo url('/assets/images/icons/apple-touch-icon.png') ?>">
    <link rel="shortcut icon"                href="<?php echo url('/assets/images/icons/favicon.ico') ?>">
  </head>

  <body>