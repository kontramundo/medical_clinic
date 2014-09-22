<?php
class Upload_model extends CI_Model {

	function insert($datos)
	{
		$this->db->insert('tmp_uploads', $datos);
		
		return  $this->db->insert_id();
	}

	function delete($datos)
	{
		return $this->db->delete('tmp_uploads', $datos); 
	}
}