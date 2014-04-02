<?php

namespace Dashboard\AssignmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dashboard\AssignmentBundle\Entity\Assignment;
use Dashboard\AssignmentBundle\Entity\Course;
use Symfony\Component\httpFoundation\Request;


	/**
*@Route("/Assignment")
*/

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="AssignmentIndex")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $assignments = $em->getRepository('DashboardAssignmentBundle:Assignment')->findAll();
        return array('assignments' => $assignments);
    } 
   	/**
        * @Route("/new", name="newAssignment")
        * @Template()
        */
	public function newAction(Request $request)
	{
		// create a Assignment and give it some dummy data for this example
		$assignment = new Assignment();
		
		$assignment->setStudentsEnrolled(0);
		
		$form = $this->createFormBuilder($assignment)
			->add('name', 'text')
			->add('BriefDescr', 'text')
            ->add('LongDescr', 'text')			
			->add('Course', 'entity', array(
				'class' => 'DashboardAssignmentBundle:Course',
				'property' => 'name',
			))
			/*->add('Semester', 'choice', array(
				'choices' => array('Sp14' =>'2014Spring', 'Fa13' => '2013Fall', 'Su13' => '2013Summer', 'Sp13' => '2013Spring')	
			))*/
			->add('Faculty', 'entity', array(
				'class' => 'DashboardAssignmentBundle:Faculty',
			))
			->add('StudentsEnrolled', 'integer')
			->add('TechCatory', 'text')
			->add('TechTools', 'text')
			->add('Showcase', 'checkbox')
			->add('ProjectURL', 'text')
			->add('save', 'submit')
			->getForm();
			
		$form->handleRequest($request);
		
		if ($form->isValid()){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($assignment);
                        $em->flush();
			return $this->redirect($this->generateUrl('newAssignment'));
			}
			
		return $this->render('DashboardAssignmentBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
		));
		}
		
		
}




