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
*@Route("/tech")
*/

class TechController extends Controller {
    
    /**
     * @Route("/index", name="TechIndex")
     * @Template()
     */
    public function indexAction() {
        return new Response("tech controller");
    }
    
    /**
     * @Route("/new", name="NewTech")
     * @Template() 
     */
    public function newAction() {
        //code for new technology form here
    }
    
     /**
     * @Route("/newCat", name="NewTechCat")
     * @Template() 
     */
    public function newCategoryAction() {
        //code for new technology form here
    }
}
