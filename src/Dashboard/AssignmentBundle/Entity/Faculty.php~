<?php

namespace Dashboard\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faculty
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\AssignmentBundle\Entity\FacultyRepository")
 */
class Faculty
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
     * @var string
     * @ORM\Column(name="FirstName", type="string", length=255)
     */
    private $FirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=255)
     */
    private $LastName;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable = true)
     */
	 
    private $Email;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable = true)
     */
    private $Title;

    /**
     * @var string
     *
     * @ORM\Column(name="Department", type="string", length=255, nullable = true)
     */
    private $Department;
    
    /**
    * @ORM\ManyToMany(targetEntity="Course")
    **/
    private $Courses;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Faculty
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Faculty
     */
    public function setLastName($lastName)
    {
        $this->LastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Faculty
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Faculty
     */
    public function setTitle($title)
    {
        $this->Title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return Faculty
     */
    public function setDepartment($department)
    {
        $this->Department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Courses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Courses
     *
     * @param \Dashboard\AssignmentBundle\Entity\Course $courses
     * @return Faculty
     */
    public function addCourse(\Dashboard\AssignmentBundle\Entity\Course $courses)
    {
        $this->Courses[] = $courses;

        return $this;
    }

    /**
     * Remove Courses
     *
     * @param \Dashboard\AssignmentBundle\Entity\Course $courses
     */
    public function removeCourse(\Dashboard\AssignmentBundle\Entity\Course $courses)
    {
        $this->Courses->removeElement($courses);
    }

    /**
     * Get Courses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourses()
    {
        return $this->Courses;
    }
    
    public function getFullName()
    {
        return $this->LastName . ', ' . $this->FirstName; 
    }
}
