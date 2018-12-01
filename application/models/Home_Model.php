<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model {

   function __construct() {
      parent::__construct();
   }

   function display() {
      $this->db->select('*');
      $this->db->from('categories');
      $this->db->where('icon !=', 'fa');
      $this->db->where('status', '1');
      $this->db->order_by('rand()');
      $this->db->limit('8');
      $query = $this->db->get();
      $data = $query->result_array();
      return $data;
   }

}

?>
