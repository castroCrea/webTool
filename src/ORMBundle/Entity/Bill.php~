<?php

namespace ORMBundle\Entity;

/**
 * Bill
 */
class Bill
{
    /**
     * @var integer
     */
    private $id;

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
     * Set url
     *
     * @param string $url
     *
     * @return Bill
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
     * @return Bill
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
     * @return Bill
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
     * @var string
     */
    private $price;


    /**
     * Set price
     *
     * @param string $price
     *
     * @return Bill
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
}
