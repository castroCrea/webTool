<?php

namespace ORMBundle\Entity;

/**
 * Urls
 */
class Urls
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
    private $expired;

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
     * Set url
     *
     * @param string $url
     *
     * @return Urls
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
     * Set expired
     *
     * @param string $expired
     *
     * @return Urls
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;

        return $this;
    }

    /**
     * Get expired
     *
     * @return string
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Set sites
     *
     * @param \ORMBundle\Entity\Sites $sites
     *
     * @return Urls
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
}
