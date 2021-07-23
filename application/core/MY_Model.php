<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Model extends CI_Model{

    public function __construct()
	{
		$this->load->database();
	}
    public function  getWhere($where){
        $this->db->select("*");
		$this->db->where($where);
		$query = $this->db->get($this->table_name);
		return $query->result_array();

    }
    public function  getAll(){
        $this->db->select("*");
		$query = $this->db->get($this->table_name);
		return $query->result_array();
    }
}