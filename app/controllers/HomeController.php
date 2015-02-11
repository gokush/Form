<?php

use Doctrine\Common\Annotations\AnnotationReader;
use Form\Examples\RegistrationForm;

/**
 * @PartialForm("general", "普通")
 */
class GKProductGeneralForm
{
	public $name;

	/**
	 * @var bool is primary
	 */
	public $primary;
}

class GKProductPriceForm
{

}

/**
 * @Form()
 */
class GKProductForm
{
	public $general;
	public $price;
}

class HomeController extends BaseController
{
	protected $layout = 'layouts.form_base';

	public function index()
	{
		return View::make('index');
	}

	public function create()
	{
		$form = Form\Form::formFromClass('Form\Examples\RegistrationForm');
		
		$this->layout->content = View::make('create', array('form' => 'here'));
	}

	public function store($id)
	{
	}

	public function edit($id)
	{
		
	}

	public function update($id)
	{

	}
}
