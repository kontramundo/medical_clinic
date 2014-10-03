<?php
class Historia_clinica_model extends CI_Model {

	public function get_table($order_by, $tabla)
	{
		$this->db->order_by($order_by, "ASC");
		$query = $this->db->get($tabla);

		return $query->result();
	}

	function get_table_where($where, $columna, $order_by, $table, $test='result')
	{	
		$this->db->where($where);
		$this->db->order_by($columna, $order_by);
		$query = $this->db->get($table);

		return $query->$test();
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

	function rel_hc_heredofamiliares($id_historia_clinica)
	{
		$query=$this->db->query("SELECT C.id_cat_heredofamiliar, C.nombre, 
									CASE WHEN R.id_rel_hc_heredofamiliares THEN 'checked' END AS checked 
								FROM cat_heredofamiliares AS C
								LEFT JOIN rel_hc_heredofamiliares AS R ON C.id_cat_heredofamiliar=R.id_cat_heredofamiliar 
									AND R.id_historia_clinica=$id_historia_clinica AND R.borrado=0
								GROUP BY C.id_cat_heredofamiliar");

		return $query->result(); 
	}

	function rel_hc_patologicos($id_historia_clinica)
	{
		$query=$this->db->query("SELECT C.id_cat_patologico, C.nombre, 
									CASE WHEN R.id_rel_hc_patologicos THEN 'checked' END AS checked 
								FROM cat_patologicos AS C
								LEFT JOIN rel_hc_patologicos AS R ON C.id_cat_patologico=R.id_cat_patologico
									AND R.id_historia_clinica=$id_historia_clinica AND R.borrado=0
								GROUP BY C.id_cat_patologico");

		return $query->result(); 
	}

	function rel_hc_no_patologicos($id_historia_clinica)
	{
		$query=$this->db->query("SELECT C.id_cat_no_patologico, C.nombre, 
									CASE WHEN R.id_rel_hc_no_patologicos THEN 'checked' END AS checked 
								FROM cat_no_patologicos AS C
								LEFT JOIN rel_hc_no_patologicos AS R ON C.id_cat_no_patologico=R.id_cat_no_patologico
									AND R.id_historia_clinica=$id_historia_clinica AND R.borrado=0
								GROUP BY C.id_cat_no_patologico");

		return $query->result(); 
	}

	function rel_hc_obstetricos($id_historia_clinica)
	{
		$query=$this->db->query("SELECT C.id_cat_obstetrico, C.nombre, 
									CASE WHEN R.id_rel_hc_obstetricos THEN 'checked' END AS checked 
								FROM cat_obstetricos AS C
								LEFT JOIN rel_hc_obstetricos AS R ON C.id_cat_obstetrico=R.id_cat_obstetrico
									AND R.id_historia_clinica=$id_historia_clinica AND R.borrado=0
								GROUP BY C.id_cat_obstetrico");

		return $query->result(); 
	}
}
?>