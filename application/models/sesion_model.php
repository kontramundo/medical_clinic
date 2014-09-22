<?php
class Sesion_model extends CI_Model {

	function login($usuario,$password)
	{		
		$query=$this->db->query("CALL login ('$usuario', '$password')");

		$result = $query->row();
		$query->next_result();
		$query->free_result();

		return $result;
	}

	function recuperar_password($usuario, $id_rec)
	{		
		$query=$this->db->query("CALL recuperar_password ('$usuario', '$id_rec')");

		$result = $query->row();
		$query->next_result();
		$query->free_result();

		return $result;
	}
}