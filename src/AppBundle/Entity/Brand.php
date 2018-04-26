<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_1C52F958F98F144A", columns={"logo_id"}), @ORM\UniqueConstraint(name="pict", columns={"picture"})}, indexes={@ORM\Index(name="IDX_1C52F958F92F3E70", columns={"country_id"}), @ORM\Index(name="IDX_1C52F958E052B35C", columns={"manufacture_country_id"}), @ORM\Index(name="IDX_1C52F9584834EBA6", columns={"price_range_id"}), @ORM\Index(name="IDX_1C52F958754851E1", columns={"billing_country_id"})})
 * @ORM\Entity
 */
class Brand
{
    /**
     * @return string
     */
    public function getCompeting()
    {
        return $this->competing;
    }

    /**
     * @param string $competing
     */
    public function setCompeting($competing)
    {
        $this->competing = $competing;
    }

    /**
     * @return string
     */
    public function getUrlwebsite()
    {
        return $this->urlwebsite;
    }

    /**
     * @param string $urlwebsite
     */
    public function setUrlwebsite($urlwebsite)
    {
        $this->urlwebsite = $urlwebsite;
    }

    /**
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * @param string $slogan
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;
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
     * @return string
     */
    public function getUrlFac()
    {
        return $this->urlFac;
    }

    /**
     * @param string $urlFac
     */
    public function setUrlFac($urlFac)
    {
        $this->urlFac = $urlFac;
    }

    /**
     * @return string
     */
    public function getUrlInsta()
    {
        return $this->urlInsta;
    }

    /**
     * @param string $urlInsta
     */
    public function setUrlInsta($urlInsta)
    {
        $this->urlInsta = $urlInsta;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return string
     */
    public function getLifestyle()
    {
        return $this->lifestyle;
    }

    /**
     * @param string $lifestyle
     */
    public function setLifestyle($lifestyle)
    {
        $this->lifestyle = $lifestyle;
    }

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
     * @return PriceRange
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * @param PriceRange $priceRange
     */
    public function setPriceRange($priceRange)
    {
        $this->priceRange = $priceRange;
    }

    /**
     * @return Country
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    /**
     * @param Country $billingCountry
     */
    public function setBillingCountry($billingCountry)
    {
        $this->billingCountry = $billingCountry;
    }

    /**
     * @return Country
     */
    public function getManufactureCountry()
    {
        return $this->manufactureCountry;
    }

    /**
     * @param Country $manufactureCountry
     */
    public function setManufactureCountry($manufactureCountry)
    {
        $this->manufactureCountry = $manufactureCountry;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return Myfile
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param Myfile $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrimaryCategory()
    {
        return $this->primaryCategory;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $primaryCategory
     */
    public function setPrimaryCategory($primaryCategory)
    {
        $this->primaryCategory = $primaryCategory;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="competing", type="string", length=255, nullable=true)
     */
    private $competing;

    /**
     * @var string
     *
     * @ORM\Column(name="urlWebsite", type="string", length=255, nullable=false)
     */
    private $urlwebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="slogan", type="string", length=255, nullable=true)
     */
    private $slogan;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url_fac", type="string", length=255, nullable=false)
     */
    private $urlFac;

    /**
     * @var string
     *
     * @ORM\Column(name="url_insta", type="string", length=255, nullable=false)
     */
    private $urlInsta;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="lifestyle", type="string", length=255, nullable=true)
     */
    private $lifestyle;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\PriceRange
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PriceRange")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_range_id", referencedColumnName="id")
     * })
     */
    private $priceRange;

    /**
     * @var \AppBundle\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="billing_country_id", referencedColumnName="id")
     * })
     */
    private $billingCountry;

    /**
     * @var \AppBundle\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manufacture_country_id", referencedColumnName="id")
     * })
     */
    private $manufactureCountry;

    /**
     * @var \AppBundle\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \AppBundle\Entity\Myfile
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Myfile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="logo_id", referencedColumnName="id")
     * })
     */
    private $logo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\PrimaryCategory", inversedBy="brand")
     * @ORM\JoinTable(name="brand_primary_category",
     *   joinColumns={
     *     @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="primary_category_id", referencedColumnName="id")
     *   }
     * )
     */
    private $primaryCategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Style", inversedBy="brand")
     * @ORM\JoinTable(name="brand_style",
     *   joinColumns={
     *     @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="style_id", referencedColumnName="id")
     *   }
     * )
     */
    private $style;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Target", inversedBy="brand")
     * @ORM\JoinTable(name="brand_target",
     *   joinColumns={
     *     @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="target_id", referencedColumnName="id")
     *   }
     * )
     */
    private $target;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->primaryCategory = new \Doctrine\Common\Collections\ArrayCollection();
        $this->style = new \Doctrine\Common\Collections\ArrayCollection();
        $this->target = new \Doctrine\Common\Collections\ArrayCollection();
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
    
}

