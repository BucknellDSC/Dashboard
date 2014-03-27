<?php

namespace Dashboard\CourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AssignmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
	    ->add('BriefDescr', 'text')
            ->add('save', 'submit');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dashboard\CourseBundle\Entity\Assignment'
        ));
    }

    public function getName()
    {
        return 'dashboard_coursebundle_assignmenttype';
    }
}
