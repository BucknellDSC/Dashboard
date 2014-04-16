<?php
namespace Dashboard\AssignmentBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AssignmentType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			//->add('assignment')
			->add('name', 'text')
			->add('BriefDescription', 'text')
            ->add('LongDescription', 'text')			
			->add('Course', 'entity', array(
				'class' => 'DashboardAssignmentBundle:Course',
				'property' => 'name'))
            ->add('TechnologyCategory', 'entity', array(
				'class' => 'DashboardAssignmentBundle:TechnologyCategory',
				'property' => 'name'))
            ->add('TechnologyTools', 'entity', array(
				'class' => 'DashboardAssignmentBundle:TechnologyTools',
				'property' => 'name'))
            ->add('Showcase', 'checkbox')
            ->add('ProjectURL', 'text')
			->add('save', 'submit');
	}	
	
	public function getName()
	{
		return 'assignment';	
	}
}