
<?php if ( ! defined('BASEPATH')) die('No direct script access allowed');

class Tesoreria_tesoreria extends MY_Controller {

 //   var $param;

    /**
     * [__construct description]
     */
    function __construct() {
        parent::__construct();
        $this->template['module'] = 'tesoreria';
    }

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index() {
        $this->_run('tesoreria');
    }


}
/* End of file Tesoreria.php */
/* Location: ./application/controllers/tesoreria/Tesoreria.php */