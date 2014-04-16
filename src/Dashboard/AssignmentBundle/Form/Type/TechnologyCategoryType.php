<?php
namespace Dashboard\AssignmentBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TechnologyCategoryType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('name', 'text')			
			/*
			->add('Assignment', 'entity', array(
				'class' => 'DashboardAssignmentBundle:Assignment',
				'property' => 'name'))
				*/
			->add('save', 'submit');
	}	
	
	public function getName()
	{
		return 'TechnologyCategory';	
	}
}