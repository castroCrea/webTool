<?php

namespace ORMBundle\Entity;

/**
 * Sqls
 */
class Sqls
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $base;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $url;


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
     * Set host
     *
     * @param string $host
     *
     * @return Sqls
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set base
     *
     * @param string $base
     *
     * @return Sqls
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return string
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Sqls
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Sqls
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Sqls
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
     * @param \ORMBundle\Entity\Sites $idTypeProjet
     *
     * @return Sqls
     */
    public function addIdTypeProjet(\ORMBundle\Entity\Sites $idTypeProjet)
    {
        $this->id_type_projet[] = $idTypeProjet;

        return $this;
    }

    /**
     * Remove idTypeProjet
     *
     * @param \ORMBundle\Entity\Sites $idTypeProjet
     */
    public function removeIdTypeProjet(\ORMBundle\Entity\Sites $idTypeProjet)
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
