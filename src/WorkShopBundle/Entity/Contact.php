<?php

namespace WorkShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="WorkShopBundle\Repository\ContactRepository")
 */
class Contact
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
   * @ORM\OneToOne(targetEntity="WorkShopBundle\Entity\HumainDefinition", cascade={"persist"})
   */
    private $humain;


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
     * Set humain
     *
     * @param WorkShopBundle\Entity\HumainDefinition $humain
     *
     * @return Command
     */
    public function setHumain(WorkShopBundle\Entity\HumainDefinition $humain)
    {
        $this->humain = $humain;

        return $this;
    }

    /**
     * Get humain
     *
     * @return string
     */
    public function getHumain()
    {
        return $this->humain;
    }
}
