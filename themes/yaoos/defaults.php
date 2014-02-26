<?php

/**
 * See lib/defaults.php for a list of possible defaults
 */

class OC_Theme {

   private $ThemeName;
   private $Slogan;

   function __construct() {
      $this->ThemeName = "YAOOS";
      $this->Slogan = "gratis Speicher mit Schweizer Qualität";
   }
   
   public function getName() {
      return $this->ThemeName;
   }
   
   public function getTitle() {
   	  return $this->ThemeName;
   }
   
   public function getEntity() {
   	  return $this->ThemeName;
   }
   
   public function getSlogan() {
   	  return $this->Slogan;
   }

}