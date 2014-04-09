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
*@Route("/faculty")
*/

class FacultyController extends Controller
{
    /**
     * @Route("/index", name="FacultyIndex")
     * @Template()
     */
    public function indexAction() {
        return new Response("faculty controller");
    } 
    
    /**
     * @Route("/new", name="NewFaculty")
     * @Template()
     */
    public function newAction() {
        //Code for new form here
    }
}