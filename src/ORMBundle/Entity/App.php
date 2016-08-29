<?php

namespace ORMBundle\Entity;

/**
 * App
 */
class App
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $idstore;

    /**
     * @var integer
     */
    private $idRegistrar;

    /**
     * @var integer
     */
    private $idSqls;

    /**
     * @var integer
     */
    private $idIps;

    /**
     * @var integer
     */
    private $idHosts;

    /**
     * @var integer
     */
    private $idTypeProjet;

    /**
     * @var integer
     */
    private $idBackOffice;

    /**
     * @var integer
     */
    private $idPageSpeed;

    /**
     * @var integer
     */
    private $idUrl;

    /**
     * @var integer
     */
    private $Priority = 1;

    /**
     * @var integer
     */
    private $Expired = 1;

    /**
     * @var \ORMBundle\Entity\Urls
     */
    private $urls;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $link_category;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $link_git;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $link_bill;

    /**
     * @var \ORMBundle\Entity\Store
     */
    private $store;

    /**
     * @var \ORMBundle\Entity\Registrar
     */
    private $registrar;

    /**
     * @var \ORMBundle\Entity\Sqls
     */
    private $sqls;

    /**
     * @var \ORMBundle\Entity\Ips
     */
    private $ips;

    /**
     * @var \ORMBundle\Entity\Hosts
     */
    private $hosts;

    /**
     * @var \ORMBundle\Entity\TypeProjet
     */
    private $type_projet;

    /**
     * @var \ORMBundle\Entity\PageSpeed
     */
    private $page_speed;

    /**
     * @var \ORMBundle\Entity\BackOffice
     */
    private $back_office;

    /**
     * @var \ORMBundle\Entity\LinkSite
     */
    private $link_site1;

    /**
     * @var \ORMBundle\Entity\LinkSite
     */
    private $link_site2;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->link_category = new \Doctrine\Common\Collections\ArrayCollection();
        $this->link_git = new \Doctrine\Common\Collections\ArrayCollection();
        $this->link_bill = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return App
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set idstore
     *
     * @param integer $idstore
     *
     * @return App
     */
    public function setIdstore($idstore)
    {
        $this->idstore = $idstore;

        return $this;
    }

    /**
     * Get idstore
     *
     * @return integer
     */
    public function getIdstore()
    {
        return $this->idstore;
    }

    /**
     * Set idRegistrar
     *
     * @param integer $idRegistrar
     *
     * @return App
     */
    public function setIdRegistrar($idRegistrar)
    {
        $this->idRegistrar = $idRegistrar;

        return $this;
    }

    /**
     * Get idRegistrar
     *
     * @return integer
     */
    public function getIdRegistrar()
    {
        return $this->idRegistrar;
    }

    /**
     * Set idSqls
     *
     * @param integer $idSqls
     *
     * @return App
     */
    public function setIdSqls($idSqls)
    {
        $this->idSqls = $idSqls;

        return $this;
    }

    /**
     * Get idSqls
     *
     * @return integer
     */
    public function getIdSqls()
    {
        return $this->idSqls;
    }

    /**
     * Set idIps
     *
     * @param integer $idIps
     *
     * @return App
     */
    public function setIdIps($idIps)
    {
        $this->idIps = $idIps;

        return $this;
    }

    /**
     * Get idIps
     *
     * @return integer
     */
    public function getIdIps()
    {
        return $this->idIps;
    }

    /**
     * Set idHosts
     *
     * @param integer $idHosts
     *
     * @return App
     */
    public function setIdHosts($idHosts)
    {
        $this->idHosts = $idHosts;

        return $this;
    }

    /**
     * Get idHosts
     *
     * @return integer
     */
    public function getIdHosts()
    {
        return $this->idHosts;
    }

    /**
     * Set idTypeProjet
     *
     * @param integer $idTypeProjet
     *
     * @return App
     */
    public function setIdTypeProjet($idTypeProjet)
    {
        $this->idTypeProjet = $idTypeProjet;

        return $this;
    }

    /**
     * Get idTypeProjet
     *
     * @return integer
     */
    public function getIdTypeProjet()
    {
        return $this->idTypeProjet;
    }

    /**
     * Set idBackOffice
     *
     * @param integer $idBackOffice
     *
     * @return App
     */
    public function setIdBackOffice($idBackOffice)
    {
        $this->idBackOffice = $idBackOffice;

        return $this;
    }

    /**
     * Get idBackOffice
     *
     * @return integer
     */
    public function getIdBackOffice()
    {
        return $this->idBackOffice;
    }

    /**
     * Set idPageSpeed
     *
     * @param integer $idPageSpeed
     *
     * @return App
     */
    public function setIdPageSpeed($idPageSpeed)
    {
        $this->idPageSpeed = $idPageSpeed;

        return $this;
    }

    /**
     * Get idPageSpeed
     *
     * @return integer
     */
    public function getIdPageSpeed()
    {
        return $this->idPageSpeed;
    }

    /**
     * Set idUrl
     *
     * @param integer $idUrl
     *
     * @return App
     */
    public function setIdUrl($idUrl)
    {
        $this->idUrl = $idUrl;

        return $this;
    }

    /**
     * Get idUrl
     *
     * @return integer
     */
    public function getIdUrl()
    {
        return $this->idUrl;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return App
     */
    public function setPriority($priority)
    {
        $this->Priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * Set expired
     *
     * @param integer $expired
     *
     * @return App
     */
    public function setExpired($expired)
    {
        $this->Expired = $expired;

        return $this;
    }

    /**
     * Get expired
     *
     * @return integer
     */
    public function getExpired()
    {
        return $this->Expired;
    }

    /**
     * Set urls
     *
     * @param \ORMBundle\Entity\Urls $urls
     *
     * @return App
     */
    public function setUrls(\ORMBundle\Entity\Urls $urls = null)
    {
        $this->urls = $urls;

        return $this;
    }

    /**
     * Get urls
     *
     * @return \ORMBundle\Entity\Urls
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Add linkCategory
     *
     * @param \ORMBundle\Entity\LinkCategory $linkCategory
     *
     * @return App
     */
    public function addLinkCategory(\ORMBundle\Entity\LinkCategory $linkCategory)
    {
        $this->link_category[] = $linkCategory;

        return $this;
    }

    /**
     * Remove linkCategory
     *
     * @param \ORMBundle\Entity\LinkCategory $linkCategory
     */
    public function removeLinkCategory(\ORMBundle\Entity\LinkCategory $linkCategory)
    {
        $this->link_category->removeElement($linkCategory);
    }

    /**
     * Get linkCategory
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinkCategory()
    {
        return $this->link_category;
    }

    /**
     * Add linkGit
     *
     * @param \ORMBundle\Entity\LinkGit $linkGit
     *
     * @return App
     */
    public function addLinkGit(\ORMBundle\Entity\LinkGit $linkGit)
    {
        $this->link_git[] = $linkGit;

        return $this;
    }

    /**
     * Remove linkGit
     *
     * @param \ORMBundle\Entity\LinkGit $linkGit
     */
    public function removeLinkGit(\ORMBundle\Entity\LinkGit $linkGit)
    {
        $this->link_git->removeElement($linkGit);
    }

    /**
     * Get linkGit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinkGit()
    {
        return $this->link_git;
    }

    /**
     * Add linkBill
     *
     * @param \ORMBundle\Entity\LinkBill $linkBill
     *
     * @return App
     */
    public function addLinkBill(\ORMBundle\Entity\LinkBill $linkBill)
    {
        $this->link_bill[] = $linkBill;

        return $this;
    }

    /**
     * Remove linkBill
     *
     * @param \ORMBundle\Entity\LinkBill $linkBill
     */
    public function removeLinkBill(\ORMBundle\Entity\LinkBill $linkBill)
    {
        $this->link_bill->removeElement($linkBill);
    }

    /**
     * Get linkBill
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinkBill()
    {
        return $this->link_bill;
    }

    /**
     * Set store
     *
     * @param \ORMBundle\Entity\Store $store
     *
     * @return App
     */
    public function setStore(\ORMBundle\Entity\Store $store = null)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * Get store
     *
     * @return \ORMBundle\Entity\Store
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Set registrar
     *
     * @param \ORMBundle\Entity\Registrar $registrar
     *
     * @return App
     */
    public function setRegistrar(\ORMBundle\Entity\Registrar $registrar = null)
    {
        $this->registrar = $registrar;

        return $this;
    }

    /**
     * Get registrar
     *
     * @return \ORMBundle\Entity\Registrar
     */
    public function getRegistrar()
    {
        return $this->registrar;
    }

    /**
     * Set sqls
     *
     * @param \ORMBundle\Entity\Sqls $sqls
     *
     * @return App
     */
    public function setSqls(\ORMBundle\Entity\Sqls $sqls = null)
    {
        $this->sqls = $sqls;

        return $this;
    }

    /**
     * Get sqls
     *
     * @return \ORMBundle\Entity\Sqls
     */
    public function getSqls()
    {
        return $this->sqls;
    }

    /**
     * Set ips
     *
     * @param \ORMBundle\Entity\Ips $ips
     *
     * @return App
     */
    public function setIps(\ORMBundle\Entity\Ips $ips = null)
    {
        $this->ips = $ips;

        return $this;
    }

    /**
     * Get ips
     *
     * @return \ORMBundle\Entity\Ips
     */
    public function getIps()
    {
        return $this->ips;
    }

    /**
     * Set hosts
     *
     * @param \ORMBundle\Entity\Hosts $hosts
     *
     * @return App
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
     * Set typeProjet
     *
     * @param \ORMBundle\Entity\TypeProjet $typeProjet
     *
     * @return App
     */
    public function setTypeProjet(\ORMBundle\Entity\TypeProjet $typeProjet = null)
    {
        $this->type_projet = $typeProjet;

        return $this;
    }

    /**
     * Get typeProjet
     *
     * @return \ORMBundle\Entity\TypeProjet
     */
    public function getTypeProjet()
    {
        return $this->type_projet;
    }

    /**
     * Set pageSpeed
     *
     * @param \ORMBundle\Entity\PageSpeed $pageSpeed
     *
     * @return App
     */
    public function setPageSpeed(\ORMBundle\Entity\PageSpeed $pageSpeed = null)
    {
        $this->page_speed = $pageSpeed;

        return $this;
    }

    /**
     * Get pageSpeed
     *
     * @return \ORMBundle\Entity\PageSpeed
     */
    public function getPageSpeed()
    {
        return $this->page_speed;
    }

    /**
     * Set backOffice
     *
     * @param \ORMBundle\Entity\BackOffice $backOffice
     *
     * @return App
     */
    public function setBackOffice(\ORMBundle\Entity\BackOffice $backOffice = null)
    {
        $this->back_office = $backOffice;

        return $this;
    }

    /**
     * Get backOffice
     *
     * @return \ORMBundle\Entity\BackOffice
     */
    public function getBackOffice()
    {
        return $this->back_office;
    }

    /**
     * Set linkSite1
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite1
     *
     * @return App
     */
    public function setLinkSite1(\ORMBundle\Entity\LinkSite $linkSite1 = null)
    {
        $this->link_site1 = $linkSite1;

        return $this;
    }

    /**
     * Get linkSite1
     *
     * @return \ORMBundle\Entity\LinkSite
     */
    public function getLinkSite1()
    {
        return $this->link_site1;
    }

    /**
     * Set linkSite2
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite2
     *
     * @return App
     */
    public function setLinkSite2(\ORMBundle\Entity\LinkSite $linkSite2 = null)
    {
        $this->link_site2 = $linkSite2;

        return $this;
    }

    /**
     * Get linkSite2
     *
     * @return \ORMBundle\Entity\LinkSite
     */
    public function getLinkSite2()
    {
        return $this->link_site2;
    }
}
