<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class GEN_POP extends CI_Controller {

   function __construct() {
      parent::__construct();
   }

   private function getReferer() {
      $referer = $_SERVER['HTTP_REFERER'];
      return $referer;
   }

}
