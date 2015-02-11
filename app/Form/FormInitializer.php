<?php namespace Form;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Symfony\Component\Finder\Finder;

class FormInitalizer
{
	static protected $initialized = FALSE;

	static public function initialize()
	{
		if (!self::$initialized) {
			self::$initialized = TRUE;
		} else {
			return;
		}
		foreach (Finder::create()
			->files()->in(__DIR__.'/Renderer/Widgets') as $file)
		{
			AnnotationRegistry::registerFile($file->getRealPath());
		}
	}
}