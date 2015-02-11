<?php namespace Form;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

class Form
{
	public $name;
	/**
	 * @var array
	 */
	public $fields;

	static protected $initialized = false;

	public function renderHTML()
	{
		$buffers = array();
		foreach ($fields as $field)
			$buffers[] = $field->renderHTML();
		return join("\n", $buffers);
	}

	static public function formFromClass($className)
	{
		$form = new Form();

		$reader = new AnnotationReader();
		$formClass = new \ReflectionClass($className);
		
		FormInitalizer::initialize();

		foreach ($formClass->getProperties() as $property) {
			$annotations = $reader->getPropertyAnnotations($property);
			
		}
	}
}