<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="brand", uniqueConstraints={@ORM\UniqueConstraint(name="pict", columns={"picture"})}, indexes={@ORM\Index(name="IDX_1C52F958F92F3E70", columns={"country_id"}), @ORM\Index(name="IDX_1C52F958E052B35C", columns={"manufacture_country_id"}), @ORM\Index(name="IDX_1C52F9584834EBA6", columns={"price_range_id"}), @ORM\Index(name="IDX_1C52F958754851E1", columns={"billing_country_id"}), @ORM\Index(name="primaryTarget", columns={"primaryTarget"})})
 * @ORM\Entity
 */
class Brand
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
     * @var integer
     *
     * @ORM\Column(name="homepage_index", type="integer", nullable=true)
     */
    private $homepageIndex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lookbook", type="string", length=255, nullable=true)
     */
    private $lookbook;

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
     * @var \Target
     *
     * @ORM\ManyToOne(targetEntity="Target")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="primaryTarget", referencedColumnName="id")
     * })
     */
    private $primarytarget;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Feature", inversedBy="brand")
     * @ORM\JoinTable(name="brand_feature",
     *   joinColumns={
     *     @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="feature_id", referencedColumnName="id")
     *   }
     * )
     */
    private $feature;

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
     * @ORM\ManyToMany(targetEntity="Target", inversedBy="brand")
     * @ORM\JoinTable(name="brand_secondary_target",
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
        $this->feature = new \Doctrine\Common\Collections\ArrayCollection();
        $this->primaryCategory = new \Doctrine\Common\Collections\ArrayCollection();
        $this->target = new \Doctrine\Common\Collections\ArrayCollection();
        $this->style = new \Doctrine\Common\Collections\ArrayCollection();
        $this->salon = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Brand
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
     * Set competing
     *
     * @param string $competing
     *
     * @return Brand
     */
    public function setCompeting($competing)
    {
        $this->competing = $competing;

        return $this;
    }

    /**
     * Get competing
     *
     * @return string
     */
    public function getCompeting()
    {
        return $this->competing;
    }

    /**
     * Set urlwebsite
     *
     * @param string $urlwebsite
     *
     * @return Brand
     */
    public function setUrlwebsite($urlwebsite)
    {
        $this->urlwebsite = $urlwebsite;

        return $this;
    }

    /**
     * Get urlwebsite
     *
     * @return string
     */
    public function getUrlwebsite()
    {
        return $this->urlwebsite;
    }

    /**
     * Set slogan
     *
     * @param string $slogan
     *
     * @return Brand
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * Get slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Brand
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

    /**
     * Set urlFac
     *
     * @param string $urlFac
     *
     * @return Brand
     */
    public function setUrlFac($urlFac)
    {
        $this->urlFac = $urlFac;

        return $this;
    }

    /**
     * Get urlFac
     *
     * @return string
     */
    public function getUrlFac()
    {
        return $this->urlFac;
    }

    /**
     * Set urlInsta
     *
     * @param string $urlInsta
     *
     * @return Brand
     */
    public function setUrlInsta($urlInsta)
    {
        $this->urlInsta = $urlInsta;

        return $this;
    }

    /**
     * Get urlInsta
     *
     * @return string
     */
    public function getUrlInsta()
    {
        return $this->urlInsta;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Brand
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set lifestyle
     *
     * @param string $lifestyle
     *
     * @return Brand
     */
    public function setLifestyle($lifestyle)
    {
        $this->lifestyle = $lifestyle;

        return $this;
    }

    /**
     * Get lifestyle
     *
     * @return string
     */
    public function getLifestyle()
    {
        return $this->lifestyle;
    }

    /**
     * Set lifestyle2
     *
     * @param string $lifestyle2
     *
     * @return Brand
     */
    public function setLifestyle2($lifestyle2)
    {
        $this->lifestyle2 = $lifestyle2;

        return $this;
    }

    /**
     * Get lifestyle2
     *
     * @return string
     */
    public function getLifestyle2()
    {
        return $this->lifestyle2;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Brand
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set homepageIndex
     *
     * @param integer $homepageIndex
     *
     * @return Brand
     */
    public function setHomepageIndex($homepageIndex)
    {
        $this->homepageIndex = $homepageIndex;

        return $this;
    }

    /**
     * Get homepageIndex
     *
     * @return integer
     */
    public function getHomepageIndex()
    {
        return $this->homepageIndex;
    }

    /**
     * Set lookbook
     *
     * @param string $lookbook
     *
     * @return Brand
     */
    public function setLookbook($lookbook)
    {
        $this->lookbook = $lookbook;

        return $this;
    }

    /**
     * Get lookbook
     *
     * @return string
     */
    public function getLookbook()
    {
        return $this->lookbook;
    }

    /**
     * Set priceRange
     *
     * @param \AppBundle\Entity\PriceRange $priceRange
     *
     * @return Brand
     */
    public function setPriceRange(\AppBundle\Entity\PriceRange $priceRange = null)
    {
        $this->priceRange = $priceRange;

        return $this;
    }

    /**
     * Get priceRange
     *
     * @return \AppBundle\Entity\PriceRange
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * Set billingCountry
     *
     * @param \AppBundle\Entity\Country $billingCountry
     *
     * @return Brand
     */
    public function setBillingCountry(\AppBundle\Entity\Country $billingCountry = null)
    {
        $this->billingCountry = $billingCountry;

        return $this;
    }

    /**
     * Get billingCountry
     *
     * @return \AppBundle\Entity\Country
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    /**
     * Set manufactureCountry
     *
     * @param \AppBundle\Entity\Country $manufactureCountry
     *
     * @return Brand
     */
    public function setManufactureCountry(\AppBundle\Entity\Country $manufactureCountry = null)
    {
        $this->manufactureCountry = $manufactureCountry;

        return $this;
    }

    /**
     * Get manufactureCountry
     *
     * @return \AppBundle\Entity\Country
     */
    public function getManufactureCountry()
    {
        return $this->manufactureCountry;
    }

    /**
     * Set country
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return Brand
     */
    public function setCountry(\AppBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set primarytarget
     *
     * @param \AppBundle\Entity\Target $primarytarget
     *
     * @return Brand
     */
    public function setPrimarytarget(\AppBundle\Entity\Target $primarytarget = null)
    {
        $this->primarytarget = $primarytarget;

        return $this;
    }

    /**
     * Get primarytarget
     *
     * @return \AppBundle\Entity\Target
     */
    public function getPrimarytarget()
    {
        return $this->primarytarget;
    }

    /**
     * Add feature
     *
     * @param \AppBundle\Entity\Feature $feature
     *
     * @return Brand
     */
    public function addFeature(\AppBundle\Entity\Feature $feature)
    {
        $this->feature[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \AppBundle\Entity\Feature $feature
     */
    public function removeFeature(\AppBundle\Entity\Feature $feature)
    {
        $this->feature->removeElement($feature);
    }

    /**
     * Get feature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Add primaryCategory
     *
     * @param \AppBundle\Entity\PrimaryCategory $primaryCategory
     *
     * @return Brand
     */
    public function addPrimaryCategory(\AppBundle\Entity\PrimaryCategory $primaryCategory)
    {
        $this->primaryCategory[] = $primaryCategory;

        return $this;
    }

    /**
     * Remove primaryCategory
     *
     * @param \AppBundle\Entity\PrimaryCategory $primaryCategory
     */
    public function removePrimaryCategory(\AppBundle\Entity\PrimaryCategory $primaryCategory)
    {
        $this->primaryCategory->removeElement($primaryCategory);
    }

    /**
     * Get primaryCategory
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrimaryCategory()
    {
        return $this->primaryCategory;
    }

    /**
     * Add target
     *
     * @param \AppBundle\Entity\Target $target
     *
     * @return Brand
     */
    public function addTarget(\AppBundle\Entity\Target $target)
    {
        $this->target[] = $target;

        return $this;
    }

    /**
     * Remove target
     *
     * @param \AppBundle\Entity\Target $target
     */
    public function removeTarget(\AppBundle\Entity\Target $target)
    {
        $this->target->removeElement($target);
    }

    /**
     * Get target
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Add style
     *
     * @param \AppBundle\Entity\Style $style
     *
     * @return Brand
     */
    public function addStyle(\AppBundle\Entity\Style $style)
    {
        $this->style[] = $style;

        return $this;
    }

    /**
     * Remove style
     *
     * @param \AppBundle\Entity\Style $style
     */
    public function removeStyle(\AppBundle\Entity\Style $style)
    {
        $this->style->removeElement($style);
    }

    /**
     * Get style
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Add salon
     *
     * @param \AppBundle\Entity\Salon $salon
     *
     * @return Brand
     */
    public function addSalon(\AppBundle\Entity\Salon $salon)
    {
        $this->salon[] = $salon;

        return $this;
    }

    /**
     * Remove salon
     *
     * @param \AppBundle\Entity\Salon $salon
     */
    public function removeSalon(\AppBundle\Entity\Salon $salon)
    {
        $this->salon->removeElement($salon);
    }

    /**
     * Get salon
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSalon()
    {
        return $this->salon;
    }
}
