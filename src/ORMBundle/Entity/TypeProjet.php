<?php

namespace ORMBundle\Entity;

/**
 * TypeProjet
 */
class TypeProjet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $value;


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
     * Set value
     *
     * @param string $value
     *
     * @return TypeProjet
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $id_type_projet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->id_type_projet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idTypeProjet
     *
     * @param \ORMBundle\Entity\TypeProjet $idTypeProjet
     *
     * @return TypeProjet
     */
    public function addIdTypeProjet(\ORMBundle\Entity\TypeProjet $idTypeProjet)
    {
        $this->id_type_projet[] = $idTypeProjet;

        return $this;
    }

    /**
     * Remove idTypeProjet
     *
     * @param \ORMBundle\Entity\TypeProjet $idTypeProjet
     */
    public function removeIdTypeProjet(\ORMBundle\Entity\TypeProjet $idTypeProjet)
    {
        $this->id_type_projet->removeElement($idTypeProjet);
    }

    /**
     * Get idTypeProjet
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTypeProjet()
    {
        return $this->id_type_projet;
    }
}
