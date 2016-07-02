<?php

namespace WorkShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Other
 *
 * @ORM\Table(name="other")
 * @ORM\Entity(repositoryClass="WorkShopBundle\Repository\OtherRepository")
 */
class Other
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
     * @return other
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
