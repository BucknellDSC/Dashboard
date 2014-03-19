<?php
namespace Dashboard\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\CourseBundle\Entity\AssignmentRepository")
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
	* @ORM\Column(type="string", length=100)
	**/
	protected $name;
	
	/**
	* @ORM\Column(type="text")
	**/
	protected $BriefDescr;
	
	/**
	* @ORM\Column(type="text")
	**/
	protected $LongDescr;
	
	/**
	* @ORM\OneToMany(targetEntity="Course", mappedBy="Assignment")
	**/
	protected $Course;
	
	public function _construct()
	{
		$this->Course = new ArrayCollection();
		}
	
	protected $Semester;
	
	protected $Faculty;
	
	/**
	* @ORM\Column(type="integer")
	**/
	protected $StudentsEnrolled;
	
	protected $TechTools;
	
	protected $TechCatory;
	
	/**
	* @ORM\Column(type="boolean")
	**/
	protected $Showcase;
	
		/**
	* @ORM\Column(type="text")
	**/
	protected $ProjectURL;
	
	
	protected $AssociatedFile;
	
		/**
	* @ORM\Column(type="string")
	**/
	protected $KeyWords;
	
	protected $ItecStaff;

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
    public function __construct()
    {
        $this->Course = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @param \Dashboard\CourseBundle\Entity\Course $course
     * @return Assignment
     */
    public function addCourse(\Dashboard\CourseBundle\Entity\Course $course)
    {
        $this->Course[] = $course;

        return $this;
    }

    /**
     * Remove Course
     *
     * @param \Dashboard\CourseBundle\Entity\Course $course
     */
    public function removeCourse(\Dashboard\CourseBundle\Entity\Course $course)
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
}
