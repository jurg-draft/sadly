<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sad2Be
 *
 * @ORM\Table(name="Sad2be")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Sad2BeRepository")
 */
class Sad2Be
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $dateOfSad;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", scale=2)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $description;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set dateOfSad
     *
     * @param \DateTime $dateOfSad
     */
    public function setDateOfSad($dateOfSad)
    {
        $this->dateOfSad = $dateOfSad;
    }
 
    /**
     * Get dateOfSad
     *
     * @return \DateTime
     */
    public function getDateOfSad()
    {
        return $this->dateOfSad;
    }
 
    /**
     * Set price
     *
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return whatvever
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
 
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}