<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Resume_Model extends CI_Model {

   function __construct() {
      parent::__construct();
   }

   public function getResumes() {
      $query = $this->db->get('users');
      $this->db->order_by('rand()');
      $data = $query->result_array('array');
      return $data;
   }

}
