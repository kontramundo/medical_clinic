<?php
class Upload  extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('upload_model');
	}

	public function subir()
	{
		$input  = trim($this->input->post('input'));
		$folder = trim($this->input->post('folder'));
		$uniqid = trim($this->input->post('uniqid'));

	 	$server = $_SERVER['DOCUMENT_ROOT'].parse_url(base_url(), PHP_URL_PATH);

	 	//Ruta donde se guardan los archivos
		$folder = $server.'/'.$folder;

		if (!empty($_FILES))
		{
			//nombre Temporal
			$tmp_file = $_FILES['archivo']['tmp_name'];
			$file = $_FILES['archivo']['name'];
			$file_type = $_FILES['archivo']['type'];

			//Formatos permitidos
			$types_permitidos = array("image/png", "image/jpeg");

			if (in_array($file_type,$types_permitidos))
			{
				//ID UNICO ARCHIVO
				$uniqid_archivo=uniqid();

				//Genera nuevo nombre de archivo
				$nuevo_nombre=strtolower($uniqid_archivo.".".pathinfo($file, PATHINFO_EXTENSION));
				$folder=rtrim($folder,'/') . '/' .$nuevo_nombre;

				if (move_uploaded_file($tmp_file, $folder))
				{
					//Arreglo con los datos para insert
					$datos = array(
						'nombre'      => $nuevo_nombre,
						'nombre_tmp'  => $file,
						'tipo'        => $file_type,
						'uniqid'     => $uniqid
					);

					//Inserta en la BD
					$insert=$this->upload_model->insert($datos);

					if($insert)
					{
						?>
						<tr id="<?php echo $uniqid_archivo;?>">
							<td  class="<?php echo $input?>" data-name="<?php echo $nuevo_nombre;?>" data-nametmp="<?php echo $file;?>"><div style="width:160px; overflow:hidden;"><?php echo $file;?></div></td>
							<td  class="text-center">
								<button type="button" class="btn btn-success btn-xs" style="cursor: default"><i class="fa fa-check"></i></button>
								<button type="button" class="btn btn-danger btn-xs eliminar" data-name="<?php echo $nuevo_nombre;?>"><i class="fa fa-trash-o"></i></button>
							</td>
						</tr>
						<?php
					}
					else
					{
						?>
						<tr>
							<td><?php echo $file;?></td>
							<td class="text-center">
								<button type="button" class="btn btn-danger btn-xs" style="cursor: default"><i class="fa fa-exclamation-triangle"></i> Error al guardar en BD</button>
							</td>
						</tr>
						<?php
					}
				}
				else
				{
					?>
					<tr>
						<td><?php echo $file;?></td>
						<td class="text-center">
							<button type="button" class="btn btn-danger btn-xs" style="cursor: default"><i class="fa fa-exclamation-triangle"></i> Error</button>
						</td>
					</tr>
					<?php
				}
			}
			else
			{
				?>
				<tr>
					<td>Archivo Invalido</td>
					<td class="text-center">
						<button type="button" class="btn btn-danger btn-xs" style="cursor: default"><i class="fa fa-exclamation-triangle"></i> Error</button>
					</td>
				</tr>
				<?php
			}
		}
	}

	//Metodo para eliminar
	public function eliminar()
	{
		$archivo = trim($this->input->post('archivo'));
		$folder  = trim($this->input->post('folder'));
		$uniqid = trim($this->input->post('uniqid'));

	 	$server  = $_SERVER['DOCUMENT_ROOT'].parse_url(base_url(), PHP_URL_PATH);

	 	//Ruta donde se guardan los archivos
		$folder = $server.'/'.$folder;

		//Arreglo con los datos de condicion para el delete
		$datos = array(
			'nombre'      => $archivo,
			'uniqid'     => $uniqid
		);

		//Elimina de la BD
		$delete=$this->upload_model->delete($datos);

		if($delete)
		{
			if(file_exists(($folder.'/'.$archivo)))
			{
				unlink($folder.'/'.$archivo);
				echo 1;
			}
			else
			{
				?>
				<tr>
					<td><?=$archivo;?></td>
					<td class="text-center">
						<button type="button" class="btn btn-danger btn-xs" style="cursor: default"><i class="fa fa-exclamation-triangle"></i> Error al eliminar del Server</button>
					</td>
				</tr>
				<?php
			}
		}
		else
		{
			?>
			<tr>
				<td><?=$archivo;?></td>
				<td class="text-center">
					<button type="button" class="btn btn-danger btn-xs" style="cursor: default"><i class="fa fa-exclamation-triangle"></i> Error al eliminar de la BD</button>
				</td>
			</tr>
			<?php
		}
	}
}
?>