<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('get_text_field')) {
	function get_text_field($value = null)
	{
		if (empty($value))
			return 'N/A';

		return $value;
	}
}
