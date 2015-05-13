<?php

namespace ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255)
     */
    private $size;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiry_date", type="datetime")
     */
    private $expiryDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="addedAt", type="datetime")
     */
    private $addedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="kindOfwrapping", type="string", length=255)
     */
    private $kindOfwrapping;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isLiquid", type="boolean")
     */
    private $isLiquid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isBottoled", type="boolean")
     */
    private $isBottoled;


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
     * @return Product
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
     * Set size
     *
     * @param string $size
     * @return Product
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     * @return Product
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return \DateTime 
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set addedAt
     *
     * @param \DateTime $addedAt
     * @return Product
     */
    public function setAddedAt($addedAt)
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    /**
     * Get addedAt
     *
     * @return \DateTime 
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }

    /**
     * Set kindOfwrapping
     *
     * @param string $kindOfwrapping
     * @return Product
     */
    public function setKindOfwrapping($kindOfwrapping)
    {
        $this->kindOfwrapping = $kindOfwrapping;

        return $this;
    }

    /**
     * Get kindOfwrapping
     *
     * @return string 
     */
    public function getKindOfwrapping()
    {
        return $this->kindOfwrapping;
    }

    /**
     * Set isLiquid
     *
     * @param boolean $isLiquid
     * @return Product
     */
    public function setIsLiquid($isLiquid)
    {
        $this->isLiquid = $isLiquid;

        return $this;
    }

    /**
     * Get isLiquid
     *
     * @return boolean 
     */
    public function getIsLiquid()
    {
        return $this->isLiquid;
    }

    /**
     * Set isBottoled
     *
     * @param boolean $isBottoled
     * @return Product
     */
    public function setIsBottoled($isBottoled)
    {
        $this->isBottoled = $isBottoled;

        return $this;
    }

    /**
     * Get isBottoled
     *
     * @return boolean 
     */
    public function getIsBottoled()
    {
        return $this->isBottoled;
    }
}
