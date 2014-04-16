<?php

namespace Dashboard\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TechnologyTools
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dashboard\AssignmentBundle\Entity\TechnologyToolsRepository")
 */
class TechnologyTools
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

        /**
	* @ORM\ManyToMany(targetEntity="Assignment")
	**/
	protected $Assignments;
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
     * @return TechnologyTools
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
