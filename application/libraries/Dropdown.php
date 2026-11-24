<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dropdown
{
	private static $cache = array();

	public static function get_static($name, $value = false, $action = "form")
	{
		if (isset(self::$cache['static' . $name])) {
			$array = self::$cache['static' . $name];
			if (($value) || ($action != "form")) {
				return @$array[$value];
			}
			return $array;
		}
		switch ($name) {
			case 'bool':
				$array = array(
					'' => 'Select Value',
					0 => 'No',
					1 => 'Yes'
				);
				break;
			case 'roles':
				$array = array(
					'' => 'Select Value',
					1 => 'ADMINISTRATOR',
					2 => 'STUDENT',
				);
				break;
			case 'gender':
				$array = array(
					'' => 'Select Value',
					'MALE' => 'MALE',
					'FEMALE' => 'FEMALE',
				);
				break;
			case 'civil_status':
				$array = array(
					'' => 'Select Value',
					1 => 'SINGLE',
					2 => 'MARRIED',
					3 => 'WIDOW/WIDOWER',
					4 => 'DIVORCED',
					5 => 'SEPARATED'
				);
				break;
			case 'activation_status':
				$array = array(
					'' => 'Select Value',
					0 => 'Deactivated',
					1 => 'Activated'
				);
				break;
			case 'honors':
				$array = array(
					null => 'Select Value',
					'HIGHEST HONORS' => 'HIGHEST HONORS',
					'HIGH HONORS' => 'HIGH HONORS',
					'HONORS' => 'HONORS'
				);
				break;
			default:
				$array = array();
				break;
		}

		// set variable cache
		self::$cache['static' . $name] = $array;

		if (($value) || ($action != "form")) {
			return @$array[$value];
		}

		return $array;
	}
}
