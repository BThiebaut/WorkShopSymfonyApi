<?php

namespace WorkShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkShop
 *
 * @ORM\Table(name="work_shop")
 * @ORM\Entity(repositoryClass="WorkShopBundle\Repository\WorkShopRepository")
 */
class WorkShop
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
   * @ORM\OneToOne(targetEntity="WorkShopBundle\Entity\Address", cascade={"persist"})
   */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(name="turnover", type="integer")
     */
    private $turnover;

    /**
   * @ORM\ManyToOne(targetEntity="WorkShopBundle\Entity\HumainDefinition")
   * @ORM\JoinColumn(nullable=false)
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
     * Set name
     *
     * @param string $name
     *
     * @return WorkShop
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return WorkShop
     */
    public function setAddress(WorkShopBundle\Entity\Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set turnover
     *
     * @param integer $turnover
     *
     * @return WorkShop
     */
    public function setTurnover($turnover)
    {
        $this->turnover = $turnover;

        return $this;
    }

    /**
     * Get turnover
     *
     * @return int
     */
    public function getTurnover()
    {
        return $this->turnover;
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
