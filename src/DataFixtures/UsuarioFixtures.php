<?php

namespace App\DataFixtures;

use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Tests\Fixtures\ToString;

class UsuarioFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user622 = new Usuario();
        $user622->setEmail("usuario624@sattelital.com.pe");
        $user622->setUsername("47625530");
        $user622->setEnabled(true);
        $user622->setRoles(array('ROLE_USER'));
        $user622->setNombre('');
        $user622->setApellidopaterno('');
        $user622->setApellidomaterno('');
        $user622->setCorreo1('');
        $user622->setCorreo2('');
        $user622->setCorreo3('');
        $user622->setPlainPassword("47625530");
        $manager->persist($user622);
        $manager->flush();
    }
}
