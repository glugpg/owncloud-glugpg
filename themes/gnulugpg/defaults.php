<?php

if (file_exists(OC::$SERVERROOT . '/themes/' . OC_Util::getTheme() . '/defaults.php')) {
	require_once 'themes/' . OC_Util::getTheme() . '/defaults.php';
}
/**
 * See lib/private/defaults.php for a list of possible defaults
 */

class OC_Theme {

   private $ThemeName;

   function __construct() {
      $this->ThemeName = "ownCloud @ perugiagnulug.org";
   }

   public function getName() {
      return $this->ThemeName;
   }

   public function getShortFooter() {
        return 'GNU/LUG PG';
   }

    public function getLongFooter() {
        return 'GNU/Linux User Group Perugia - www.perugiagnulug.org';
    }

    public function getTitle() {
        return $this->ThemeName;
    }
}
