<?php

namespace WorkShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sculpture
 *
 * @ORM\Table(name="sculpture")
 * @ORM\Entity(repositoryClass="WorkShopBundle\Repository\SculptureRepository")
 */
class Sculpture
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
     * @return Sculpture
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
