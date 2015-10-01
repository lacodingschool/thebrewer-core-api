<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\BeerRepository")
 */
class Beer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    protected $description;

    /**
     * @var float
     *
     * @ORM\Column(name="degree", type="float")
     */
    protected $degree;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10)
     */
    protected $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_alcohol", type="boolean")
     */
    protected $isAlcohol;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer")
     */
    protected $rate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * @param float $degree
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return boolean
     */
    public function isIsAlcohol()
    {
        return $this->isAlcohol;
    }

    /**
     * @param boolean $isAlcohol
     */
    public function setIsAlcohol($isAlcohol)
    {
        $this->isAlcohol = $isAlcohol;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }
}

