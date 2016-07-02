<?php

namespace WorkShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HumainDefinition
 *
 * @ORM\Table(name="humain_definition")
 * @ORM\Entity(repositoryClass="WorkShopBundle\Repository\HumainDefinitionRepository")
 */
class HumainDefinition
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
   * @ORM\OneToOne(targetEntity="WorkShopBundle\Entity\Address", cascade={"persist"})
   */
    private $address;

    /**
   * @ORM\OneToMany(targetEntity="WorkShopBundle\Entity\Command", mappedBy="humain")
   * @ORM\Column(nullable=true) 
   */
    private $commands;

    public function __construct()
    {
      $this->commands = new ArrayCollection();

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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return HumainDefinition
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return HumainDefinition
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return HumainDefinition
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

  public function addCommand(Command $command)
  {
    $this->commands[] = $command;

    return $this;
  }

  public function removeCommand(Command $command)
  {
    $this->commands->removeElement($command);
  }

  public function getCommand()
  {
    return $this->commands;
  }
}
