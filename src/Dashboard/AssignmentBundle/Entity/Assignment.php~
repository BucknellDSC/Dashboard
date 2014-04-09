<?php
namespace Dashboard\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Assignment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\AssignmentBundle\Entity\AssignmentRepository")
 */
class Assignment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
	 * @ORM\Column(type="string")
	**/
	protected $name;
	
	/**
         * @ORM\Column(type="text")
	 * @Assert\NotBlank()
	**/
	protected $BriefDescr;
	
	/**
	 * @ORM\Column(type="text")
	 * @ORM\Column(nullable = true)
	**/
	protected $LongDescr;
	
	/**
	* @ORM\OneToMany(targetEntity="Course", mappedBy="Assignment")
	* @Assert\NotBlank()
	**/
	protected $Course;

	
	/**
	* @ORM\Column(type="integer", nullable = true)
	**/
	protected $StudentsEnrolled;
	
	/**
	* @ORM\OneToMany(targetEntity="TechTools", mappedBy="Assignment")
        * @ORM\Column(nullable = true)
	* @Assert\NotBlank()
	**/
	protected $TechTools;
	
	/**
	* @ORM\OneToMany(targetEntity="TechCatory", mappedBy="Assignment")
        * @ORM\Column(nullable = true)
	* @Assert\NotBlank()
	**/
	protected $TechCatory;
	
	/**
	* @ORM\Column(type="boolean")
	**/
	protected $Showcase = False;
	
        /**
	* @ORM\Column(type="text", nullable = true)
	**/
	protected $ProjectURL;

    public function __construct()
    {
        $this->Course = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Constructor
     */
   

    /**
     * Set name
     *
     * @param string $name
     * @return Assignment
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
     * Set BriefDescr
     *
     * @param string $briefDescr
     * @return Assignment
     */
    public function setBriefDescr($briefDescr)
    {
        $this->BriefDescr = $briefDescr;

        return $this;
    }

    /**
     * Get BriefDescr
     *
     * @return string 
     */
    public function getBriefDescr()
    {
        return $this->BriefDescr;
    }

    /**
     * Set LongDescr
     *
     * @param string $longDescr
     * @return Assignment
     */
    public function setLongDescr($longDescr)
    {
        $this->LongDescr = $longDescr;

        return $this;
    }

    /**
     * Get LongDescr
     *
     * @return string 
     */
    public function getLongDescr()
    {
        return $this->LongDescr;
    }

    /**
     * Set StudentsEnrolled
     *
     * @param integer $studentsEnrolled
     * @return Assignment
     */
    public function setStudentsEnrolled($studentsEnrolled)
    {
        $this->StudentsEnrolled = $studentsEnrolled;

        return $this;
    }

    /**
     * Get StudentsEnrolled
     *
     * @return integer 
     */
    public function getStudentsEnrolled()
    {
        return $this->StudentsEnrolled;
    }

    /**
     * Set Showcase
     *
     * @param boolean $showcase
     * @return Assignment
     */
    public function setShowcase($showcase)
    {
        $this->Showcase = $showcase;

        return $this;
    }

    /**
     * Get Showcase
     *
     * @return boolean 
     */
    public function getShowcase()
    {
        return $this->Showcase;
    }

    /**
     * Set ProjectURL
     *
     * @param string $projectURL
     * @return Assignment
     */
    public function setProjectURL($projectURL)
    {
        $this->ProjectURL = $projectURL;

        return $this;
    }

    /**
     * Get ProjectURL
     *
     * @return string 
     */
    public function getProjectURL()
    {
        return $this->ProjectURL;
    }

    /**
     * Set KeyWords
     *
     * @param string $keyWords
     * @return Assignment
     */
    public function setKeyWords($keyWords)
    {
        $this->KeyWords = $keyWords;

        return $this;
    }

    /**
     * Get KeyWords
     *
     * @return string 
     */
    public function getKeyWords()
    {
        return $this->KeyWords;
    }

    /**
     * Add Course
     *
     * @param \Dashboard\AssignmentBundle\Entity\Course $course
     * @return Assignment
     */
    public function addCourse(\Dashboard\AssignmentBundle\Entity\Course $course)
    {
        $this->Course[] = $course;

        return $this;
    }

    /**
     * Remove Course
     *
     * @param \Dashboard\AssignmentBundle\Entity\Course $course
     */
    public function removeCourse(\Dashboard\AssignmentBundle\Entity\Course $course)
    {
        $this->Course->removeElement($course);
    }

    /**
     * Get Course
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourse()
    {
        return $this->Course;
    }

    /**
     * Set Course
     *
     * @param string $course
     * @return Assignment
     */
    public function setCourse($course)
    {
        $this->Course = $course;

        return $this;
    }

    /**
     * Set Semester
     *
     * @param string $semester
     * @return Assignment
     */
    public function setSemester($semester)
    {
        $this->Semester = $semester;

        return $this;
    }

    /**
     * Get Semester
     *
     * @return string 
     */
    public function getSemester()
    {
        return $this->Semester;
    }

    /**
     * Set Faculty
     *
     * @param string $faculty
     * @return Assignment
     */
    public function setFaculty($faculty)
    {
        $this->Faculty = $faculty;

        return $this;
    }

    /**
     * Get Faculty
     *
     * @return string 
     */
    public function getFaculty()
    {
        return $this->Faculty;
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
     * Get TechTools
     *
     * @return string 
     */
    public function getTechTools()
    {
        return $this->TechTools;
    }

    /**
     * Set TechCatory
     *
     * @param string $techCatory
     * @return Assignment
     */
    public function setTechCatory($techCatory)
    {
        $this->TechCatory = $techCatory;

        return $this;
    }

    /**
     * Get TechCatory
     *
     * @return string 
     */
    public function getTechCatory()
    {
        return $this->TechCatory;
    }
}
