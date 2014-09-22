<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'third_party/datatables/ssp.class.php';


class Datatables extends SSP
{

	public function set_datatable($tabla, $key)
	{
		/*
		 * DataTables example server-side processing script.
		 *
		 * Please note that this script is intentionally extremely simply to show how
		 * server-side processing can be implemented, and probably shouldn't be used as
		 * the basis for a large complex system. It is suitable for simple use cases as
		 * for learning.
		 *
		 * See http://datatables.net/usage/server-side for full details on the server-
		 * side processing requirements of DataTables.
		 *
		 * @license MIT - http://datatables.net/license_mit
		 */
		 
		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * Easy set variables
		 */
		 
		// DB table to use
		$table = $tabla;
		 
		// Table's primary key
		$primaryKey = $key;
		 
		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes
		$columns = array(
		    array( 'db' => 'id_historia_clinica', 'dt' => 0 ),
		    array( 'db' => 'nombre',  'dt' => 1 )
		);
		 
		// SQL server connection information
		$sql_details = array(
		    'user' => 'root',
		    'pass' => 'developer',
		    'db'   => 'medical_clinic',
		    'host' => 'localhost'
		);
		 
		 
		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		 * If you just want to use the basic configuration for DataTables with PHP
		 * server-side, there is no need to edit below this line.
		 */
		 
		
		 
		echo json_encode(
		    $this->simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		);
	}
}