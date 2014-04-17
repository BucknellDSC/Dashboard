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
	
	//////////////////////////////////////Index/////////////////////////////////////////
    
    /**
     * @Route("/toolindex", name="ToolIndex")
     * @Template()
     */
    public function indexToolAction() {
        //return new Response("tech controller");
		 $em = $this->getDoctrine()->getManager();
        $tools = $em->getRepository('DashboardAssignmentBundle:TechnologyTools')->findAll();
        return array("TechnologyTools" => $tools);
    }
	
	    /**
     * @Route("/catindex", name="CatIndex")
     * @Template()
     */
    public function indexCatAction() {
        //return new Response("tech controller");
		 $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('DashboardAssignmentBundle:TechnologyCategory')->findAll();
        return array("TechnologyCategory" => $category);
    }
	
	/////////////////////////////////////////View////////////////////////////////////////////
	/**
     * @Route("/tool/{toolid}/view", name="ToolView")
     * @Template()
    */
    public function viewToolAction($toolid) {
        $em = $this->getDoctrine()->getManager();
        $tool = $em->getRepository('DashboardAssignmentBundle:TechnologyTools')->find($toolid);
        return array("tool" => $tool);
    }
	
	/**
     * @Route("/cat/{catid}/view", name="CatView")
     * @Template()
    */
    public function viewCatAction($catid) {
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository('DashboardAssignmentBundle:TechnologyCategory')->find($catid);
        return array("cat" => $cat);
    }
	
	//////////////////////////////////////////New/////////////////////////////////
    
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
			return $this->redirect($this->generateUrl('ToolIndex'));
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
			return $this->redirect($this->generateUrl('CatIndex'));
			}
			
		return $this->render('DashboardAssignmentBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
                   ));
       
    }
	
	//////////////////////////////////////////////Delete//////////////////////
	/**
     * @Route("tool/{toolid}/delete", name="DeleteTool")
     * @Template()
     */
    public function deleteToolAction($toolid)
    {
        $em = $this->getDoctrine()->getManager();
        $tool = $em->getRepository('DashboardAssignmentBundle:TechnologyTools')->find($toolid);
        $em->remove($tool);
        $em->flush();
        return $this->redirect($this->generateUrl('ToolIndex'));
    }
	
		/**
     * @Route("cat/{catid}/delete", name="DeleteCat")
     * @Template()
     */
    public function deleteCatAction($catid)
    {
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository('DashboardAssignmentBundle:TechnologyCategory')->find($catid);
        $em->remove($cat);
        $em->flush();
        return $this->redirect($this->generateUrl('CatIndex'));
    }
}
