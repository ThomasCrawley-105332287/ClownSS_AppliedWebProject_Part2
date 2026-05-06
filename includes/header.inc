<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" >
        <!-- Gets the team members input from each page for the meta tags -->
        <meta name="description" content="<?php echo $metaDescription; ?>">
        <meta name="keywords"    content="<?php echo $metaKeywords; ?>">
        <meta name="author"      content="<?php echo $metaAuthor; ?>">
        <link href="<?php echo $mainCSS; ?>" rel="stylesheet">
        <?php if (isset($extraCSS)): ?>
        <link href="<?php echo $extraCSS; ?>" rel="stylesheet">
        <?php endif; ?>
        <title><?php echo $pageTitle; ?></title>
        <style>
            * {
                 margin: 0;
                box-sizing: border-box;
            }
        </style>
    </head>
