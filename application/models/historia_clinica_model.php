<?php
class Historia_clinica_model extends CI_Model {

	public function get_table($order_by, $tabla)
	{
		$this->db->order_by($order_by, "ASC");
		$query = $this->db->get($tabla);

		return $query->result();
	}

	function get_table_where($where, $columna, $order_by, $table)
	{	
		$this->db->where($where);
		$this->db->order_by($columna, $order_by);
		$query = $this->db->get($table);

		return $query->result();
	}

	function query_select_cp($codigo_postal)
	{
		$query = $this->db->query("SELECT CC.*, CM.municipio, CE.estado 
									FROM cat_colonias AS CC 
										INNER JOIN cat_municipios AS CM ON CC.id_cat_municipio=CM.id_cat_municipio
										INNER JOIN cat_estados    AS CE ON CM.id_cat_estado=CE.id_cat_estado
									WHERE CC.codigo_postal=$codigo_postal");
		return $query->result(); 
	}

	function trans_start()
	{
		//Inicia Transaccion
		$this->db->trans_start();
	}

	function trans_complete()
	{
		//Termina Transaccion
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE)
		{
			return FLASE;
		}

		return TRUE;
	}


	function insert($tabla, $datos)
	{
		$this->db->insert($tabla, $datos);
		
		return  $this->db->insert_id();
	}

	function insert_batch($tabla, $datos)
	{
		$resultado=$this->db->insert_batch($tabla, $datos);
		
		return  $resultado;
	}
}
?>