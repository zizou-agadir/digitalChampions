<?php

namespace Intranet\IntraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePointage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Intranet\IntraBundle\Entity\TypePointageRepository")
 */
class TypePointage
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
     * @ORM\Column(name="libelle_type", type="string", length=255)
     */
    private $libelleType;


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
     * Set libelleType
     *
     * @param string $libelleType
     * @return TypePointage
     */
    public function setLibelleType($libelleType)
    {
        $this->libelleType = $libelleType;

        return $this;
    }

    /**
     * Get libelleType
     *
     * @return string 
     */
    public function getLibelleType()
    {
        return $this->libelleType;
    }
}
