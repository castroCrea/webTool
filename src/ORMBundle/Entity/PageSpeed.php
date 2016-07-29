<?php

namespace ORMBundle\Entity;

/**
 * PageSpeed
 */
class PageSpeed
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $desktop;

    /**
     * @var float
     */
    private $mobile;

    /**
     * @var float
     */
    private $oldMobile;

    /**
     * @var float
     */
    private $oldDesktop;

    /**
     * @var integer
     */
    private $lastUpdate;


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
     * Set desktop
     *
     * @param float $desktop
     *
     * @return PageSpeed
     */
    public function setDesktop($desktop)
    {
        $this->desktop = $desktop;

        return $this;
    }

    /**
     * Get desktop
     *
     * @return float
     */
    public function getDesktop()
    {
        return $this->desktop;
    }

    /**
     * Set mobile
     *
     * @param float $mobile
     *
     * @return PageSpeed
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return float
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set oldMobile
     *
     * @param float $oldMobile
     *
     * @return PageSpeed
     */
    public function setOldMobile($oldMobile)
    {
        $this->oldMobile = $oldMobile;

        return $this;
    }

    /**
     * Get oldMobile
     *
     * @return float
     */
    public function getOldMobile()
    {
        return $this->oldMobile;
    }

    /**
     * Set oldDesktop
     *
     * @param float $oldDesktop
     *
     * @return PageSpeed
     */
    public function setOldDesktop($oldDesktop)
    {
        $this->oldDesktop = $oldDesktop;

        return $this;
    }

    /**
     * Get oldDesktop
     *
     * @return float
     */
    public function getOldDesktop()
    {
        return $this->oldDesktop;
    }

    /**
     * Set lastUpdate
     *
     * @param integer $lastUpdate
     *
     * @return PageSpeed
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return integer
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
}
