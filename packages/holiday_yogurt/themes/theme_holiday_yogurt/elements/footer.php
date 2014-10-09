<?
defined('C5_EXECUTE') or die(_("Access Denied."));
?>

<div id="footercontainer">

                <div id="footercontent_containter">

                    <div id="footercontent_left">
                        &copy; <?php echo date('Y') ?> &nbsp; <a href="http://www.concrete5.org/">concrete5.org</a>
                    </div>

                    <div id="footercontent_right">
                       <?php echo t('CMS made for Marketing but built for Geeks.'); ?>
                    </div>

                </div>

            </div>

        </div>


    </div>


<?php Loader::element('footer_required')?>
</body>


</html>