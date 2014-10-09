<?
defined('C5_EXECUTE') or die(_("Access Denied."));
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php Loader::element('header_required')?>



    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/typography.css" />
    <link href='http://fonts.googleapis.com/css?family=Vast+Shadow' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,700,400italic,700italic' rel='stylesheet' type='text/css'>



</head>



<body>
<div class="<?php echo $c->getPageWrapperClass()?>">


    <div id="overallcontainer">

        <div id="topcontainer">

            <div id="titlecontainer">

                <?php $a = new GlobalArea('Header Site Title');
                $a->display($c); ?>

            </div>

            <div id="main_nav_container">

                <div id="main_nav_list">

                    <ul id="nav_list">
                        <?php
                        $a = new GlobalArea('Header Navigation');
                        $a->display($c);
                        ?>
                    </ul>

                </div>

            </div>

        </div>