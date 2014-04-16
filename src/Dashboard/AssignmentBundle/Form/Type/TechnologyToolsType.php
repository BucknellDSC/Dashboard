<?php
namespace Dashboard\AssignmentBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TechnologyToolsType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('name', 'text')			
			/*
			->add('TechnologyCategory', 'entity', array(
				'class' => 'DashboardAssignmentBundle:TechnologyCategory',
				'property' => 'name'))
				*/
			->add('save', 'submit');
	}	
	
	public function getName()
	{
		return 'TechnologyTools';	
	}
}