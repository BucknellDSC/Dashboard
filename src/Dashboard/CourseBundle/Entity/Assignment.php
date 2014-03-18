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
