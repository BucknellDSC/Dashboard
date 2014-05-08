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
	protected $briefdescription;
	
	/**
	 * @ORM\Column(type="text")
	 * @ORM\Column(nullable = true)
	**/
	protected $longdescription;
	
	/**
	* @ORM\ManyToOne(targetEntity="Course", inversedBy="Assignment")
    * @ORM\JoinColumn(name="course_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
	* @Assert\NotBlank()
	**/
	protected $course;

	/**
	* @ORM\ManyToMany(targetEntity="TechnologyTools")

	* @Assert\NotBlank()
	**/
	protected $technologytools;
	
	/**
	* @ORM\ManyToMany(targetEntity="TechnologyCategory")
    
	* @Assert\NotBlank()
	**/
	protected $technologycategory;
	
	/**
	* @ORM\Column(type="boolean")
	**/
	protected $showcase = False;
	
        /**
	* @ORM\Column(type="text", nullable = true)
	**/
	protected $projecturl;
	
	  
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
     * Set briefdescription
     *
     * @param string $briefdescription
     * @return Assignment
     */
    public function setBriefdescription($briefdescription)
    {
        $this->briefdescription = $briefdescription;

        return $this;
    }

    /**
     * Get briefdescription
     *
     * @return string 
     */
    public function getBriefdescription()
    {
        return $this->briefdescription;
    }

    /**
     * Set longdescription
     *
     * @param string $longdescription
     * @return Assignment
     */
    public function setLongdescription($longdescription)
    {
        $this->longdescription = $longdescription;

        return $this;
    }

    /**
     * Get longdescription
     *
     * @return string 
     */
    public function getLongdescription()
    {
        return $this->longdescription;
    }

    /**
     * Set projecturl
     *
     * @param string $projecturl
     * @return Assignment
     */
    public function setProjecturl($projecturl)
    {
        $this->projecturl = $projecturl;

        return $this;
    }

    /**
     * Get projecturl
     *
     * @return string 
     */
    public function getProjecturl()
    {
        return $this->projecturl;
    }

    /**
     * Add technologytools
     *
     * @param \Dashboard\AssignmentBundle\Entity\TechnologyTools $technologytools
     * @return Assignment
     */
    public function addTechnologytool(\Dashboard\AssignmentBundle\Entity\TechnologyTools $technologytools)
    {
        $this->technologytools[] = $technologytools;

        return $this;
    }

    /**
     * Remove technologytools
     *
     * @param \Dashboard\AssignmentBundle\Entity\TechnologyTools $technologytools
     */
    public function removeTechnologytool(\Dashboard\AssignmentBundle\Entity\TechnologyTools $technologytools)
    {
        $this->technologytools->removeElement($technologytools);
    }

    /**
     * Get technologytools
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTechnologytools()
    {
        return $this->technologytools;
    }

    /**
     * Add technologycategory
     *
     * @param \Dashboard\AssignmentBundle\Entity\TechnologyCategory $technologycategory
     * @return Assignment
     */
    public function addTechnologycategory(\Dashboard\AssignmentBundle\Entity\TechnologyCategory $technologycategory)
    {
        $this->technologycategory[] = $technologycategory;

        return $this;
    }

    /**
     * Remove technologycategory
     *
     * @param \Dashboard\AssignmentBundle\Entity\TechnologyCategory $technologycategory
     */
    public function removeTechnologycategory(\Dashboard\AssignmentBundle\Entity\TechnologyCategory $technologycategory)
    {
        $this->technologycategory->removeElement($technologycategory);
    }

    /**
     * Get technologycategory
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTechnologycategory()
    {
        return $this->technologycategory;
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
     * Set showcase
     *
     * @param boolean $showcase
     * @return Assignment
     */
    public function setShowcase($showcase)
    {
        $this->showcase = $showcase;

        return $this;
    }

    /**
     * Get showcase
     *
     * @return boolean 
     */
    public function getShowcase()
    {
        return $this->showcase;
    }

    /**
     * Set course
     *
     * @param \Dashboard\AssignmentBundle\Entity\Course $course
     * @return Assignment
     */
    public function setCourse(\Dashboard\AssignmentBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \Dashboard\AssignmentBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }
}
