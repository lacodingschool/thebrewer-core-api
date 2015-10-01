<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bar
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\BarRepository")
 */
class Bar
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
     * @ORM\Column(name="name", type="string", length=150)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_lat", type="string", length=150)
     */
    protected $pos_latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="pos_lon", type="string", length=150)
     */
    protected $pos_longitude;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_restaurant", type="boolean")
     */
    protected $isRestaurant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_accessible", type="boolean")
     */
    protected $isAccessible;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length="50")
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length="255")
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_page", type="string", length="255")
     */
    protected $facebookPage;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length="255")
     */
    protected $website;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length="255")
     */
    protected $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length="15")
     */
    protected $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length="150")
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length="150")
     */
    protected $country;


    protected $price;

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
     *
     * @return Bar
     */
    public function setName($name)
    {
        $this->name = ucfirst($name);

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
     * @return string
     */
    public function getPosLatitude()
    {
        return $this->pos_latitude;
    }

    /**
     * @param string $pos_latitude
     */
    public function setPosLatitude($pos_latitude)
    {
        $this->pos_latitude = $pos_latitude;
    }

    /**
     * @return string
     */
    public function getPosLongitude()
    {
        return $this->pos_longitude;
    }

    /**
     * @param string $pos_longitude
     */
    public function setPosLongitude($pos_longitude)
    {
        $this->pos_longitude = $pos_longitude;
    }

    /**
     * @return boolean
     */
    public function isIsRestaurant()
    {
        return $this->isRestaurant;
    }

    /**
     * @param boolean $isRestaurant
     */
    public function setIsRestaurant($isRestaurant)
    {
        $this->isRestaurant = $isRestaurant;
    }

    /**
     * @return boolean
     */
    public function isIsAccessible()
    {
        return $this->isAccessible;
    }

    /**
     * @param boolean $isAccessible
     */
    public function setIsAccessible($isAccessible)
    {
        $this->isAccessible = $isAccessible;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFacebookPage()
    {
        return $this->facebookPage;
    }

    /**
     * @param string $facebookPage
     */
    public function setFacebookPage($facebookPage)
    {
        $this->facebookPage = $facebookPage;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
}

