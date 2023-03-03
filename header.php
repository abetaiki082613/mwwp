<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>setup</title>

    <!---------- OGP ---------->
    <meta property="og:url" content=" ページの URL" />
    <meta property="og:type" content=" ページの種類" />
    <meta property="og:title" content=" ページの タイトル" />
    <meta property="og:description" content=" ページの説明文" />
    <meta property="og:site_name" content="サイト名" />
    <meta property="og:image" content=" サムネイル画像の URL" />
    <!---------- CUSTOM CSS ---------->
    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css">
    <?php wp_head(); ?>
</head>

<body>