<?php

namespace Dashboard\AssignmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dashboard\AssignmentBundle\Entity\Assignment;
use Dashboard\AssignmentBundle\Entity\Course;
use Dashboard\AssignmentBundle\Entity\Faculty;
use Symfony\Component\httpFoundation\Request;
use Dashboard\AssignmentBundle\Form\Type\AssignmentType;
use Dashboard\AssignmentBundle\Form\Type\CourseType;


	/**
*@Route("/assignment")
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
     * @Route("/{assignmentid}/view", name="AssignmentView")
     * @Template()
     */
    public function viewAction($assignmentid) {
        $em = $this->getDoctrine()->getManager();
        $assignment = $em->getRepository('DashboardAssignmentBundle:Assignment')->find($assignmentid);
        return array("assignment" => $assignment);
    }

	   	/**
        * @Route("/newObject")
        * @Template()
        */
	public function NewObject(){
				
		$course = new Course();
		$course -> setName('NIV200');
		$em = $this->getDoctrine()->getManager();
                $em->persist($course);
		
		$faculty = new Faculty();
		$faculty -> setfirstName('Song');
		$faculty -> setlastName('Chen');
        $em->flush();
		return; 
		
		}
   	/**
        * @Route("/new", name="newAssignment")
        * @Template()
        */
	public function newAction(Request $request)
	{
		// create a Assignment and give it some dummy data for this example
		$assignment = new Assignment();
		
		//$assignment->setStudentsEnrolled(0);
		
		$form = $this ->createForm(new AssignmentType(), $assignment);//$this->createFormBuilder($assignment)
		//->getForm();
			
		$form->handleRequest($request);
		
		if ($form->isValid()){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($assignment);
                        $em->flush();
			return $this->redirect($this->generateUrl('AssignmentIndex'));
			}
			
		return $this->render('DashboardAssignmentBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
                   ));
		}
}




