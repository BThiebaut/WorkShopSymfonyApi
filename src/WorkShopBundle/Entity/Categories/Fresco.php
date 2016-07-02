<?php

namespace WorkShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="fresco")
 * @ORM\Entity(repositoryClass="WorkShopBundle\Repository\FrescoRepository")
 */
class Fresco
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
