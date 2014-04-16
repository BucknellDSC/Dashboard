<?php
namespace Dashboard\AssignmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dashboard\AssignmentBundle\Entity\Assignment;
use Dashboard\AssignmentBundle\Entity\Course;
use Dashboard\AssignmentBundle\Entity\TechnologyTools;
use Dashboard\AssignmentBundle\Entity\TechnologyCategory;
use Dashboard\AssignmentBundle\Form\Type\TechnologyToolsType;
use Dashboard\AssignmentBundle\Form\Type\TechnologyCategoryType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
*@Route("/tech")
*/

class TechController extends Controller {
    
    /**
     * @Route("/toolindex", name="TechToolIndex")
     * @Template()
     */
    public function indexToolAction() {
        //return new Response("tech controller");
		 $em = $this->getDoctrine()->getManager();
        $tools = $em->getRepository('DashboardAssignmentBundle:TechnologyTools')->findAll();
        return array("TechnologyTools" => $tools);
    }
	
	    /**
     * @Route("/catindex", name="TechCatIndex")
     * @Template()
     */
    public function indexCatAction() {
        //return new Response("tech controller");
		 $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('DashboardAssignmentBundle:TechnologyCategory')->findAll();
        return array("TechnologyCategory" => $category);
    }
    
    /**
     * @Route("/newTool", name="NewTechTools")
     * @Template() 
     */
    public function newTecToolsAction(Request $request) {
        $tools = new TechnologyTools;
		$form = $this ->createForm(new TechnologyToolsType(), $tools);
			
		$form->handleRequest($request);
		
		if ($form->isValid()){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($tools);
                        $em->flush();
			return $this->redirect($this->generateUrl('TechToolIndex'));
			}
			
		return $this->render('DashboardAssignmentBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
                   ));
       
    }
    
     /**
     * @Route("/newCat", name="NewTechCat")
     * @Template() 
     */
    public function newCategoryAction(Request $request) {
		$category = new TechnologyCategory;
		$form = $this ->createForm(new TechnologyCategoryType(), $category);
			
		$form->handleRequest($request);
		
		if ($form->isValid()){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($category);
                        $em->flush();
			return $this->redirect($this->generateUrl('TechCatIndex'));
			}
			
		return $this->render('DashboardAssignmentBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
                   ));
       
    }
}
