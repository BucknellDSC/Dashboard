<?php

namespace Dashboard\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TechCategory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\CourseBundle\Entity\TechCategoryRepository")
 */
class TechCategory
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
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;


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
     * Set y
     *
     * @param string $y
     * @return TechCategory
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return string 
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TechCategory
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
}
