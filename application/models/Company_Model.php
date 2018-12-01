<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Company_Model extends CI_Model {

   function __construct() {
      parent::__construct();
   }

   public function getJobs() {
      $this->db->select('category');
      $this->db->from('categories');
      if($query = $this->db->get()) {
         $data = $query->result_array('array');
         return $data;
      } else {
         return null;
      }
   }

   public function newJob($value) {
      if($this->db->insert('jobs', $value)) {
         return TRUE;
      } else {
         return FALSE;
      }
   }

   public function addCompany($value) {
      if($this->db->insert('companies', $value)) {
         return TRUE;
      } else {
         return FALSE;
      }
   }

   public function updateCompanyProfile($values, $id) {
      $this->db->where('id', $id);
      return $this->db->update('companies', $values);
   }

   public function companyExists($value1, $value2) {
      $this->db->select('*');
      $this->db->from('companies');
      $this->db->where('email', $value1);
      $this->db->where('password', $value2);
      $query = $this->db->get();
      if($query->num_rows() > 0) {
         return TRUE;
      } else {
         return FALSE;
      }
   }

   public function getCompany($value1, $value2) {
      // $this->db->select('*');
      $this->db->select('id, name, phone, founded, about, email, website, industry, size, address, location, logo');
      $this->db->from('companies');
      $this->db->where('email', $value1);
      $this->db->where('password', $value2);
      if($query = $this->db->get()) {
         $data = $query->result_array('array');
         return $data;
      } else {
         return FALSE;
      }
   }

   public function getCompanyProfile($company_id) {
      $this->db->select('id, name, phone, founded, about, email, website, industry, size, address, location, logo');
      $this->db->from('companies');
      $this->db->where('id', $company_id);
      $query = $this->db->get();
      $data = $query->result_array('array');
      return $data;
   }

   public function getCompanies() {
      $this->db->select('*');
      $this->db->from('companies');
      $this->db->order_by('rand()');
      if($query = $this->db->get()) {
         $data = $query->result_array('array');
         return $data;
      } else {
         return FALSE;
      }
   }

   public function getOurJobs($company_id) {
      $this->db->select('*');
      $this->db->from('jobs');
      $this->db->where('company_id', $company_id);
      $query = $this->db->get();
      $data = $query->result_array();
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

}

?>
