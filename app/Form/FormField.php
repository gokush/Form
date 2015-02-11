<?php namespace Form;

class FormField
{
	public $name;
	public $value;

	public $label;
	/**
	 * @var string Form field description
	*/
	public $description;

	public $type;

	public $formFieldRendererFactory;
	public $widgets;

	public $config;

	public function __construct($config)
	{
		$this->config = $config;
	}

	/**
	 * render to HTML 
	 *
	 * @return string
	 */
	public function renderHTML()
	{
		return $formFieldRendererFactory
			->field($this->config)->rendererHTML($this);
	}
}