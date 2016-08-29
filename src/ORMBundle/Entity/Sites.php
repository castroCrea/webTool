<?php

namespace ORMBundle\Entity;

/**
 * Sites
 */
class Sites
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
    private $idFtps;

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
    private $idAnalytics;

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
     * @var \ORMBundle\Entity\Ftps
     */
    private $ftps;

    /**
     * @var \ORMBundle\Entity\Analytics
     */
    private $analytics;

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
     * Constructor
     */
    public function __construct()
    {
        $this->link_category = new \Doctrine\Common\Collections\ArrayCollection();
        $this->link_git = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Sites
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
     * Set idFtps
     *
     * @param integer $idFtps
     *
     * @return Sites
     */
    public function setIdFtps($idFtps)
    {
        $this->idFtps = $idFtps;

        return $this;
    }

    /**
     * Get idFtps
     *
     * @return integer
     */
    public function getIdFtps()
    {
        return $this->idFtps;
    }

    /**
     * Set idRegistrar
     *
     * @param integer $idRegistrar
     *
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * Set idAnalytics
     *
     * @param integer $idAnalytics
     *
     * @return Sites
     */
    public function setIdAnalytics($idAnalytics)
    {
        $this->idAnalytics = $idAnalytics;

        return $this;
    }

    /**
     * Get idAnalytics
     *
     * @return integer
     */
    public function getIdAnalytics()
    {
        return $this->idAnalytics;
    }

    /**
     * Set idBackOffice
     *
     * @param integer $idBackOffice
     *
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * Set urls
     *
     * @param \ORMBundle\Entity\Urls $urls
     *
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * Set ftps
     *
     * @param \ORMBundle\Entity\Ftps $ftps
     *
     * @return Sites
     */
    public function setFtps(\ORMBundle\Entity\Ftps $ftps = null)
    {
        $this->ftps = $ftps;

        return $this;
    }

    /**
     * Get ftps
     *
     * @return \ORMBundle\Entity\Ftps
     */
    public function getFtps()
    {
        return $this->ftps;
    }

    /**
     * Set analytics
     *
     * @param \ORMBundle\Entity\Analytics $analytics
     *
     * @return Sites
     */
    public function setAnalytics(\ORMBundle\Entity\Analytics $analytics = null)
    {
        $this->analytics = $analytics;

        return $this;
    }

    /**
     * Get analytics
     *
     * @return \ORMBundle\Entity\Analytics
     */
    public function getAnalytics()
    {
        return $this->analytics;
    }

    /**
     * Set registrar
     *
     * @param \ORMBundle\Entity\Registrar $registrar
     *
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * @return Sites
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $link_bill;


    /**
     * Add linkBill
     *
     * @param \ORMBundle\Entity\LinkBill $linkBill
     *
     * @return Sites
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
     * @var integer
     */
    private $Expired = 1;


    /**
     * Set expired
     *
     * @param integer $expired
     *
     * @return Sites
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
     * @var \ORMBundle\Entity\LinkSite
     */
    private $site1;


    /**
     * Set site1
     *
     * @param \ORMBundle\Entity\LinkSite $site1
     *
     * @return Sites
     */
    public function setSite1(\ORMBundle\Entity\LinkSite $site1 = null)
    {
        $this->site1 = $site1;

        return $this;
    }

    /**
     * Get site1
     *
     * @return \ORMBundle\Entity\LinkSite
     */
    public function getSite1()
    {
        return $this->site1;
    }
    /**
     * @var \ORMBundle\Entity\LinkSite
     */
    private $site2;


    /**
     * Set site2
     *
     * @param \ORMBundle\Entity\LinkSite $site2
     *
     * @return Sites
     */
    public function setSite2(\ORMBundle\Entity\LinkSite $site2 = null)
    {
        $this->site2 = $site2;

        return $this;
    }

    /**
     * Get site2
     *
     * @return \ORMBundle\Entity\LinkSite
     */
    public function getSite2()
    {
        return $this->site2;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $link_site1;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $link_site2;


    /**
     * Add linkSite1
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite1
     *
     * @return Sites
     */
    public function addLinkSite1(\ORMBundle\Entity\LinkSite $linkSite1)
    {
        $this->link_site1[] = $linkSite1;

        return $this;
    }

    /**
     * Remove linkSite1
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite1
     */
    public function removeLinkSite1(\ORMBundle\Entity\LinkSite $linkSite1)
    {
        $this->link_site1->removeElement($linkSite1);
    }

    /**
     * Get linkSite1
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinkSite1()
    {
        return $this->link_site1;
    }

    /**
     * Add linkSite2
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite2
     *
     * @return Sites
     */
    public function addLinkSite2(\ORMBundle\Entity\LinkSite $linkSite2)
    {
        $this->link_site2[] = $linkSite2;

        return $this;
    }

    /**
     * Remove linkSite2
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite2
     */
    public function removeLinkSite2(\ORMBundle\Entity\LinkSite $linkSite2)
    {
        $this->link_site2->removeElement($linkSite2);
    }

    /**
     * Get linkSite2
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinkSite2()
    {
        return $this->link_site2;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $link_site;


    /**
     * Add linkSite
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite
     *
     * @return Sites
     */
    public function addLinkSite(\ORMBundle\Entity\LinkSite $linkSite)
    {
        $this->link_site[] = $linkSite;

        return $this;
    }

    /**
     * Remove linkSite
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite
     */
    public function removeLinkSite(\ORMBundle\Entity\LinkSite $linkSite)
    {
        $this->link_site->removeElement($linkSite);
    }

    /**
     * Get linkSite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinkSite()
    {
        return $this->link_site;
    }

    /**
     * Set linkSite1
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite1
     *
     * @return Sites
     */
    public function setLinkSite1(\ORMBundle\Entity\LinkSite $linkSite1 = null)
    {
        $this->link_site1 = $linkSite1;

        return $this;
    }

    /**
     * Set linkSite2
     *
     * @param \ORMBundle\Entity\LinkSite $linkSite2
     *
     * @return Sites
     */
    public function setLinkSite2(\ORMBundle\Entity\LinkSite $linkSite2 = null)
    {
        $this->link_site2 = $linkSite2;

        return $this;
    }
}
