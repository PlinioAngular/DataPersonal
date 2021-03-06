<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \App\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'apellidopaterno', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'apellidomaterno', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'telefono1', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'telefono2', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'telefono3', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'correo1', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'correo2', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'correo3', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'fechanacimiento', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'areageneral', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'roles'];
        }

        return ['__isInitialized__', 'id', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'apellidopaterno', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'apellidomaterno', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'telefono1', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'telefono2', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'telefono3', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'correo1', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'correo2', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'correo3', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'fechanacimiento', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'areageneral', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'roles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(?string $nombre): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidopaterno(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidopaterno', []);

        return parent::getApellidopaterno();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidopaterno(?string $apellidopaterno): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidopaterno', [$apellidopaterno]);

        return parent::setApellidopaterno($apellidopaterno);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidomaterno(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidomaterno', []);

        return parent::getApellidomaterno();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidomaterno(?string $apellidomaterno): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidomaterno', [$apellidomaterno]);

        return parent::setApellidomaterno($apellidomaterno);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono1(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono1', []);

        return parent::getTelefono1();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono1(?string $telefono1): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono1', [$telefono1]);

        return parent::setTelefono1($telefono1);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono2', []);

        return parent::getTelefono2();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono2(?string $telefono2): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono2', [$telefono2]);

        return parent::setTelefono2($telefono2);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono3(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono3', []);

        return parent::getTelefono3();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono3(?string $telefono3): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono3', [$telefono3]);

        return parent::setTelefono3($telefono3);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorreo1(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorreo1', []);

        return parent::getCorreo1();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorreo1(?string $correo1): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorreo1', [$correo1]);

        return parent::setCorreo1($correo1);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorreo2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorreo2', []);

        return parent::getCorreo2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorreo2(?string $correo2): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorreo2', [$correo2]);

        return parent::setCorreo2($correo2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorreo3(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorreo3', []);

        return parent::getCorreo3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorreo3(?string $correo3): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorreo3', [$correo3]);

        return parent::setCorreo3($correo3);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechanacimiento(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechanacimiento', []);

        return parent::getFechanacimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechanacimiento(?\DateTimeInterface $fechanacimiento): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechanacimiento', [$fechanacimiento]);

        return parent::setFechanacimiento($fechanacimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getAreageneral(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAreageneral', []);

        return parent::getAreageneral();
    }

    /**
     * {@inheritDoc}
     */
    public function setAreageneral(?int $areageneral): \App\Entity\Usuario
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAreageneral', [$areageneral]);

        return parent::setAreageneral($areageneral);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', [$role]);

        return parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameCanonical', []);

        return parent::getUsernameCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCanonical', []);

        return parent::getEmailCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', []);

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$role]);

        return parent::hasRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuperAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuperAdmin', []);

        return parent::isSuperAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', [$role]);

        return parent::removeRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical($usernameCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsernameCanonical', [$usernameCanonical]);

        return parent::setUsernameCanonical($usernameCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', [$salt]);

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical($emailCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCanonical', [$emailCanonical]);

        return parent::setEmailCanonical($emailCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$boolean]);

        return parent::setEnabled($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperAdmin($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuperAdmin', [$boolean]);

        return parent::setSuperAdmin($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$password]);

        return parent::setPlainPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$time]);

        return parent::setLastLogin($time);
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($confirmationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', [$confirmationToken]);

        return parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', [$date]);

        return parent::setPasswordRequestedAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', []);

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired($ttl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordRequestNonExpired', [$ttl]);

        return parent::isPasswordRequestNonExpired($ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNames', []);

        return parent::getGroupNames();
    }

    /**
     * {@inheritDoc}
     */
    public function hasGroup($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGroup', [$name]);

        return parent::hasGroup($name);
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
    }

}
