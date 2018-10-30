<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */


if ( ! function_exists('get_phrase'))
{
	function get_phrase($phrase = '') {
		$CI	=&	get_instance();
		$CI->load->database();
		$current_language	=	$CI->db->get_where('crg_settings' , array('se_type' => 'language'))->row()->se_descripcion;
		
		if ( $current_language	==	'') {
			$current_language	=	'la_english';
			$CI->session->set_userdata('current_language' , $current_language);
		}

	// query for finding the phrase from `language` table
		$query	=	$CI->db->get_where('crg_language' , array('la_frase' => $phrase));
		$row   	=	$query->row();	
		
		// return the current sessioned language field of according phrase, else return uppercase spaced word
		if (isset($row->$current_language) && $row->$current_language !="")
			return $row->$current_language;
		else 
			return ucwords(str_replace('_',' ',$phrase));
	}
}

// ------------------------------------------------------------------------
/* End of file language_helper.php */
/* Location: ./system/helpers/language_helper.php */