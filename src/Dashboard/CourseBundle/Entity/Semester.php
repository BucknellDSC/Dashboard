<?php

namespace Dashboard\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Semester
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\CourseBundle\Entity\SemesterRepository")
 */
class Semester
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
