<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Category
{


     /**
     * @ORM\OneToMany(targetEntity="Profile", mappedBy="category")
     */
    protected $profiles;

    public function __construct()
    {
        $this->profiles = new ArrayCollection();
    }


    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
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
     * Set name
     *
     * @param string $name
     * @return Category
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
     * Add profiles
     *
     * @param \AppBundle\Entity\Profile $profiles
     * @return Category
     */
    public function addProfile(\AppBundle\Entity\Profile $profiles)
    {
        $this->profiles[] = $profiles;

        return $this;
    }

    /**
     * Remove profiles
     *
     * @param \AppBundle\Entity\Profile $profiles
     */
    public function removeProfile(\AppBundle\Entity\Profile $profiles)
    {
        $this->profiles->removeElement($profiles);
    }

    /**
     * Get profiles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfiles()
    {
        return $this->profiles;
    }
}
