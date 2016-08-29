<?php

namespace ORMBundle\Entity;

/**
 * Other
 */
class Other
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $link_bill;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set title
     *
     * @param string $title
     *
     * @return Other
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Other
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Other
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
     * Add linkBill
     *
     * @param \ORMBundle\Entity\LinkBill $linkBill
     *
     * @return Other
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
}
