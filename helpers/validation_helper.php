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


if ( ! function_exists('email_validation_on_create'))
{
	function email_validation_on_create($email){
		$ci=& get_instance();
		$num_rows = 0;
		$user_array = array('cdp_usuario');
		$size = sizeof($user_array);

		for($i = 0; $i < $size; $i++){
			$ci->db->where('us_email', $email);
			$num_rows = $ci->db->get($user_array[$i])->num_rows();
			if($num_rows > 0){
				return 0;
			}
		}
		return 1;
	}
}

if ( ! function_exists('email_validation_on_edit')){
	function email_validation_on_edit($email, $id, $type){
		$num_rows = 0;
		$ci=& get_instance();
		$user_array = array('cdp_usuario');
		$size = sizeof($user_array);
		for($i = 0; $i < $size; $i++){
			if($type == $user_array[$i]){
				$ci->db->where_not_in('us_id', $id);
				$ci->db->where('us_email', $email);
				$num_rows = $ci->db->get($user_array[$i])->num_rows();
				if($num_rows > 0){
					return 0;
				}
			}
			else{
				$ci->db->where('us_email', $email);
				$num_rows = $ci->db->get($user_array[$i])->num_rows();
				if($num_rows > 0){
					return 0;
				}
			}
		}
		return 1;
	}
}

if (!function_exists('null_checking')) {
	function null_checking($data){
		$returned_array = array();
		$key_array      = array_keys($data);
		$size 		      = sizeof($key_array);
		for ($i = 0; $i < $size; $i++) {
			if (!empty($data[$key_array[$i]])) {
				$returned_array[$key_array[$i]] = $data[$key_array[$i]];
			}
			else{
				$returned_array[$key_array[$i]] = null;
			}
		}
		return $returned_array;
	}
}
