<?php

namespace AppBundle\Entity;

/**
 * InventarioOrden
 */
class InventarioOrden
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime|null
     */
    private $fechaActualizacion;

    /**
     * @var \DateTime|null
     */
    private $fechaAceptacion;

    /**
     * @var \DateTime|null
     */
    private $fechaRecibe;

    /**
     * @var string|null
     */
    private $ref1;

    /**
     * @var string|null
     */
    private $ref2;

    /**
     * @var int|null
     */
    private $ref3;

    /**
     * @var string|null
     */
    private $descripcion;

    /**
     * @var int
     */
    private $estado = 1;

    /**
     * @var bool
     */
    private $tienePendientes = false;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $items;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $novedades;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $descargas;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $usuarioAceptacion;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $usuarioActualizacion;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $usuarioCreacion;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $usuarioRecibe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
        $this->novedades = new \Doctrine\Common\Collections\ArrayCollection();
        $this->descargas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fechaCreacion.
     *
     * @param \DateTime $fechaCreacion
     *
     * @return InventarioOrden
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
     * Set fechaActualizacion.
     *
     * @param \DateTime|null $fechaActualizacion
     *
     * @return InventarioOrden
     */
    public function setFechaActualizacion($fechaActualizacion = null)
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    /**
     * Get fechaActualizacion.
     *
     * @return \DateTime|null
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * Set fechaAceptacion.
     *
     * @param \DateTime|null $fechaAceptacion
     *
     * @return InventarioOrden
     */
    public function setFechaAceptacion($fechaAceptacion = null)
    {
        $this->fechaAceptacion = $fechaAceptacion;

        return $this;
    }

    /**
     * Get fechaAceptacion.
     *
     * @return \DateTime|null
     */
    public function getFechaAceptacion()
    {
        return $this->fechaAceptacion;
    }

    /**
     * Set fechaRecibe.
     *
     * @param \DateTime|null $fechaRecibe
     *
     * @return InventarioOrden
     */
    public function setFechaRecibe($fechaRecibe = null)
    {
        $this->fechaRecibe = $fechaRecibe;

        return $this;
    }

    /**
     * Get fechaRecibe.
     *
     * @return \DateTime|null
     */
    public function getFechaRecibe()
    {
        return $this->fechaRecibe;
    }

    /**
     * Set ref1.
     *
     * @param string|null $ref1
     *
     * @return InventarioOrden
     */
    public function setRef1($ref1 = null)
    {
        $this->ref1 = $ref1;

        return $this;
    }

    /**
     * Get ref1.
     *
     * @return string|null
     */
    public function getRef1()
    {
        return $this->ref1;
    }

    /**
     * Set ref2.
     *
     * @param string|null $ref2
     *
     * @return InventarioOrden
     */
    public function setRef2($ref2 = null)
    {
        $this->ref2 = $ref2;

        return $this;
    }

    /**
     * Get ref2.
     *
     * @return string|null
     */
    public function getRef2()
    {
        return $this->ref2;
    }

    /**
     * Set ref3.
     *
     * @param int|null $ref3
     *
     * @return InventarioOrden
     */
    public function setRef3($ref3 = null)
    {
        $this->ref3 = $ref3;

        return $this;
    }

    /**
     * Get ref3.
     *
     * @return int|null
     */
    public function getRef3()
    {
        return $this->ref3;
    }

    /**
     * Set descripcion.
     *
     * @param string|null $descripcion
     *
     * @return InventarioOrden
     */
    public function setDescripcion($descripcion = null)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion.
     *
     * @return string|null
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estado.
     *
     * @param int $estado
     *
     * @return InventarioOrden
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
     * Set tienePendientes.
     *
     * @param bool $tienePendientes
     *
     * @return InventarioOrden
     */
    public function setTienePendientes($tienePendientes)
    {
        $this->tienePendientes = $tienePendientes;

        return $this;
    }

    /**
     * Get tienePendientes.
     *
     * @return bool
     */
    public function getTienePendientes()
    {
        return $this->tienePendientes;
    }

    /**
     * Add item.
     *
     * @param \AppBundle\Entity\InventarioOrdenItem $item
     *
     * @return InventarioOrden
     */
    public function addItem(\AppBundle\Entity\InventarioOrdenItem $item)
    {
        if (!$this->items->contains($item)) {
          $item->setInventarioOrden($this);
          $this->items[] = $item;
        }

        return $this;
    }

    /**
     * Remove item.
     *
     * @param \AppBundle\Entity\InventarioOrdenItem $item
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeItem(\AppBundle\Entity\InventarioOrdenItem $item)
    {
        return $this->items->removeElement($item);
    }

    /**
     * Get items.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Add novedade.
     *
     * @param \AppBundle\Entity\InventarioOrdenNovedad $novedade
     *
     * @return InventarioOrden
     */
    public function addNovedade(\AppBundle\Entity\InventarioOrdenNovedad $novedade)
    {
        $this->novedades[] = $novedade;

        return $this;
    }

    /**
     * Remove novedade.
     *
     * @param \AppBundle\Entity\InventarioOrdenNovedad $novedade
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeNovedade(\AppBundle\Entity\InventarioOrdenNovedad $novedade)
    {
        return $this->novedades->removeElement($novedade);
    }

    /**
     * Get novedades.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNovedades()
    {
        return $this->novedades;
    }

    /**
     * Add descarga.
     *
     * @param \AppBundle\Entity\InventarioOrdenDescarga $descarga
     *
     * @return InventarioOrden
     */
    public function addDescarga(\AppBundle\Entity\InventarioOrdenDescarga $descarga)
    {
        $this->descargas[] = $descarga;

        return $this;
    }

    /**
     * Remove descarga.
     *
     * @param \AppBundle\Entity\InventarioOrdenDescarga $descarga
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeDescarga(\AppBundle\Entity\InventarioOrdenDescarga $descarga)
    {
        return $this->descargas->removeElement($descarga);
    }

    /**
     * Get descargas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDescargas()
    {
        return $this->descargas;
    }

    /**
     * Set usuarioAceptacion.
     *
     * @param \AppBundle\Entity\FosUser|null $usuarioAceptacion
     *
     * @return InventarioOrden
     */
    public function setUsuarioAceptacion(\AppBundle\Entity\FosUser $usuarioAceptacion = null)
    {
        $this->usuarioAceptacion = $usuarioAceptacion;

        return $this;
    }

    /**
     * Get usuarioAceptacion.
     *
     * @return \AppBundle\Entity\FosUser|null
     */
    public function getUsuarioAceptacion()
    {
        return $this->usuarioAceptacion;
    }

    /**
     * Set usuarioActualizacion.
     *
     * @param \AppBundle\Entity\FosUser|null $usuarioActualizacion
     *
     * @return InventarioOrden
     */
    public function setUsuarioActualizacion(\AppBundle\Entity\FosUser $usuarioActualizacion = null)
    {
        $this->usuarioActualizacion = $usuarioActualizacion;

        return $this;
    }

    /**
     * Get usuarioActualizacion.
     *
     * @return \AppBundle\Entity\FosUser|null
     */
    public function getUsuarioActualizacion()
    {
        return $this->usuarioActualizacion;
    }

    /**
     * Set usuarioCreacion.
     *
     * @param \AppBundle\Entity\FosUser|null $usuarioCreacion
     *
     * @return InventarioOrden
     */
    public function setUsuarioCreacion(\AppBundle\Entity\FosUser $usuarioCreacion = null)
    {
        $this->usuarioCreacion = $usuarioCreacion;

        return $this;
    }

    /**
     * Get usuarioCreacion.
     *
     * @return \AppBundle\Entity\FosUser|null
     */
    public function getUsuarioCreacion()
    {
        return $this->usuarioCreacion;
    }

    /**
     * Set usuarioRecibe.
     *
     * @param \AppBundle\Entity\FosUser|null $usuarioRecibe
     *
     * @return InventarioOrden
     */
    public function setUsuarioRecibe(\AppBundle\Entity\FosUser $usuarioRecibe = null)
    {
        $this->usuarioRecibe = $usuarioRecibe;

        return $this;
    }

    /**
     * Get usuarioRecibe.
     *
     * @return \AppBundle\Entity\FosUser|null
     */
    public function getUsuarioRecibe()
    {
        return $this->usuarioRecibe;
    }
    /**
     * @var string|null
     */
    private $departamentoSolicita;


    /**
     * Set departamentoSolicita.
     *
     * @param string|null $departamentoSolicita
     *
     * @return InventarioOrden
     */
    public function setDepartamentoSolicita($departamentoSolicita = null)
    {
        $this->departamentoSolicita = $departamentoSolicita;

        return $this;
    }

    /**
     * Get departamentoSolicita.
     *
     * @return string|null
     */
    public function getDepartamentoSolicita()
    {
        return $this->departamentoSolicita;
    }
}