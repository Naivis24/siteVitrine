<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipeSalon
 *
 * @ORM\Table(name="participe_salon", indexes={@ORM\Index(name="IDX_6844717D44F5D008", columns={"brand_id"}), @ORM\Index(name="IDX_6844717DBACD6074", columns={"salon_id"})})
 * @ORM\Entity
 */
class ParticipeSalon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="brand_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $brandId;

    /**
     * @var integer
     *
     * @ORM\Column(name="salon_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $salonId;


}

