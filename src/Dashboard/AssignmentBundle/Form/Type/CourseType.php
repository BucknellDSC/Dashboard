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
            ->add('CourseNumber', 'text')
			->add('name', 'text')
            ->add('StudentsEnrolled', 'integer')
            ->add('Department', 'choice', array(
				'choices' => array( 'biol' => 'Biology','ceng' => 'Civil Engineering', 'east' => 'East Asian Studies', 'engl' => 'English', 'geog'=> 'Geography',),
				'multiple' => true,
				'expanded' => true
				))
             ->add('Faculty', 'entity', array(
				'class' => 'DashboardAssignmentBundle:Faculty',
				'property' => 'FullName',
				'multiple' => true,
				'expanded' => true
			))
			/*->add('Semester', 'entity', array(
		  		'class' => 'DashboardAssignmentBundle:Semester',
				'property' => 'name',
				'multiple' => true,
			))			
			*/
			
		  ->add('save', 'submit');
	}	
	
	public function getName()
	{
		return 'course';	
	}
}