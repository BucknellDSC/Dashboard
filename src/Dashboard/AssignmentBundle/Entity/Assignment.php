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
	protected $Name;
	
	/**
         * @ORM\Column(type="text")
	 * @Assert\NotBlank()
	**/
	protected $BriefDescription;
	
	/**
	 * @ORM\Column(type="text")
	 * @ORM\Column(nullable = true)
	**/
	protected $LongDescription;
	
	/**
	* @ORM\ManyToOne(targetEntity="Course", inversedBy="Assignment")
    * @ORM\JoinColumn(name="course_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
	* @Assert\NotBlank()
	**/
	protected $Course;

	/**
	* @ORM\ManyToMany(targetEntity="TechnologyTools")

	* @Assert\NotBlank()
	**/
	protected $TechnologyTools;
	
	/**
	* @ORM\ManyToMany(targetEntity="TechnologyCategory")
    
	* @Assert\NotBlank()
	**/
	protected $TechnologyCategory;
	
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
        $this->Name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
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
     * Set BriefDescription
     *
     * @param string $briefDescription
     * @return Assignment
     */
    public function setBriefDescription($briefDescription)
    {
        $this->BriefDescription = $briefDescription;

        return $this;
    }

    /**
     * Get BriefDescription
     *
     * @return string 
     */
    public function getBriefDescription()
    {
        return $this->BriefDescription;
    }

    /**
     * Set LongDescription
     *
     * @param string $longDescription
     * @return Assignment
     */
    public function setLongDescription($longDescription)
    {
        $this->LongDescription = $longDescription;

        return $this;
    }

    /**
     * Get LongDescription
     *
     * @return string 
     */
    public function getLongDescription()
    {
        return $this->LongDescription;
    }

    /**
     * Set TechnologyTools
     *
     * @param string $technologyTools
     * @return Assignment
     */
    public function setTechnologyTools($technologyTools)
    {
        $this->TechnologyTools = $technologyTools;

        return $this;
    }

    /**
     * Get TechnologyTools
     *
     * @return string 
     */
    public function getTechnologyTools()
    {
        return $this->TechnologyTools;
    }

    /**
     * Set TechnologyCatory
     *
     * @param string $technologyCatory
     * @return Assignment
     */
    public function setTechnologyCatory($technologyCatory)
    {
        $this->TechnologyCatory = $technologyCatory;

        return $this;
    }

    /**
     * Get TechnologyCatory
     *
     * @return string 
     */
    public function getTechnologyCatory()
    {
        return $this->TechnologyCatory;
    }

    /**
     * Set TechnologyCategory
     *
     * @param string $technologyCategory
     * @return Assignment
     */
    public function setTechnologyCategory($technologyCategory)
    {
        $this->TechnologyCategory = $technologyCategory;

        return $this;
    }

    /**
     * Get TechnologyCategory
     *
     * @return string 
     */
    public function getTechnologyCategory()
    {
        return $this->TechnologyCategory;
    }
}
