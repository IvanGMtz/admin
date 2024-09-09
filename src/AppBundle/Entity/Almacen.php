<?php

namespace AppBundle\Entity;

/**
 * Almacen
 */
class Almacen
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string|null
     */
    private $direccion;

    /**
     * @var string|null
     */
    private $telefono1;

    /**
     * @var string|null
     */
    private $telefono2;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $nombreContacto;

    /**
     * @var string|null
     */
    private $telefonoContacto;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var int
     */
    private $estado = '1';

    /**
     * @var \AppBundle\Entity\City
     */
    private $ciudad;

    /**
     * @var \AppBundle\Entity\Country
     */
    private $pais;

    /**
     * @var \AppBundle\Entity\FosUser
     */
    private $usuarioCreacion;


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
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Almacen
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion.
     *
     * @param string|null $direccion
     *
     * @return Almacen
     */
    public function setDireccion($direccion = null)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion.
     *
     * @return string|null
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono1.
     *
     * @param string|null $telefono1
     *
     * @return Almacen
     */
    public function setTelefono1($telefono1 = null)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1.
     *
     * @return string|null
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2.
     *
     * @param string|null $telefono2
     *
     * @return Almacen
     */
    public function setTelefono2($telefono2 = null)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2.
     *
     * @return string|null
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set email.
     *
     * @param string|null $email
     *
     * @return Almacen
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nombreContacto.
     *
     * @param string|null $nombreContacto
     *
     * @return Almacen
     */
    public function setNombreContacto($nombreContacto = null)
    {
        $this->nombreContacto = $nombreContacto;

        return $this;
    }

    /**
     * Get nombreContacto.
     *
     * @return string|null
     */
    public function getNombreContacto()
    {
        return $this->nombreContacto;
    }

    /**
     * Set telefonoContacto.
     *
     * @param string|null $telefonoContacto
     *
     * @return Almacen
     */
    public function setTelefonoContacto($telefonoContacto = null)
    {
        $this->telefonoContacto = $telefonoContacto;

        return $this;
    }

    /**
     * Get telefonoContacto.
     *
     * @return string|null
     */
    public function getTelefonoContacto()
    {
        return $this->telefonoContacto;
    }

    /**
     * Set fechaCreacion.
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Almacen
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
     * Set estado.
     *
     * @param int $estado
     *
     * @return Almacen
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
     * Set ciudad.
     *
     * @param \AppBundle\Entity\City|null $ciudad
     *
     * @return Almacen
     */
    public function setCiudad(\AppBundle\Entity\City $ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad.
     *
     * @return \AppBundle\Entity\City|null
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set pais.
     *
     * @param \AppBundle\Entity\Country|null $pais
     *
     * @return Almacen
     */
    public function setPais(\AppBundle\Entity\Country $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais.
     *
     * @return \AppBundle\Entity\Country|null
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set usuarioCreacion.
     *
     * @param \AppBundle\Entity\FosUser|null $usuarioCreacion
     *
     * @return Almacen
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
    
    public function __toString() {
      return $this->nombre.' ('.$this->direccion.' / '.$this->ciudad.')';
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $zonas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zonas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add zona.
     *
     * @param \AppBundle\Entity\AlmacenZona $zona
     *
     * @return Almacen
     */
    public function addZona(\AppBundle\Entity\AlmacenZona $zona)
    {
        $this->zonas[] = $zona;

        return $this;
    }

    /**
     * Remove zona.
     *
     * @param \AppBundle\Entity\AlmacenZona $zona
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeZona(\AppBundle\Entity\AlmacenZona $zona)
    {
        return $this->zonas->removeElement($zona);
    }

    /**
     * Get zonas.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZonas()
    {
        return $this->zonas;
    }
    
    
   public function getInventarios(){
     $resp = [];
     foreach($this->zonas as $zona){
       foreach($zona->getInventario() as $inventario){
         if(!array_key_exists($inventario->getMaterial()->getNombre(), $resp)){
           $resp[$inventario->getMaterial()->getNombre()] = ['material'=>$inventario->getMaterial(), 'id'=>$inventario->getMaterial()->getId(), 'cantidadActual'=>0];
         }
         $resp[$inventario->getMaterial()->getNombre()]['cantidadActual'] += $inventario->getCantidadActual();
       }
     }
     return $resp;
   }
}