<?php namespace Form\Examples;

use Form\Renderer\Widgets\Ratio;
use Form\Renderer\Widgets\Select;

class RegistrationForm
{
	/**
	 * 性别
	 * 
	 * @Ratio(name="gender", label="男", value="man")
	 * @Ratio(name="gender", label="女", value="women")
	 *
	 * @var string
	 */
	public $gender;

	/**
	 * 省
	 * @Select(name="province", dataSource="DataSourceProvince", child="city")
	 * @var string
	 */
	public $province;

	/**
	 * 市
	 * @Select(name="city", dataSource="DataSourceCity", parent="province")
	 * @var string
	 */
	public $city;
}