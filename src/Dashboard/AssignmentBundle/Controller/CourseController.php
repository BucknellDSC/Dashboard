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
        //Code for new Course Form here
    }
    
    /**
     * @Route("/newSemester", name="NewSemester")
     */
    public function newSemesterAction() {
        //Code for new Course Form here
    }
	   	
}

