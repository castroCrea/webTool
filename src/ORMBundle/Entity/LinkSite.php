<?php

namespace ORMBundle\Entity;

/**
 * LinkSite
 */
class LinkSite
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $id_site1;

    /**
     * @var integer
     */
    private $id_site2;

    /**
     * @var \ORMBundle\Entity\Sites
     */
    private $sites;


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
     * Set idSite1
     *
     * @param integer $idSite1
     *
     * @return LinkSite
     */
    public function setIdSite1($idSite1)
    {
        $this->id_site1 = $idSite1;

        return $this;
    }

    /**
     * Get idSite1
     *
     * @return integer
     */
    public function getIdSite1()
    {
        return $this->id_site1;
    }

    /**
     * Set idSite2
     *
     * @param integer $idSite2
     *
     * @return LinkSite
     */
    public function setIdSite2($idSite2)
    {
        $this->id_site2 = $idSite2;

        return $this;
    }

    /**
     * Get idSite2
     *
     * @return integer
     */
    public function getIdSite2()
    {
        return $this->id_site2;
    }

    /**
     * Set sites
     *
     * @param \ORMBundle\Entity\Sites $sites
     *
     * @return LinkSite
     */
    public function setSites(\ORMBundle\Entity\Sites $sites = null)
    {
        $this->sites = $sites;

        return $this;
    }

    /**
     * Get sites
     *
     * @return \ORMBundle\Entity\Sites
     */
    public function getSites()
    {
        return $this->sites;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $groups;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add group
     *
     * @param \ORMBundle\Entity\Sites $group
     *
     * @return LinkSite
     */
    public function addGroup(\ORMBundle\Entity\Sites $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \ORMBundle\Entity\Sites $group
     */
    public function removeGroup(\ORMBundle\Entity\Sites $group)
    {
        $this->groups->removeElement($group);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroups()
    {
        return $this->groups;
    }
    /**
     * @var \ORMBundle\Entity\Sites
     */
    private $sites1;

    /**
     * @var \ORMBundle\Entity\Sites
     */
    private $sites2;


    /**
     * Set sites1
     *
     * @param \ORMBundle\Entity\Sites $sites1
     *
     * @return LinkSite
     */
    public function setSites1(\ORMBundle\Entity\Sites $sites1 = null)
    {
        $this->sites1 = $sites1;

        return $this;
    }

    /**
     * Get sites1
     *
     * @return \ORMBundle\Entity\Sites
     */
    public function getSites1()
    {
        return $this->sites1;
    }

    /**
     * Set sites2
     *
     * @param \ORMBundle\Entity\Sites $sites2
     *
     * @return LinkSite
     */
    public function setSites2(\ORMBundle\Entity\Sites $sites2 = null)
    {
        $this->sites2 = $sites2;

        return $this;
    }

    /**
     * Get sites2
     *
     * @return \ORMBundle\Entity\Sites
     */
    public function getSites2()
    {
        return $this->sites2;
    }
}
