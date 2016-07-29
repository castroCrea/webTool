<?php

namespace ORMBundle\Entity;

/**
 * BackOffice
 */
class BackOffice
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $urlAdmin;

    /**
     * @var string
     */
    private $userAdmin;

    /**
     * @var string
     */
    private $passAdmin;


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
     * Set urlAdmin
     *
     * @param string $urlAdmin
     *
     * @return BackOffice
     */
    public function setUrlAdmin($urlAdmin)
    {
        $this->urlAdmin = $urlAdmin;

        return $this;
    }

    /**
     * Get urlAdmin
     *
     * @return string
     */
    public function getUrlAdmin()
    {
        return $this->urlAdmin;
    }

    /**
     * Set userAdmin
     *
     * @param string $userAdmin
     *
     * @return BackOffice
     */
    public function setUserAdmin($userAdmin)
    {
        $this->userAdmin = $userAdmin;

        return $this;
    }

    /**
     * Get userAdmin
     *
     * @return string
     */
    public function getUserAdmin()
    {
        return $this->userAdmin;
    }

    /**
     * Set passAdmin
     *
     * @param string $passAdmin
     *
     * @return BackOffice
     */
    public function setPassAdmin($passAdmin)
    {
        $this->passAdmin = $passAdmin;

        return $this;
    }

    /**
     * Get passAdmin
     *
     * @return string
     */
    public function getPassAdmin()
    {
        return $this->passAdmin;
    }
}
