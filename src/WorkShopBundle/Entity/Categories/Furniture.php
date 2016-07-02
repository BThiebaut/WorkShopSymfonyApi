<?php

namespace WorkShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Furniture
 *
 * @ORM\Table(name="furniture")
 * @ORM\Entity(repositoryClass="WorkShopBundle\Repository\FurnitureRepository")
 */
class Furniture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @return Fresco
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
