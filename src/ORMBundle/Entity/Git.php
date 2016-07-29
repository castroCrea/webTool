<?php

namespace ORMBundle\Entity;

/**
 * Git
 */
class Git
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
    private $link_git;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set url
     *
     * @param string $url
     *
     * @return Git
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
     * @return Git
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
     * Add linkGit
     *
     * @param \ORMBundle\Entity\LinkGit $linkGit
     *
     * @return Git
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
}
