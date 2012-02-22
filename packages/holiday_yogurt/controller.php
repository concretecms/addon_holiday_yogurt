<?php    

defined('C5_EXECUTE') or die(_("Access Denied."));

class HolidayYogurtPackage extends Package {

	protected $pkgHandle = 'holiday_yogurt';
	protected $appVersionRequired = '5.5.0';
	protected $pkgVersion = '1.2';
	
	public function getPackageDescription() {
		return t("A festive holiday theme for concrete5.");
	}
	
	public function getPackageName() {
		return t("Holiday Yogurt");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install theme		
		PageTheme::add('theme_holiday_yogurt', $pkg);		 
	}

}