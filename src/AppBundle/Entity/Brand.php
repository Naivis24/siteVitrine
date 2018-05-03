<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand", uniqueConstraints={@ORM\UniqueConstraint(name="pict", columns={"picture"})}, indexes={@ORM\Index(name="IDX_1C52F958F92F3E70", columns={"country_id"}), @ORM\Index(name="IDX_1C52F958E052B35C", columns={"manufacture_country_id"}), @ORM\Index(name="IDX_1C52F9584834EBA6", columns={"price_range_id"}), @ORM\Index(name="IDX_1C52F958754851E1", columns={"billing_country_id"})})
 * @ORM\Entity
 */
class Brand
{
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
     * @return string
     */
    public function getLifestyle2()
    {
        return $this->lifestyle2;
    }

    /**
     * @param string $lifestyle2
     */
    public function setLifestyle2($lifestyle2)
    {
        $this->lifestyle2 = $lifestyle2;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return \PriceRange
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * @param \PriceRange $priceRange
     */
    public function setPriceRange($priceRange)
    {
        $this->priceRange = $priceRange;
    }

    /**
     * @return \Country
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    /**
     * @param \Country $billingCountry
     */
    public function setBillingCountry($billingCountry)
    {
        $this->billingCountry = $billingCountry;
    }

    /**
     * @return \Country
     */
    public function getManufactureCountry()
    {
        return $this->manufactureCountry;
    }

    /**
     * @param \Country $manufactureCountry
     */
    public function setManufactureCountry($manufactureCountry)
    {
        $this->manufactureCountry = $manufactureCountry;
    }

    /**
     * @return \Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param \Country $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSalon()
    {
        return $this->salon;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $salon
     */
    public function setSalon($salon)
    {
        $this->salon = $salon;
    }
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
     * @var string
     *
     * @ORM\Column(name="lifestyle2", type="string", length=255, nullable=true)
     */
    private $lifestyle2;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var \PriceRange
     *
     * @ORM\ManyToOne(targetEntity="PriceRange")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_range_id", referencedColumnName="id")
     * })
     */
    private $priceRange;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="billing_country_id", referencedColumnName="id")
     * })
     */
    private $billingCountry;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manufacture_country_id", referencedColumnName="id")
     * })
     */
    private $manufactureCountry;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PrimaryCategory", inversedBy="brand")
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
     * @ORM\ManyToMany(targetEntity="Style", inversedBy="brand")
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
     * @ORM\ManyToMany(targetEntity="Target", inversedBy="brand")
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Salon", inversedBy="brand")
     * @ORM\JoinTable(name="participe_salon",
     *   joinColumns={
     *     @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="salon_id", referencedColumnName="salon_id")
     *   }
     * )
     */
    private $salon;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->primaryCategory = new \Doctrine\Common\Collections\ArrayCollection();
        $this->style = new \Doctrine\Common\Collections\ArrayCollection();
        $this->target = new \Doctrine\Common\Collections\ArrayCollection();
        $this->salon = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

