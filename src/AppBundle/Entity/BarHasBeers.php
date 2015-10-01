<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BarHasBeers
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\BarHasBeersRepository")
 */
class BarHasBeers
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
     * @var Bar
     *
     * @ORM\ManyToOne(targetEntity="Bar")
     * @ORM\JoinColumn(name="bar_id", referencedColumnName="id")
     */
    protected $bar;

    /**
     * @var Beer
     *
     * @ORM\ManyToOne(targetEntity="Beer")
     * @ORM\JoinColumn(name="beer_id", referencedColumnName="id")
     */
    protected $beer;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    protected $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_bottle", type="boolean")
     */
    protected $is_bottle;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    protected $quantity;

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
     * @return Bar
     */
    public function getBar()
    {
        return $this->bar;
    }

    /**
     * @param Bar $bar
     */
    public function setBar($bar)
    {
        $this->bar = $bar;
    }

    /**
     * @return Beer
     */
    public function getBeer()
    {
        return $this->beer;
    }

    /**
     * @param Beer $beer
     */
    public function setBeer($beer)
    {
        $this->beer = $beer;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return boolean
     */
    public function isIsBottle()
    {
        return $this->is_bottle;
    }

    /**
     * @param boolean $is_bottle
     */
    public function setIsBottle($is_bottle)
    {
        $this->is_bottle = $is_bottle;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}

