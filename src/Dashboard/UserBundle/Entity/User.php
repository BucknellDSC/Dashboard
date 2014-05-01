<?php
// src/Acme/UserBundle/Entity/User.php

namespace Dashboard\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="dash_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Dashboard\AssignmentBundle\Entity\Course", mappedBy="creator")
     */
    protected $Courses;
	
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

    public function __construct()
    {
        parent::__construct();
        $this->Courses = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add Courses
     *
     * @param \Dashboard\CourseBundle\Entity\Course $courses
     * @return User
     */
    public function addCourse(\Dashboard\CourseBundle\Entity\Course $courses)
    {
        $this->Courses[] = $courses;

        return $this;
    }

    /**
     * Remove Courses
     *
     * @param \Dashboard\CourseBundle\Entity\Course $courses
     */
    public function removeCourse(\Dashboard\CourseBundle\Entity\Course $courses)
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

    /**
     * Set FirstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * Get FirstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set LastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->LastName = $lastName;

        return $this;
    }

    /**
     * Get LastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->LastName;
    }
}
