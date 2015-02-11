<?php

class FormFieldRendererFactory
{
	public function field($config)
	{
		return new $config->formFieldRenderer();
	}
}