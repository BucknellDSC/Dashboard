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
use Dashboard\UserBundle\Entity\User;


class HomeController extends Controller
{
	
	/**
*@Route("/home", name="Home")
*/

	function HomeAction(){
	$em = $this->getDoctrine()->getManager();
	$users = $em->getRepository('DashboardUserBundle:User')->findAll();
    return $this->render('DashboardAssignmentBundle:Home:home.html.twig', array('users' => $users));
    //return $this->render('DashboardAssignmentBundle:Home:home.html.twig');
	}
}




