<?php

namespace Dashboard\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Course
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\AssignmentBundle\Entity\CourseRepository")
 */
class Course
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
        
        /**
	* @ORM\Column(type="string", length=100)
	* @Assert\NotBlank()
	**/
	protected $coursenumber;
    
	/**
	* @ORM\Column(type="string", length=100)
	* @Assert\NotBlank()
	**/
	protected $name;
	
        /**
	* @ORM\OneToMany(targetEntity="Assignment", mappedBy="course")
	**/
	protected $assignments;
        
        /**
	* @ORM\Column(type="integer", nullable = true)
	**/
	protected $studentsenrolled;
        
	/**
         * @ORM\Column(type="string")
         */
        protected $department;
	
	/**
	* @ORM\ManyToMany(targetEntity="faculty")
	**/	
        protected $faculty;
        
    /**
     * @ORM\ManyToOne(targetEntity="Dashboard\UserBundle\Entity\User", inversedBy="coursescreate")
    */
        protected $creator;
		
		/**
	* @ORM\ManyToMany(targetEntity="Dashboard\UserBundle\Entity\User", inversedBy="coursesfollow")
	**/	
        protected $follower;
	
     /**
     * Constructor
     */
    public function __construct()
    {
        $this->Assignment = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Course
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set department
     *
     * @param string $department
     * @return Course
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }
	
	 /**
     * Set faculty
     *
     * @param string $faculty
     * @return Assignment
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * Get faculty
     *
     * @return string 
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * Set TechTools
     *
     * @param string $techTools
     * @return Assignment
     */
    public function setTechTools($techTools)
    {
        $this->TechTools = $techTools;

        return $this;
    }

    /**
     * Add Assignment
     *
     * @param \Dashboard\AssignmentBundle\Entity\Assignment $assignment
     * @return Course
     */
    public function addAssignment(\Dashboard\AssignmentBundle\Entity\Assignment $assignment)
    {
        $this->Assignment[] = $assignment;

        return $this;
    }

    /**
     * Remove Assignment
     *
     * @param \Dashboard\AssignmentBundle\Entity\Assignment $assignment
     */
    public function removeAssignment(\Dashboard\AssignmentBundle\Entity\Assignment $assignment)
    {
        $this->Assignment->removeElement($assignment);
    }

    /**
     * Add faculty
     *
     * @param \Dashboard\AssignmentBundle\Entity\faculty $faculty
     * @return Course
     */
    public function addFaculty(\Dashboard\AssignmentBundle\Entity\faculty $faculty)
    {
        $this->faculty[] = $faculty;

        return $this;
    }

    /**
     * Remove faculty
     *
     * @param \Dashboard\AssignmentBundle\Entity\faculty $faculty
     */
    public function removeFaculty(\Dashboard\AssignmentBundle\Entity\faculty $faculty)
    {
        $this->faculty->removeElement($faculty);
    }
    
    

    /**
     * Get assignments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssignments()
    {
        return $this->assignments;
    }

    /**
     * Set creator
     *
     * @param \Dashboard\UserBundle\Entity\User $creator
     * @return Course
     */
    public function setCreator(\Dashboard\UserBundle\Entity\User $creator = null)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return \Dashboard\UserBundle\Entity\User 
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Add follower
     *
     * @param \Dashboard\UserBundle\Entity\User $follower
     * @return Course
     */
    public function addFollower(\Dashboard\UserBundle\Entity\User $follower)
    {
        $this->follower[] = $follower;

        return $this;
    }

    /**
     * Remove follower
     *
     * @param \Dashboard\UserBundle\Entity\User $follower
     */
    public function removeFollower(\Dashboard\UserBundle\Entity\User $follower)
    {
        $this->follower->removeElement($follower);
    }

    /**
     * Get follower
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFollower()
    {
        return $this->follower;
    }

    /**
     * Set coursenumber
     *
     * @param string $coursenumber
     * @return Course
     */
    public function setCoursenumber($coursenumber)
    {
        $this->coursenumber = $coursenumber;

        return $this;
    }

    /**
     * Get coursenumber
     *
     * @return string 
     */
    public function getCoursenumber()
    {
        return $this->coursenumber;
    }

    /**
     * Set studentsenrolled
     *
     * @param integer $studentsenrolled
     * @return Course
     */
    public function setStudentsenrolled($studentsenrolled)
    {
        $this->studentsenrolled = $studentsenrolled;

        return $this;
    }

    /**
     * Get studentsenrolled
     *
     * @return integer 
     */
    public function getStudentsenrolled()
    {
        return $this->studentsenrolled;
    }
}
