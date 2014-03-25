<?php

namespace Dashboard\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dashboard\CourseBundle\Entity\Course;
use Symfony\Component\httpFoundation\Request;

class DefaultController extends Controller
{
	
	public function newAction(Request $request)
	{
		// create a course and give it some dummy data for this example
		$assignment = new Assignment();
		$assignment->setName('TestAssignment');
		
		$assignment->setBriefDescr('This is a test assignment');
		$form = $this->createFormBuilder($assignment)
			->add('assignment', 'string')
			->add('BriefDescr', 'text')
			->add('save', 'submit')
			->getForm();
			
		return $this->render('DashboardTaskBundle:Default:index.html.twig', array(
		'form' => $form->createView(),)
		);
		
		}
}
