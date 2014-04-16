<?php

namespace Dashboard\AssignmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dashboard\AssignmentBundle\Entity\Assignment;
use Dashboard\AssignmentBundle\Entity\Course;
use Dashboard\AssignmentBundle\Entity\Faculty;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dashboard\AssignmentBundle\Form\Type\FacultyType;

/**
*@Route("/faculty")
*/

class FacultyController extends Controller
{
    /**
     * @Route("/index", name="FacultyIndex")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $faculty = $em->getRepository('DashboardAssignmentBundle:Faculty')->findAll();
        return array("faculty" => $faculty);
    } 
    
    /**
     * @Route("/new", name="NewFaculty")
     * @Template()
     */
    public function newAction(Request $request) {
        $faculty = new Faculty();
			
		$form = $this ->createForm(new FacultyType(), $faculty);
			
		$form->handleRequest($request);
		
		if ($form->isValid()){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($faculty);
                        $em->flush();
			return $this->redirect($this->generateUrl('FacultyIndex'));//need to add a CourseIndex function
			}
			
		return $this->render('DashboardAssignmentBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
                   ));
    }
    
    /**
     * @Route("{facultyid}/delete", name="DeleteFaculty")
     * @Template()
     */
    public function deleteAction($facultyid)
    {
        $em = $this->getDoctrine()->getManager();
        $faculty = $em->getRepository('DashboardAssignmentBundle:Faculty')->find($facultyid);
        $em->remove($faculty);
        $em->flush();
        return $this->redirect($this->generateUrl('FacultyIndex'));
    }
    
}