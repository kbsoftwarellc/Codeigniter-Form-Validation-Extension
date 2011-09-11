<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    function __construct()
    {
        //NOTE: Form_Validation was not automatically reading my config file.
        //      So I had to load it manually and pass to data to parent constructor.
    	$CI =& get_instance();
    	$CI->config->load('form_validation');
        parent::__construct(($CI->config->item('form_validation')));
    }

    /**
     * Error Count
     *
     * Returns the the number of errors
     *
     * @access    public
     * @return    int
     */    
    function error_count()
    {
        return count($this->_error_array);
    }
}

/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */ 