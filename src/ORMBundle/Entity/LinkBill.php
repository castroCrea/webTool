<?php

namespace ORMBundle\Entity;

/**
 * LinkBill
 */
class LinkBill
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $id_bill;

    /**
     * @var integer
     */
    private $id_site;

    /**
     * @var integer
     */
    private $id_host;

    /**
     * @var integer
     */
    private $id_git;

    /**
     * @var integer
     */
    private $id_other;

    /**
     * @var \ORMBundle\Entity\Bill
     */
    private $bill;

    /**
     * @var \ORMBundle\Entity\Sites
     */
    private $sites;

    /**
     * @var \ORMBundle\Entity\Hosts
     */
    private $hosts;

    /**
     * @var \ORMBundle\Entity\Git
     */
    private $git;

    /**
     * @var \ORMBundle\Entity\Other
     */
    private $other;


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
     * Set idBill
     *
     * @param integer $idBill
     *
     * @return LinkBill
     */
    public function setIdBill($idBill)
    {
        $this->id_bill = $idBill;

        return $this;
    }

    /**
     * Get idBill
     *
     * @return integer
     */
    public function getIdBill()
    {
        return $this->id_bill;
    }

    /**
     * Set idSite
     *
     * @param integer $idSite
     *
     * @return LinkBill
     */
    public function setIdSite($idSite)
    {
        $this->id_site = $idSite;

        return $this;
    }

    /**
     * Get idSite
     *
     * @return integer
     */
    public function getIdSite()
    {
        return $this->id_site;
    }

    /**
     * Set idHost
     *
     * @param integer $idHost
     *
     * @return LinkBill
     */
    public function setIdHost($idHost)
    {
        $this->id_host = $idHost;

        return $this;
    }

    /**
     * Get idHost
     *
     * @return integer
     */
    public function getIdHost()
    {
        return $this->id_host;
    }

    /**
     * Set idGit
     *
     * @param integer $idGit
     *
     * @return LinkBill
     */
    public function setIdGit($idGit)
    {
        $this->id_git = $idGit;

        return $this;
    }

    /**
     * Get idGit
     *
     * @return integer
     */
    public function getIdGit()
    {
        return $this->id_git;
    }

    /**
     * Set idOther
     *
     * @param integer $idOther
     *
     * @return LinkBill
     */
    public function setIdOther($idOther)
    {
        $this->id_other = $idOther;

        return $this;
    }

    /**
     * Get idOther
     *
     * @return integer
     */
    public function getIdOther()
    {
        return $this->id_other;
    }

    /**
     * Set bill
     *
     * @param \ORMBundle\Entity\Bill $bill
     *
     * @return LinkBill
     */
    public function setBill(\ORMBundle\Entity\Bill $bill = null)
    {
        $this->bill = $bill;

        return $this;
    }

    /**
     * Get bill
     *
     * @return \ORMBundle\Entity\Bill
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * Set sites
     *
     * @param \ORMBundle\Entity\Sites $sites
     *
     * @return LinkBill
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
     * Set hosts
     *
     * @param \ORMBundle\Entity\Hosts $hosts
     *
     * @return LinkBill
     */
    public function setHosts(\ORMBundle\Entity\Hosts $hosts = null)
    {
        $this->hosts = $hosts;

        return $this;
    }

    /**
     * Get hosts
     *
     * @return \ORMBundle\Entity\Hosts
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * Set git
     *
     * @param \ORMBundle\Entity\Git $git
     *
     * @return LinkBill
     */
    public function setGit(\ORMBundle\Entity\Git $git = null)
    {
        $this->git = $git;

        return $this;
    }

    /**
     * Get git
     *
     * @return \ORMBundle\Entity\Git
     */
    public function getGit()
    {
        return $this->git;
    }

    /**
     * Set other
     *
     * @param \ORMBundle\Entity\Other $other
     *
     * @return LinkBill
     */
    public function setOther(\ORMBundle\Entity\Other $other = null)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Get other
     *
     * @return \ORMBundle\Entity\Other
     */
    public function getOther()
    {
        return $this->other;
    }
}
