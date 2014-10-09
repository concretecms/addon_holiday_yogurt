<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>


<div id="maincontainer">

    <div id="maincontainer_contents_fullpage">

        <? print $innerContent;?>

    </div>

</div>

<?php $this->inc('elements/footer.php'); ?>