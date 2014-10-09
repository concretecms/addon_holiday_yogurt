<?php
namespace Concrete\Package\HolidayYogurt;

use \Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

    protected $pkgHandle = 'holiday_yogurt';
    protected $appVersionRequired = '5.7.1';
    protected $pkgVersion = '2.0';
	protected $pkgAllowsFullContentSwap = true;

    public function getPackageDescription()
    {
        return t("Adds Holiday Yogurt Theme.");
    }

    public function getPackageName()
    {
        return t("Holiday Yogurt");
    }

    public function install()
    {
        $pkg = parent::install();
        Theme::add('theme_holiday_yogurt', $pkg);
    }


}