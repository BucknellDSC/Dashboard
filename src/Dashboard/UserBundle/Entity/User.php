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
    protected $coursescreate;
	
	/**
     * @ORM\ManyToMany(targetEntity="Dashboard\AssignmentBundle\Entity\Course", mappedBy="follower")
    */
    protected $coursesfollow;
     /**
     * Constructor
     */
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
     * Add coursescreate
     *
     * @param \Dashboard\AssignmentBundle\Entity\Course $coursescreate
     * @return User
     */
    public function addCoursescreate(\Dashboard\AssignmentBundle\Entity\Course $coursescreate)
    {
        $this->coursescreate[] = $coursescreate;

        return $this;
    }

    /**
     * Remove coursescreate
     *
     * @param \Dashboard\AssignmentBundle\Entity\Course $coursescreate
     */
    public function removeCoursescreate(\Dashboard\AssignmentBundle\Entity\Course $coursescreate)
    {
        $this->coursescreate->removeElement($coursescreate);
    }

    /**
     * Get coursescreate
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoursescreate()
    {
        return $this->coursescreate;
    }

    /**
     * Add coursesfollow
     *
     * @param \Dashboard\AssignmentBundle\Entity\Course $coursesfollow
     * @return User
     */
    public function addCoursesfollow(\Dashboard\AssignmentBundle\Entity\Course $coursesfollow)
    {
        $this->coursesfollow[] = $coursesfollow;

        return $this;
    }

    /**
     * Remove coursesfollow
     *
     * @param \Dashboard\AssignmentBundle\Entity\Course $coursesfollow
     */
    public function removeCoursesfollow(\Dashboard\AssignmentBundle\Entity\Course $coursesfollow)
    {
        $this->coursesfollow->removeElement($coursesfollow);
    }

    /**
     * Get coursesfollow
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoursesfollow()
    {
        return $this->coursesfollow;
    }
}
