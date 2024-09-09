<?php

namespace AppBundle\Entity;

/**
 * AlmacenZonaInventario
 */
class AlmacenZonaInventario
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $ingresoTotal = 0;

    /**
     * @var float
     */
    private $egresoTotal = 0;

    /**
     * @var float
     */
    private $cantidadActual = 0;

    /**
     * @var \DateTime|null
     */
    private $fechaUltimoIngreso;

    /**
     * @var \DateTime|null
     */
    private $fechaUltimoEgreso;

    /**
     * @var \AppBundle\Entity\Almacen
     */
    private $almacen;

    /**
     * @var \AppBundle\Entity\AlmacenZona
     */
    private $almacenZona;

    /**
     * @var \AppBundle\Entity\Material
     */
    private $material;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ingresoTotal.
     *
     * @param float $ingresoTotal
     *
     * @return AlmacenZonaInventario
     */
    public function setIngresoTotal($ingresoTotal)
    {
        $this->ingresoTotal = $ingresoTotal;

        return $this;
    }

    /**
     * Get ingresoTotal.
     *
     * @return float
     */
    public function getIngresoTotal()
    {
        return $this->ingresoTotal;
    }

    /**
     * Set egresoTotal.
     *
     * @param float $egresoTotal
     *
     * @return AlmacenZonaInventario
     */
    public function setEgresoTotal($egresoTotal)
    {
        $this->egresoTotal = $egresoTotal;

        return $this;
    }

    /**
     * Get egresoTotal.
     *
     * @return float
     */
    public function getEgresoTotal()
    {
        return $this->egresoTotal;
    }

    /**
     * Set cantidadActual.
     *
     * @param float $cantidadActual
     *
     * @return AlmacenZonaInventario
     */
    public function setCantidadActual($cantidadActual)
    {
        $this->cantidadActual = $cantidadActual;

        return $this;
    }

    /**
     * Get cantidadActual.
     *
     * @return float
     */
    public function getCantidadActual()
    {
        return $this->cantidadActual;
    }

    /**
     * Set fechaUltimoIngreso.
     *
     * @param \DateTime|null $fechaUltimoIngreso
     *
     * @return AlmacenZonaInventario
     */
    public function setFechaUltimoIngreso($fechaUltimoIngreso = null)
    {
        $this->fechaUltimoIngreso = $fechaUltimoIngreso;

        return $this;
    }

    /**
     * Get fechaUltimoIngreso.
     *
     * @return \DateTime|null
     */
    public function getFechaUltimoIngreso()
    {
        return $this->fechaUltimoIngreso;
    }

    /**
     * Set fechaUltimoEgreso.
     *
     * @param \DateTime|null $fechaUltimoEgreso
     *
     * @return AlmacenZonaInventario
     */
    public function setFechaUltimoEgreso($fechaUltimoEgreso = null)
    {
        $this->fechaUltimoEgreso = $fechaUltimoEgreso;

        return $this;
    }

    /**
     * Get fechaUltimoEgreso.
     *
     * @return \DateTime|null
     */
    public function getFechaUltimoEgreso()
    {
        return $this->fechaUltimoEgreso;
    }

    /**
     * Set almacen.
     *
     * @param \AppBundle\Entity\Almacen|null $almacen
     *
     * @return AlmacenZonaInventario
     */
    public function setAlmacen(\AppBundle\Entity\Almacen $almacen = null)
    {
        $this->almacen = $almacen;

        return $this;
    }

    /**
     * Get almacen.
     *
     * @return \AppBundle\Entity\Almacen|null
     */
    public function getAlmacen()
    {
        return $this->almacen;
    }

    /**
     * Set almacenZona.
     *
     * @param \AppBundle\Entity\AlmacenZona|null $almacenZona
     *
     * @return AlmacenZonaInventario
     */
    public function setAlmacenZona(\AppBundle\Entity\AlmacenZona $almacenZona = null)
    {
        $this->almacenZona = $almacenZona;

        return $this;
    }

    /**
     * Get almacenZona.
     *
     * @return \AppBundle\Entity\AlmacenZona|null
     */
    public function getAlmacenZona()
    {
        return $this->almacenZona;
    }

    /**
     * Set material.
     *
     * @param \AppBundle\Entity\Material|null $material
     *
     * @return AlmacenZonaInventario
     */
    public function setMaterial(\AppBundle\Entity\Material $material = null)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material.
     *
     * @return \AppBundle\Entity\Material|null
     */
    public function getMaterial()
    {
        return $this->material;
    }
    /**
     * @var string|null
     */
    private $anotaciones;


    /**
     * Set anotaciones.
     *
     * @param string|null $anotaciones
     *
     * @return AlmacenZonaInventario
     */
    public function setAnotaciones($anotaciones = null)
    {
        $this->anotaciones = $anotaciones;

        return $this;
    }

    /**
     * Get anotaciones.
     *
     * @return string|null
     */
    public function getAnotaciones()
    {
        return $this->anotaciones;
    }
    
    public function __toString() {
      return $this->almacen->getNombre().' '.$this->almacenZona.' (Disponible: '.$this->cantidadActual.')';
    }
}
