<?php
namespace Dashboard\AssignmentBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FacultyType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('FirstName', 'text')
                        ->add('LastName', 'text')
                        ->add('Email', 'text')
                        ->add('Title', 'text')
                        ->add('Department', 'text')
		  ->add('save', 'submit');
	}	
	
	public function getName()
	{
		return 'faculty';	
	}
}
