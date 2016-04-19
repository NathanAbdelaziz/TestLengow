<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\CommandeRepository")
 * @GRID\Source(columns="id, marketplace, idFlux, orderAmount, orderCurrency")
 */
class Commande
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
     * @ORM\Column(name="marketplace", type="string", length=255, unique=false)
     */
    private $marketplace;

    /**
     * @var string
     *
     * @ORM\Column(name="idFlux", type="string", length=255, unique=true)
     */
    private $idFlux;

    /**
     * @var float
     *
     * @ORM\Column(name="order_amount", type="float")
     */
    private $orderAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="order_currency", type="string", length=5)
     */
    private $orderCurrency;


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
     * Set marketplace
     *
     * @param string $marketplace
     *
     * @return Commande
     */
    public function setMarketplace($marketplace)
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Get marketplace
     *
     * @return string
     */
    public function getMarketplace()
    {
        return $this->marketplace;
    }

    /**
     * Set idFlux
     *
     * @param string $idFlux
     *
     * @return Commande
     */
    public function setIdFlux($idFlux)
    {
        $this->idFlux = $idFlux;

        return $this;
    }

    /**
     * Get idFlux
     *
     * @return string
     */
    public function getIdFlux()
    {
        return $this->idFlux;
    }

    /**
     * Set orderAmount
     *
     * @param float $orderAmount
     *
     * @return Commande
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;

        return $this;
    }

    /**
     * Get orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Set orderCurrency
     *
     * @param string $orderCurrency
     *
     * @return Commande
     */
    public function setOrderCurrency($orderCurrency)
    {
        $this->orderCurrency = $orderCurrency;

        return $this;
    }

    /**
     * Get orderCurrency
     *
     * @return string
     */
    public function getOrderCurrency()
    {
        return $this->orderCurrency;
    }
}

