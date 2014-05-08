<?php
namespace Dashboard\AssignmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dashboard\AssignmentBundle\Entity\Assignment;
use Dashboard\AssignmentBundle\Entity\Course;
use Dashboard\AssignmentBundle\Entity\Faculty;
use Dashboard\AssignmentBundle\Form\Type\CourseType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dashboard\UserBundle\Entity\User;



/**
*@Route("/course")
*/
class CourseController extends Controller {   
    /**
     * @Route("/index", name="CourseIndex")
     * @Template()
     */
    public function indexAction() {
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $courses = $em->getRepository('DashboardAssignmentBundle:Course')->findAll(); //findByCreator($user);
        return array("courses" => $courses, "user"=>$user);
    } 
    
    /**
     * @Route("/{courseid}/view", name="CourseView")
     * @Template()
     */
    public function viewAction($courseid) {
        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository('DashboardAssignmentBundle:Course')->find($courseid);
        return array("course" => $course);
    }


    /**
     * @Route("/new", name="NewCourse")
     */
    public function newCourseAction(Request $request) {
        $course = new Course();
		$user = $this->getUser();
        $course->setCreator($user);
		$form = $this ->createForm(new CourseType(), $course);
               			
		$form->handleRequest($request);
		
		if ($form->isValid()){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($course);
                        $em->flush();
			return $this->redirect($this->generateUrl('CourseIndex'));
			}
			
		return $this->render('DashboardAssignmentBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
                   ));
		}
    /**
     * @Route("{courseid}/delete", name="DeleteCourse")
     * @Template()
     */
    public function deleteAction($courseid)
    {
        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository('DashboardAssignmentBundle:Course')->find($courseid);
        $em->remove($course);
        $em->flush();
        return $this->redirect($this->generateUrl('CourseIndex'));
    }
	
	   /**
     * @Route("{courseid}/follow", name="FollowCourse")
     * @Template()
     */
    public function followAction($courseid)
    {
        $em = $this->getDoctrine()->getManager();
		$follower = $this->getUser();
        $course = $em->getRepository('DashboardAssignmentBundle:Course')->find($courseid);   
		$course->addFollower($follower);     
        $em->flush();
        return $this->redirect($this->generateUrl('CourseIndex'));
    }
	
	 /**
     * @Route("{courseid}/unfollow", name="UnfollowCourse")
     * @Template()
     */
    public function unfollowAction($courseid)
    {
        $em = $this->getDoctrine()->getManager();
		$follower = $this->getUser();
        $course = $em->getRepository('DashboardAssignmentBundle:Course')->find($courseid);   
		$course->removeFollower($follower);     
        $em->flush();
        return $this->redirect($this->generateUrl('CourseIndex'));
    }
	   	
}

