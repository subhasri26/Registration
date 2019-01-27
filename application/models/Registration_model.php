<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		//Do your magic here
	}
	public function insert_db($data)
	{
		print_r($data);
		$query = $this->db->insert('registration',$data);
		return true;
	}

   public function selectdb()
	{
		$this->db->select('*');
	    $this->db->from('registration');
		$query = $this->db->get();
		return $query->result();
	}


   public function getdata($id)
	{
		$this->db->select('*');
	    $this->db->from('registration');
	    $this->db->where('id',$id);
		$query = $this->db->get();
		$this->db->last_query();
		return $query;
	}

  public function editdb($id,$data)
	{
			$this->db->where('id', $id);
		    $this->db->update('registration',$data);
			return $this->db->affected_rows() > 0;
   }

	public function deletedb($id = NULL)
	{
			$this->db->where('id',$id);
			$this->db->delete('registration');
			$this->db->last_query();
			return true;
   }


}

/* End of file Registration_model.php */
/* Location: ./application/models/Registration_model.php */