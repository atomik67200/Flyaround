<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * planeModel
 *
 * @ORM\Table(name="plane_model")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\planeModelRepository")
 */
class planeModel
{
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Flight", mappedBy="plane")
     */
    private $plane;
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
     * @ORM\Column(name="model", type="string", length=128)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacturer", type="string", length=64)
     */
    private $manufacturer;

    /**
     * @var int
     *
     * @ORM\Column(name="cruiseSpeed", type="smallint")
     */
    private $cruiseSpeed;

    /**
     * @var int
     *
     * @ORM\Column(name="planeNBSeats", type="smallint")
     */
    private $planeNBSeats;

    /**
     * @var bool
     *
     * @ORM\Column(name="isAvailable", type="boolean")
     */
    private $isAvailable;


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
     * Set model
     *
     * @param string $model
     *
     * @return planeModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return planeModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     *
     * @return planeModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return int
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * Set planeNBSeats
     *
     * @param integer $planeNBSeats
     *
     * @return planeModel
     */
    public function setPlaneNBSeats($planeNBSeats)
    {
        $this->planeNBSeats = $planeNBSeats;

        return $this;
    }

    /**
     * Get planeNBSeats
     *
     * @return int
     */
    public function getPlaneNBSeats()
    {
        return $this->planeNBSeats;
    }

    /**
     * Set isAvailable
     *
     * @param boolean $isAvailable
     *
     * @return planeModel
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return bool
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plane = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add plane
     *
     * @param \AppBundle\Entity\Flight $plane
     *
     * @return planeModel
     */
    public function addPlane(\AppBundle\Entity\Flight $plane)
    {
        $this->plane[] = $plane;

        return $this;
    }

    /**
     * Remove plane
     *
     * @param \AppBundle\Entity\Flight $plane
     */
    public function removePlane(\AppBundle\Entity\Flight $plane)
    {
        $this->plane->removeElement($plane);
    }

    /**
     * Get plane
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlane()
    {
        return $this->plane;
    }
}
