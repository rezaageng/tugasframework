<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); class index { var $index_data = array(); function set($name, $value) { $this->index_data[$name] = $value;
        }
     
        function load($index = '', $view = '' , $view_data = array(), $return = FALSE)
        {               
            $this->CI =& get_instance();
            $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));         
            return $this->CI->load->view($index, $this->index_data, $return);
        }
}