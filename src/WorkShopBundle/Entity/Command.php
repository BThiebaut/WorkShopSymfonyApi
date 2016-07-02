<?php

namespace WorkShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Command
 *
 * @ORM\Table(name="command")
 * @ORM\Entity(repositoryClass="WorkShopBundle\Repository\CommandRepository")
 */
class Command
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
   * @ORM\ManyToOne(targetEntity="WorkShopBundle\Entity\HumainDefinition", inversedBy="commands")
   * @ORM\JoinColumn(nullable=false)
   */
    private $humain;

  /**
  * @ORM\ManyToMany(targetEntity="WorkShopBundle\Entity\WorkShop", cascade={"persist"})
  */
    private $workshop;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
   * @ORM\ManyToMany(targetEntity="WorkShopBundle\Entity\Product", cascade={"persist"})
   */
    private $products;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAdd", type="datetime")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePaid", type="datetime")
     */
    private $datePaid;

    public function __construct(){
      $this->dateAdd = new \DateTime();
      $this->datePaid = new \DateTime();
    }

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

    /**
     * Set workshop
     *
     * @param WorkShopBundle\Entity\WorkShop $workshop
     *
     * @return Command
     */
    public function addWorkshop(WorkShopBundle\Entity\WorkShop $workshop)
    {
        $this->workshop[] = $workshop;

        return $this;
    }

    /**
     * Get workshop
     *
     * @return string
     */
    public function getWorkshop()
    {
        return $this->workshop;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Command
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set products
     *
     * @param WorkShopBundle\Entity\Product $products
     *
     * @return Command
     */
    public function addProducts(WorkShopBundle\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Get products
     *
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Command
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set datePaid
     *
     * @param \DateTime $datePaid
     *
     * @return Command
     */
    public function setDatePaid($datePaid)
    {
        $this->datePaid = $datePaid;

        return $this;
    }

    /**
     * Get datePaid
     *
     * @return \DateTime
     */
    public function getDatePaid()
    {
        return $this->datePaid;
    }
}
