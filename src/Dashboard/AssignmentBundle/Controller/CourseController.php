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
use Dashboard\AssignmentBundle\Form\Type\CourseType;


/**
*@Route("/course")
*/
class CourseController extends Controller {   
    /**
     * @Route("/index", name="CourseIndex")
     * @Template()
     */
    public function indexAction() {
        return new Response("Course Controller");
    } 
    
    /**
     * @Route("/newCourse", name="NewCourse")
     */
    public function newCourseAction() {
        $course = new Course();
			
		$form = $this ->createForm(new CourseType(), $course);
			
		$form->handleRequest($request);
		
		if ($form->isValid()){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($course);
                        $em->flush();
			return $this->redirect($this->generateUrl('AssignmentIndex'));//need to add a CourseIndex function
			}
			
		return $this->render('DashboardAssignmentBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
                   ));
		}
    /**
     * @Route("/newSemester", name="NewSemester")
     */
    public function newSemesterAction() {
        //Code for new Course Form here
    }
	   	
}

