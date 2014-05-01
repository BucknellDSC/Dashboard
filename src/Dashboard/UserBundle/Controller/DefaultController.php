<?php

namespace Dashboard\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dashboard\UserBundle\Entity\User;

class DefaultController extends Controller
{
	
		/**
	* @Route("/user/index", name="UserIndex")
	* @Template()
	**/
	public function IndexUserAction()
	{
		$em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('DashboardUserBundle:User')->findAll();
        return $this->render('DashboardUserBundle:Default:index.html.twig', array('users' => $users));
	}
	
	/**
	* @Route("/user/{userid}", name="UserView")
	* @Template()
	**/
	public function ViewUserAction($userid)
	{
		$em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('DashboardUserBundle:User')->find($userid);
        return $this->render('DashboardUserBundle:Default:view.html.twig', array('user' => $user));
	}
}
