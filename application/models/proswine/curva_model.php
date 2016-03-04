<?php

if (!defined('BASEPATH')) {
    die('No direct script access allowed');
}

/**
 * Super Class
 *
 * @package None
 * @subpackage None
 * @category Model
 * @author Author Alfredo Garcia
 * @link http://localhost/sistema_web/censos.php/
 */
class Curva_Model extends My_Model {
    public $table_name;
    public $schema;

    /**
     * Carga todo las funciones que tiene disponile CI_Model propia de codeigniter
     */
    function __construct() {
        // llamma el Modelo constructor
        parent::__construct();
        $this->table_name = 'curva_mstr';
        $this->schema_add = array(
        	'Borrar' => array(
				'tipo' => 'reset',
				'label' => 'Borrar',
				'class' => 'btn btn-default',
				'id' => 'borrar'
			),
			'Guardar' => array(
				'tipo' => 'submit',
				'label' => 'Guardar',
				'class' => 'btn btn-primary',
				'id' => 'guardar'
			)
        );
        $this->schema_up = array(
        	'Borrar' => array(
				'tipo' => 'reset',
				'label' => 'Borrar',
				'class' => 'btn btn-primary',
				'id' => 'borrar'
			),
			'Guardar' => array(
				'tipo' => 'submit',
				'label' => 'Guardar',
				'class' => 'btn btn-primary',
				'id' => 'guardar'
			),
			'Eliminar' => array(
				'tipo' => 'submit',
				'label' => 'Eliminar',
				'class' => 'btn btn-primary',
				'id' => 'eliminar'
			)
        );
         $this->schema = array(
         	'Datos' => array(
         		'class' => 'ejemplo',
         		'id' => 'ejemplo',
	        	'curva_dia' => array(
	        		'name' => 'Edad en dias',
	        		'tipo' => 'int',
	        		'lenght' => 11,
	        		'null' => FALSE,
	        		'primary' => TRUE,
	        		'update' => FALSE,
					'type' => 'number',
	        	),
	        	'curva_id_group' => array(
	        		'name' => 'Grupo',
	        		'tipo' => 'int	',
	        		'lenght' => 25,
	        		'null' => FALSE,
	        		'primary' => FALSE,
	        		'update' => TRUE,
					'type' => 'number'
	        	),
	        	'curva_cerdos' => array(
	        		'name' => 'Cerdos',
	        		'tipo' => 'dec',
	        		'lenght' => 25,
	        		'null' => FALSE,
	        		'primary' => FALSE,
	        		'update' => TRUE,
					'type' => 'number'
	        	),
	        	'curva_total' => array(
	        		'name' => 'Pesos real otal',
	        		'tipo' => 'dec',
	        		'lenght' => 25,
	        		'null' => FALSE,
	        		'primary' => FALSE,
	        		'update' => TRUE,
					'type' => 'number'
	        	),
	        	'curva_cv' => array(
	        		'name' => 'CV',
	        		'tipo' => 'int',
	        		'lenght' => 25,
	        		'null' => FALSE,
	        		'primary' => FALSE,
	        		'update' => TRUE,
					'type' => 'number'
	        	),
	        	'curva_max' => array(
	        		'name' => 'Maximo',
	        		'tipo' => 'int',
	        		'lenght' => 25,
	        		'null' => FALSE,
	        		'primary' => FALSE,
	        		'update' => TRUE,
					'type' => 'number'
	        	),
	        	'curva_min' => array(
	        		'name' => 'Minimo',
	        		'tipo' => 'int',
	        		'lenght' => 25,
	        		'null' => FALSE,
	        		'primary' => FALSE,
	        		'update' => TRUE,
					'type' => 'number'
	        	)
	        )
        );
    }
/*    
    function prepararForm(){
		$forms = array();
	    $formularios = $this->get_value('granjas_mstr', 'idgranjas_mstr', 'granjas_desc');
	    $forms[''] = 'Seleccione una Granja';
		foreach($formularios as $formulario){
			$forms[$formulario->idgranjas_mstr] = $formulario->granjas_desc;
		}
		$this->schema['group_id_granja']['data'] = $forms;
    }
*/    
    function get_value($table, $campo1, $campo2) {
        $this->db->select($campo1 . ',' . $campo2);
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}

/* End of file granjas_model.php */
/* Location: ./application/censos/models/granjas_model.php */