<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>
<div id="maincontainer">

    <div id="maincontainer_contents_detail">

        <?php
            $a = new Area('Main Area');
            $a->display($c);
        ?>

    </div>

    <div id="maincontainer_contents_sidebar">
        <?php
            $a = new Area('Sidebar');
            $a->display($c);
        ?>
    </div>

</div>
<?php $this->inc('elements/footer.php'); ?>

	
