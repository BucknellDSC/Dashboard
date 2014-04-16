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
			->add('BriefDescr', 'text')
            ->add('LongDescr', 'text')			
			->add('Course', 'entity', array(
				'class' => 'DashboardAssignmentBundle:Course',
				'property' => 'name'))
                                ->add('TechCatory', 'text')
                                ->add('TechTools', 'text')
                                ->add('Showcase', 'checkbox')
                                ->add('ProjectURL', 'text')
			->add('save', 'submit');
	}	
	
	public function getName()
	{
		return 'assignment';	
	}
}