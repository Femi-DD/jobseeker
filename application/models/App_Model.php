<?php defined('BASEPATH') OR exit('No direct script access allowed');

class App_Model extends CI_Model {

   function __construct() {
      parent::__construct();
   }

   public function mailExists($value1) {
      $this->db->select('*');
      $this->db->from('subscribers');
      $this->db->where('email', $value1);
      if($query = $this->db->get()) {
         if($query->num_rows() > 0) {
            return TRUE;
         } else {
            return FALSE;
         }
      }
   }

   public function addSubscriber($value) {
      if(self::mailExists($value)) {
         return true;
      } else {
         if($this->db->insert('subscribers', $data)) {
            return TRUE;
         } else {
            return FALSE;
         }
      }
   }

}

 ?>
