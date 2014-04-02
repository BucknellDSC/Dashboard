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
	protected $name;
	
	protected $Faculty;
	
    /**
	* @ORM\ManyToOne(targetEntity="Assignment", inversedBy="Assignment")
	* @ORM\JoinColumn(name="Assignment_id", referencedColumnName="id")
	**/
	protected $Assignment;

	protected $Semester;

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
     * Set Assignment
     *
     * @param \Dashboard\AssignmentBundle\Entity\Assignment $assignment
     * @return Course
     */
    public function setAssignment(\Dashboard\AssignmentBundle\Entity\Assignment $assignment = null)
    {
        $this->Assignment = $assignment;

        return $this;
    }

    /**
     * Get Assignment
     *
     * @return \Dashboard\AssignmentBundle\Entity\Assignment 
     */
    public function getAssignment()
    {
        return $this->Assignment;
    }
}
