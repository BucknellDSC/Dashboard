<?php

namespace Dashboard\AssignmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dashboard\AssignmentBundle\Entity\Assignment;
use Dashboard\AssignmentBundle\Entity\Course;
use Symfony\Component\httpFoundation\Request;


	/**
* @Route("/Assignment")
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
        * @Route("/new", name="newAction")
        * @Template()
        */
	public function newAction(Request $request)
	{
		// create a course and give it some dummy data for this example
		$assignment = new Assignment();
		
		//$assignment->setName('TestAssignment');		
		//$assignment->setBriefDescr('This is a test assignment');
		
		$form = $this->createFormBuilder($assignment)
			->add('name', 'text')
			->add('BriefDescr', 'text')
            ->add('LongDescr', 'text')
			->add('save', 'submit')
			->getForm();
			
		$form->handleRequest($request);
		
		if ($form->isValid()){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($assignment);
                        $em->flush();
			return $this->redirect($this->generateUrl('newAction'));
			}
			
		return $this->render('DashboardAssignmentBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
		));
		}
}


