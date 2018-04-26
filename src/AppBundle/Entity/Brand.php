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

