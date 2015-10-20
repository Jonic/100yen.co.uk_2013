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

    <meta http-equiv="content-style-type"   content="text/css">
    <meta http-equiv="content-script-type"  content="text/javascript">
    <meta name="apple-mobile-web-app-title" content="100yen">
    <meta name="description"                content="<?php echo $site->description()->html() ?>">
    <meta name="google-site-verification"   content="EJOTQWsVwuMA6tjtdmDXM0v8ejx4G12gMnu9MKnT5f4">
    <meta name="viewport"                   content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="Website design and development by Jonic Linley." />
    <meta property="og:locale"      content="en_GB">
    <meta property="og:site_name"   content="<?php echo $site->title() ?>">
    <meta property="og:title"       content="<?php echo $site->title() ?>">
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="http://100yen.co.uk/">

    <script src="//use.typekit.net/tgw1nyv.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <?php echo css('assets/css/master.css') ?>

    <link rel="apple-touch-icon-precomposed" href="<?php echo url('/assets/images/icons/apple-touch-icon.png') ?>">
    <link rel="shortcut icon"                href="<?php echo url('/assets/images/icons/favicon.ico') ?>">
  </head>

  <body>
