<?php

namespace AppBundle\Entity;

/**
 * ProduccionDiseno
 */
class ProduccionDiseno
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $cantidad;

    /**
     * @var int
     */
    private $puntadas;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime|null
     */
    private $fechaFinalizacion;

    /**
     * @var int|null
     */
    private $duracion;

    /**
     * @var int
     */
    private $estado;

    /**
     * @var \AppBundle\Entity\Diseno
     */
    private $diseno;
    public function __toString() {
        return 'Referencia '.$this->diseno;
    }
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
     * Set cantidad.
     *
     * @param int $cantidad
     *
     * @return ProduccionDiseno
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad.
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set puntadas.
     *
     * @param int $puntadas
     *
     * @return ProduccionDiseno
     */
    public function setPuntadas($puntadas)
    {
        $this->puntadas = $puntadas;

        return $this;
    }

    /**
     * Get puntadas.
     *
     * @return int
     */
    public function getPuntadas()
    {
        return $this->puntadas;
    }

    /**
     * Set fechaCreacion.
     *
     * @param \DateTime $fechaCreacion
     *
     * @return ProduccionDiseno
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion.
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaFinalizacion.
     *
     * @param \DateTime|null $fechaFinalizacion
     *
     * @return ProduccionDiseno
     */
    public function setFechaFinalizacion($fechaFinalizacion = null)
    {
        $this->fechaFinalizacion = $fechaFinalizacion;

        return $this;
    }

    /**
     * Get fechaFinalizacion.
     *
     * @return \DateTime|null
     */
    public function getFechaFinalizacion()
    {
        return $this->fechaFinalizacion;
    }

    /**
     * Set duracion.
     *
     * @param int|null $duracion
     *
     * @return ProduccionDiseno
     */
    public function setDuracion($duracion = null)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion.
     *
     * @return int|null
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set estado.
     *
     * @param int $estado
     *
     * @return ProduccionDiseno
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado.
     *
     * @return int
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set diseno.
     *
     * @param \AppBundle\Entity\Diseno|null $diseno
     *
     * @return ProduccionDiseno
     */
    public function setDiseno(\AppBundle\Entity\Diseno $diseno = null)
    {
        $this->diseno = $diseno;

        return $this;
    }

    /**
     * Get diseno.
     *
     * @return \AppBundle\Entity\Diseno|null
     */
    public function getDiseno()
    {
        return $this->diseno;
    }
    /**
     * @var \AppBundle\Entity\ProduccionOrden
     */
    private $ordenProduccion;


    /**
     * Set ordenProduccion.
     *
     * @param \AppBundle\Entity\ProduccionOrden|null $ordenProduccion
     *
     * @return ProduccionDiseno
     */
    public function setOrdenProduccion(\AppBundle\Entity\ProduccionOrden $ordenProduccion = null)
    {
        $this->ordenProduccion = $ordenProduccion;

        return $this;
    }

    /**
     * Get ordenProduccion.
     *
     * @return \AppBundle\Entity\ProduccionOrden|null
     */
    public function getOrdenProduccion()
    {
        return $this->ordenProduccion;
    }
}