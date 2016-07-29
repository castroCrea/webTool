<?php

namespace ORMBundle\Entity;

/**
 * Ips
 */
class Ips
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idOrigine;

    /**
     * @var string
     */
    private $ip;


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
     * Set idOrigine
     *
     * @param integer $idOrigine
     *
     * @return Ips
     */
    public function setIdOrigine($idOrigine)
    {
        $this->idOrigine = $idOrigine;

        return $this;
    }

    /**
     * Get idOrigine
     *
     * @return integer
     */
    public function getIdOrigine()
    {
        return $this->idOrigine;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Ips
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
}
