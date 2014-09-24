<?php
//set_time_limit(0);
ini_set('memory_limit', '512M');
//ini_set('post_max_size', '64M');

class Historia_clinica extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('historia_clinica_model');

		$this->load->library('datatables');

		$this->verifica_sesion();
	}

	public function verifica_sesion()
	{
		if (!$this->session->userdata('id_usuario'))
		{
			//si no tiene sesion lo manda al login
     		redirect(base_url().'sesion');
		}
	}

	public function index()
	{
		$this->load->helper('date');

		$datestring = "%d-%m-%Y";

		$data['fecha']=mdate($datestring);

		$data['estado_civil']     = $this->historia_clinica_model->get_table_where(array('borrado' => '0'), 'nombre', 'cat_estado_civil');
		$data['escolaridades']    = $this->historia_clinica_model->get_table_where(array('borrado' => '0'), 'nombre', 'cat_escolaridad');
		$data['religiones']       = $this->historia_clinica_model->get_table_where(array('borrado' => '0'), 'nombre', 'cat_religiones');
		$data['estados']          = $this->historia_clinica_model->get_table('estado', 'cat_estados');
		$data['heredofamiliares'] = $this->historia_clinica_model->get_table_where(array('borrado' => '0'), 'nombre', 'cat_heredofamiliares');
		$data['patologicos']      = $this->historia_clinica_model->get_table_where(array('borrado' => '0'), 'nombre', 'cat_patologicos');
		$data['no_patologicos']   = $this->historia_clinica_model->get_table_where(array('borrado' => '0'), 'nombre', 'cat_no_patologicos');
		$data['obstetricos']      = $this->historia_clinica_model->get_table_where(array('borrado' => '0'), 'nombre', 'cat_obstetricos');
		
		$this->load->view('templates/header');
		$this->load->view('historia_clinica/registro', $data);
		$this->load->view('templates/footer');
	}

	public function select_municipios()
	{
		$id = $this->input->post('id');

		$municipios = $this->historia_clinica_model->get_table_where(array('id_cat_estado' => $id), 'municipio', 'cat_municipios');

		foreach ($municipios AS $municipio)
		{
			?>
    		<option value="<?php echo $municipio->id_cat_municipio;?>"><?php echo $municipio->municipio;?></option>
    		<?php 
    	}
	}

	public function select_codigo_postal()
	{
		$codigo_postal = $this->input->post('id');

		$colonias = $this->historia_clinica_model->query_select_cp($codigo_postal);

		if($colonias)
		{
			?>

			<div class="form-group">
		    	<label for="colonia">Colonia</label>
	    		<select name="colonia" id="colonia" class="form-control">
					<option value="" selected>Seleccione Colonia</option>
					<?php
					foreach ($colonias AS $colonia)
					{
						?>
			    		<option value="<?php echo $colonia->id_cat_colonia;?>"><?php echo $colonia->colonia;?></option>
			    		<?php 
			    	}
					?>
				</select>
		  	</div>

		  	<div class="form-group">
		    	<label for="colonia">Municipio</label>	    	
	    		<select name="municipio" id="municipio" class="form-control" disabled>
					<?php
					$i=1;
					foreach ($colonias AS $municipio)
					{
						if($i==1)
						{
							?>
			    			<option><?php echo $municipio->municipio;?></option>
			    			<?php

			    			$i++;
			    		}
			    		else
			    		{
			    				break;
			    		}
			    	}
			    	?>
				</select>
		  	</div>

		  	<div class="form-group">
		    	<label for="colonia">Estado</label>
	    		<select name="estado" id="estado" class="form-control" disabled>
					<?php
					$i=1;
					foreach ($colonias AS $estado)
					{
						if($i==1)
						{
							?>
			    			<option><?php echo $estado->estado;?></option>
			    			<?php
			    			 
			    			$i++;
			    		}
			    		else
			    		{
			    				break;
			    		}
			    	}
			    	?>
				</select>
		  	</div>
			<?php 
		}
		else
		{
			?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-times-circle sign"></i><strong>Error!</strong> El Codigo Postal no existe.
			</div>
			<?php	
		}
	}

	public function insertar()
	{
		//Recibe variables del formulario
		$nombre           =$this->input->post('nombre');
		$apellidos        =$this->input->post('apellidos');
		$edad             =$this->input->post('edad');
		$sexo             =$this->input->post('sexo');
		$estado_c         =$this->input->post('estado_c');
		$escolaridad      =$this->input->post('escolaridad');
		$ocupacion        =$this->input->post('ocupacion');
		$lugar_n_e        =$this->input->post('lugar_n_e');
		$lugar_n          =$this->input->post('lugar_n');
		$religion         =$this->input->post('religion');
		$telefono         =$this->input->post('telefono');
		$codigo_postal    =$this->input->post('codigo_postal');
		$colonia          =$this->input->post('colonia');
		$domicilio        =$this->input->post('domicilio');
		
		$medico           =$this->input->post('medico');
		$direccion_m      =$this->input->post('direccion_m');
		$telefono_m       =$this->input->post('telefono_m');
		
		
		$heredofamiliares =$this->input->post('heredofamiliares');
		$patologicos      =$this->input->post('patologicos');
		$no_patologicos   =$this->input->post('no_patologicos');
		$obstetricos      =$this->input->post('obstetricos');
		$padecimiento     =$this->input->post('padecimiento');
		
		$peso             =$this->input->post('peso');
		$talla            =$this->input->post('talla');
		$fr               =$this->input->post('fr');
		$fc               =$this->input->post('fc');
		$ta               =$this->input->post('ta');
		
		$comentarios      =$this->input->post('comentarios');
		$diagnostico      =$this->input->post('diagnostico');
		$tratamiento      =$this->input->post('tratamiento');
		$estudios         =$this->input->post('estudios');

		$id_usuario		  =$this->session->userdata('id_usuario');


		//Verifica si hay valor, de lo contrario aisgna NULL
		$estado_c    = empty($estado_c) 	? NULL : $estado_c;
		$escolaridad = empty($escolaridad) 	? NULL : $escolaridad;
		$lugar_n     = empty($lugar_n) 		? NULL : $lugar_n;
		$religion    = empty($religion) 	? NULL : $religion;
		$colonia     = empty($colonia) 		? NULL : $colonia;



		//Arreglo con los datos para insert
		$datos = array(
			'nombre'              => $nombre,
			'apellidos'           => $apellidos,
			'edad'                => $edad,
			'sexo'                => $sexo,
			'id_cat_estado_civil' => $estado_c,
			'id_cat_escolaridad'  => $escolaridad,
			'ocupacion'           => $ocupacion,
			'id_lugar_n'          => $lugar_n,
			'id_cat_religion'     => $religion,
			'telefono'            => $telefono,
			'codigo_postal'       => $codigo_postal,
			'id_cat_colonia'      => $colonia,
			'calle'               => $domicilio,
			'medico_familiar'     => $medico,
			'direccion_m'         => $direccion_m,
			'telefono_m'          => $telefono_m,
			'padecimiento'        => $padecimiento,
			'peso'                => $peso,
			'talla'               => $talla,
			'fr'                  => $fr,
			'fc'                  => $fc,
			'ta'                  => $ta,
			'comentarios'         => $comentarios,
			'diagnostico'         => $diagnostico,
			'tratamiento'         => $tratamiento,
			'interpretacion'      => $estudios,
			'id_usuario'          => $id_usuario
		);

		//Inicia Transaccion
		$this->historia_clinica_model->trans_start();

			$id_historia_clinica = $this->historia_clinica_model->insert('historias_clinicas', $datos);

			//Inserta Heredofamiliares
			if($heredofamiliares)
			{
				foreach ($heredofamiliares as $value) 
				{
					$datos_heredo[] = array(
								'id_historia_clinica' => $id_historia_clinica,
								'id_cat_heredofamiliar'=> $value
							);
				}

				$this->historia_clinica_model->insert_batch('rel_hc_heredofamiliares', $datos_heredo);
			}

			//Inserta Patologicos
			if($patologicos)
			{
				foreach ($patologicos as $value) 
				{
					$datos_patolo[] = array(
								'id_historia_clinica' => $id_historia_clinica,
								'id_cat_patologico'=> $value
							);
				}

				$this->historia_clinica_model->insert_batch('rel_hc_patologicos', $datos_patolo);
			}

			//Inserta NO Patologicos
			if($no_patologicos)
			{
				foreach ($no_patologicos as $value) 
				{
					$datos_no_patolo[] = array(
								'id_historia_clinica' => $id_historia_clinica,
								'id_cat_no_patologico'=> $value
							);
				}

				$this->historia_clinica_model->insert_batch('rel_hc_no_patologicos', $datos_no_patolo);
			}

			//Inserta Obstetricos
			if($obstetricos)
			{
				foreach ($obstetricos as $value) 
				{
					$datos_obste[] = array(
								'id_historia_clinica' => $id_historia_clinica,
								'id_cat_obstetrico'=> $value
							);
				}

				$this->historia_clinica_model->insert_batch('rel_hc_no_patologicos', $datos_obste);
			}

		//Termina Transaccion
		$trans=$this->historia_clinica_model->trans_complete();		

		if($trans)
		{
			echo 1;
		}
	}

	public function consulta()
	{
		$this->load->view('templates/header');
		$this->load->view('historia_clinica/consulta');
		$this->load->view('templates/footer');
	}

	public function test()
	{
		$resultado=$this->historia_clinica_model->get_table('id_historia_clinica', 'view_historia_clinica');
        

        $i=0;
	    foreach ($resultado as $fila) 
	    {
	    	$json_array['data'][$i][]=$fila->id_historia_clinica;
	    	$json_array['data'][$i][]=$fila->nombre;
	    	$json_array['data'][$i][]=$fila->edad;
	    	$json_array['data'][$i][]=$fila->sexo;
	    	$json_array['data'][$i][]=$fila->telefono;
	    	$json_array['data'][$i][]=$fila->direccion;
	    	$json_array['data'][$i][]=$fila->id_historia_clinica;
	    	$i++;
	    }

        echo json_encode($json_array, true);
	}

	function notas()
	{
		$this->load->view('historia_clinica/notas');
	}
}
?>