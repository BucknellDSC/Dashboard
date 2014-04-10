<?php
namespace Dashboard\AssignmentBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CourseType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			//->add('assignment')
			->add('name', 'text')
			/*->add('Semester', 'entity', array(
		  		'class' => 'DashboardAssignmentBundle:Semester',
				'property' => 'name',
				'multiple' => true,
			))
            ->add('Faculty', 'entity', array(
				'class' => 'DashboardAssignmentBundle:Faculty',
				'property' => 'firstName' + 'lastName',
				'multiple' => true,
			))			
			->add('Assignment', 'entity', array(
				'class' => 'DashboardAssignmentBundle:Course',
				'property' => 'name',
                'multiple' => true,
			))*/
			
		  ->add('save', 'submit');
	}	
	
	public function getName()
	{
		return 'assignment';	
	}
}