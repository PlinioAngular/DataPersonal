<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario extends BaseUser
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    private $apellidopaterno;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    private $apellidomaterno;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telefono1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telefono2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telefono3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $correo1;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank(message = "Si no tiene un correo con formato de nombre, por favor agregue su correo con formato de cargo también en esta sección.")
     */
    private $correo2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $correo3;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechanacimiento;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $areageneral;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidopaterno(): ?string
    {
        return $this->apellidopaterno;
    }

    public function setApellidopaterno(?string $apellidopaterno): self
    {
        $this->apellidopaterno = $apellidopaterno;

        return $this;
    }

    public function getApellidomaterno(): ?string
    {
        return $this->apellidomaterno;
    }

    public function setApellidomaterno(?string $apellidomaterno): self
    {
        $this->apellidomaterno = $apellidomaterno;

        return $this;
    }

    public function getTelefono1(): ?string
    {
        return $this->telefono1;
    }

    public function setTelefono1(?string $telefono1): self
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    public function getTelefono2(): ?string
    {
        return $this->telefono2;
    }

    public function setTelefono2(?string $telefono2): self
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    public function getTelefono3(): ?string
    {
        return $this->telefono3;
    }

    public function setTelefono3(?string $telefono3): self
    {
        $this->telefono3 = $telefono3;

        return $this;
    }

    public function getCorreo1(): ?string
    {
        return $this->correo1;
    }

    public function setCorreo1(?string $correo1): self
    {
        $this->correo1 = $correo1;

        return $this;
    }

    public function getCorreo2(): ?string
    {
        return $this->correo2;
    }

    public function setCorreo2(?string $correo2): self
    {
        $this->correo2 = $correo2;

        return $this;
    }

    public function getCorreo3(): ?string
    {
        return $this->correo3;
    }

    public function setCorreo3(?string $correo3): self
    {
        $this->correo3 = $correo3;

        return $this;
    }

    public function getFechanacimiento(): ?\DateTimeInterface
    {
        return $this->fechanacimiento;
    }

    public function setFechanacimiento(?\DateTimeInterface $fechanacimiento): self
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    public function getAreageneral(): ?int
    {
        return $this->areageneral;
    }

    public function setAreageneral(?int $areageneral): self
    {
        $this->areageneral = $areageneral;

        return $this;
    }


}
