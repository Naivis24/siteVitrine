<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salon
 *
 * @ORM\Table(name="salon")
 * @ORM\Entity
 */
class Salon
{
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
     * @return \DateTime
     */
    public function getDateSalon()
    {
        return $this->dateSalon;
    }

    /**
     * @param \DateTime $dateSalon
     */
    public function setDateSalon($dateSalon)
    {
        $this->dateSalon = $dateSalon;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return int
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param int $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param int $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
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
    public function getGImg()
    {
        return $this->gImg;
    }

    /**
     * @param string $gImg
     */
    public function setGImg($gImg)
    {
        $this->gImg = $gImg;
    }

    /**
     * @return string
     */
    public function getPImg()
    {
        return $this->pImg;
    }

    /**
     * @param string $pImg
     */
    public function setPImg($pImg)
    {
        $this->pImg = $pImg;
    }

    /**
     * @return int
     */
    public function getSalonId()
    {
        return $this->salonId;
    }

    /**
     * @param int $salonId
     */
    public function setSalonId($salonId)
    {
        $this->salonId = $salonId;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_salon", type="date", nullable=false)
     */
    private $dateSalon;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="zipCode", type="integer", nullable=false)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="pays", type="integer", nullable=false)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="G_img", type="string", length=255, nullable=false)
     */
    private $gImg;

    /**
     * @var string
     *
     * @ORM\Column(name="p_img", type="string", length=255, nullable=false)
     */
    private $pImg;

    /**
     * @var integer
     *
     * @ORM\Column(name="salon_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salonId;


}

