<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Job_Model extends CI_Model {

   function __construct() {
      parent::__construct();
   }

   public function getJobs() {
      $this->db->select('*');
      $this->db->from('jobs');
      $this->db->order_by('rand()');
      if($query = $this->db->get()) {
         $data = $query->result_array('array');
         return $data;
      } else {
         return null;
      }
   }

   public function getCategories() {
      $this->db->select('*');
      $this->db->from('categories');
      $this->db->order_by('category');
      // $query = $this->db->get('categories');
      $query = $this->db->get();
      $data = $query->result_array();
      return $data;
   }

   public function getLatest() {
      $this->db->select('*');
      $this->db->from('jobs');
      $this->db->order_by('rand()');
      // $this->db->order_by('dateadded', 'desc');
      $this->db->limit(10);
      $query = $this->db->get();
      $data = $query->result_array('array');
      return $data;
   }

   public function getTheJobs($value) {
      $this->db->select('*');
      $this->db->from('jobs');
      $this->db->where('category', $value);
      $this->db->order_by('rand()');
      if($query = $this->db->get()) {
         $data = $query->result_array('array');
         return $data;
      } else {
         return null;
      }
   }

   public function getThisJob($value) {
      $this->db->select('*');
      $this->db->from('jobs');
      $this->db->where('job_id', $value);
      if($query = $this->db->get()) {
         $data = $query->result_array('array');
         return $data;
      } else {
         return nill;
      }
   }

   public function getTheCompany($value) {
      $this->db->select('id, name, phone, email, founded, about, logo, address, location, size, industry, website');
      $this->db->from('companies');
      $this->db->where('id', $value);
      if($query = $this->db->get()) {
         $data = $query->result_array('array');
         return $data;
      } else {
         return null;
      }
   }

   public function saveJob($data) {
      if($this->db->insert('saved_jobs', $data)) {
         return true;
      } else {
         return false;
      }
   }

   public function delete_job($value) {
      $this->db->where('job_id', $value);
      return $this->db->delete('jobs');
   }

   public function job_exists($value) {
      $this->db->select('job_id');
      $this->db->from('jobs');
      $this->db->where('job_id', $value);
      $query = $this->db->get();
      if($query->num_rows() > 0) {
         return true;
      } else {
         return false;
      }
   }

   public function save_job($values) {
      $this->db->select('*');
      $this->db->from('saved_jobs');
      $this->db->where('user_id', $values['user_id']);
      $this->db->where('job_id', $values['job_id']);
      $query = $this->db->get();
      if($query->num_rows() > 0) {
         return false;
      } else {
         $this->db->insert('saved_jobs', $values);
         return true;
      }
   }

   public function getSaved($value) {
      $this->db->select('*');
      $this->db->from('saved_jobs');
      $this->db->where('user_id', $value);
      $query = $this->db->get();
      $data = $query->result_array();
      if(!empty($data)) {
         return $data;
      } else {
         return null;
      }
   }

   function getUserSaves($value) {
      $this->db->select('*');
      $this->db->from('saved_jobs');
      $this->db->where('user_id', $value);
      $query = $this->db->get();
      $data = $query->result_array('array');
      if(!empty($data)) {
         return $data;
      } else {
         return null;
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
