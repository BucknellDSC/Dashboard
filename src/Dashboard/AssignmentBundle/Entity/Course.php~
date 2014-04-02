<?php

namespace Dashboard\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\CourseBundle\Entity\CourseRepository")
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
	* @ORM\Column(type="string")
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
}
