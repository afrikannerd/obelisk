<!DOCTYPE html>
<?php
/**
 * Description of Router
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title><?=$this->siteTitle(); ?></title>
        <link href="<?= PROOT?>css/bootstrap.min.css" charset="utf-8" rel="stylesheet"/>
        <link href="<?= PROOT?>css/custom.css" charset="utf-8" rel="stylesheet"/>
        <script src="<?=PROOT?>js/jquery.js"></script>
        <script src="<?=PROOT?>js/bootstrap.min.js"></script>
        <!--<link href="/css/bootstrap.min.css" rel="stylesheet" />-->
        
        <?= $this->content('head'); ?>
    </head>
    <body>
        <?= $this->content('body'); ?>
         <script  src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
