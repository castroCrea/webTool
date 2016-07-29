<?php

namespace ORMBundle\Entity;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $link_category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->link_category = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set category
     *
     * @param string $category
     *
     * @return Category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Category
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
     * Add linkCategory
     *
     * @param \ORMBundle\Entity\LinkCategory $linkCategory
     *
     * @return Category
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
}
