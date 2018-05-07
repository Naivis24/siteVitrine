<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrimaryCategory
 *
 * @ORM\Table(name="primary_category")
 * @ORM\Entity
 */
class PrimaryCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Brand", mappedBy="primaryCategory")
     */
    private $brand;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->brand = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set label
     *
     * @param string $label
     *
     * @return PrimaryCategory
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Add brand
     *
     * @param \AppBundle\Entity\Brand $brand
     *
     * @return PrimaryCategory
     */
    public function addBrand(\AppBundle\Entity\Brand $brand)
    {
        $this->brand[] = $brand;

        return $this;
    }

    /**
     * Remove brand
     *
     * @param \AppBundle\Entity\Brand $brand
     */
    public function removeBrand(\AppBundle\Entity\Brand $brand)
    {
        $this->brand->removeElement($brand);
    }

    /**
     * Get brand
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
