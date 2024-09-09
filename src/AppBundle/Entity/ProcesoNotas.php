<?php

namespace AppBundle\Entity;

class ProcesoNotas
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $notas;

    /**
     * @var \AppBundle\Entity\Proceso
     */
    private $proceso;


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
     * Set notas.
     *
     * @param string $notas
     *
     * @return ProcesoNotas
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas.
     *
     * @return string
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set proceso.
     *
     * @param \AppBundle\Entity\Proceso|null $proceso
     *
     * @return ProcesoNotas
     */
    public function setProceso(\AppBundle\Entity\Proceso $proceso = null)
    {
        $this->proceso = $proceso;

        return $this;
    }

    /**
     * Get proceso.
     *
     * @return \AppBundle\Entity\Proceso|null
     */
    public function getProceso()
    {
        return $this->proceso;
    }
    /**
     * @var int
     */
    private $usuario;


    /**
     * Set usuario.
     *
     * @param int $usuario
     *
     * @return ProcesoNotas
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario.
     *
     * @return int
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
