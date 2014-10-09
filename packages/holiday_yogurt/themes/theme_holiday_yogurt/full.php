<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>


<div id="maincontainer">

    <div id="maincontainer_contents_fullpage">

        <?php
            $a = new Area('Main');
            $a->display($c);
        ?>


    </div>

</div>

<?php $this->inc('elements/footer.php'); ?>