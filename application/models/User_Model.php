<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

   function __construct() {
      parent::__construct();
   }

   public function userExists($value1, $value2) {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('email', $value1);
      $this->db->where('password', $value2);
      if($query = $this->db->get()) {
         if($query->num_rows() > 0) {
            return TRUE;
         } else {
            return FALSE;
         }
      }
   }

   public function getUser($value1, $value2) {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('email', $value1);
      $this->db->where('password', $value2);
      $query = $this->db->get();
      $data = $query->result_array('array');
      return $data;
   }

   public function doBooleanSelect($toSelect, $from, $where = null, $whereValue = null, $order_by = null) {
      $this->db->select($toSelect);
      $this->db->from($from);
      if(!empty($where) && !empty($whereValue)):
         $this->db->where($where, $whereValue);
      endif;
      if(!empty($order_by)):
         $this->db->order_by($order_by);
      endif;
      $query = $this->db->get();
      if(!empty($query->result()) && $query->num_rows() > 0) {
         return TRUE;
      } else {
         return FALSE;
      }
   }

   public function doValueSelect($toSelect, $from, $where = null, $whereValue = null, $limit = null, $row = null) {
      $this->db->select($toSelect);
      $this->db->from($from);
      if(!empty($where) && !empty($whereValue)):
         $this->db->where($where, $whereValue);
      endif;
      $this->db->limit($limit, $row);
      $query = $this->db->get();
      return $query->result();
   }

   public function newUser($data) {
      if($this->db->insert('users', $data)) {
         return TRUE;
      } else {
         return FALSE;
      }
   }

   // public function findUser($value) {
   //    $this->db->select('*');
   //    $this->db->from('users');
   //    $this->db->where('id', $value);
   //    $query = $this->db->get();
   //    $data = $query->result_array('array');
   //    return $data;
   // }

}
?>
